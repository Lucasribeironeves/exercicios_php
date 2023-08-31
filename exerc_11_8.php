<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 

        $valor= $_POST ["valor"];   
        
        $valor_porcent = $valor*(0.15) ; 

        echo "15% desse valor é igual a: " . $valor_porcent;



    }
    
    

?>