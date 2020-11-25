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
    <form>
        <div class="row">
            <div class="col">
            <input type="text" class="form-control" placeholder="Nazwa">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Cena (zł)">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Ilość">
            </div>
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