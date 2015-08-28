<?php
header("Content-Type:application/json; ");
require_once('loader.php');


	$sql = "SELECT se_no,AVG(score) FROM `rank` GROUP BY se_no ORDER BY AVG(score) ASC";
	$ans = sql_q( $sql,array() );
	echo json_encode( $ans ); 

