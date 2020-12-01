<!DOCTYPE html>
<html lang="pl">
<head>
<?php
    include('php/database-connect.php');
    include('php/header.php');
    include('php/sesja.php');
?>
<title>Najlepsze części</title>
<style></style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
        <?php
        include('php/baner.php')
        ?>
            <table class="table">
                <tbody>
<?php
    $sql = "SELECT * FROM czesci ORDER BY id;";
    $result = $mysqli->query($sql);
    while($czesci=$result->fetch_assoc()){
        echo "
        <tr>
        <td>".$czesci['zdjecie']."</td>
        <td>".$czesci['nazwa']."</td>
        <td>".$czesci['cena']." zł</td>
        <td>".$czesci['ilosc']."</td>
        <td>".$czesci['producent']."</td>
        <td>".$czesci['model']."</td>
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
