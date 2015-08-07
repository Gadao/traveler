<?php
header("Content-Type:text/html; charset=utf-8");
require_once('loader.php');

	$datetime = date ("YmdHis"); 
	$file_path = "picture/";
	$file_path = $file_path . basename( $_FILES['uploaded_file']['name'] );	
	move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path);
	
	$sql = "INSERT INTO sch_setting(`se_no`, `se_title`, `picture_name`,`account_no`) VALUES (?, ?,?,? ) ";
	$ans = sql_i( $sql,array( 'null',$_POST['title'],$_FILES['uploaded_file']['name'] ,$_POST['account_no']) );
	
	if( $ans ){
		$sql = "SELECT * FROM sch_setting WHERE se_title = ? AND account_no = ?";
		$ans = sql_q( $sql,array( $_POST['title'],$_POST['account_no'] ) );
		echo json_encode( $ans );
	}
	else
		echo json_encode('標題新增失敗,確認參數是否設置成功 ?');
	




