<?php
    if(isset($result)){
        if(!(gettype($result)=="boolean")){
            $result->free();
        }
    }
    $mysqli->close();
    ?>