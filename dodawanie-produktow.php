<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<?php
    include('php/database-connect.php');
    include('php/header.php');
?>
<meta charset="utf-8">
<title>Dodawanie produktu</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Dodaj produkt</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form">
                    <fieldset>
						<div class="form-group">
			    		    <input name="zdjecie-produktu" type="file">
			    		</div>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="nazwa" name="nazwa-produktu" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="cena" name="cena-produktu" type="number" value="">
			    		</div>
			    		
						<div class="form-group">
			    		    <input class="form-control" placeholder="ilość" name="ilosc-produktu" type="number">
			    		</div>
						<div class="form-group">
			    		    <input class="form-control" placeholder="producent" name="producent-produktu" type="text">
			    		</div>
						<div class="form-group">
			    		    <input class="form-control" placeholder="model" name="model-produktu" type="text">
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
    include('php/database-connect.php');
    include('php/header.php');
?>
</body>
</html>