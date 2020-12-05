<?php

include 'templates/table.php';
include 'templates/home.php';
include 'templates/form.php';

$path = $_SERVER['REQUEST_URI'];

switch ($path) {
  case '/':
    echo draw_home();
    break;
  case '/lesson-1':
    echo draw_multiplication_table();
    break;
  case '/lesson-2':
    echo draw_multiplication_table(true);
    break;
  case '/lesson-3':
    echo form_page();
    break;
  case '/lesson-3a':
    echo form_page_2();
    break;
  default:
    echo 'Not found';
}
