<?php
$themeClass = '';
if (!empty($_COOKIE['theme'])) {
  if ($_COOKIE['theme'] == 'dark') {
    $themeClass = 'dark-theme';
  } else if ($_COOKIE['theme'] == 'light') {
    $themeClass = 'light-theme';
  }
}
?>