<?php

if(isset($_POST['login'])){
    $post=$_POST;
    $haslo = md5($post['haslo']);
    $login = $mysqli->real_escape_string($post['login']);
    $email = $mysqli->real_escape_string($post['email']);
    $imie = $mysqli->real_escape_string($post['imie']);
    $nazwisko = $mysqli->real_escape_string($post['nazwisko']);
    $imie=mb_strtolower($imie,'UTF-8');
    $nazwisko=mb_strtolower($nazwisko,'UTF-8');
    $login=mb_strtolower($login,'UTF-8');
    $email=mb_strtolower($email,'UTF-8');
    //var_dump($haslo);

    $sql="CALL rejestracja(
        '".$login."',
        '".$haslo."',
        '".$email."',
        '".$imie."',
        '".$nazwisko."')";
    $result=$mysqli->real_query($sql);
    //echo mysqli_error($mysqli);
    if($result){
        ?>
        <div class="alert alert-success" role="success">
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
}else{
    ?>
        <div class="alert alert-danger" role="alert">
            Proszę wypełnić wszystkie pola.
        </div>
        <?php
}
?>
