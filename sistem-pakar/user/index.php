<?php
session_start();

if( !isset($_SESSION['nama_user']) )
{
	header('location:../'.$_SESSION['akses']);
	exit();
}

header("Location: diagnosa.php");
exit();
?>




