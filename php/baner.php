<?php
if(isset($_GET['success'])){
    if($_GET['success']){
        ?>
        <div class="alert alert-success" role="alert">
            Zadanie zostało wykonano poprawnie.
        </div>
        <?php
    }else{
        ?>
        <div class="alert alert-danger" role="alert">
            Wystąpił błąd, spróbuj ponownie później.
        </div>
        <?php
    }
    }if(isset($_GET['bladhasla'])){
        ?>
        <div class="alert alert-danger" role="alert">
            Podane hasła nie są identyczne
        </div>
        <?php
    }if(isset($_GET['rejestracja'])){
        ?>
        <div class="alert alert-success" role="alert">
            Pomyślnie utworzono konto, możesz się teraz zalogować.
        </div>
        <?php
    }
    if(isset($_GET['notall'])){
        ?>
        <div class="alert alert-danger" role="alert">
            Proszę wypełnić wszystkie pola.
        </div>
        <?php
    }
    if(isset($_GET['duplicate'])){
        ?>
        <div class="alert alert-danger" role="alert">
            Podany login i/lub E-mail jest już w użytku.
        </div>
        <?php
    }
?>