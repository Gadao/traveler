<?php
header("Content-Type:application/json; ");
require_once('loader.php');

if( $_POST['type']=='traveler' ){
	$sql = "SELECT * FROM accounts WHERE account = ? AND password = ?";
	$ans = sql_q( $sql,array( $_POST['account'],$_POST['password'] ) );
	if( count($ans)>0 )
		echo json_encode( $ans );
	else
		echo json_encode('請註冊一個帳號或是利用其他方式登入 !');
}
else{
	$sql = "SELECT * FROM accounts WHERE account = ? ";
	$ans = sql_q( $sql,array( $_POST['account'] ) );
	if( count($ans)>0 )
		echo json_encode( $ans );
	else{
		$sql = "INSERT INTO `accounts`(`ac_no`, `account`, `password`, `name`, `picture`, `type`, `level`) VALUES (?,?,?,?,?,?,?)";
		$ans = sql_i( $sql,array( 'null',$_POST['account'],'xxx',$_POST['name'],'1',$_POST['type'],'1' ) );
		if( $ans )
			echo json_encode( 'success !' );
		else
			echo json_encode( 'default !' );
	}
}
