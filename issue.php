<?php
header("Content-Type:application/json; ");
require_once('loader.php');
$nextWeek = time() + (7 * 24 * 60 * 60);
if( $_POST['title']!='' ){
	$sql = "INSERT INTO `data`(`d_no`, `title`, `content`, `lng`, `lat`, `type`, `stime`, `etime`, `note`, `category`, `address`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
	$ans = sql_i( $sql,array( 'null',$_POST['title'],$_POST['content'],$_POST['lng'],$_POST['lat'],'user',date("Y-m-d"),date('Y-m-d', $nextWeek),$_POST['note'],'user_data',$_POST['address'] ) );
	if( $ans ){
		echo json_encode( 'SUCCESS !' );
	}
	else
		echo json_encode('default ?');
}




