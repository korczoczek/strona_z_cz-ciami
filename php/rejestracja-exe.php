<?php
include('database-connect.php');
if(!(empty($_POST['login'])||
empty($_POST['email'])||
empty($_POST['imie'])||
empty($_POST['nazwisko'])||
empty($_POST['haslo']))){
    if($_POST['haslo']==$_POST['potwierdz-haslo']){
        //$post=$_POST;
        $haslo = md5($_POST['haslo']);
        $login = $mysqli->real_escape_string($_POST['login']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $imie = $mysqli->real_escape_string($_POST['imie']);
        $nazwisko = $mysqli->real_escape_string($_POST['nazwisko']);
        $imie=mb_strtolower($imie,'UTF-8');
        $nazwisko=mb_strtolower($nazwisko,'UTF-8');
        $login=mb_strtolower($login,'UTF-8');
        $email=mb_strtolower($email,'UTF-8');
        //var_dump($haslo);
        //sprawdzanie duplikatów
        $sql="SELECT count(login) login,count(email) email from login
        where login='".$login."' or email='".$email."';";
        $result=$mysqli->query($sql);
        $check=$result->fetch_assoc();
        if($check['login']+$check['email']!=0){
            $url="../rejestracja.php?duplicate=1";
        }else{
        //rejestracja użytkowników
        $sql="CALL rejestracja(
        '".$login."',
        '".$haslo."',
        '".$email."',
        '".$imie."',
        '".$nazwisko."')";
        $result=$mysqli->real_query($sql);
        //echo mysqli_error($mysqli);
        if($result){
            $url="../logowanie.php?rejestracja=1";
        }else{
            $url="../rejestracja.php?success=0";
        }
    }
    }else{
        $url="../rejestracja.php?bladhasla=1";
    }
}else{
    $url="../rejestracja.php?notall=1";
}
include('database-disconnect.php');
header('Location: '.$url);
?>
