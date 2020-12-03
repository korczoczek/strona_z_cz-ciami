<!--niezalogowany użytkownik-->
<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <img id="logo-fs" class="navbar-brand" src="photos/logo.png">
  </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
		<li><a href="index.php">Strona główna</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li><a href="logowanie.php">Logowanie</a></li>
		<li><a href="rejestracja.php">Rejestracja</a></li>
    </ul>
  </div>
</nav>

<!--zalogowany użytkownik-->
<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <img id="logo-fs" class="navbar-brand" src="photos/logo.png">
  </div>
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
		<li><a href="index.php">Strona główna</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li><!--TU MA BYC WYSWIETLANIE NAZWY UZYTKOWNIKA--><?php echo $login?></li>
		<li><a href="koszyk.php">Koszyk</a></li>
		<li><!--WYLOGUJ--><a>Wyloguj</a></li>
    </ul>
  </div>
</nav>

<!--administrator-->
<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <img id="logo-fs" class="navbar-brand" src="photos/logo.png">
  </div>
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
		<li><a href="index.php">Strona główna</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li><!--TU MA BYC WYSWIETLANIE NAZWY UZYTKOWNIKA--><?php echo $login?></li>
		<li><a href="logowanie.php">Dodaj produkt</a></li>
		<li><a href="rejestracja.php">Koszyk</a></li>
		<li><a href="rejestracja.php">Wyloguj</a></li>
    </ul>
  </div>
</nav>