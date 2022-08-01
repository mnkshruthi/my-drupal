<?php

namespace Drupal\example\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ExampleForm extends FormBase{
    /**
     * {@inheritdoc}
     */

     public function getFormId(){
        return 'create_exampleemployee';
     }
     /**
      * {@inheritdoc}
      */

      public function buildForm(array $form, FormStateInterface $form_state){

        $genderOptions = array(
            '0'=>'Select Gender',
            'Male'=>'Male',
            'Female'=>'Female',
            'Other'=>'Other'
        );
        
        $form['name'] = array(
            '#type'=>'textfield',
            '#title'=>'Name',
            '#default_value'=>''
        );

        $form['gender'] = array(
            '#type' => 'select',
            '#title' => 'Gender',
            '#options' => $genderOptions
        );

        $form['about_employee'] = array(
            '#type'=>'textarea',
            '#title'=>'About Employee',
            '#default_value'=>''
        );

        $form['save'] = array(
            '#type'=>'submit',
            '#value'=>'Save Employee',
            '#button_type'=>'Primary'
        );
        return $form;
    }

    /**
     * {@inheritdoc}
     */

    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        $name = $form_state->getvalue('name');
        if (trim($name) == '') {
            $form_state->setErrorByName('name', $this->t('Name field is required'));
        }
    }

      /**
       * {@inheritdoc}
      */

      public function submitForm(array &$form, FormStateInterface $form_state){

        $postData = $form_state->getvalues();

        echo "<pre>";

        print_r($postData);

        echo "</pre>";
        exit;
      }
}