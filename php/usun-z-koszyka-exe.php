<?php
include('database-connect.php');
include('sesja.php');
$user_id=$_SESSION['user_id'];
$produkt=$_GET['produkt'];
$sql="SELECT id from zamowienia
    where id_klient=".$user_id." and koszyk=1;";
$result = $mysqli->query($sql);
if($result){
    $dane=$result->fetch_assoc();
    $zamowienie=$dane['id'];
    $sql="CALL usunZKoszyka(".$zamowienie.",".$produkt.");";
    $result = $mysqli->real_query($sql);
    if($result){
        $url="../koszyk.php?success=1";
    }else{
        $url="../koszyk.php?success=0";
    }
}else{
    $url="../koszyk.php?success=0";
}
include('database-disconnect.php');
header("Location: ".$url);
?>