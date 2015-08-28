<?php
	header("Content-Type:text/html; charset=utf-8");
	require_once('loader.php');
	
	$sql = "SELECT * FROM `rank` WHERE ac_no =? AND se_no =?";
	$ans = sql_q( $sql,array( $_POST['ac_no'],$_POST['se_no']) );
	
	if( count($ans)>0 )
		echo json_encode($ans);
	else
		echo json_encode('未按過評分 !');
	




