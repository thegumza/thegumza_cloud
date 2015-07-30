<?php
/**
 * Created by PhpStorm.
 * User: Wiwat
 * Date: 7/30/2015
 * Time: 4:53 PM
 */
include("config.php");

$sql = "SELECT * FROM coffee";
$a = mysql_query($sql);
echo $a;

?>