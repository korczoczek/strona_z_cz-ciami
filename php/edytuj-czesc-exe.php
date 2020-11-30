<?php
if(isset($_POST['nazwa'])){
    $post = $_POST;

    if(!empty($post['nazwa'])){
        $nazwa = $mysqli->real_escape_string($post['nazwa']);
        $cena = $mysqli->real_escape_string($post['cena']);
        $ilosc = $mysqli->real_escape_string($post['ilosc']);
        $opis = $mysqli->real_escape_string($post['opis']);
        $producent = $mysqli->real_escape_string($post['producent']);
        $model = $mysqli->real_escape_string($post['model']);
        
        //TODO dodawanie zdjęcia
        //zapis pliki do dysku, konwersja na JPG,tworzenie miniatury,
        $sciezka='';
        //ok
        //wywoływanie procedury
        $sql = "CALL edytujCzesc(
            ".$id.",
            '".$nazwa."',
            ".$cena.",
            '',
            '".$opis."',
            ".$ilosc.",
            '".$producent."',
            '".$model."');";
        $result=$mysqli->real_query($sql);

        if($result){
            ?>
            <div class="alert alert-danger" role="success">
                Zadanie wykonano pomyślnie.
            </div>
            <?php
        }else{
            ?>
            <div class="alert alert-danger" role="alert">
                Wystąpił problem z zapisem danych. Proszę spróbować później.
            </div>
            <?php
        }

    }
}
?>
