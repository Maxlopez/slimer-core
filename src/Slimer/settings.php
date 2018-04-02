<?php
return array(
  'settings' => array(
    'displayErrorDetails' => true, // set to false in production
    'addContentLengthHeader' => false, // Allow the web server to send the content-length header

    //Twig settings
    'view' => array(
      'template_path' => ABSPATH . '/app/Views',
      'twig' => array(
        'cache' => ABSPATH . '/cache/twig',
        'debug' => true,
        'auto_reload' => true,
      ),
    ),

    //Monolog settings
    'logger' => array(
      'name' => 'slimer-app',
      'path' => isset( $_ENV['docker'] ) ? 'php://stdout' : ABSPATH . '/logs/app.log',
      'level' => \Monolog\Logger::DEBUG,
    ),
  ),
);
