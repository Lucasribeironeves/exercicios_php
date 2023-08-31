<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $n1 = $_POST["n1"];  
        $n2 = $_POST["n2"];  
        $n3 = $_POST["n3"];  

        $media = ($n1 + $n2 + $n3)/3;  

        echo "A média aritmética é igual a: ". $media ;


    }
    
    

?>