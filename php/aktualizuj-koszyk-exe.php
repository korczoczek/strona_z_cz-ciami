<?php
include('database-connect.php');
include('sesja.php');
$user_id=$_SESSION['user_id'];
//var_dump($_POST);
$sql="SELECT id from zamowienia
    where id_klient=".$user_id." and koszyk=1;";
$result = $mysqli->query($sql);

if($result){
    $dane=$result->fetch_assoc();
    $zamowienie=$dane['id'];
    foreach($_POST as $produkt => $ilosc){
        $sql="CALL aktualizujKoszyk(".$zamowienie.",".$produkt.",".$ilosc.");";
        $result = $mysqli->real_query($sql);
    }
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