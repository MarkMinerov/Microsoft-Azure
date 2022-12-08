<?php
  if (array_key_exists("pin", $_GET)) {
    $json = file_get_contents('data.json');
    $json_data = json_decode($json, true);

    if ($json_data["pin"] == $_GET["pin"]) {
      echo json_encode(array('success' => true));
    } else {
      echo json_encode(array('success' => false));
    }
  }
?>