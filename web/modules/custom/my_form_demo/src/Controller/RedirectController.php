<?php

namespace Drupal\my_form_demo\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Class RedirectController.
 *
 * Provides a redirect response.
 */
class RedirectController {

  /**
   * Redirects to a specified URL.
   *
   * @param string $url
   *   The URL to redirect to.
   * @param int $status_code
   *   The HTTP status code for the redirect (default 301).
   *
   * @return \Symfony\Component\HttpFoundation\RedirectResponse
   *   The redirect response.
   */
  public function redirect($url = '/colour', $status_code = 301) {
    return new RedirectResponse($url, $status_code);
  }
}