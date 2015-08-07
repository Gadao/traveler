<?php
header("Content-Type:application/json; ");
require_once('loader.php');

if( $_POST['title']!='' ){
		$sql = "SELECT * FROM sch_setting WHERE se_title = ?";
		$ans = sql_q( $sql,array( $_POST['title'] ) );
		echo json_encode( $ans );
}




