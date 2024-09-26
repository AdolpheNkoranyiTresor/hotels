<?php

namespace Drupal\services_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class AlertsController extends ControllerBase{
    public function alertMessages(){
        \Drupal::messenger()->addError("I'm an error alert");
        \Drupal::messenger()->addStatus("I'm a status alert");
        \Drupal::messenger()->addWarning("I'm a warning alert");
       
        return [
            '#markup' => $this->t('This is the page content.'),
        ];
    }

    public function alertType($alert_type){
        if ($alert_type === 'error') {
            \Drupal::messenger()->addError("I'm an error alert");
        }
        elseif ($alert_type === 'status') {
            \Drupal::messenger()->addStatus("I'm a status alert");  
        }
        elseif ($alert_type === 'warning') {
            \Drupal::messenger()->addWarning("I'm a warning alert");  
        }

        return [
            '#markup' => $this->t('This is the alert of type: ' . ucfirst($alert_type)),
        ];
    }
    
}

