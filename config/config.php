<?php

session_start();

date_default_timezone_set('America/Sao_Paulo');

define('INCLUDE_PATH','http://localhost/project-delivery');
define('INCLUDE_PATH_FULL','http://localhost/project-delivery/app/Views/pages/');
define('INCLUDE_PATH_FULL_ASSETS', INCLUDE_PATH . '/' . 'assets/');

// Configuração para o PHPMailer
//const MAIL_HOST     = '';
//const MAIL_USERNAME = '';
//const MAIL_PASSWORD = '';
//const MAIL_PORT     = '';

define('DATABASE','');
define('HOST','');
define('USER','');
define('PASSWD','');