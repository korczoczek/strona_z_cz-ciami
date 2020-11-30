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
}
?>