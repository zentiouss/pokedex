<?php
include "db.php";
include "function.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokedex - by Zen</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md" style="background-color: green">
                Dit is mijn eerste kolom
            </div>
            <div class="col-md" style="background-color: red">
                Dit is mijn tweede kolom
            </div>
            <div class="col-md" style="background-color: blue">
                Dit is mijn derde kolom
            </div>
            <div class="col-md" style="background-color: yellow; color: black">
                <button type="button" class="btn btn-primary">
                    Notifications <span class="badge text-bg-secondary">4</span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                Nog maar een rij, met een enkele kolom
                <a href="https://google.com" type="button" class="btn btn-info">Info</a>
                <button type="button" class="btn btn-outline-warning">Warning</button>
            </div>
        </div>
        <div class="row">
            <div class="col-2" style="background-color: purple;">
                <p class="text-center">hi</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <img src="img/chespin.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Chespin</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
