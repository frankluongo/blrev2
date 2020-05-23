<?php

  function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

  function pullSrc($iframe) {
    $iframeString = explode("src=", $iframe)[1];
    $iframeSrc = explode(" ", $iframeString)[0];
    echo $iframeSrc;
  }

  function firstName($name) {
    $stringArray = explode(" ", $name);
    echo $stringArray[0];
  }

  function formatDate($date) {
    $raw_date = date_create($date);
    echo date_format($raw_date, 'm/d/Y');
  }
