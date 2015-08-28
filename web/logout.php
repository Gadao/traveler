<?php
	require_once('../loader.php');
	session_destroy();
	header("Location:index.php");