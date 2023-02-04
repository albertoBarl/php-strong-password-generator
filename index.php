<?php 
    

    
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
    <form class="form-control" action="./index.php" method="get">
        <label>Lunghezza password:</label>
        <div>
            <input name="generatedPassword" placeholder="Lunghezza password">
            <button type="submit" class="btn btn-danger">GENERATE</button>
        </div>
    </form>
</body>
</html>