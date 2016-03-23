<?php
header("Content-Type:application/json; ");
require_once('loader.php');

$ans = sql_q("SELECT * FROM post" ,array());
$sum = array('map'=>$ans);

echo json_encode($sum);


