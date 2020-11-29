<?php
if(isset($_POST['login'])){
    $post=$_POST;
    $haslo = md5($post['haslo']);
    $post['imie']=mb_strtolower($post['imie'],'UTF-8');
    $post['nazwisko']=mb_strtolower($post['nazwisko'],'UTF-8');
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
?>
