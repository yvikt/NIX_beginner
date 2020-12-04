<?php

include 'templates/table.php';
include 'templates/home.php';

$path = $_SERVER['REQUEST_URI'];

switch ($path) {
  case '/':
    echo draw_home();
    break;
  case '/lesson-1':
    echo draw_multiplication_table();
    break;
  default:
    echo 'Not found';
}
