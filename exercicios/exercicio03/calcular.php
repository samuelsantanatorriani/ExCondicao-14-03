<?php
    
    $s = $_POST['v1'];
    $qf = $_POST['v2'];
    
    if ($s <= 800) 
    {
        $s = $s + (($s/100)*30);

        if ($qf > 1) 
        {
            $s = $s + (90 * $qf);
        }
        
        echo "O salario final é: ".$s;
    }
    else
    {
        if ($qf > 1) 
        {
            $s = $s + (90 * $qf);
        }
        
        echo "O salario final é: ".$s;
    }

    
?>
