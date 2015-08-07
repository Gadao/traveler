<?php
header("Content-Type:application/json; ");
require_once('loader.php');

$x = ($_POST['lat_1']+$_POST['lat_2'])/2;
$y = ($_POST['lng_1']+$_POST['lng_2'])/2;
$sql = "SELECT *, ( ? * acos( cos( radians(?) ) * cos( radians( lng ) ) *
            cos( radians( lat ) - radians(?) ) + 
            sin( radians(?) ) * sin( radians( lng ) ) ) ) AS distance 
  FROM data HAVING distance < 10";
$ans = sql_q( $sql ,array('6371',$y,$x,$y) );
$sum = array('map'=>$ans);

echo json_encode($sum);

