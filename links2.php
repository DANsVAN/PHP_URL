<!DOCTYPE html>
<?php
include "functions.php";
$Title = checkTitle();
echo "<h1>" . $Title  . "</h1>";
$check_ID = checkID();
echo "Page id:" . $check_ID;

include_once "header.php"
?>
<?php
// put your code here
?>
<?php
include_once "footer.php"
?>