<?php

	session_start();
	include('confs/config.php');

	$id = $_POST['id'];

	echo"$id";
	echo "<script>window.location='update-cart.php?action=add&id=$id'</script>";
