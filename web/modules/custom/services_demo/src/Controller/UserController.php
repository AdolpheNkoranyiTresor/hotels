<?php

namespace Drupal\services_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class UserController extends ControllerBase
{
    public function currentUserDemo()
    {
        $current_user = \Drupal::currentUser()->getDisplayName();
        //Capitalize the first letter of the user's name
        $current_user = ucfirst($current_user);

        return [
            '#markup' => 'Hello, ' . $current_user,
            // '#markup' => 'Hello, ' . $user_id = $this->currentUser()->getAccountName(), //This also displays the current user name as the above
        ];
    }

    public function currentUserEmail(){
        $user_email = $this->currentUser()->getEmail();
        return [
            '#markup' => 'This is your email: ' . $user_email,
        ];
    }
}
