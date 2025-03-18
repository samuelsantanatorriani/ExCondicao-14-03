<?php
    
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $v3 = $_POST['v3'];
    $v4 = $_POST['v4'];
    
    $total = ($v1 + $v2 + $v3 + $v4) / 4;

    if ($total >= 5) 
    {
        echo "Aprovado";
    }
    else
    {
        echo "Reprovado";
    }

    
?>
