<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $valor= $_POST ["valor"];   
    
    $valor_porcent = $valor*(0.85) ; 

    echo "O valor do produto com um desconto de 15% é igual a: " . $valor_porcent;

}



?>
    
