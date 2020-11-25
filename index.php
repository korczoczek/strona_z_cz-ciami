<!DOCTYPE html>
<html lang="pl">
<head>
<?php
    include('php/database-connect.php');
    include('php/header.php');
?>
<title>tytuł</title>
<style></style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tbody>
<?php
    $sql = "SELECT zdjecie,nazwa,cena,ilosc,producent FROM magazyn;";
    $result = $mysqli->query($sql);
    while($czesci=$result->fetch_assoc()){
        echo "
        <tr>
        <td>".$czesci['zdjecie']."</td>
        <td>".$czesci['nazwa']."</td>
        <td>".$czesci['cena']." zł</td>
        <td>".$czesci['ilosc']."</td>
        <td>".$czesci['producent']."</td>
        </tr>
        ";
    }
?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
    include('php/footer.php');
    include('php/database-disconnect.php');
?>
</body>
</html>