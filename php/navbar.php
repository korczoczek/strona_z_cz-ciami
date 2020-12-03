<?php
if(isset($user_id)&&$admin==1){
  ?>
  <!--administrator-->
  <nav>
      <a href="index.php"><button type="button" class="btn btn-primary">Strona główna</button></a>
      <a href="dodawanie-produktow.php"><button type="button" class="btn btn-primary">Dodaj produkt</button></a>
      <a href="koszyk.php"><button type="button" class="btn btn-primary">Koszyk</button></a>
      <a href=""><button type="button" class="btn btn-primary"><?php echo $login; ?></button></a>
      <a href="php/wyloguj.php"><button type="button" class="btn btn-primary">Wyloguj</button></a>
  </nav>
  <?php
}elseif(isset($user_id)&&$admin==0){
?>
<!--zalogowany użytkownik-->
<nav>
      <a href="index.php"><button type="button" class="btn btn-primary">Strona główna</button></a>
      <a href="koszyk.php"><button type="button" class="btn btn-primary">Koszyk</button></a>
      <a href=""><button type="button" class="btn btn-primary"><?php echo $login; ?></button></a>
      <a href="php/wyloguj.php"><button type="button" class="btn btn-primary">Wyloguj</button></a>
  </nav>
<?php
}else{
?>
<!--niezalogowany użytkownik-->
<nav>
      <a href="index.php"><button type="button" class="btn btn-primary">Strona główna</button></a>
      <a href="logowanie.php"><button type="button" class="btn btn-primary">Logowanie</button></a>
      <a href="rejestracja.php"><button type="button" class="btn btn-primary">Rejestracja</button></a>
  </nav>
<?php
}
?>