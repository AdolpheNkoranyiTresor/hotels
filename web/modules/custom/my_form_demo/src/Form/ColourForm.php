<?php
namespace Drupal\my_form_demo\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ColourForm extends FormBase {

  // Return unique string that identifies the form.
  public function getFormId() {

    return 'my_colour_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {

    // Add field .
    $form['fav_colour'] = [
      '#type' => 'textfield',
      '#description' =>$this -> t("The colour must be red, green, or blue."),
      '#title' => $this->t('Your favourite colour'),
      '#attributes' => ['style' => 'display: block; margin-bottom: 10px;'
      ],
    ];

    $form['save'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    ];

    return $form;
  }

  
public function validateForm(array &$form, FormStateInterface $form_state) {
    $allowed_colours = ['red', 'green', 'blue'];

    $submitted_colour = $form_state->getValue('fav_colour');

    if (!in_array(strtolower($submitted_colour), $allowed_colours)) {
      $form_state->setErrorByName('fav_colour', $this->t('The colour must be red, green, or blue.'));
    }
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $form_values = $form_state->getValue('fav_colour');
    $form_state ->setRedirect('my_form_demo.form_submitted_value', [
      'fav_colour' => $form_values,
    ]);
  }

}