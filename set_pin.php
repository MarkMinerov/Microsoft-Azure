<?php
  if (array_key_exists("new_pin", $_GET) && array_key_exists("prev_pin", $_GET)) {
    $json = file_get_contents('data.json');
    $json_data = json_decode($json, true);

    if ($json_data["pin"] == $_GET["prev_pin"]) {
      $json_data["pin"] = $_GET["new_pin"];
      file_put_contents('data.json', json_encode($json_data));
      echo json_encode(array('success' => true));
      return;
    } else {
      echo json_encode(array('success' => false));
    }
  }
?>