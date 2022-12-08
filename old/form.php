<?php
  $data = "Name: {$_POST['name']}\n";
  $data = $data . "Surname: {$_POST['surname']}\n";
  $data = $data . "Email: {$_POST['email']}\n";
  $data = $data . "URL: {$_POST['url']}\n";
  $data = $data . "Phone: {$_POST['tel']}\n";
  $data = $data . "Food: {$_POST['food']}\n";

  $file = fopen("data.txt", "w") or die("Unable to open file!");
  fwrite($file, $data);
  fclose($file);

  echo str_replace("\n", "<br>", $data);
?>