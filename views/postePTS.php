<section class="container-posts">
    <div class="before-article">
        <p class="text-alternatif"><b><span>Philip R. Zimmermann</span></b> aime ceci</p>
    </div>

    <div class="article-view">
        <div class="article-user">
            <div class="container-avatar-post" style="display:flex;">

                <div class="container-avatar-post">
                    <div class="avatar-img-post mickael"></div>
                </div>

                <div class="post-user">
                    <p class="text-alternatif"><b><span> <a href="<?php if (isset($_SESSION['user']) && $_SESSION['start'] == 'last') {
                                                                        echo 'https://www.google.fr/maps/place/44%C2%B027\'45.9%22N+110%C2%B049\'42.8%22W/@44.4627405,-110.8290927,19z/data=!3m1!4b1!4m5!3m4!1s0x0:0x6b45263bb37bda95!8m2!3d44.4627405!4d-110.8285455';
                                                                    } else {
                                                                        echo '#';
                                                                    } ?>" style="color:black;" target="_blank">Mickael Jackson</a></span></b> • 1er</p>
                    <p class="text-alternatif">King of the world</p>
                    <p class="text-alternatif">11ans • <img class="earth-post" src="img/Earth.svg" alt=""></p>
                </div>
            </div>
            <div class="follow-me">
                <img style="margin-right:0.5rem;" src="img/Suivre.svg" alt="">
                <p class="follow-me"> Suivre</p>
            </div>
        </div>

        <div class="article-description">
            <p id="article-pts" class="text-comment">
                God ! je voulais vous partager mon constructeur de piscine 🏊‍♂️! Toutes mes piscines ont été construites
                par PTS ! Tous les modèles sont disponibles sur leur site !
                Allez voir ça vaut le détour !
            </p>
        </div>

        <div class="article-video">
            <video autoplay="true" loop="true" style="width:100%;">
                <source src="video/PTS.mp4" type="video/mp4">
            </video>
        </div>
        <div class="article-like">
            <img src="https://static-exp1.licdn.com/sc/h/8ekq8gho1ruaf8i7f86vd1ftt" alt="LIKE">
            <img src="https://static-exp1.licdn.com/sc/h/cpho5fghnpme8epox8rdcds22" alt="EMPATHY">
            <img src="https://static-exp1.licdn.com/sc/h/lhxmwiwoag9qepsh4nc28zus" alt="INTEREST">
            <p style="margin-left:.5rem;">78 377 • <button onclick="SeeMoreComment('container-commentaires-pts','container-addComment-pts')">1 commentaire</button></p>
        </div>

        <div class="article-edit">

            <div class="bloc-tooltip-nav" id="tooltip-like-pts">

                <div class="tooltip-bloc-svg">
                    <img src="img/Like.svg" alt="">
                </div>

                <div class="tooltiptext-like" id="tooltiptext-like-pts">

                    <div class="bloc-svg-like">
                        <img class="post-like" src="img/Like-Input.svg" alt="">
                    </div>

                    <div class="bloc-svg-like">
                        <img class="post-like" src="img/bravo.svg" alt="">
                    </div>

                    <div class="bloc-svg-like">
                        <img class="post-like" src="img/soutien.svg" alt="">
                    </div>
                    <div class="bloc-svg-like">
                        <img class="post-like" src="img/jadore.svg" alt="">
                    </div>
                    <div class="bloc-svg-like">
                        <img class="post-like" src="img/instructif.svg" alt="">
                    </div>
                    <div class="bloc-svg-like">
                        <img class="post-like" src="img/interessant.svg" alt="">
                    </div>

                </div>
            </div>

            <div class="bloc-tooltip-nav">
                <div class="tooltip-bloc-svg">
                    <img src="img/Comment.svg" alt="">
                </div>

                <div class="tooltiptext">

                </div>
            </div>
            <div class="bloc-tooltip-nav">
                <div class="tooltip-bloc-svg">
                    <img src="img/Share.svg" alt="">
                </div>
                <div class="tooltip-comment-content">

                </div>
            </div>

            <div class="bloc-tooltip-nav">
                <div class="tooltip-bloc-svg">
                    <img src="img/Envoyer.svg" alt="">
                </div>
                <div class="tooltip-comment-content">

                </div>
            </div>
        </div>

        <!--------------------------- AJOUTER UN COMMENTAIRE ------------------>

        <div id="container-addComment-pts" class="container-addComment">
            <div class="avatar-addComment-bloc">
                <div class="avatar-addComment-charley"></div>
            </div>

            <div class="bloc-form-addComment">
                <form class="form-addComment" action="">
                    <div class="input-bloc-comment">
                        <input placeholder="Ajouter un commentaire..." class="add-comment" type="text">
                    </div>
                    <div class="button-bloc-comment">
                        <button class="button-addComment"><img src="img/smile.svg" alt=""><img src="img/file.svg" alt=""></button>
                    </div>

                </form>
            </div>


        </div>
        <!----------------BLOC DE COMMENTAIRE ACACHÉ ------------------>

        <div id="container-commentaires-pts" class="container-commentaires" >
            <div class="avatar-bloc-comment">
                <div class="avatar-img-mickael"></div>
            </div>
            <div class="container-bloc-comments" style="width:93%;">
                <div class="comment-bloc-user">

                    <div class="user-comment">
                        <p class="text-alternatif"><span><b>Mickael Jackson •</b></span><br> King of the world </p>
                        <p> 1h <img src="img/SeeMore.svg" alt=""> </p>
                    </div>

                    <p id="marc-social" class="text-comment"> La belle époque... 🐠
                        <img src="img/mickael-pisc.jpeg" alt="" width="100%">
                    </p>
                    <button class="translate-comment">Voir la traduction</button>

                </div>

                <div class="meta-comment">
                    <p>J'aime • <img src="https://static-exp1.licdn.com/sc/h/8ekq8gho1ruaf8i7f86vd1ftt" class="img-datacomment" alt="LIKE"> 999 <span class="reply-comment">
                            <!--<img style="margin-left:.3rem;" width="15px" src="img/comment.svg" alt="">-->Répondre
                        </span></p>

                </div>

                <!---------------------------BLOC FEEDBACK COMMENTAIRE CACHÉ ------------------>




            </div>

        </div>

    </div>
</section>