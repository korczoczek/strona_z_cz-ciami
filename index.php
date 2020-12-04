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
	<?php
	include('php/navbar.php');
	?>
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
    if(isset($user_id)&&$admin==1){
        while($czesci=$result->fetch_assoc()){
            echo "
            <tr>
            <td>".$czesci['zdjecie']."</td>
            <td>".$czesci['nazwa']."</td>
            <td>".$czesci['cena']." zł</td>
            <td>".$czesci['ilosc']."</td>
            <td>".$czesci['producent']."</td>
            <td>".$czesci['model']."</td>
            <td><a href=\"php/dodaj-do-koszyka-exe.php?produkt=".$czesci['id']."\"><button type=\"button\" class=\"btn btn-primary\">Dodaj do Koszyka</button></a></td>
            <td><a href=\"edycja-produktow.php?produkt=".$czesci['id']."\"><button type=\"button\" class=\"btn btn-primary\">Edytuj</button></a></td>
            </tr>
            ";
        }
    }elseif(isset($user_id)&&$admin==0){
        while($czesci=$result->fetch_assoc()){
            echo "
            <tr>
            <td>".$czesci['zdjecie']."</td>
            <td>".$czesci['nazwa']."</td>
            <td>".$czesci['cena']." zł</td>
            <td>".$czesci['ilosc']."</td>
            <td>".$czesci['producent']."</td>
            <td>".$czesci['model']."</td>
            <td><a href=\"php/dodaj-do-koszyka-exe.php?produkt=".$czesci['id']."\"><button type=\"button\" class=\"btn btn-primary\">Dodaj do Koszyka</button></a></td>
            </tr>
            ";
        }
    }else{
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
