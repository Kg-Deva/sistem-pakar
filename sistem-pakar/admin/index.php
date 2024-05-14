<?php
session_start();

if( !isset($_SESSION['saya_admin']) )
{
	header('location:../'.$_SESSION['akses']);
	exit();
}

header("Location: dashboard.php");
exit();
?>