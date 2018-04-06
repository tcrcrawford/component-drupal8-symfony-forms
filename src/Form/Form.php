<?php

namespace Drupal\symfony_form_component\Form;

use Symfony\Component\Form\Forms;


class Form {

  public function createForm() {
    $formFactory = Forms::createFormFactory();

    dump($formFactory); exit;
  }
}