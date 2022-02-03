<?php if (isset($_SESSION['user']) && $_SESSION['start'] == 'last') {
        $NameNatio = 'User3847563 •</b></span><br> anonyme </p>';
        $MapMdp = 'https://www.google.fr/maps/place/44%C2%B027\'45.9%22N+110%C2%B049\'42.8%22W/@44.4627405,-110.8290927,19z/data=!3m1!4b1!4m5!3m4!1s0x0:0x6b45263bb37bda95!8m2!3d44.4627405!4d-110.8285455';
        $AvatarNatio = 'cicada';
        $CommentNatio = '<p id="marc-social" class="text-comment"> Le parc national de YellowStone, plus de 8 983 km2, cela fait de lui le deuxieme plus grand parc naturel des États unis ! Il est aussi le premier parc national américain (établi en 1872). Il réunit jusqu’à 10 000 sources thermales et plus de 300 geysers, soit la plus grande concentration sur la planète. Passionnant n\'est-ce pas ?  </p>
    <img src="img/missing-man.jpg" alt="" width="100%">
    <a href="'. $MapMdp .'" class="translate-comment" target="_blank">Voir la traduction</a>';
    } else {
        $NameNatio = 'National Geographic •</b></span><br> World explorers </p>';
        $MapMdp = '#';
        $AvatarNatio = 'national';
        $CommentNatio = '<p id="marc-social" class="text-comment"> Hey animals lovers 🕷!! don\'t forget to share and like this post !! thanks for supporting us 💪🏽
        </p>
        <button class="translate-comment">Voir la traduction</button>';
    }

    ?>
<section class="container-posts" id="natiogeo">

    <div class="article-view">
        <div class="article-user">
            <div class="container-avatar-post">
                <div class="avatar-img-post national"></div>
            </div>

            <div class="post-user">
                <p class="text-alternatif"><b><span>National Geographic</span></b></p>
                <p class="text-alternatif">3 320 867 abonnés</p>
                <p class="text-alternatif">3 sem • <img class="earth-post" src="img/Earth.svg" alt=""></p>
            </div>
            <div class="follow-me">
                <img style="margin-right:0.5rem;" src="img/Suivre.svg" alt="">
                <p class="follow-me"> Suivre</p>
            </div>
        </div>

        <div class="article-description">
            <p id="article-social" class="text-comment">
                Un projet réalisé par @Charley. <b>Projet Full Stack from Scratch</b> réalisé dans le cadre d'un projet scolaire 👨🏽‍🎓: Cachier des charges -
                Listing des fonctionnalités - Réalisation des maquettes - Modélisation & création d'une BDD -
                Création d'un espace membre - Mise en place d'une PWA 📱- SWITCH Theme Mode -
                Espace Administrateur et gestion de contenus (CRUD) -
                Gestion des droits, permissions et sécurisation de l'espace administrateur.
            </p>
        </div>

        <div class="article-video">
            <video autoplay="true" loop="true" style="width:100%;">
                <source src="video/socialArt.mp4" type="video/mp4">
            </video>
        </div>
        <div class="article-like">
            <img src="https://static-exp1.licdn.com/sc/h/8ekq8gho1ruaf8i7f86vd1ftt" alt="LIKE">
            <img src="https://static-exp1.licdn.com/sc/h/cpho5fghnpme8epox8rdcds22" alt="EMPATHY">
            <img src="https://static-exp1.licdn.com/sc/h/lhxmwiwoag9qepsh4nc28zus" alt="INTEREST">
            <p style="margin-left:.5rem;">1334 • <button onclick="SeeMoreComment('container-commentaires-socialart','container-addComment-socialart')">2 commentaires</button></p>
        </div>

        <div class="article-edit">

            <div class="bloc-tooltip-nav" id="tooltip-like-social">

                <div class="tooltip-bloc-svg">
                    <img src="img/Like.svg" alt="">
                </div>

                <div class="tooltiptext-like" id="tooltiptext-like-social">

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

        <div id="container-addComment-socialart" class="container-addComment">
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

        <div id="container-commentaires-socialart" class="container-commentaires">
            <div class="avatar-bloc-comment">
                <div class="avatar-img-<?= $AvatarNatio ?>"></div>
            </div>
            <div class=" container-bloc-comments">
                <div class="comment-bloc-user">

                    <div class="user-comment">
                        <p class="text-alternatif"><span><b><?= $NameNatio ?></b>
                                    <p> 1sem <img src="img/SeeMore.svg" alt=""> </p>
                    </div>
                    <?= $CommentNatio ?>


                </div>

                <div class="meta-comment">
                    <p>J'aime • <img src="https://static-exp1.licdn.com/sc/h/8ekq8gho1ruaf8i7f86vd1ftt" class="img-datacomment" alt="LIKE"> 245 <span class="reply-comment">
                            <!--<img style="margin-left:.3rem;" width="15px" src="img/comment.svg" alt="">-->Répondre
                        </span></p>

                </div>

                <!---------------------------BLOC FEEDBACK COMMENTAIRE CACHÉ ------------------>

                <div class="container-feedback-commentaires">
                    <div class="avatar-bloc-comment">
                        <div class="avatar-img-charley"></div>
                    </div>

                    <div class="container-bloc-comments">
                        <div class="comment-bloc-user">
                            <div class="user-comment">
                                <p class="text-alternatif"><span><b>Charley Geoffroy</b></span> • 2e<br> Crative Full-Stack Developper </p>
                                <p> 3j <img src="img/SeeMore.svg" alt=""> </p>
                            </div>

                            <p id="marc-feedback-social" class="text-comment">Whaou ! magnifique photo même si l'homme sur la photo est tout de même etrange non 🕵🏼‍♀️? <br><br>                         
                            #3301 #ARG #GAME #CV </p>
 
                            <button class="translate-comment">Voir la traduction</button>

                        </div>

                        <div class="meta-comment">
                            <p>J'aime <img src="https://static-exp1.licdn.com/sc/h/8ekq8gho1ruaf8i7f86vd1ftt" class="img-datacomment" alt="LIKE"> 15<span class="reply-comment">
                                    <!--<img style="margin-left:.3rem;" width="15px" src="img/comment.svg" alt="">-->Répondre
                                </span></p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>