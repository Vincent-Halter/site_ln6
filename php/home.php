<?php
    $result = db_select("SELECT * FROM user");
    ?>
<main>
    <section class="gray top">
        <div class="container-lg" style="margin-top:100px">
            <div class="text-center">
                <img class="logo_Ln6" src="img/loup_avec_des_contoure.png" alt="logo_ln6">
                <h4 class="title_Ln6">“La force de LN6, on est uni'que.”</h4><br>
            </div>
            <div class="row">
                <div class="video-1 col-md-6">
                    <iframe width="650" height="350" class="embed-responsive-item" src="https://youtube.com/embed/0cC1GM2tonY" allowfullscreen></iframe>
                </div>
                <div class="video-2 col-md-6">
                    <iframe width="650" height="350" class="embed-responsive-item" src="https://youtube.com/embed/LKkcbaJldME" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <section class="blue-green top">
                <div class="promo container-xl text-center">
                    <h4 id="promotion20-21"><br>Promotion n°6 <br> 2020/2021</h4><br>
                    <div class="d-grid gap-2 d-md-block" style="margin-bottom:25px;">
                        <button Onclick="btn_all()" id ="All" class="btn btn-primary btn-lg active" type="button">Tous</button>
                        <button Onclick="btn_crea()" id ="Crea" class="btn btn-primary btn-lg" type="button">Créa</button>
                        <button Onclick="btn_tech()" id="Tech" class="btn btn-primary btn-lg" type="button">Tech</button>
                    </div>
                    <br>
                </div>
            </div>
            <div class="container-md">
                <div class="row justify-content-md-center">
                    <?php
                    for($i = 0 ; $i < count($result); $i++){
                        $id = $result[$i]['idUser'];
                        $name = $result[$i]['Name'];
                        $firstname = $result[$i]['FirstName'];
                        $tag = $result[$i]['Tag'];
                        $categories = $result[$i]['Categories'];
                        $profilimage = $result[$i]['ProfilPick'];
                        $background = $result[$i]['Background'];
                        ?>
                        <div class="col-md-4 personne" data-type="<?=$categories?>">
                            <div class="card eleve">
                                <div class="card-block">
                                    <div class="card-body">
                                        <a href="/?page=profil&id=<?=$id?>">
                                        <span class="link_profil"></span>
                                    </a>
                                    <div class="row">
                                        <img class="pp" src="img/profil/<?=$profilimage?>" alt="pp_user">
                                        <div class="col-6">
                                            <h5 class="card-title"><?=$name?></h5>
                                            <h5 class="card-text"><?=$firstname?></h5>
                                            <p class="card-text"><?=$tag?></p>
                                        </div>
                                        <div class="position-relative">
                                            <div class="col-3">
                                                <div class="position-absolute bottom-0 end-0">
                                                    <a href="/?page=profil&id=<?=$id?>"><i class="fas fa-arrow-right"></i></a>
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
        </div>
    </section>
    <section class="gray bottom">
        <div class="container-xl propos text-center">
            <h4 id="apropos">À propos</h4>
        </div>
        <div class="text-center propos">
            <h5>Qu'est-ce que la Ligne numérique ?</h5>
            <p>La Ligne Numérique est une école « des talents cachés », proposée par e-nov Campus, à Mulhouse. Elle est entièrement gratuite et s’adresse à des personnes de 18 à 25 ans, autodidactes du numérique, sortis prématurément du système éducatif et disposant d'un réel potentiel dans les technologies du numérique en raison de leur parcours, de leurs expériences ou de leur motivation.
            </p>
        </div>
        <div class="container-fluid text-center">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style="padding:40px;">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="row">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#Modal_Caroussel_1" style="width:33%;height:33%"><img src="img/caroussel/_MG_5407.jpg" class="d-block" style="width:100%" alt="photos_carroussel" ></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#Modal_Caroussel_2" style="width:33%;height:33%"><img src="img/caroussel/_MG_5420.jpg" class="d-block" style="width:100%" alt="photos_carroussel"></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#Modal_Caroussel_3" style="width:33%;height:33%"><img src="img/caroussel/_MG_5426.jpg" class="d-block" style="width:100%" alt="photos_carroussel"></a>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <div class="row">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#Modal_Caroussel_4" style="width:33%;height:33%" ><img src="img/caroussel/_MG_5430.jpg" class="d-block" style="width:100%" alt="photos_carroussel"></a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#Modal_Caroussel_5" style="width:33%;height:33%"><img src="img/caroussel/_MG_5435.jpg" class="d-block" style="width:100%" alt="photos_carroussel"></a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#Modal_Caroussel_6" style="width:23%;height:23%"><img src="img/caroussel/_MG_5449.jpg" class="d-block" style="width:100%" alt="photos_carroussel"></a>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <div class="row">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#Modal_Caroussel_7" style="width:23%;height:23%"><img src="img/caroussel/_MG_8516.jpg" class="d-block" style="width:100%" alt="photos_carroussel"></a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#Modal_Caroussel_8" style="width:30%;height:40%"><img src="img/caroussel/Capture.png" class="d-block" style="width:100%" alt="photos_carroussel"></a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#Modal_Caroussel_9" style="width:20.5%;height:20.5%"><img src="img/caroussel/rayanne.png" class="d-block" style="width:100%" alt="photos_carroussel"></a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#Modal_Caroussel_10" style="width:23%;height:23%"><img src="img/caroussel/rayanne2.jpg" class="d-block" style="width:100%" alt="photos_carroussel"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 1 -->
        <div class="modal fade" id="Modal_Caroussel_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl text-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="img/caroussel/_MG_5407.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2 -->
        <div class="modal fade" id="Modal_Caroussel_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl text-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="img/caroussel/_MG_5420.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3 -->
        <div class="modal fade" id="Modal_Caroussel_3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl text-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="img/caroussel/_MG_5426.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4 -->
        <div class="modal fade" id="Modal_Caroussel_4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl text-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="img/caroussel/_MG_5430.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5 -->
        <div class="modal fade" id="Modal_Caroussel_5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl text-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="img/caroussel/_MG_5435.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6 -->
        <div class="modal fade" id="Modal_Caroussel_6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl text-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="img/caroussel/_MG_5449.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 7 -->
        <div class="modal fade" id="Modal_Caroussel_7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl text-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="img/caroussel/_MG_8516.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 8 -->
        <div class="modal fade" id="Modal_Caroussel_8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl text-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="img/caroussel/Capture.png" alt="" style="width:75%">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 9 -->
        <div class="modal fade" id="Modal_Caroussel_9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl text-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="img/caroussel/rayanne.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 10 -->
        <div class="modal fade" id="Modal_Caroussel_10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl text-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="img/caroussel/rayanne2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blue-green bottom">
        <div class="text-center logo">
            <a href="https://www.enovcampus.eu/ligne-numerique/" target="_blank" class="btn btn-primary" type="button" style="margin-bottom:5em;margin-top:5em">Découvrir la Formation</a>
            <h4 id="parts">Nos Partenaires</h4>
            <div class="container" style="margin-bottom:5em;">
                <div class="row">
                    <div class="d-grid gap-2 d-md-block">
                        <img class="partenaires" src="img/Logo_LN.png" alt="" style="width:7%;background:white;">
                        <img class="partenaires" src="img/Enov_Campus.png" alt="" style="background:white;">
                        <img class="partenaires" src="img/Km0_Campus.png" alt="" style="background:white;">
                        <img class="partenaires" src="img/GrandEst.png" alt="">
                        <img class="partenaires" src="img/Drapeau_UE.png" alt="" style="width:19%">
                        <img class="partenaires" src="img/Europe_sengage_pour_les_jeunes.png" alt="" style="width:10%;background:white;">
                    </div>
                </div>
            </div>
        </div>
    </section>    
</main>