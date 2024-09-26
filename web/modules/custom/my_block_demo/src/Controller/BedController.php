<?php

namespace Drupal\my_block_demo\Controller;

/**
 * @file
 * Contains \Drupal\my_block_demo\Controller\BedController.
 */

use Drupal\Core\Controller\ControllerBase;

/**
 * Class BedController.
 */
class BedController extends ControllerBase {

  /**
   * A small bed.
   */
  public function small() {
    return $this->bed(100);
  }

  /**
   * A medium bed.
   */
  public function medium() {
    return $this->bed(300);
  }

  /**
   * A large bed.
   */
  public function large() {
    return $this->bed(600);
  }

  /**
   * A bed of whatever size is required.
   *
   * The image here is from
   * https://www.freepik.com/free-vector/bed-with-blue-pillow-sheet_2204447.htm.
   */
  private function bed($size) {
    return [
      '#markup' => '<img src="/' . \Drupal::service('extension.list.module')->getPath('my_block_demo') . '/images/bed-with-blue-pillow-sheet_1308-11383.jpg" width="' . $size . '">',
      '#suffix' => '<a href="https://www.freepik.com/free-photos-vectors/background">Background vector created by brgfx - www.freepik.com</a>',
    ];
  }

}
