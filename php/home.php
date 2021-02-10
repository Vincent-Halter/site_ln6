<?php
    $result = db_select("SELECT * FROM user");
?>

<main>
    <div class="container-lg" style="margin-top:100px">
        <div class="text-center">
            <img class="logo_Ln6" src="img/loup_avec_des_contoure.png" alt="logo_ln6" style="width:143px;height:143px;">
            <h4>Accroche ou Slogan de la promotion</h4>

            <iframe width="100%" height="1080" src="https://www.youtube.com/embed/COb6AqmggRU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <h4 id="promotion20-21">Promotion 2020/2021</h4>
            <div class="d-grid gap-2 d-md-block" style="margin-bottom:25px;">
                <button Onclick="btn_crea()" id ="Crea" class="btn btn-primary" type="button">Créa</button>
                <button Onclick="btn_tech()" id="Tech" class="btn btn-primary" type="button">Tech</button>
            </div>
        </div>
        <div class="container">
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
                    <div class="col-md-4">
                        <div class="card" style="margin-bottom:16px;" data-type="<?=$categories?>">
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
        <div class="text-center">
            <h4 id="apropos">A propos</h4>
            <h5>La Ligne Numérique c'est quoi ?</h5>
            <p style="width:621px;margin:auto;">La Ligne Numérique, c’est la formation tremplin des métiers du numérique à Mulhouse. Lorem Elsass ipsum Strasbourg risus, ullamcorper ornare schpeck kougelhopf hoplageiss geïz bissame vulputate tellus in.</p>
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
                                <img src="img/caroussel/Capture.png" class="d-block" style="width:37%;height:37%" alt="photos_carroussel">
                                <img src="img/caroussel/rayanne.png" class="d-block" style="width:20.5%;height:20.5%" alt="photos_carroussel">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="10000">
                            <div class="row">
                            <img src="img/caroussel/rayanne2.jpg" class="d-block" style="width:23%;height:23%" alt="photos_carroussel">
                                <img src="img/caroussel/Capture-2.png" class="d-block" style="width:35%;height:35%" alt="photos_carroussel">
                                <img src="img/caroussel/Capture-3.png" class="d-block" style="width:33%;height:33%" alt="photos_carroussel">
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
            <button class="btn btn-primary" type="button" style="margin-bottom:5em;margin-top:5em">Découvrir la Formation</button>
            <h4>Nos Partenaires</h4>
            <div class="container" style="margin-bottom:5em;">
                <div class="row">
                    <div class="d-grid gap-2 d-md-block">
                        <img class="partenaires" src="img/enov-campus.png" alt="" style="width:10%;margin:15px">
                        <img class="partenaires" src="img/Drapeau_UE.png" alt="" style="width:10%;margin:15px">
                        <img class="partenaires" src="img/Grand_Est_Logo.png" alt="" style="width:10%;margin:15px">
                        <img class="partenaires" src="img/Logo_officiel_de_Mulhouse_Alsace_Agglomération.png" alt="" style="width:10%;margin:15px">
                        <img class="partenaires" src="img/logo-cci-alsace.png" alt="" style="width:10%;margin:15px">
                    </div>
                </div>
            </div>
        </div>
        <script>


            function btn_crea(){
                $('.card[data-type="Tech"]').toggleClass('is-hidden');
                $('.button').toggleClass('active');
            }

            function btn_tech(){
                $('.card[data-type="Créa"]').toggleClass('is-hidden');
                $('.button').toggleClass('active');
            }



        </script>
        
        
</main>