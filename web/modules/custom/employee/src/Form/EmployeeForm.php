<?php

    namespace Drupal\employee\Form;
    use Drupal\Core\Form\FormBase;
    use Drupal\Core\Form\FormStateInterface;

    class EmployeeForm extends FormBase{
        /**
         * {@inheritdoc}
         */
        public function getFormId(){
            return 'create_employee';   
        }

        /**
         * {@inheritdoc}
         */

         public function buildForm(array $form, FormStateInterface $form_state){

            $genderoptions = array(
                '0'=>'select Gender',
                'Male'=>'Male',
                'Female'=>'Female',
                'Other'=>'other'
            );
            
            $form['name'] = array(
                '#type'=>'textfield',
                '#title'=>'Name',
                '#default_value'=>''
            );
            $form['gender'] = array(
                '#type'=>'select',
                '#title'=>'Gender',
                '#options'=>$genderoptions
            );

            $form['about_employee'] = array(
                '#type'=>'textarea',
                '#title'=>'About Employee',
                '#default_value'=>''
            );

            $form['save'] = array(
                '#type'=>'submit',
                '#value'=>'Save employee',
                '#button_type'=>''
            );

            return $form;
         }

         /**
          * {@inhetirdoc}
          */
          public function submitForm(array &$form, FormStateInterface $form_state){

            $postData = $form_state->getvalues();

            echo "<pre>";

            print_r($postData);

            echo "</pre>";

            exit;
          }
    }
