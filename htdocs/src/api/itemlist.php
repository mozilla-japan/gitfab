<?php
  $owner = $_GET["owner"];
  $tag = $_GET["tag"];

  include('local-database-functions.php.inc');
  $result = array();
  try {
    $result["itemlist"] = getItemList($owner, $tag);
  } catch (Exception $e) {
    $result["error"] = $e->getMessage();
  }

  echo json_encode($result);
?>