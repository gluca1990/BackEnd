<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- ESERCIZIO 1 -->
    <?php 
    $todayDate = date('l, d F Y H:i');
    echo "<h2 class='text-center mt-5'> Today is ". $todayDate . "</h2>";

    ?>




    <!-- ESERCIZIO 2 -->
    <?php
    $squadreSerieA = [];
    $squadreSerieA["Bologna"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Fiorentina"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Inter"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Juventus"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Lazio"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Milan"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Napoli"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Roma"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Salernitana"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Udinese"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Atalanta"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Cagliari"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Empoli"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Frosinone"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Hellas Verona"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Genoa"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Sassuolo"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Torino"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Monza"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    $squadreSerieA["Lecce"] = ["Maignan M.","Calabria D.","Kjær S.","Gabbia M.","Hernández T.","Adli Y.","Reijnders T.","Pulisic C.","Loftus-Cheek R.","Leão R.","Giroud O."];
    
    /* print_r($squadreSerieA); */

    echo "<ul>";
    foreach ($squadreSerieA as $squadra => $formazione) {
        echo "<li class='my-3'><ol>La formazione di " . $squadra . " è la seguente: ";
        foreach ($formazione as $key => $giocatore){
            echo "<li class='my-1'>" . $giocatore . "</li>";} echo "</ol></li>";
    }
    echo "</ul>";
    ?>

    <!-- ESERCIZIO 3 -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>