<?php
include('database-connect.php');
if(isset($_POST['nazwa'])){
    $post = $_POST;

    if(!empty($post['nazwa'])){
        $nazwa = $mysqli->real_escape_string($post['nazwa']);
        $cena = $mysqli->real_escape_string($post['cena']);
        $ilosc = $mysqli->real_escape_string($post['ilosc']);
        $opis = $mysqli->real_escape_string($post['opis']);
        $producent = $mysqli->real_escape_string($post['producent']);
        $model = $mysqli->real_escape_string($post['model']);
        $id=$mysqli->real_escape_string($_GET['id']);
        //TODO dodawanie zdjęcia
        //zapis pliki do dysku, konwersja na JPG,tworzenie miniatury,
        $sciezka='';
        //ok
        //wywoływanie procedury
        $sql = "CALL edytujCzesc(
            ".$id.",
            '".$nazwa."',
            ".$cena.",
            '$sciezka',
            '".$opis."',
            ".$ilosc.",
            '".$producent."',
            '".$model."');";
        $result=$mysqli->real_query($sql);
        $foo=$result;
        if($result){
            $url="../index.php?success=1";
        }else{
            $url="../edycja-produktow.php?success=0&id=".$id;
        }
        //var_dump($sql);
        include('database-disconnect.php');
        header('Location: '.$url);
    }
}
?>
