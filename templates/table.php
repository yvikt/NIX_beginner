<?php

function draw_multiplication_table ()
{
  $all_tables = '';
  for ($i = 1; $i <= 10; $i++) {
    $table = '';
    $table .= '<div class="multiplication-table"><div>';
    for ($j = 1; $j <= 10; $j++) {
      $table .= "$i x $j = " . ($i * $j) . '<br>';

    }
    $table .= '</div></div>';
    $all_tables .= $table;
  }
  return $all_tables;
}