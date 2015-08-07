<?php
header("Content-Type:application/json; ");
require_once('loader.php');

if( $_POST['setting_no']!='' ){
	$sql = "INSERT INTO `schedule`(`s_no`,  `setting_no`, `sort`, `data_no`) VALUES (?,?,?,?)";
	$ans = sql_i( $sql,array( 'null',$_POST['setting_no'],$_POST['sort'],$_POST['data_no'] ) );
	if( $ans ){
		echo json_encode( 'SUCCESS !' );
	}
	else
		echo json_encode('行程表新增失敗,確認參數是否設置成功 ?');
}




