<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $salario= $_POST ["salario"];  

    $salarios_minimos = $salario/(1320); 

    echo "Você recebe ". $salarios_minimos . "salários minimos";

}
    
    

?>