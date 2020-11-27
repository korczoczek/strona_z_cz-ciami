<?php
if(isset($_POST['nazwa'])){
    $post = $_POST;

    if(!empty($post['nazwa'])){
        $post['nazwa'] = $mysqli->real_escape_string($post['nazwa']);
        $post['cena'] = $mysqli->real_escape_string($post['cena']);
        $post['ilosc'] = $mysqli->real_escape_string($post['ilosc']);
        $post['opis'] = $mysqli->real_escape_string($post['opis']);
        $post['producent'] = $mysqli->real_escape_string($post['producent']);
        $post['kodProducenta'] = $mysqli->real_escape_string($post['kodProducenta']);
        
        //TODO dodawanie zdjęcia
        //zapis pliki do dysku, konwersja na JPG,tworzenie miniatury,
        $sciezka='';

        //wywoływanie procedury
        $sql = "CALL dodajCzesc(
            '".$post['nazwa']."',
            ".$post['cena'].",
            '',
            '".$post['opis']."',
            ".$post['ilosc'].",
            '".$post['producent']."',
            '".$post['kodProducenta']."');";
        $result=$mysqli->real_query($sql);

        if($result){
            header('location: index.php?kom=1');
            exit;
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