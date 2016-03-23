<?php
header("Content-Type:application/json; ");
require_once('loader.php');
$nextWeek = time() + (7 * 24 * 60 * 60);
if( $_POST['title']!='' ){
	$sql = "INSERT INTO `post`(`post_no`, `image_name`, `x`, `y`, `category`, `address`, `content`, `title`, `note`, `score`, `time`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
	$ans = sql_i( $sql,array( 'null',$_POST['image_name'],$_POST['x'],$_POST['y'],$_POST['category'],$_POST['address'],$_POST['content'],$_POST['title'],$_POST['note'],'0',date("Y-m-d") ) );
	if( $ans ){
		echo json_encode( 'SUCCESS !' );
	}
	else
		echo json_encode('default ?');
}




