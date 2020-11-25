<?php
    if(isset($result)){
        $result->free();
    }
    $mysqli->close();
    ?>