<?php
header("Content-Type:application/json; ");
require_once('loader.php');

if( $_POST['account']!='' ){
	$sql = "SELECT * FROM accounts WHERE account = ?";
	$ans = sql_q( $sql,array( $_POST['account'] ) );
	echo json_encode( $ans ); 
}
