<?php
session_start();
if(!isset($_SESSION['inputemail'])){
	header("Location:login.html")
}
?>