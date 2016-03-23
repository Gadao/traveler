<?php
header("Content-Type:application/json; ");
require_once('loader.php');

$ans = sql_q("SELECT * FROM post WHERE post_no=? " ,array($_POST['post_no']));
$sum = array('map'=>$ans);

echo json_encode($sum);


