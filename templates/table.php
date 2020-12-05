<?php

function colorize($string){
  $colorized = '';
  $splitted = str_split($string);
  foreach ($splitted as $symbol){
    switch ($symbol){
      case 1:
        $colorized .= '<span style="color: red;">'. $symbol . '</span>';
        break;
      case 2:
        $colorized .= '<span style="color: green;">'. $symbol . '</span>';
        break;
      case 3:
        $colorized .= '<span style="color: yellow;">'. $symbol . '</span>';
        break;
      case 4:
        $colorized .= '<span style="color: blue;">'. $symbol . '</span>';
        break;
      default:
        $colorized .= $symbol;
    }
  }
  return $colorized;
}

function draw_multiplication_table ($colorized = false)
{
  $all_tables = '';
  for ($i = 1; $i <= 10; $i++) {
    $table = '';
    $table .= '<div class="multiplication-table"><div>';
    for ($j = 1; $j <= 10; $j++) {
      $row = "$i x $j = " . ($i * $j);
      if($colorized)  $row = colorize($row);
      $table .= $row . '<br>';
    }
    $table .= '</div></div>';
    $all_tables .= $table;
  }
  return $all_tables;
}
