<?php 
error_reporting(0);
$conn = new mysqli("localhost","root","","kas");
date_default_timezone_set("Lampung");
define(base_url, (isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'].str_replace(basename($_SERVER['SCRIPT_NAME']),"", $_SERVER['SCRIPT_NAME']));
?>