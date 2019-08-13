<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
echo "<b>PoC Enterprise Container Platform Andrin Brunner</b>";
echo "<b>test</b>";
echo "<br><br>";
date_default_timezone_set("Europe/Zurich");
echo "Current container time: " . date("Y.m.d H:i:s");
echo "<br><br>";
echo "Used container: ";
echo gethostname();
echo "<br><br>";
echo "Current PHP session: " . session_id();
echo "<br><br>";
?>
