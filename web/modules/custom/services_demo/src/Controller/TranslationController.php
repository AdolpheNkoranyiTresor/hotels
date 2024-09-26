<?php

namespace Drupal\services_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class TranslationController extends ControllerBase{
    public function translationDemo(){
        $msg1 = $this->t('Hi @user.', ['@user' => 'Tresor']);
        $msg2 = $this->t('You are assigned %badge_title badge', ['%badge_title' => 'The Drupal Translation Placeholder']);
        $msg3 = $this->t('The badge ID is :badge_id.', [':badge_id' => 'DTP 0024']);

        return [
        '#markup' => "<h1>$msg1</h1>$msg2</p><p>$msg3</p>",
        ];
    }

    public function translationPlaceholders(){
        $message = $this->t('You have %x unread messages and %y read messages', ['%x' => 24, '%y' => 3454,]);

        return [
            '#markup' => $message, //<p>$message</p>
        ];
    }
    
}

