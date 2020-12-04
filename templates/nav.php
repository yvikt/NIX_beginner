<?php

$request_path = $_SERVER['REQUEST_URI'];

$items = [
  '/' => 'Главная',
  '/lesson-1' => 'урок-1',
  '/lesson-2' => 'урок-2',
  '/lesson-3' => 'урок-3',
  'https://github.com/yvikt/NIX_beginner/commits/master' => 'commits'
];

$nav = '<ul>';
foreach ($items as $path => $name){
  $li = '<li>';
  $active = '';
  if($path == $request_path) $active = 'active';
  else $active = '';
  $li .= '<a class="' . $active .  '" href="' . $path . '">' . $name . '</a></li>';
  $nav .= $li;
  // <li class="right">
}
$nav .= '</ul>';

echo $nav;