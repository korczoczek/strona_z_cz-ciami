<?php
include('database-connect.php');
if(!(empty($_POST['login']) || empty($_POST['password']))){
    $login=$_POST['login'];
    $haslo=md5($_POST['password']);
    $sql="SELECT id,login,admin FROM login
    WHERE (login='".$login."' OR email='".$login."') AND haslomd5='".$haslo."'";
    $result = $mysqli->query($sql);
    $dane = $result->fetch_assoc();
    //var_dump($result);
    //var_dump($sql);
    if(!($result)){
            $url="../logowanie.php?success=0";
        }elseif(empty($dane['id'])){
        $url="../logowanie.php?zlehaslo=1";
    }else{
        session_start();
        $_SESSION['user_id']=$dane['id'];
        $_SESSION['login']=$dane['login'];
        $_SESSION['admin']=$dane['admin'];
        $url="../index.php?success=1";
    }
}elseif(!empty($_POST['login']) xor !empty($_POST['password'])){
    $url="../logowanie.php?zlehaslo=1";
}
include('database-disconnect.php');
header("Location: ".$url);
?>