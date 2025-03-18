<?php
    
// OBS: foram usados os mesmos valores da atividade de PAM

    $p = $_POST['v1'];
    $h = $_POST['v2'];
    
    $IMC = $p / ($h * $h);

    echo "O total do IMC deu: ".$IMC.", segundo a tabela voce é (tem): ";

    if ($IMC <= 16) 
    {        
        echo "Magreza Grave";
    }
    else if ($IMC <= 17)
    {
        echo "Magreza Moderada";
    }
    else if ($IMC <= 18.5)
    {
        echo "Magreza Leve";
    }
    else if ($IMC <= 25)
    {
        echo "Saudavel";
    }
    else if ($IMC <= 30)
    {
        echo "Sobrepeso";
    }
    else if ($IMC <= 35)
    {
        echo "Obesidade Grau I";
    }
    else if ($IMC <= 17)
    {
        echo "Obesidade Grau II";
    }
    else
    {
        echo "Obesidade Grau III";
    }
    
?>
