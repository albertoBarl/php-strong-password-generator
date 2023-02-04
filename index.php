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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div>
        <?php if(isset($error)){ ?>
            <div class="alert alert-danger">
                <?php echo $error?>
            </div>
        <?php } ?>
        <?php if(isset($password)){ ?>
            <div class="alert alert-success">
                La password generata è: <?php echo $password ?>
            </div>
        <?php } ?>
        <form class="form-control" action="./index.php" method="GET">
            <label>Lunghezza password:</label>
            <div>
                <input type="number" name="generatedPassword" placeholder="Lunghezza password">
                <button type="submit" class="btn btn-danger">GENERATE</button>
            </div>
        </form>
    </div>
</body>
</html>