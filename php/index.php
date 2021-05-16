<?php

  define('APP_IDENTIFIER', '');

  function loadApplication() {

    // continue loading your application

  }

  require_once(__DIR__ . '/ShieldAuthenticator.php');
  $auth = new ShieldAuthenticator(APP_IDENTIFIER);
  if ($auth->checkHostStatus()) {

    $response = $auth->verifyStatus();
    if (!empty($response)) {

      $json = json_decode($response);
      if ($json->status)
        loadApplication();
      else
        if (!empty($json->content->redirect_page)) {

          header('Location: ' . $json->content->redirect_page);
          die();

        } else {

          header('Location: https://shield.valkyriatech.com.br/?action=inactiveApp&app_identifier=' . APP_IDENTIFIER);
          die();

        }
    }

  } else {
    loadApplication();
  }
