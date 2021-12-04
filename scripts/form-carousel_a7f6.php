<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => ''
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'Correo',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Correo\' is required.'
    )
    ),
    'name' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Nombre',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Nombre\' is required.'
    )
    ),
    'phone оо' => array(
    'order' => 3,
    'type' => 'tel',
    'label' => 'Telefono',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Telefono\' is required.'
    )
    ),
    'date' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Fecha',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Fecha\' is required.'
    )
    ),
    'message-1' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Dejanos un mensaje:',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Dejanos un mensaje:\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>