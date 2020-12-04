<!DOCTYPE html>
<html lang="pl">
<head>
<?php
    include('php/database-connect.php');
    include('php/header.php');
?>
<title>Dodawanie produktu</title>
</head>
<body>
<div class="container">
<?php
include('php/navbar.php');
?>
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
		<?php
			include('php/dodaj-czesc-exe.php');
		?>
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Dodaj produkt</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="" autocomplete="off">
                    <fieldset>
						<!--div class="form-group">
			    		    <input name="zdjecie-produktu" type="file">
			    		</div-->
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Nazwa" name="nazwa" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Cena" name="cena" type="number" value="">
			    		</div>
			    		
						<div class="form-group">
			    		    <input class="form-control" placeholder="Ilość" name="ilosc" type="number">
			    		</div>
						<div class="form-group">
			    		    <textarea class="form-control" placeholder="Opis" name="opis" type="text"></textarea>
			    		</div>
						<div class="form-group">
			    		    <input class="form-control" placeholder="Producent" name="producent" type="text">
			    		</div>
						<div class="form-group">
			    		    <input class="form-control" placeholder="Model" name="model" type="text">
			    		</div>
						<input class="btn btn-lg btn-success btn-block" type="submit" value="Dodaj">
			    	</fieldset>
			      	</form>
			    </div>
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
