<?php
include('security.php');
if(empty($admin)){
    header("Location: index.php");
    //var_dump($admin);
}
?>