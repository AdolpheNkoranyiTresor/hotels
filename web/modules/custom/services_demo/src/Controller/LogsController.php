<?php

namespace Drupal\services_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class LogsController extends ControllerBase{
    public function logsMessages(){
        $logger = \Drupal::logger('Services demo');
        $logger->emergency('Info log entry!');
        $logger->alert('Alert log entry');
        $logger->critical('Critical log entry');
        $logger->error('Error log entry');
        $logger->warning('Warning log entry');
        $logger->notice('Notice log entry');
        $logger->info('Info log entry');
        $logger->debug('Debug log entry');

        return [
            '#markup' => $this->t('Log entries have been successfuly generated.'),
        ];
    }
    
}

