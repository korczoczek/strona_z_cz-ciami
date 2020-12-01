<?php
session_start();
if(!empty($_SESSION['user_id'])){
    $user_id=$_SESSION['user_id'];
    $login=$_SESSION['login'];
    $admin=$_SESSION['admin'];
}
?>