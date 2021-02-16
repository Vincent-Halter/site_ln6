<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Ligne Numérique 6</title>
</head>
<body>
<header class="copyright py-4 text-center text-white gray">
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id=mainNav>
    <div class="container">
        <?php 
            if($_GET['page'] == 'profil'){
        ?>
        <a class="navbar-brand js-scroll-trigger" href="/?page=home"><i class="fas fa-arrow-left"></i> Retour</a>
        <?php
            }else{
        ?>
        <a class="navbar-brand js-scroll-trigger" href="/?page=home">Ligne Numérique 6 - Pachka</a>
        <div class="d-flex">
            <a class="navbar-brand scroll" href="#promotion20-21">Promotion 2020/2021</a>
            <a class="navbar-brand scroll" href="#apropos">À Propos</a>
        </div>
        <?php
            }
        ?>
    </div>
</nav>
</header>