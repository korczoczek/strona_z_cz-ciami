<!DOCTYPE html>
<html lang="pl">
<head>
<?php
    include('php/database-connect.php');
    include('php/header.php');
    include('php/sesja.php');
?>
<meta charset="utf-8">
<title>Koszyk</title>
</head>
<body>
<div class="container">
    <div class="card">
            <div class="card-header bg-dark text-light">
                
				<div class="panel panel-default">
                <div class="panel-heading">
			    	<h3 class="panel-title">Koszyk</h3>
			 	</div>
				
                <a href="index.php" class="btn btn-outline-info btn-sm pull-right">Kontynuuj zakupy</a>
                <div class="clearfix"></div>
            <fieldset>
            <div class="card-body">
<?php
    $sql="SELECT id from zamowienia
    where id_klient=".$user_id." and koszyk=1;";
    $result = $mysqli->query($sql);
    $dane=$result->fetch_assoc();
    $zamowienie=$dane['id'];
    $sql="SELECT * FROM koszykifull
    WHERE id=".$zamowienie.";";
    $result = $mysqli->query($sql);
    while($dane=$result->fetch_assoc()){
        echo "<div class=\"row\">
        <div class=\"col-xs-6 col-md-8\">
            <h4 class=\"nazwa-produktu\"><strong>".$dane['nazwa']."</strong></h4><h4><small>".$dane['opis']."</small></h4>
        </div>
        <div class=\"col-xs-6 col-md-4 row\">
            <div class=\"col-xs-6 col-md-6 text-right\" style=\"padding-top: 5px\">
                <h6><strong>".$dane['cena']."<span class=\"text-muted\">x</span></strong></h6>
            </div>
            <div class=\"col-xs-4 col-md-4\">
                <input type=\"text\" class=\"form-control input-sm\" value=\"".$dane['ilosc']."\">
            </div>
            <div class=\"col-xs-2 col-md-2\">
                <button type=\"button\" class=\"btn btn-outline-danger btn-xs\"
                id=\"button\">
                  <img class=\"usun\" src=\"photos/usuwanie.png\">  
                </button>
            </div>
        </div>
    </div>
    <hr>";
    }
?>
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
    include('php/footer.php');
    include('php/database-disconnect.php');
?>
</body>
</html>