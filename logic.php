<?php 
    function genPass($length){
        $alpha="abcdefghijklmnopqrstuvwxyz123456789!?&%$<>^+-*/()[]{}@#_='";
        $password="";

        while(strlen($password) < $length){
            $randomPass=$alpha[rand(0, strlen($alpha)-1)];
            $password .= $randomPass;
        };
        return $password;

    };

    // CONTROLLO DA EFFETTUARE SULLA VALIDITà DELLA PASSWORD
    if(isset($_GET["generatedPassword"]) && $_GET["generatedPassword"] < 8 || $_GET["generatedPassword"] > 32 ){
        $error="Non hai inserito un valore valido, necessari tra gli 8 e i 32 caratteri.";
    } 
    elseif(isset($_GET["generatedPassword"]) && $_GET["generatedPassword"] !== ""){
        $password = genPass($_GET["generatedPassword"]);
    };



?>