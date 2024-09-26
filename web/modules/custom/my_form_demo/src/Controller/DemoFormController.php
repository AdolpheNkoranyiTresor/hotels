<?php 
namespace Drupal\my_form_demo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Url;

class DemoFormController extends ControllerBase {

  public function colourSubmitted($fav_colour) {
    // Validate and redirect to a default page or show a custom error message.
    $valid_fav_colours = ['red', 'green', 'blue'];
    $fav_colour = strtolower($fav_colour);
    if (!in_array($fav_colour, $valid_fav_colours)) {
      \Drupal::messenger()->addMessage(t('Invalid colour. The colour must be red, green, or blue.'), 'error');
      return new RedirectResponse(Url::fromRoute('my_form_demo.colour')->toString());

    }

    return [
      '#markup' => $this->t('Your favourite colour is: @fav', ['@fav' => $fav_colour]),
    ];
  }
}