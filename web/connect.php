<?php
    require_once('../loader.php');


    $sql = "SELECT * FROM accounts WHERE account=? AND password=?";
    $profile = sql_q( $sql, array( $_POST['account'],$_POST['password'] ));

    if( count($profile)>0 ){
        $_SESSION['account'] = $profile[0]['account'];
        $_SESSION['name'] = $profile[0]['name'];
        $_SESSION['level'] = $profile[0]['level'];

        echo "<script language=javascript>
        alert('Login Success!!');
        window:location.href='./main.php';
        </script>";
    }else{
        echo "<script language=javascript>
        alert('Login Fail!!');
        window:location.href='./index.php';
        </script>";
    }