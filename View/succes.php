<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title> MVC - Succes</title>
</head>
<body>
    <?php 
    
    session_start();

    echo $_SESSION['bericht'];

    ?>
    <div class="succes-modal">
        <h1>Bedankt voor het gebruik maken van onze MCV</h1>
        <h2>Succes!</h2>
        <a class='btn' href="./index.php">Terug</a>
    </div>
