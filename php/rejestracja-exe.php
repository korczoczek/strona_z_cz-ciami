<?php
if(isset($_POST['login'])){
    $post=$_POST;
    $haslo = md5($post['haslo']);
    $post['login'] = $mysqli->real_escape_string($post['login']);
    $post['email'] = $mysqli->real_escape_string($post['email']);
    $post['imie'] = $mysqli->real_escape_string($post['imie']);
    $post['nazwisko'] = $mysqli->real_escape_string($post['nazwisko']);
    //var_dump($haslo);

    $sql="CALL rejestracja(
        '".$post['login']."',
        '".$haslo."',
        '".$post['email']."',
        '".$post['imie']."',
        '".$post['nazwisko']."',
    )";
}
?>
