<?php

namespace Drupal\symfony_form_component\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends ControllerBase {

  public function index() {
    $service = \Drupal::service('symfony_form_component.form');

    var_dump($service->createForm()); exit;

    return new Response('Route Check!', 200);
  }
}