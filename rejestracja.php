<!DOCTYPE html>
<html lang="pl">
<head>
<?php
    include('php/database-connect.php');
    include('php/header.php');
?>
<title>Rejestracja</title>
<style>
body{
	margin-top:15%;
}
</style>
</head>
<body>
<div class="container" style="margin-top:30px">
<div class="col-md-10 col-md-offset-1">
<?php
	include('php/rejestracja-exe.php')
?>
    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title">Zarejestruj się</h3>
	</div>
  
  <div class="panel-body">
   <form role="form" action="" method="post" autocomplete="off">
            <div class="row">
    			<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="imie" id="imie" class="form-control" placeholder="Imię" tabindex="1">
					</div>
				</div>
                <div class="col-xs-12 col-sm-6 col-md-6">
    				<div class="form-group">
                        <input type="text" name="nazwisko" id="nazwisko" class="form-control" placeholder="Nazwisko" tabindex="1">
					</div>
				</div>
				<!--div class="col-xs-12 col-sm-4 col-md-4">
					<div class="form-group">
						<input type="text" name="kod-pocztowy" id="kod-pocztowy" class="form-control " placeholder="Kod pocztowy" tabindex="2">
					</div>
				</div-->
			</div>
			<div class="form-group">
				<input type="text" name="login" id="login" class="form-control " placeholder="Login" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control " placeholder="E-mail" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="haslo" id="haslo" class="form-control " placeholder="Hasło" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="potwierdz-haslo" id="potwierdz-haslo" class="form-control " placeholder="Potwierdź hasło" tabindex="6">
					</div>
				</div>
			</div>                            
  <button type="submit" class="btn btn-lg btn-success btn-block">Dołącz do nas</button>
</form>
  </div>
</div>
</div>
</div>
<?php
include('php/footer.php');
include('php/database-disconnect.php');
?>
</body>
</html>
