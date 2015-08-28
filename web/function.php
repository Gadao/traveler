<?php
  require_once('../loader.php');

function input_show( $str_php,$str ){
    $ans = '<input type="text" name="'.$str.'" class="form-control" value="'.$str_php.'"/>';
    return $ans;
}