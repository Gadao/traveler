<?php
header("Content-Type:application/json; ");
require_once('loader.php');

if($_POST['account']!=''){
//	$sql = "INSERT INTO `accounts`(`ac_no`, `account`, `password`, `name`, `picture`, `type`, `level`) VALUES (?,?,?,?,?,?,?)";
//	$ans = sql_i( $sql,array( 'null',$_POST['account'],$_POST['password'],$_POST['name'],'1','traveler','1' ) );
	$sql = "INSERT INTO `account`(`account_no`, `account`, `password`, `name`,`type`, `picture_name`,`sign`,`birthday`,`level`) VALUES (?,?,?,?,?,?,?,?,?)";
$ans = sql_i( $sql,array('NULL',$_POST['account'],$_POST['password'],$_POST['name'],$_POST['type'],$_POST['picture_name'],$_POST['sign'],$_POST['birthday'],'1' ) );
//$ans = sql_i( $sql,array('NULL',$_GET['account'],$_GET['password'],$_GET['name'],$_GET['type'],$_GET['picture_name'],$_GET['sign'],$_GET['birthday'],'1' ) );
}
	if( $ans ){
		echo json_encode( 'SUCCESS !' );
	}else
		echo json_encode('Fail!');





