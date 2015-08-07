<?php
header("Content-Type:application/json; ");
require_once('loader.php');

if( $_POST['se_no']!='' ){
	$sql = "SELECT * FROM sch_setting LEFT JOIN schedule ON sch_setting.se_no = schedule.setting_no WHERE se_no = ?  ";
	$ans = sql_q( $sql,array( $_POST['se_no'] ) );
	echo json_encode( $ans ); 
}
