<!DOCTYPE html>
<html lang="pl">
<head>
<?php
    include('php/database-connect.php');
    include('php/header.php');
?>
<title>Dadawanie Części</title>
<style></style>
</head>
<body>
<div class="container">
    <form action="" method="post" id="addPizza" name="addPizza">
        <div class="row">
            <div class="col">
            <input type="text" class="form-control" placeholder="Nazwa" id="nazwa" name="nazwa">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Cena (zł)" id="cena" name="cena">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Ilość" id="ilosc" name="ilosc">
            </div>
        </div>
        <div class="row">
            
        </div>
    </form>
    </div>
</div>
<?php
    include('php/footer.php');
    include('php/database-disconnect.php');
?>
</body>
</html>