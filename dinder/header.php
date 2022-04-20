<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" type="image/jpg" href="./img/favicon-16x16.png"/>
    <title>Dinder</title>
  </head>
  <body>
    <session id="header">
        <div class="container-fluid" id="header">
            <div class="row justify-content-evenly">
                <div id="overgang" class="col-3 text-center modal-body"><a href="front-page.php">Dinder</a></div>
                <div id="overgang" class="col-3 text-center modal-body"><a href="swiper.php">Swiper</a></div>
                <div id="overgang" class="col-3 text-center modal-body"><a href="inbox.php">Inbox</a></div>
                <div id="overgang" class="col-3 text-center modal-body"><a href="accountbeheer.php">Aanmelden/Accountbeheer</a></div>
            </div>
        </div>
    </session>
    <?php include "function.php";
    include "pdo.php"; ?>