<?php

  class ShieldAuthenticator{

    private $appIdentifier;
    private $host;

    public function __construct($appIdentifier = '') {

      $this->host = 'shield.valkyriatech.com.br';

      $tempUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

      if ($appIdentifier != '')
        $this->appIdentifier = $appIdentifier;
      else
        $this->appIdentifier = str_replace('www.', '', parse_url($tempUrl, PHP_URL_HOST));

    }

    private function curlGetContents($url) {
      $ch = curl_init();

      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_URL, $url);

      $data = curl_exec($ch);
      curl_close($ch);

      return $data;
    }

    public function checkHostStatus() {
      $host = $this->host;
      if ($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
        fclose($socket);

        $status = $this->curlGetContents('https://' . $this->host . '/?action=status');
        return $status;

      } else
          return false;
    }

    public function verifyStatus() {

      $response = $this->curlGetContents('https://' . $this->host . '/?action=verifyStatus&app_identifier=' . $this->appIdentifier);
      return $response;

    }
  }
