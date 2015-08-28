<?php
	header("Content-Type:text/html; charset=utf-8");
	require_once('loader.php');
	$sql = "SELECT * FROM rank WHERE ac_no=? AND se_no =?";
	$ans_count = count(sql_q( $sql,array($_POST['ac_no'],$_POST['se_no']) ));
	if($ans_count=='0'){
		$sql = "INSERT INTO `rank`(`rank_no`, `ac_no`, `se_no`, `score`) VALUES (?,?,?,?)";
		$ans = sql_i( $sql,array( 'null',$_POST['ac_no'],$_POST['se_no'] ,$_POST['score']) );
	}else{
		$sql = "UPDATE rank SET score =? WHERE ac_no=? AND se_no =?";
		$ans = sql_i( $sql,array( $_POST['score'],$_POST['ac_no'],$_POST['se_no'] ) );
	}
	
	
	if( $ans )
		echo json_encode(array($_POST['score']));
	else
		echo json_encode('增加分數失敗 !');
	




