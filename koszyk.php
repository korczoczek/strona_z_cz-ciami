<!DOCTYPE html>
<html lang="pl">
<head>
<?php
    include('php/database-connect.php');
    include('php/header.php');
?>
<meta charset="utf-8">
<title>Koszyk</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="card">
            <div class="card-header bg-dark text-light">
                
				<div class="panel panel-default">
                <div class="panel-heading">
			    	<h3 class="panel-title">Koszyk</h3>
			 	</div>
				
                <a href="{{route("product.home")}}" class="btn btn-outline-info btn-sm pull-right">Kontynuuj zakupy</a>
                <div class="clearfix"></div>
            <fieldset>
            <div class="card-body">

                <div class="row">
                    <div class="col-xs-2 col-md-2">
                        <!--<img class="img-responsive" src="photos/amortyzator-tyl-prawy.jpg" alt="prewiew">-->
                    </div>
                    <div class="col-xs-4 col-md-6">
                        <h4 class="nazwa-produktu"><strong>Nazwa produktu</strong></h4><h4><small>Opis produktu</small></h4>
                    </div>
                    <div class="col-xs-6 col-md-4 row">
                        <div class="col-xs-6 col-md-6 text-right" style="padding-top: 5px">
                            <h6><strong>5900.00 <span class="text-muted">x</span></strong></h6>
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <input type="text" class="form-control input-sm" value="1">
                        </div>
                        <div class="col-xs-2 col-md-2">
                            <button type="button" class="btn btn-outline-danger btn-xs"
							id="button">
                              <img class="usun" src="photos/usuwanie.png">  
                            </button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-2 col-md-2">
                        <!--<img class="img-responsive" src="photos/skrzynia-biegow.jpg" alt="preview">-->
                    </div>
                    <div class="col-xs-4 col-md-6">
                        <h4 class="nazwa-produktu"><strong>Nazwa produktu</strong></h4><h4><small>Opis produktu</small></h4>
                    </div>
                    <div class="col-xs-6 col-md-4 row">
                        <div class="col-xs-6 col-md-6 text-right" style="padding-top: 5px">
                            <h6><strong>2790.00 <span class="text-muted">x</span></strong></h6>
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <input type="text" class="form-control input-sm" value="1">
                        </div>
                        <div class="col-xs-2 col-md-2">
                            <button type="button" class="btn btn-outline-danger btn-xs" id="button">
                                <img class="usun" src="photos/usuwanie.png">
                            </button>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="pull-right">
                    <a href="{{route("product.home")}}" class="btn btn-outline-secondary pull-right">Aktualizuj koszyk</a>
                </div>
            
            <div class="card-footer" style="padding-bottom:50px;">
                <a href="{{route("product.home")}}" class="btn btn-success pull-right">Płać</a>
                <div class="pull-right" style="margin: 7.5px">
                    Cena całkowita: <b>8690.00zł</b>
					</fieldset>
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