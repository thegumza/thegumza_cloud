<?php
/**
 * Created by PhpStorm.
 * User: Wiwat
 * Date: 7/30/2015
 * Time: 4:53 PM
 */
include("config_file.php");

$sql = "SELECT * FROM coffee";
$ab = mysql_query($sql);
echo $ab;

?>