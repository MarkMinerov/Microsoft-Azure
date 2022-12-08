<?php
  if (array_key_exists("log", $_GET)) {
    $json = file_get_contents('logs.json');
    $json_data = json_decode($json, true);

    array_push($json_data, date('[d-m-y h:i:s]')." ".$_GET["log"]);
    file_put_contents('logs.json', json_encode($json_data));
    echo json_encode(array('success' => true));
    return;
  } else {
    echo json_encode(array('success' => false));
    return;
  }
?>