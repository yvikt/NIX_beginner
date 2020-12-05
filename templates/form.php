<?php

function form_page(){
  $message = $_POST['message'];
  $template =
      '<div class="form-container">
        <form class="" method="POST" action="/lesson-3">
          <input type="text" name="message" required="required"></input>
          <input type="submit" value="mirror"></input>
        </form>';
  if ($message) {
    $template .= '<div class="message">' . $message . '</div>';
    $template .= '<a href="/lesson-3"><button>back</button></a>';
  }

  $template .= '</div>';
  $template .= '<div class="description">с использованием кнопки "назад"</div>';
  return $template;
}

function form_page_2()
{
  session_start();

  if (!empty($_POST["message"])) {
    $_SESSION["message"] = $_POST["message"];
    header("Location: ".$_SERVER["REQUEST_URI"]);
    exit;
  }

  $message = $_SESSION['message'];
  $_SESSION['message'] = null;
  $template =
      '<div class="form-container">
        <form class="" method="POST" action="/lesson-3a">
          <input type="text" name="message" required="required"></input>
          <input type="submit" value="mirror"></input>
        </form>';
  if ($message) {
    $template .= '<div class="message">' . $message . '</div>';
  }
  $template .= '</div>';
  $template .= '<div class="description">с использованием кнопки сессии и редиректа</div>';
  return $template;
}
