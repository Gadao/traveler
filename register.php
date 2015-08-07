<?php
header("Content-Type:application/json; ");
require_once('loader.php');

if( $_POST['account']!='' ){
	$sql = "INSERT INTO `accounts`(`ac_no`, `account`, `password`, `name`, `picture`, `type`, `level`) VALUES (?,?,?,?,?,?,?)";
	$ans = sql_i( $sql,array( 'null',$_POST['account'],$_POST['password'],$_POST['name'],'1','traveler','1' ) );
	if( $ans ){
		echo json_encode( 'SUCCESS !' );
	}
	else
		echo json_encode('帳號新增失敗 ?');
}




