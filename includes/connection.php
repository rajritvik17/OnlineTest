<?php
session_start();
$base_url="http://localhost/onlinetest/";
$conn=new mysqli("localhost","root","","onlinetest");
if($conn->connect_error)
{
	die("Connection Failed...".$conn->connect_error);
}
?>