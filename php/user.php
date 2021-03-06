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

    $git_behance = $rqt[0]['Link_Github'];
    $linkedin = $rqt[0]['Link_Linkedin'];
    $profilimage = $rqt[0]['ProfilPick'];
    $background = $rqt[0]['Background'];


    $image_projet_1 = $rqt[0]['Photo_Projet_1'];
    $image_projet_2 = $rqt[0]['Photo_Projet_2'];
    $image_projet_3 = $rqt[0]['Photo_Projet_3'];

    $imagefull_projet_1 = $rqt[0]['Photo_Projet_1_Full'];
    $imagefull_projet_2 = $rqt[0]['Photo_Projet_2_Full'];
    $imagefull_projet_3 = $rqt[0]['Photo_Projet_3_Full'];


    $projet_1_title = $rqt[0]['Projet_1_Titre'];
    $projet_2_title = $rqt[0]['Projet_2_Titre'];
    $projet_3_title = $rqt[0]['Projet_3_Titre'];
    

    $projet_1 = $rqt[0]['Projet_1_Description'];
    $projet_2 = $rqt[0]['Projet_2_Description'];
    $projet_3 = $rqt[0]['Projet_3_Description'];


    $link_projet_1 = $rqt[0]['Link_Projet_1'];
    $link_projet_2 = $rqt[0]['Link_Projet_2'];
    $link_projet_3 = $rqt[0]['Link_Projet_3'];



    $video = $rqt[0]['Video'];

    if( $background == null ) {
    ?>
<style>
    main{
        background-image: url('https://images.unsplash.com/photo-1612864800594-22b1b1c44de8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1312&q=80');
        background-size: cover;
        z-index : 1000000;
        color : black;
        font-size : 16px;
    }

</style>
    <?php
    } else {
?>
<style>
    main{
        background-image: url('img/profil/background/<?=$background?>');
        background-size: cover;
        z-index : 1000000;
        color : black;
        -webkit-text-stroke-width: 0.2px;
        -webkit-text-stroke-color: black;
        font-size : 16px;
    }

</style>
<?php
    }
?>
<div class="container">
    <section class="blue-green top">
        <div class="container-sm">
            <div class="row">
                <a class="pp_user" href=img/profil/<?=$profilimage?> data-bs-toggle="modal" data-bs-target="#Modal_pp"><img class="pp" src="img/profil/<?=$profilimage?>" alt="pp_user" style="width:150px;height:150px;margin-right:24px;border-radius:90%"></a>
                <div class="col-8">
                    <h5><?=$name?></h5>
                    <h5><?=$firstname?></h5>
                    <p><?=$description?></p>
                    <p><?=$tag?></p>
                </div>
                <div class="col-2">
                <?php
                    if($categories == 'Tech'){
                        echo "<a href=' https://github.com/$git_behance' target='_blank' class='btn btn-light btn-lg github' type='button'><i class='fab fa-github'></i> GitHub</a>";
                        echo "<a href='https://www.linkedin.com/in/$linkedin' target='_blank' class='btn btn-primary btn-lg' type='button'><i class='fab fa-linkedin'></i> Linkedin</a>";
                    }else{
                        echo "<a href='https://www.behance.net/$git_behance' target='_blank' class='btn btn-primary btn-lg' type='button' style='margin-bottom:10px;'><i class='fab fa-behance'></i> Behance</a>";
                        echo "<a href='https://www.linkedin.com/in/$linkedin' target='_blank' class='btn btn-primary btn-lg' type='button'><i class='fab fa-linkedin'></i> Linkedin</a>";
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
        </div>
    </section>
    <section class="gray top user">
        <div class="container-sm video">
            <?php
                if($video == null){
                    ?>
                    <style>
                        .container-sm.video{
                            padding-top: 0;
                            padding-bottom : 10px;
                        }
                        </style>
                    <?php
                }else{
                    ?>
                    <iframe width="1038" height="584" src="https://www.youtube.com/embed/<?=$video?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <?php
                }
            ?>
        </div>
    <div class="text-center">
        <h3 style="color:white;">Mes Projets</h3>
        <div class="card border-dark">
            <div class="row g-0">
                <div class="col-md-6">
                    <?php if($id == '1' || $id == '15' || $id == '6' || $id == '17' || $id == '22' || $id == '26'){
                        echo "<iframe width='635' height='300' src='https://www.youtube.com/embed/$image_projet_1' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                    }else if($id == '16' || $id == '24' || $id == '15' || $id == '23' || $id == '7' || $id == '5' || $id == '3' || $id == '2' || $id == '14' || $id == '13' || $id == '25'){
                        echo "<a href='#' data-bs-toggle='modal' data-bs-target='#Projet_1'><img class='img_projet' src='img/profil/projets/$image_projet_1' alt='...' style='width:635px;height:300px'></a>";
                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h4 class="card-text"><?=$projet_1_title?></h4>
                        <p class="card-text"><?=$projet_1?> <?=$link_projet_1?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-dark">
            <div class="row g-0">
                <div class="col-md-6">
                    <?php if($id == '1' || $id == '6' || $id == '17' || $id == '2' || $id == '25' || $id == '26'){
                        echo "<iframe width='635' height='300' src='https://www.youtube.com/embed/$image_projet_2' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                    }else if($id == '16' || $id == '24' || $id == '15' || $id == '23' || $id == '7' || $id == '5' || $id == '3' || $id == '14' || $id == '13' || $id == '22' ){
                        echo "<a href='#' data-bs-toggle='modal' data-bs-target='#Projet_2'><img class='img_projet' src='img/profil/projets/$image_projet_2' alt='...' style='width:635px;height:300px'></a>";
                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h4 class="card-text"><?=$projet_2_title?></h4>
                        <p class="card-text"><?=$projet_2?> <?=$link_projet_2?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-dark">
            <div class="row g-0">
                <div class="col-md-6">
                    <?php if($id == '1' || $id == '6' || $id == '17' || $id == '2' || $id == '3' || $id == '15' || $id == '22' || $id == '25' || $id == '26'){
                        echo "<iframe width='635' height='300' src='https://www.youtube.com/embed/$image_projet_3' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                    }else if($id == '16' || $id == '24' ||  $id == '23' || $id == '7' || $id == '5' || $id == '14' || $id == '13'){
                        echo "<a href='#' data-bs-toggle='modal' data-bs-target='#Projet_3'><img class='img_projet' src='img/profil/projets/$image_projet_3' alt='...' style='width:635px;height:300px'></a>";
                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h4 class="card-text"><?=$projet_3_title?></h4>
                        <p class="card-text"><?=$projet_3?> <?=$link_projet_3?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Modal Pp -->
<div class="modal fade" id="Modal_pp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl text-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="img/profil/<?=$profilimage?>" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Modal Projet 1 -->
<div class="modal fade" id="Projet_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl text-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="img/profil/projets/FullSize/<?=$imagefull_projet_1?>" alt="" style="width:100%">
            </div>
        </div>
    </div>
</div>
<!-- Modal Projet 2 -->
<div class="modal fade" id="Projet_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl text-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="img/profil/projets/FullSize/<?=$imagefull_projet_2?>" alt="" style="width:100%">
            </div>
        </div>
    </div>
</div>
<!-- Modal Projet 3 -->
<div class="modal fade" id="Projet_3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl text-center">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="img/profil/projets/FullSize/<?=$imagefull_projet_3?>" alt="" style="width:100%">
            </div>
        </div>
    </div>
</div>
<?php
}
?>
</main>
