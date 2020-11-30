<?php
    if(isset($_GET['produkt'])){
        $id=$_GET['produkt'];
    }else{
        $id=1;
    }
    $sql="SELECT * from czesci where id=".$id.";";
    $result = $mysqli->query($sql);
    $dane=$result->fetch_assoc();
?>