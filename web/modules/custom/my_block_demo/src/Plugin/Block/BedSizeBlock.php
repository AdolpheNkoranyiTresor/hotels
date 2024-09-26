<?php

namespace Drupal\my_block_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\Cache;

/**
 * A block that displays whether the bed being viewed is the correct size.
 *
 * @Block(
 *   id = "bed_size_block",
 *   admin_label = @Translation("Bed size block"),
 * )
 */
class BedSizeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $route_name = \Drupal::routeMatch()->getRouteName();

    $build = [];

    switch ($route_name) {
      case 'my_block_demo.bed_small':
        $build['#markup'] = '<h4 style="color: #07d877 !important;">This bed is too small</h6>';
        break;

      case 'my_block_demo.bed_medium':
        $build['#markup'] = '<h4 style="color: #07d877 !important;">This bed is just right</h4>';
        break;

      case 'my_block_demo.bed_large':
        $build['#markup'] = '<h2 style="color: #07d877 !important;">This bed is too big</h2>';
        break;
    }

    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheContexts() {
    return Cache::mergeContexts(parent::getCacheContexts(), ['route.name']);
  }

}

