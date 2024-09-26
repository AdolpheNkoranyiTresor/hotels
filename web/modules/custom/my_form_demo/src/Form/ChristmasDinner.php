<?php
namespace Drupal\my_form_demo\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ChristmasDinner extends FormBase
{

  public function getFormId()
  {
    return 'christmas_dinner_subscription';
  }

    public function buildForm(array $form, FormStateInterface $form_state)
  {

    $form['personal_info'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Personal Information:'),
    ];

    $form['personal_info']['first_name'] = [
      '#type' => 'textfield',
      '#title' => 'First Name',
      '#placeholder' => 'Enter your first name',
      '#required' => True,
    ];

    $form['personal_info']['last_name'] = [
      '#type' => 'textfield',
      '#title' => 'Last Name',
      '#placeholder' => 'Enter your last name',
      '#required' => False,
    ];

    $form['guests_number'] = [
      '#type' => 'select',
      '#title' => 'Number of guests',
      '#options' => [
        '1' => $this->t('1'),
        '2' => $this->t('2'),
        '3' => $this->t('3'),
        '4' => $this->t('4'),
        '5' => $this->t('5'),
        '6' => $this->t('6'),
        '7' => $this->t('7'),
        '8' => $this->t('8'),
        '9' => $this->t('9'),
        '10' => $this->t('10'),
      ],
    ];

    $form['meat_fish_number'] = [
      '#type' => 'number',
      '#title' => 'Number of meat/fish choices',
    ];
    
    $form['vegets_number'] = [
      '#type' => 'number',
      '#title' => 'Number of vegetarian choices',
    ];

    $form['vegans_number'] = [
      '#type' => 'number',
      '#title' => 'Number of vegan choices',
    ];

    $form['alcohol_free'] = [
      '#type' => 'select',
      '#title' => $this->t('Would you like your table to be alcohol-free?'),
      '#options' => [
        'yes' => $this->t('Yes'),
        'no' => $this->t('No'),
      ],
      '#description' => $this->t('Select "Yes" if you prefer an alcohol-free table.'),
    ];

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];


    return $form;
  }

   public function submitForm(array &$form, FormStateInterface $form_state)
  {
    // Get submitted values
    $first_name = $form_state->getValue('first_name');
    $last_name = $form_state->getValue('last_name');
    $guests_number = $form_state->getValue('guests_number');
    $meat_fish_number = $form_state->getValue('meat_fish_number');
    $vegets_number = $form_state->getValue('vegets_number');
    $vegans_number = $form_state->getValue('vegans_number');
    $alcohol_free = $form_state->getValue('alcohol_free');

    // Display a confirmation message
    $message = $this->t('Thank you @first_name @last_name for your submission. Here are your choices:<br> 
      Number of guests: @guests_number<br> 
      Number of meat/fish choices: @meat_fish_number<br> 
      Number of vegetarian choices: @vegets_number<br> 
      Number of vegan choices: @vegans_number<br>
      Alcohol-free table: @alcohol_free.', [
        '@first_name' => $first_name,
        '@last_name' => $last_name,
        '@guests_number' => $guests_number,
        '@meat_fish_number' => $meat_fish_number,
        '@vegets_number' => $vegets_number,
        '@vegans_number' => $vegans_number,
        '@alcohol_free' => $alcohol_free,
    ]);

    \Drupal::messenger()->addMessage($message);

  }
}