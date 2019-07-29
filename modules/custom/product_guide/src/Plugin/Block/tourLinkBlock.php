<?php

namespace Drupal\product_guide\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Routing\UrlGeneratorInterface;

/**
 * Provides a product guide link to start the tour.
 *
 * @Block(
 *   id = "product_tour_link",
 *   admin_label = @Translation("Link for the Product Guide tour."),
 *   category = @Translation("Links"),
 *   context = {
 *     "node" = @ContextDefinition(
 *       "entity:node",
 *       label = @translation("Current Node")
 *     )
 *   }
 * )
 */
class TourLinkBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The current user.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $currentUser;

  protected $link;

  /**
   * Constructs a TourLinkBlock object.
   *
   * @param \Drupal\Core\Session\AccountInterface $current_user
   *   The anonymous user viewing the page.
   * @param \Drupal\Core\Routing\UrlGeneratorInterface $link
   *   The anonymous user viewing the page.
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   */
  public function __construct(
                          AccountInterface $current_user,
                          UrlGeneratorInterface $link,
                          array $configuration,
                          $plugin_id,
                          $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->currentUser = $current_user;
    $this->link = $link;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(
    ContainerInterface $container,
    array $configuration,
    $plugin_id,
    $plugin_definition) {

    return new static(
      $container->get('current_user'),
      $container->get('url_generator'),
      $configuration,
      $plugin_id,
      $plugin_definition
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    /* @see Plugin ContextAwarePluginBase.php ContextValue 8.x */
    $node = $this->getContextValue('node');
    if ($this->currentUser->hasPermission('access tour') &&
      $node->getType() == 'book') {
      $url = Url::fromRoute('<current>', array(), array('query' => array('tour' => 1)));
      $build['tour_link'] = [
        '#type' => 'markup',
        '#markup' => Link::fromTextAndUrl($this->t('Take the tour!'), $url)->toString(),
      ];
      $build['#attached']['library'][] = 'tour/tour';
      return $build;
    }
  }
}
