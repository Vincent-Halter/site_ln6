<script>
    function btn_crea(){
        $('.col-md-4[data-type="Tech"]').toggleClass('is-hidden'); 
        $('.col-md-4[data-type="Créa"]').removeClass('is-hidden');
    }
    
    function btn_tech(){
        $('.col-md-4[data-type="Créa"]').toggleClass('is-hidden');
        $('.col-md-4[data-type="Tech"]').removeClass('is-hidden'); 
    }

    function btn_all(){
        $('.col-md-4[data-type="Créa"]').removeClass('is-hidden');
        $('.col-md-4[data-type="Tech"]').removeClass('is-hidden');
    }
</script>


<?php
    $result = db_select("SELECT * FROM user");
?>

<main>

    <div class="container-lg" style="margin-top:100px">
        <div class="text-center">
            <img class="logo_Ln6" src="img/loup_avec_des_contoure.png" alt="logo_ln6" style="width:143px;height:143px;">
            <h4>“La force de LN6, on est uni'que.”</h4><br>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="800" height="600" class="embed-responsive-item" src="https://www.youtube.com/embed/COb6AqmggRU" allowfullscreen></iframe>
            </div>
            <div class="container-xl">
                <h4 id="promotion20-21"><br>Promotion n°6 <br> 2020/2021</h4><br>
                <div class="d-grid gap-2 d-md-block" style="margin-bottom:25px;">
                    <button Onclick="btn_all()" id ="All" class="btn btn-primary btn-lg" type="button">Tous</button>
                    <button Onclick="btn_crea()" id ="Crea" class="btn btn-primary btn-lg" type="button">Créa</button>
                    <button Onclick="btn_tech()" id="Tech" class="btn btn-primary btn-lg" type="button">Tech</button>
                </div>
                <br>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <?php
                for($i = 0 ; $i < count($result); $i++){
                    $id = $result[$i]['idUser'];
                    $name = $result[$i]['Name'];
                    $firstname = $result[$i]['FirstName'];
                    $tag = $result[$i]['Tag'];
                    $categories = $result[$i]['Categories'];
                    $profilimage = $result[$i]['ProfilPick'];
                    ?>
                    <div class="col-md-4" data-type="<?=$categories?>">
                        <div class="card" style="margin-bottom:16px;">
                            <div class="card-block">
                                <div class="card-body">
                                    <a href="/?page=profil&id=<?=$id?>">
                                    <span class="link_profil"></span>
                                    </a>
                                    <div class="row">
                                        <img class="pp" src="img/profil/<?=$profilimage?>" alt="pp_user" style="width:150px;height:130px;margin-right:24px;border-radius:90%">
                                        <div class="col-6">
                                            <h5 class="card-title"><?=$name?></h5>
                                            <h5 class="card-text"><?=$firstname?></h5>
                                            <p class="card-text"><?=$tag?></p>
                                        </div>
                                        <div class="position-relative">
                                            <div class="col-3">
                                                <div class="position-absolute bottom-0 end-0">
                                                    <a href="/?page=profil&id=<?=$id?>"><i class="fas fa-arrow-right" style="padding:5px;"></i></a>
                                                </div>
                                                <div class="position-absolute bottom-0 start-0">
                                                    <p class="section"><?=$categories?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="container-xl">
            <h4 id="apropos">À propos</h4>
        </div>
        <div class="text-center">
            <h5>Qu'est-ce que la Ligne numérique ?</h5>
            <p style="width:621px;margin:auto;">La Ligne Numérique, c’est la formation tremplin pour les métiers du numérique à Mulhouse. 
            </p>
        </div>
            <div class="container-fluid text-center">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                        <li data-bs-target="#carouselExampleDark" data-bs-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" style="padding:40px;">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div class="row">
                                <img src="img/caroussel/_MG_5407.jpg" class="d-block" style="width:33%;height:33%" alt="photos_carroussel">
                                <img src="img/caroussel/_MG_5420.jpg" class="d-block" style="width:33%;height:33%" alt="photos_carroussel">
                                <img src="img/caroussel/_MG_5426.jpg" class="d-block" style="width:33%;height:33%" alt="photos_carroussel">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="10000">
                            <div class="row">
                            <img src="img/caroussel/_MG_5430.jpg" class="d-block" style="width:33%;height:33%" alt="photos_carroussel">
                                <img src="img/caroussel/_MG_5435.jpg" class="d-block" style="width:33%;height:33%" alt="photos_carroussel">
                                <img src="img/caroussel/_MG_5449.jpg" class="d-block" style="width:23%;height:23%" alt="photos_carroussel">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="10000">
                            <div class="row">
                                <img src="img/caroussel/_MG_8516.jpg" class="d-block" style="width:23%;height:23%" alt="photos_carroussel">
                                <img src="img/caroussel/Capture.png" class="d-block" style="width:30%;height:40%" alt="photos_carroussel">
                                <img src="img/caroussel/rayanne.png" class="d-block" style="width:20.5%;height:20.5%" alt="photos_carroussel">
                                <img src="img/caroussel/rayanne2.jpg" class="d-block" style="width:23%;height:23%" alt="photos_carroussel">
                            </div>
                        </div>
                    </div>
                        
                    <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>






            <div class="text-center">
            <a href="https://www.enovcampus.eu/ligne-numerique/" class="btn btn-primary" type="button" style="margin-bottom:5em;margin-top:5em">Découvrir la Formation</a>
            <h4>Nos Partenaires</h4>
            <div class="container" style="margin-bottom:5em;">
                <div class="row">
                    <div class="d-grid gap-2 d-md-block">
                        <img class="partenaires" src="img/enov-campus.png" alt="" style="width:10%;margin:15px">
                        <img class="partenaires" src="img/Drapeau_UE.png" alt="" style="width:10%;margin:15px">
                        <img class="partenaires" src="img/Grand_Est_Logo.png" alt="" style="width:10%;margin:15px">
                        <img class="partenaires" src="img/Logo_officiel_de_Mulhouse_Alsace_Agglomeration.png" alt="" style="width:10%;margin:15px">
                        <img class="partenaires" src="img/logo-cci-alsace.png" alt="" style="width:10%;margin:15px">
                    </div>
                </div>
            </div>
        </div>
        
        
</main>
