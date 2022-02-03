
<section class="container-posts" style="margin-top:0!important;">
    <div class="before-article" style="margin-top:0!important;">
        <p class="text-alternatif"><b><span>Elon MUSK</span></b> aime ceci</p>
    </div>

    <div class="article-view">
        <div class="article-user">

            <div class="container-avatar-post" style="display:flex;">

                <div class="container-avatar-post">
                    <div class="avatar-img-post"></div>
                </div>

                <div class="post-user">
                    <p class="text-alternatif"><b><span>Charley Geoffroy</span></b> • 2e</p>
                    <p class="text-alternatif">Crative Full-Stack Developper</p>
                    <p class="text-alternatif">18h • <img class="earth-post" src="img/Earth.svg" alt=""></p>
                </div>
            </div>


            <div class="follow-me">
                <img style="margin-right:0.5rem;" src="img/Suivre.svg" alt="">
                <p class="follow-me"> Suivre</p>
            </div>
        </div>

        <div class="article-description">
            <p id="article-djak" class="text-comment">
                Voici le site de <a href="https://agence-djak.fr/" target="_blank" class="link-post"> DJAK </a> 🎨 - L'agence de communication dans laquelle j'ai eu la chance de pouvoir me former !
                ce projet a été réaliser en HTML/CSS et Javascript pour la gestion du slider. Le projet est en partie disponible sur mon Github.
            </p>
        </div>

        <div class="article-video">
            <video autoplay="true" loop="true" style="width:100%;">
                <source src="video/djak.mp4" type="video/mp4">
            </video>
        </div>
        <div class="article-like">
            <img src="https://static-exp1.licdn.com/sc/h/8ekq8gho1ruaf8i7f86vd1ftt" alt="LIKE">
            <img src="https://static-exp1.licdn.com/sc/h/cpho5fghnpme8epox8rdcds22" alt="EMPATHY">
            <img src="https://static-exp1.licdn.com/sc/h/lhxmwiwoag9qepsh4nc28zus" alt="INTEREST">
            <p style="margin-left:.5rem;">71 • <button onclick="SeeMoreComment('container-commentaires','container-addComment')">2 commentaires</button></p>
        </div>

        <div class="article-edit">

            <div class="bloc-tooltip-nav" id="tooltip-like">

                <div class="tooltip-bloc-svg">
                    <img src="img/Like.svg" alt="">
                </div>

                <div class="tooltiptext-like" id="tooltiptext-like">

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

        <div id="container-addComment" class="container-addComment">
            <div class="avatar-addComment-bloc">
                <div class="avatar-addComment-charley"></div>
            </div>

            <div class="bloc-form-addComment">
                <form class="form-addComment" action="">
                    <div class="input-bloc-comment">
                        <input id="3301" placeholder="Ajouter un commentaire..." class="add-comment" type="text">
                    </div>
                    <div class="button-bloc-comment">
                        <button class="button-addComment"><img src="img/smile.svg" alt=""><img src="img/file.svg" alt=""></button>
                    </div>

                </form>
            </div>


        </div>
        <!----------------BLOC DE COMMENTAIRE ACACHÉ ------------------>

        <div id="container-commentaires" class="container-commentaires">
            <div class="avatar-bloc-comment">
                <div class="avatar-img-marc"></div>
            </div>
            <div class="container-bloc-comments">
                <div class="comment-bloc-user">

                    <div class="user-comment">
                        <p class="text-alternatif"><span><b>Meta-Marc ZUCKERBERG •</b></span><br> Foundator of Meta </p>
                        <p> 1h <img src="img/SeeMore.svg" alt=""> </p>
                    </div>

                    <p id="marc-djak" class="text-comment">Hey Charley !! Nice website. Seeing your progress through Linkedin post make me happy for you. Keep doing dont give up ! I Hope to see you soon at the Valley.  </p>
                    <button class="translate-comment">Voir la traduction</button>

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
                                <p> 1h <img src="img/SeeMore.svg" alt=""> </p>
                            </div>

                            <p id="marc-feedback-djak" class="text-comment">Salut Meta-MARC 🦠 !! Comment vas tu ? Merci beaucoup pour ton soutient !
                                On se voit bientot dans la matrice !! </p>
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