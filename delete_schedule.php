<?php
header("Content-Type:application/json; ");
require_once('loader.php');

if( $_POST['s_no']!='' ){
	$sql = "DELETE FROM schedule WHERE s_no = ?";
	$ans = sql_i( $sql,array( $_POST['s_no'] ) );
	if( $ans ){
		echo json_encode( 'SUCCESS !' );
	}
	else
		echo json_encode('行程表新增失敗,確認參數是否設置成功 ?');
}