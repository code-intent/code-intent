<?php
  ob_start();
  header("Content-Type: text/html");
  include dirname(__FILE__) . '/vendor/AltoRouter.php';
  $router = new AltoRouter();
  $router->setBasePath('');
  $router->map('GET','/', 'pages/home.html', 'home');
  $router->map('GET','/home', 'pages/home.html', 'home-home');
  $router->map('GET','/about', 'pages/about.html', 'about');
  $router->map('GET','/contact', 'pages/contact.html', 'contact');

  $match = $router->match();
  $_TARGET = $match['target'];

  if($match) {
    require 'layout/header.php';
    require $_TARGET;
    require 'layout/footer.php';
  }
  else {
    header("HTTP/1.0 404 Not Found");
    //require 'layout/header.php';
    require 'pages/404.html';
    //require 'layout/footer.php';
  }
?>
