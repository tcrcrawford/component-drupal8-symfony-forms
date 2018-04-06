<?php

namespace Drupal\symfony_form_component\Form;

require_once __DIR__ . '../../../vendor/autoload.php';

use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;


class Form {

  public function createForm() {
    $formFactory = Forms::createFormFactoryBuilder()
      ->addExtension(new HttpFoundationExtension())
      ->getFormFactory();

    var_dump(1);
    var_dump($formFactory);
    exit;
  }
}