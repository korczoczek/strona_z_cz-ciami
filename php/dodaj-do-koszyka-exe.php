<?php
include("database-connect.php");
include("sesja.php");
$user_id=$_SESSION['user_id'];
$produkt=$_GET['produkt'];
//var_dump($_POST);
$sql="SELECT id from zamowienia
    where id_klient=".$user_id." and koszyk=1;";
$result = $mysqli->query($sql);

if($result){
    $wiersze=mysqli_num_rows($result);
    if($wiersze===0){
        $sql="CALL stworzZamowienie(".$user_id.");";
        $result = $mysqli->real_query($sql);
        $sql="SELECT id from zamowienia
        where id_klient=".$user_id." and koszyk=1;";
        $result = $mysqli->query($sql);
        $dane=$result->fetch_assoc();
        $zamowienie=$dane['id'];
    }else{
        $dane=$result->fetch_assoc();
        $zamowienie=$dane['id'];
    }
    //sprawdzenie czy pozycja w koszyku juz istnieje
    //jeśli tak to dodaje się jeden do ilości
    //jeśli nie to tworzy się ją
    $sql="SELECT * from koszyki where id_zamowienia=".$zamowienie." and id_czesci=".$produkt.";";
    $result = $mysqli->query($sql);
    if($result){
        $wiersze=mysqli_num_rows($result);
        if($wiersze>0){
            $dane=$result->fetch_assoc();
            $ilosc=$dane['ilosc'];
            $ilosc++;
            $sql="CALL aktualizujKoszyk(".$zamowienie.",".$produkt.",".$ilosc.");";
            $result = $mysqli->real_query($sql);
            if($result){
                $url="../index.php?success=1";
            }else{
                $url="../index.php?success=0";
            }
        }else{
            $sql="CALL dodajDoKoszyka(".$zamowienie.",".$produkt.");";
            $result = $mysqli->real_query($sql);
            if($result){
                $url="../index.php?success=1";
            }else{
                $url="../index.php?success=0";
            }
     }
    }else{
        $url="../index.php?success=0";
    }
}
include("database-disconnect.php");
header("Location: ".$url);
?>