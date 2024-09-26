<?php

namespace Drupal\demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase
{
    public function hello()
    {
        return [
            '#markup' => '<h1>Hello. It is a fine day indeed!</h1>',
        ];
    }

    public function helloName($first_name, $last_name) {
        return [
            '#markup' => $this->t('Hello @first_name @last_name',
            [
                '@first_name' => $first_name,
                '@last_name' => $last_name,
            ]), 
        ];
    }

    public function showProduct($name, $size, $colour){
        return [
            '#markup' => $this->t('We have a @name with an @size and a @colour colour.',
            [
                '@name' => $name,
                '@size' => $size,
                '@colour' => $colour,
            ]),
        ];
        
    }


    public function goodBye($name){
        return [
            '#markup' => $this->t('Goodbye @name',
            [
                '@name' => $name,
            ]),
        ];
    }

    public function addition($num_1, $num_2){
        return [
            '#markup' => $this->t('The Total is @total',
            [
                '@total' => $num_1 + $num_2,
            ])
        ];
    }

    public function validation($code){
        return [
            '#markup' => $this->t('Code accepted',
            [
                '@code' => $code,
            ])
        ];
    }
}
