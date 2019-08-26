<?php
$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="homesitesystem";

$conn = mysql_connect($servername,$dBUsername,$dBPassword,$dBName);

if (!$conn){
	die("Connection failed: ".mysql_connect_error());
}