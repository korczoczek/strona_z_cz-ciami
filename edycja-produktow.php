<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<?php
    include('php/database-connect.php');
    include('php/header.php');
	include('php/sesja.php');
	include('php/admin-security.php');
?>
<title>Edycja produktu</title>
</head>
<body>
<div class="container">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
		<?php
			include('php/edytuj-populate-exe.php');
			include('php/baner.php');
		?>
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Edytuj produkt</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action=<?php echo "\"php/edytuj-czesc-exe.php?id=".$id."\""; ?>>
                    <fieldset>
						<!--div class="form-group">
							<h4 class="nazwa-produktu"><small>Wprowadź nazwę produktu, który chcesz edytować:</small></h4>
			    		    <input class="form-control" placeholder="nazwa" name="nazwa-produktu" type="text">
			    		</div>
						<div class="form-group">
			    		    <input name="zdjecie-produktu" type="file">
			    		</div-->
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Nazwa" name="nazwa" type="text" value=<?php echo "\"".$dane['nazwa']."\""; ?>>
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Cena" name="cena" type="number" value=<?php echo "\"".$dane['cena']."\""; ?>>
			    		</div>
						<div class="form-group">
			    		    <input class="form-control" placeholder="Ilość" name="ilosc" type="number" value=<?php echo "\"".$dane['ilosc']."\""; ?>>
			    		</div>
						<div class="form-group">
			    		    <textarea class="form-control" placeholder="Opis" name="opis" type="text" value=<?php echo "\"".$dane['opis']."\""; ?>></textarea>
			    		</div>
						<div class="form-group">
			    		    <input class="form-control" placeholder="Producent" name="producent" type="text" value=<?php echo "\"".$dane['producent']."\""; ?>>
			    		</div>
						<div class="form-group">
			    		    <input class="form-control" placeholder="Model" name="model" type="text" value=<?php echo "\"".$dane['model']."\""; ?>>
			    		</div>
						<input class="btn btn-lg btn-success btn-block" type="submit" value="Edytuj">
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
