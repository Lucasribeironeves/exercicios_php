<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $peso = $_POST["peso"];    
        $altura = $_POST["altura"];  

        $imc = $peso/($altura*$altura);  

        echo "Seu IMC é igual a : " . $imc;



    }
    

?>