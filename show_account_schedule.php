<?php
header("Content-Type:application/json; ");
require_once('loader.php');

if( $_POST['account']!='' ){
	$sql = "SELECT * FROM accounts WHERE account = ?";
	$ans = sql_q( $sql,array( $_POST['account'] ) );
	//if( count($ans)>0 )
		//echo json_encode( $ans[0]['ac_no'] );
	$sql = "SELECT * FROM sch_setting LEFT JOIN schedule ON sch_setting.se_no = schedule.setting_no WHERE account_no = ?  ";
	$ans = sql_q( $sql,array( $ans[0]['ac_no'] ) );
	echo json_encode( $ans ); 
}
