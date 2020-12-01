<?php

if(!(empty($_POST['login']) || empty($_POST['password']))){
    $login=$_POST['login'];
    $haslo=md5($_POST['password']);
    $sql="SELECT id,login FROM login
    WHERE (login='".$login."' OR email='".$login."') AND haslomd5='".$haslo."'";
    $result = $mysqli->query($sql);
    $dane = $result->fetch_assoc();
    //var_dump($result);
    //var_dump($sql);
    if(!($result)){
            ?>
            <div class="alert alert-danger" role="alert">
                Błąd połączenia z bazą danych. Spróbuj ponownie później.
            </div>
            <?php 
        }elseif(empty($dane['id'])){
        ?>
        <div class="alert alert-danger" role="alert">
            Niepoprawny login i/lub hasło.
        </div>
        <?php
    }else{
        session_start();
        $_SESSION['user_id']=$dane['id'];
        $_SESSION['login']=$dane['login'];
    }
}elseif(!empty($_POST['login']) xor !empty($_POST['password'])){
    ?>
        <div class="alert alert-danger" role="alert">
            Niepoprawny login i/lub hasło.
        </div>
        <?php
}
?>