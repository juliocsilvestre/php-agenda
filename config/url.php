<?php

  // Para servidor PHP embutido (php -S)
  if (php_sapi_name() === 'cli-server') {
    $BASE_URL = "http://localhost:8000/";
  } else {
    // Para Apache/Nginx
    $BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';
  }