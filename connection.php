<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$_SESSION["loaded"] = 1;
$array = array(); 


$link = mysql_connect($servername, $username, $password);
if (!$link) {
    die('Not connected : ' . mysql_error());
}

$db_selected = mysql_select_db('uqvend', $link);
if (!$db_selected) {
    die ('Can\'t use database : ' . mysql_error());
}

if (isset($_POST['search'])) {
  $_SESSION["loaded"] = 0;
}

if ($_SESSION["loaded"] == 2) {
  $array[] = array();
}

if ($_SESSION["loaded"] == 1) {
  $query = "SELECT * FROM machines;";
  $fetch = mysql_query($query);
  while($row = mysql_fetch_assoc($fetch)) {
    $array[] = $row;
  }
} elseif($_SESSION["loaded"] == 0) {
  // Add the query and add the new results into the array.
  $searchTerm = $_POST['message'];
  $query = mysql_query("SELECT * FROM machines WHERE contains LIKE '%".$searchTerm."%';") or die ('Error updating database: '.mysql_error());
  while ($result = mysql_fetch_assoc($query)) {
    $array[] = $result;
  }
}


  if (isset($_POST['newMachine'])) {
      $long = $_POST['long'];
      $lat = $_POST['lat'];
      $name = $_POST['name'];
      $contains = $_POST['contains'];
      $query = "INSERT INTO machines VALUES (".$long.",".$lat.",'".$name."','".$contains."', DEFAULT);";
      mysql_query($query) or die ('Error updating database: '.mysql_error());
    }

?>
