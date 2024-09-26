<?php
namespace Drupal\my_form_demo\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class DemoElementsForm extends FormBase
{

  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId()
  {
    return 'demo_elements_form';
  }

  /**
   * Form constructor.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The form structure.
   */
  public function buildForm(array $form, FormStateInterface $form_state)
  {

    // Add number field.
    $form['distance'] = [
      '#type' => 'number',
      '#title' => $this->t('<strong style="font-weight: 800;">Distance (m)</strong>'),
      '#description' => $this->t('Enter the travel distance.'),
      '#required' => TRUE,
      '#attributes' => ['style' => 'display: block; margin-bottom: 10px;'],
    ];

    // Add password field.
    $form['password'] = [
      '#type' => 'password',
      '#title' => $this->t('Password'),
      '#attributes' => ['style' => 'display: block; margin-bottom: 10px;'],
    ];

    // Next we're going to define two fields that each have the same set of options.

    // Define some options for the next two elements.
    $options = [
      'red' => $this->t('Red'),
      'green' => $this->t('Green'),
      'blue' => $this->t('Blue'),
    ];

    // Add a fieldset that will contain the next three fields.
    $form['colours'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Colour selection'),
    ];

    // Add radiobutton list.
    $form['colours']['primary_colour'] = [
      '#type' => 'select',
      '#title' => $this->t('<strong style="font-weight: 800;">Primary colour</strong>'),
      '#options' => $options,
      '#description' => $this->t('Please choose a primary colour.'),
      '#attributes' => ['style' => 'display: block; margin-bottom: 10px;'],
    ];

    // Add select list.
    $form['colours']['secondary_colour'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Secondary Colour'),
      '#options' => $options,
      '#description' => $this->t('Please choose a secondary colour.'),
    ];

    // Add select list.
    $form['colours']['bonus_colours'] = [
      '#type' => 'radios',
      '#title' => $this->t('Bonus colours'),
      '#options' => [
        'yellow' => $this->t('Yellow'),
        'pink' => $this->t('Pink'),
      ],
      '#description' => $this->t('Please choose bonus colours (if applicable).'),
    ];

    // Add another fieldset fieldset.
    $form['personal_info'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('<strong style="font-weight: 800;">Personal info</strong>'),
    ];

    // Add two fields to the fieldset.

    $form['personal_info']['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Your name'),
      '#default_value' => 'John Doe',
      '#attributes' => ['style' => 'display: block; margin-bottom: 10px;'],
    ];

    $form['personal_info']['feedback'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Your feedback'),
      '#placeholder' => $this->t('Feedback goes here.'),
      '#attributes' => ['style' => 'display: block; margin-bottom: 10px;'],
    ];

    // Add submit button.
    $form['save'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    ];

    return $form;
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    // Do something useful here.
  }
}