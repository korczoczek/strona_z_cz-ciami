<?php
include('security.php');
if(empty($admin)){
    header("Location: logowanie.php");
    //var_dump($admin);
}
?>