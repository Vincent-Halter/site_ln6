<main>
<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $rqt = db_select("SELECT * FROM user WHERE idUser='$id'");
    $name = $rqt[0]['Name'];
    $firstname = $rqt[0]['FirstName'];
    $description = $rqt[0]['Description'];
    $tag = $rqt[0]['Tag'];
    $categories = $rqt[0]['Categories'];
    $email = $rqt[0]['Email'];
    $facebook = $rqt[0]['Link_Github'];
    $instagram = $rqt[0]['Link_Linkedin'];
    $profilimage = $rqt[0]['ProfilPick'];

    $image_projet_1 = $rqt[0]['Photo_Projet_1'];
    $projet_1_title = $rqt[0]['Projet_1_Titre'];
    $projet_1 = $rqt[0]['Projet_1_Description'];

    $image_projet_2 = $rqt[0]['Photo_Projet_2'];
    $projet_2_title = $rqt[0]['Projet_2_Titre'];
    $projet_2 = $rqt[0]['Projet_2_Description'];

    $image_projet_3 = $rqt[0]['Photo_Projet_3'];
    $projet_3_title = $rqt[0]['Projet_3_Titre'];
    $projet_3 = $rqt[0]['Projet_3_Description'];

    $video = $rqt[0]['Video'];

    if( !isset($rqt[0]['Background']) ) {
        $background = 'https://images.unsplash.com/photo-1612864800594-22b1b1c44de8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1312&q=80';
    } else {
        $background = $rqt[0]['Background'];
    }
?>
<style>
    body {
        background: url('<?= $background?>');
        background-position: top center;
        background-size: cover;
    }

</style>
<div class="container">
    <div class="container-sm">
        <div class="row">
            <img class="pp" src="img/profil/<?=$profilimage?>" alt="pp_user" style="width:150px;height:130px;margin-right:24px;border-radius:90%">
            <div class="col-6">
                <h5><?=$name?></h5>
                <h5><?=$firstname?></h5>
                <p><?=$description?></p>
                <p><?=$tag?></p>
            </div>
            <div class="col-1">
            <?php
                if($categories == 'Tech'){
                    echo "<a href='https://www.facebook.com/$facebook' class='btn btn-light btn-lg' type='button'>GitHub (Facebook) </a>";
                    echo "<a href='https://www.instagram.com/$instagram' class='btn btn-light btn-lg' type='button'>Linkedin (Instagram) </a>";
                }else{
                    echo "<a href='https://www.facebook.com/$facebook' class='btn btn-light btn-lg' type='button'>Behance (Facebook) </a>";
                    echo "<a href='https://www.instagram.com/$instagram' class='btn btn-light btn-lg' type='button'>Linkedin (Instagram) </a>";
                }
                ?>
            </div>
            <div class="position-relative">
                <div class="col-3">
                    <div class="position-absolute bottom-0 start-0">
                        <p class="section"><?=$categories?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php
        if($video == null){
            echo "<img src='img/no-photo-available.png' alt='nophoto'>";
        }else{
            ?>
            <iframe width="1038" height="584" src="https://www.youtube.com/embed/<?=$video?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <?php
        }
        ?>
    </div>
    </div>
<div class="container text-center">
    <h3>
        Mes Projets
    </h3>
    <div class="card border-dark">
        <div class="row g-0">
            <div class="col-md-6">
            <iframe width="635" height="300" src="https://www.youtube.com/embed/<?=$video?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h4 class="card-text"><?=$projet_1_title?></h4>
                    <p class="card-text"><?=$projet_1?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-dark">
        <div class="row g-0">
            <div class="col-md-6">
            <iframe width="635" height="300" src="https://www.youtube.com/embed/<?=$video?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                <h4 class="card-text"><?=$projet_2_title?></h4>
                    <p class="card-text"><?=$projet_2?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-dark">
        <div class="row g-0">
            <div class="col-md-6">
            <iframe width="635" height="300" src="https://www.youtube.com/embed/<?=$video?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                <h4 class="card-text"><?=$projet_3_title?></h4>
                    <p class="card-text"><?=$projet_3?></p>
                </div>
            </div>
        </div>
    </div>
<?php
    }
    ?>



</main>
