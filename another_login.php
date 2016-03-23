<?php
header("Content-Type:application/json; ");
require_once('loader.php');

	$sql = "SELECT * FROM account WHERE account = ? AND type = ? ";
	$ans = sql_q( $sql,array( $_POST['account'],$_POST['type'] ) );
	if( count($ans)>0 )
		echo json_encode( $ans );
	else
		echo json_encode('請註冊一個帳號或是利用其他方式登入 !');
/*
	$sql = "SELECT * FROM accounts WHERE account = ? ";
	$ans = sql_q( $sql,array( $_POST['account'] ) );
	if( count($ans)>0 )
		echo json_encode( $ans );
	else{
		$sql = "INSERT INTO `account`(`account_no`, `account`, `password`, `name`,`type`, `picture_name`,`sign`,`birthday`,`level`) VALUES (?,?,?,?,?,?,?,?,?)";
		$ans = sql_i( $sql,array( 'null',$_POST['account'],'none',$_POST['name'],$_POST['type'],$_POST['picture_name'],$_POST['sign'],$_POST['birthday'],'1' ) );
		if( $ans )
			echo json_encode( 'success !' );
		else
			echo json_encode( 'default !' );
	}

