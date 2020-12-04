<?php
if(isset($user_id)&&$admin==1){
  ?>
  <!--administrator-->
  <nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <img id="logo-fs" class="navbar-brand" src="photos/logo2.png">
    </div>
    <div class="collapse navbar-collapse">
     <div class="navbar-header">
      <img id="logo-fs" class="navbar-brand" src="photos/logo2.png">
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="login"><!--TU MA BYC WYSWIETLANIE NAZWY UZYTKOWNIKA--><?php echo $login?></li>
      <li><a href="dodawanie-produktow.php">Dodaj produkt</a></li>
      <li><a href="koszyk.php">Koszyk</a></li>
      <li><a href="php/wyloguj.php">Wyloguj</a></li>
    </ul>
  </div>
  </nav>
  <?php
}elseif(isset($user_id)&&$admin==0){
?>
<!--zalogowany użytkownik-->
<nav class="navbar navbar-default" role="navigation">
  <div class="collapse navbar-collapse">
	<div class="navbar-header">
      <img id="logo-fs" class="navbar-brand" src="photos/logo2.png">
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="login"><!--TU MA BYC WYSWIETLANIE NAZWY UZYTKOWNIKA--><?php echo $login?></li>
      <li><a href="koszyk.php">Koszyk</a></li>
      <li><a href="php/wyloguj.php">Wyloguj</a></li>
    </ul>
  </div>
</nav>
<?php
}else{
?>
<!--niezalogowany użytkownik-->
<nav class="navbar navbar-default" role="navigation">
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   <div class="navbar-header">
      <img id="logo-fs" class="navbar-brand" src="photos/logo2.png">
    </div>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="logowanie.php">Logowanie</a></li>
    <li><a href="rejestracja.php">Rejestracja</a></li>
    </ul>
  </div>
</nav>
<?php
}
?>