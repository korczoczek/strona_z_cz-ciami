<!DOCTYPE html>
<html lang="pl">
<head>
<?php
    include('php/database-connect.php');
    include('php/header.php');
    include('php/sesja.php');
    include('php/security.php');
?>
<meta charset="utf-8">
<title>Koszyk</title>
</head>
<body>
<div class="container">
    <div class="card">
            <div class="card-header bg-dark">
                
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
    //var_dump($result);
    if($result){
    $dane=$result->fetch_assoc();
    //echo "||";
    //var_dump($dane);
    $zamowienie=$dane['id'];
    $sql="SELECT * FROM koszykifull
    WHERE id=".$zamowienie.";";
    $result = $mysqli->query($sql);
    if($result){
    while($dane=$result->fetch_assoc()){
        echo "<div class=\"row\">
        <div class=\"col-xs-6 col-md-8\">
            <h4 class=\"nazwa-produktu\"><strong>".$dane['nazwa']."</strong></h4><h4><small>".$dane['model'].", ".$dane['producent']."</small></h4>
        </div>
        <div class=\"col-xs-6 col-md-4 row\">
            <div class=\"col-xs-6 col-md-6 text-right\" style=\"padding-top: 5px\">
                <h6><strong>".$dane['cena']." zł<span class=\"text-muted\"> x </span></strong></h6>
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
    }}}
?>
                <div class="pull-right">
                    <a href="{{route("product.home")}}" class="btn btn-outline-secondary pull-right">Aktualizuj koszyk</a>
                </div>
            
            <div class="card-footer" style="padding-bottom:50px;">
                <a href="" class="btn btn-success pull-right">Płać</a>
                <div class="pull-right" style="margin: 7.5px">
                    Cena całkowita: <b>
                    <?php
                        $sql="SELECT suma from koszykisuma
                        where id=".$zamowienie.";";
                        $result = $mysqli->query($sql);
                        if($result){
                            $suma=$result->fetch_assoc();
                            echo $suma['suma']." zł";
                        }
                    ?>
                    </b>
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