<?php
  $json = file_get_contents('data.json');
  $json_data = json_decode($json, true);

  echo json_encode($json_data["chips"]);
?>