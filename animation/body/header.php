<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/loader.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" type="image/jpg" href="img/cica.svg" />
    <script type="text/javascript" src="animation/feed.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

    <title>Document</title>
</head>
<?php if (isset($_GET['reg_err'])) {

    $err = htmlspecialchars($_GET['reg_err']);
    $tab_err = [];
    switch ($err) {
        case 'wrong_pin':
            $tab_err = '<p style="color:red;font-size:12px;text-align:center;">Pin incorrect maximum 6 chiffres !</p>';
            break;

        case 'wrong_pseudo':
            $tab_err = '<p style="color:red;font-size:12px;text-align:center;" >Pseudo invalide !</p>';
            break;

        case 'id_taken':
            $tab_err = '<p style="color:red;font-size:12px;text-align:center;">Pseudo déjà pris !</p>';
            break;
    }
}

?>
<?php
if (isset($_GET['die'])) {
    session_destroy();
}

if (isset($_SESSION['user']) && $_SESSION['start'] == 'first') {
    $notification = '<div class="container-popup-menu" id="PopupMenu"><p><img src="img/Comment.svg" width="15px" style="margin-right:8px;" alt="">Le message de @Yurick a été supprimé en raison de son contenu : n\'hesitez pas à <a href="openssl" target="_blank" style="color:#0a66c2;">le consulter à nouveaux</a> à l\'aide de notre clé publique..</p> </div>';
    $lockColor = 'red';
    $user = 'Charley';
    $lock = '';
    $popup = '<div class="pop-game" >
    
    <div  id="bloc-close" class="bloc-close">
        
    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 8 8"  id="close-game" class="close-game-pop">
        <path id="Ligne_2" data-name="Ligne 2" d="M0,7.5a.5.5,0,0,1-.354-.146.5.5,0,0,1,0-.707l7-7a.5.5,0,0,1,.707,0,.5.5,0,0,1,0,.707l-7,7A.5.5,0,0,1,0,7.5Z" transform="translate(0.5 0.5)" fill="white"/>
        <path id="Ligne_3" data-name="Ligne 3" d="M0,7.5a.5.5,0,0,1-.354-.146.5.5,0,0,1,0-.707l7-7a.5.5,0,0,1,.707,0,.5.5,0,0,1,0,.707l-7,7A.5.5,0,0,1,0,7.5Z" transform="translate(7.5 0.5) rotate(90)" fill="white"/>
    </svg>

    </div>

    Malheuresement vous n\'avez plus l\'autorisation d\'accéder à <a href="login" target="_blank" style="color:#34516e;" >cette page</a></div>';
} else if (isset($_SESSION['user']) && $_SESSION['start'] == 'last') {
    $lockColor = '#4caf50;';
    $notification = '<div class="container-popup-menu" id="PopupMenu">
    <p><img src="img/info-circle.svg" height="13px" style="margin-right:8px;" alt="">Les animaux ont un mérite : ils ne déçoivent jamais. Jean Rochefort</p></div>';

    $user = 'Charley';
    $lock = 'img/lock-fill.svg';
    $popup = '<div class="popup-game" id="username:@helloKitten">
    
    <div  id="bloc-close" class="bloc-close">
            
        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 8 8"  id="close-game" class="close-game-pop">
            <path id="Ligne_2" data-name="Ligne 2" d="M0,7.5a.5.5,0,0,1-.354-.146.5.5,0,0,1,0-.707l7-7a.5.5,0,0,1,.707,0,.5.5,0,0,1,0,.707l-7,7A.5.5,0,0,1,0,7.5Z" transform="translate(0.5 0.5)" fill="white"/>
            <path id="Ligne_3" data-name="Ligne 3" d="M0,7.5a.5.5,0,0,1-.354-.146.5.5,0,0,1,0-.707l7-7a.5.5,0,0,1,.707,0,.5.5,0,0,1,0,.707l-7,7A.5.5,0,0,1,0,7.5Z" transform="translate(7.5 0.5) rotate(90)" fill="white"/>
        </svg>

    </div>
   <p> J\'ai un idée, on pourrait aller <a href="https://www.google.fr/maps/@13.4455807,103.862787,3a,75y,56.22h,61.87t/data=!3m7!1e1!3m5!1s3JUKmu1LbGRwxNh_c2575Q!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3D3JUKmu1LbGRwxNh_c2575Q%26cb_client%3Dmaps_sv.tactile.gps%26w%3D203%26h%3D100%26yaw%3D160.69733%26pitch%3D0%26thumbfov%3D100!7i13312!8i6656" target="_blank" style="color:#34516e;" >visiter ce temple 🕌 🛕</a> Certains racontent que des trésors sont encore cachés 🏴‍☠️   </p></div>';
} else {
    if (isset($_SESSION['winner']) && $_SESSION['winner'] == 'true' &&  $_SESSION['start'] == 'done') {
        $user = $_SESSION['user'];
        $lockColor = '#ffbf3e';
        $notification = '<div class="container-popup-menu" id="PopupMenu">
    <p><img src="img/info-circle.svg" height="13px" style="margin-right:8px;" alt="">Notre client vous remercie de votre aide et vous recontacte trés bientôt.</p></div>';

        $popup =
            '
            <div class="popup-game">
                <div  id="bloc-close" class="bloc-close">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 8 8"  id="close-game" class="close-game-pop">
                        <path id="Ligne_2" data-name="Ligne 2" d="M0,7.5a.5.5,0,0,1-.354-.146.5.5,0,0,1,0-.707l7-7a.5.5,0,0,1,.707,0,.5.5,0,0,1,0,.707l-7,7A.5.5,0,0,1,0,7.5Z" transform="translate(0.5 0.5)" fill="white"/>
                        <path id="Ligne_3" data-name="Ligne 3" d="M0,7.5a.5.5,0,0,1-.354-.146.5.5,0,0,1,0-.707l7-7a.5.5,0,0,1,.707,0,.5.5,0,0,1,0,.707l-7,7A.5.5,0,0,1,0,7.5Z" transform="translate(7.5 0.5) rotate(90)" fill="white"/>
                    </svg>
            
                </div>
                <p>Félicitation <b style="color:#ffc929;">' . $_SESSION['user'] . '</b> 🎉 <br> <br>Merci d\'avoir participé et à trés bientôt ! 
                Si tu souhaites me rejoindre pour développer d\'autre projet open-source de ce style n\'hésites pas à <a href="https://www.linkedin.com/in/charley-geoffroy-alternance-dev/" target="_blank" style="color:#34516e;"> me contacter !</a> 
                </p>
        </div>';
    } else {
        $notification = ' ';
        $user = "Charley";
        $lockColor = 'red';
        $popup =
            '<div>
        <form action="controler/register.php" method="post" style="padding:2rem";>
        <div  id="bloc-close" class="bloc-close">
        
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 8 8"  id="close-game" class="close-game">
                <path id="Ligne_2" data-name="Ligne 2" d="M0,7.5a.5.5,0,0,1-.354-.146.5.5,0,0,1,0-.707l7-7a.5.5,0,0,1,.707,0,.5.5,0,0,1,0,.707l-7,7A.5.5,0,0,1,0,7.5Z" transform="translate(0.5 0.5)" fill="white"/>
                <path id="Ligne_3" data-name="Ligne 3" d="M0,7.5a.5.5,0,0,1-.354-.146.5.5,0,0,1,0-.707l7-7a.5.5,0,0,1,.707,0,.5.5,0,0,1,0,.707l-7,7A.5.5,0,0,1,0,7.5Z" transform="translate(7.5 0.5) rotate(90)" fill="white"/>
            </svg>

        </div>
        <h2 class="new-account" > Créez votre compte </h2>
            <label class="input-register"><img style="margin-right:.25rem;" src="img/controller.svg" width="10px" alt="">Pseudo (max 16 cara)</label><input style="color:white;background:#666666;border:0px;width:100%;" type="text" name="Pseudo" required>
            <label class="input-register"><img style="margin-right:.25rem;" src="img/lock.svg" fill="black" width="10px" alt="">Pin (max 6 chiffres)</label><input style="color:white;background:#666666;border:0px;width:100%;" type="password" name="Pin" minlength="4" maxlength="6" required>
            <button style="border-radius:4px;padding:.25rem;margin:1rem 0;width:102%;background:#00000054;color:white;text-align:center;font-family:\'DIN\';" type="submit">JOUER</button>
        </form>
    </div>';
    }
}
?>

        <body>
            <?php include 'views/loader.php'; ?>
            <script>
                const loader = document.querySelector('.loader')

                setTimeout(function() {
                    loader.classList.add('fondu-out')
                    setTimeout(function() {
                        loader.classList.add('fondu-out-out')
                    }, 200);
                }, 5000);
            </script>
            <!---------------------------- Header navigation Linkedin -------------------------------->
            <header>
                <section class="e-scape-header">
                    <div class="container-header">

                        <div class="logo-header">
                            <div class="logo-nav">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" class="global-nav__logo" fill="#0a66c2">
                                    <title>Fernando</title>
                                    <g>
                                        <path fill="#0a66c2" d="M34,2.5v29A2.5,2.5,0,0,1,31.5,34H2.5A2.5,2.5,0,0,1,0,31.5V2.5A2.5,2.5,0,0,1,2.5,0h29A2.5,2.5,0,0,1,34,2.5ZM10,13H5V29h5Zm.45-5.5A2.88,2.88,0,0,0,7.59,4.6H7.5a2.9,2.9,0,0,0,0,5.8h0a2.88,2.88,0,0,0,2.95-2.81ZM29,19.28c0-4.81-3.06-6.68-6.1-6.68a5.7,5.7,0,0,0-5.06,2.58H17.7V13H13V29h5V20.49a3.32,3.32,0,0,1,3-3.58h.19c1.59,0,2.77,1,2.77,3.52V29h5Z" fill="currentColor"></path>
                                    </g>
                                </svg>
                            </div>

                        </div>

                        <!-- <div class="search-nav">
                    <div class="input-nav">
                        <input type="search">
                    </div>

                    <div class="logo-nav" id="search-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="24x24" fill="currentColor" class="mercado-match" width="24" height="24" focusable="false">
                            <path d="M21.41 18.59l-5.27-5.28A6.83 6.83 0 0017 10a7 7 0 10-7 7 6.83 6.83 0 003.31-.86l5.28 5.27a2 2 0 002.82-2.82zM5 10a5 5 0 115 5 5 5 0 01-5-5z"></path>
                        </svg>

                    </div>

                </div>---->

                        <div class="home-nav home">
                            <a href=" <?php if (isset($_SESSION['user'])) {
                                            echo 'https://www.youtube.com/watch?v=E-d7MeBeiBU&ab_channel=VictorDozal';
                                        } else {
                                            echo '#';
                                        } ?>">
                                <div class="logo-nav">
                                    <svg height="24" width="24">
                                        <path d="m23 9v2h-2v7c0 1.7-1.3 3-3 3h-4v-6h-4v6h-4c-1.7 0-3-1.3-3-3v-7h-2v-2l11-7z"></path>
                                        <path d="m20 2h-3v3.2l3 1.9z"></path>
                                    </svg>

                                </div>

                                <div class="titre-nav">
                                    <p>Accueil</p>
                                </div>
                            </a>
                        </div>

                        <div class="home-nav">
                            <a href="login" target="_blank">
                                <div class="logo-nav">
                                    <svg height="24" width="24">
                                        <path d="m12 16v6h-9v-6c0-1.7 1.3-3 3-3h3c1.7 0 3 1.3 3 3zm5.5-3c1.9 0 3.5-1.6 3.5-3.5s-1.6-3.5-3.5-3.5-3.5 1.6-3.5 3.5 1.6 3.5 3.5 3.5zm1 2h-2c-1.4 0-2.5 1.1-2.5 2.5v4.5h7v-4.5c0-1.4-1.1-2.5-2.5-2.5zm-11-13c-2.5 0-4.5 2-4.5 4.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5-2-4.5-4.5-4.5z"></path>
                                    </svg>
                                </div>

                                <div class="titre-nav">
                                    <p>Réseau</p>
                                </div>
                            </a>
                        </div>

                        <div class="home-nav">
                            <a href="emploi.html">
                                <div class="logo-nav">
                                    <svg height="24" width="24">
                                        <path d="m17 6v-1c0-1.7-1.3-3-3-3h-4c-1.7 0-3 1.3-3 3v1h-5v4c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-4zm-8-1c0-.6.4-1 1-1h4c.6 0 1 .4 1 1v1h-6zm10 9c1.2 0 2.3-.5 3-1.4v4.4c0 1.7-1.3 3-3 3h-14c-1.7 0-3-1.3-3-3v-4.4c.7.9 1.8 1.4 3 1.4z"></path>
                                    </svg>
                                </div>
                                <div class="titre-nav">
                                    <p>Emplois</p>
                                </div>
                            </a>
                        </div>

                        <div class="notification-nav">
                            <div id="button-noti" style="cursor:pointer;">
                                <div class="logo-nav">
                                    <svg height="24" width="24">
                                        <path d="M13.7 19C13.9 19.3 14 19.6 14 20C14 21.1 13.1 22 12 22C10.9 22 10 21.1 10 20C10 19.6 10.1 19.3 10.3 19H2V18C2 17 2.4 16.1 3.2 15.2L4.2 14H19.9L20.9 15.2C21.7 16.2 22.1 17.1 22.1 18V19H13.7ZM18.2 7.4C17.8 4.3 15.1 2 12 2C8.9 2 6.2 4.3 5.8 7.4L5 13H19L18.2 7.4Z"></path>
                                    </svg>
                                    <div id="notification-active" class="notification-active">
                                        <?php if (isset($_SESSION['user'])) {
                                            echo '<img src="img/noti1.png" alt="">';
                                        } ?>
                                    </div>
                                </div>
                                <div class="titre-nav">
                                    <p>Notifications</p>
                                </div>
                            </div>
                        </div>

                        <div class="home-nav">
                            <div id="button-access" style="cursor:pointer;">

                                <div class="logo-nav">
                                    <div class="avatar-img">
                                        <img src="img/avatar.png" width="100%" height="100%" alt="">
                                    </div>
                                    <div id="notification-active" class="notification-lock">

                                        <svg id="Calque_1" width="18px" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.69 21.69">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill:
                                                            <?= $lockColor ?>;
                                                    }

                                                    .cls-2 {
                                                        fill: #f9f9f9;
                                                    }

                                                    .cls-3 {
                                                        fill: #fff;
                                                    }
                                                </style>
                                            </defs>
                                            <path class="cls-1" d="M-7.58-24.11A10.84,10.84,0,0,0-18.43-13.27,10.85,10.85,0,0,0-7.58-2.42,10.84,10.84,0,0,0,3.26-13.27,10.84,10.84,0,0,0-7.58-24.11ZM-2.83-8.28a1.91,1.91,0,0,1-1.9,1.9h-5.7a1.9,1.9,0,0,1-1.9-1.9V-13a1.9,1.9,0,0,1,1.9-1.9v-3.79a2.84,2.84,0,0,1,2.85-2.85,2.85,2.85,0,0,1,2.85,2.85v3.79A1.91,1.91,0,0,1-2.83-13Z" transform="translate(18.43 24.11)" />
                                            <path class="cls-2" d="M-4.73-14.93v-3.79a2.85,2.85,0,0,0-2.85-2.85,2.84,2.84,0,0,0-2.85,2.85v3.79a1.9,1.9,0,0,0-1.9,1.9v4.75a1.9,1.9,0,0,0,1.9,1.9h5.7a1.91,1.91,0,0,0,1.9-1.9V-13A1.91,1.91,0,0,0-4.73-14.93Zm-.95,0h-3.8v-3.79a1.9,1.9,0,0,1,1.9-1.9,1.9,1.9,0,0,1,1.9,1.9Z" transform="translate(18.43 24.11)" />
                                            <path class="cls-1" d="M-5.68-18.72v3.79h-3.8v-3.79a1.9,1.9,0,0,1,1.9-1.9A1.9,1.9,0,0,1-5.68-18.72Z" transform="translate(18.43 24.11)" />
                                            <path class="cls-1" d="M-4.94-11.49v1.76A1.69,1.69,0,0,1-6.63-8h-.74a.79.79,0,0,0,.15-.51.82.82,0,0,0,0-.28.68.68,0,0,0,0-.26.49.49,0,0,0,0-.12A.7.7,0,0,0-7-9.7c0-.34-.21-.62-.46-.62S-8-10-8-9.7a.7.7,0,0,0,.18.49.49.49,0,0,0,0,.12.68.68,0,0,0,0,.26.82.82,0,0,0,0,.28A.79.79,0,0,0-7.65-8h-.74a1.69,1.69,0,0,1-1.69-1.69v-1.76a1.69,1.69,0,0,1,1.69-1.69h1.76A1.69,1.69,0,0,1-4.94-11.49Z" transform="translate(18.43 24.11)" />
                                            <path class="cls-3" d="M-7.37-8A.19.19,0,0,1-7.51-8,.19.19,0,0,1-7.65-8Z" transform="translate(18.43 24.11)" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="titre-nav">
                                    <p>Moi</p>
                                </div>
                            </div>
                        </div>

                        <div class="home-nav">
                            <div class="logo-nav point">
                                <svg id="global-nav-icon--classic__overflow" width="24" height="24">
                                    <path d="M14 12a2 2 0 11-2-2 2 2 0 012 2zM4 10a2 2 0 102 2 2 2 0 00-2-2zm16 0a2 2 0 102 2 2 2 0 00-2-2z"></path>
                                </svg>


                            </div>
                            <div class="titre-nav gratuit">
                                <a href="https://www.linkedin.com/in/charley-geoffroy-alternance-dev/" target="_blank">
                                    <p>Essayez <?= $user ?> <br> gratuitement</p>
                                </a>
                            </div>
                        </div>

                    </div>


                    <?= $notification ?>



                    <div class="container-popup-acces" id="PopupAcces">

                        <div class="acces-denied">

                            <?php if (!empty($tab_err)) {
                                echo $tab_err;
                            } ?>

                            <?= $popup ?>

                        </div>
                    </div>

                    <?php if (isset($_SESSION['user'])) {
                        if (isset($_GET['key']) && $_GET['key'] == 34567) {

                            echo '<div class="C3301">
           <!--- 

          Secret KEY =  J/B67!;X3455JZA?!qM<§("&qvhd
           --->         </div>';
                        } else {
                            echo '<!--- 
    $k = get_index/QDFBSHRDSVLkMWPKNWJQJDBNWJJSHQ
    SVSDVXFBDFHHDSHeSSTHRSTHSHBQDBVSDVyDSWXDWDGNHFGJVW=34567 
            
    $m = get_index/VDJHQBHcCGYHQBDGUWJNicBVGHNBVGaHYJNSWQHNDSWSVV
    SCDSDXCGRDFGFDFGdVFCaVGFCGF=3301 
    
    --->';
                        }
                    } ?>


                    <?php if (isset($_GET['cicada']) && $_GET['cicada'] == 3301) {
                        echo '<div class="C3301">
           <!--- 

           EAXpU7ROMULGx5Eej77hbGfGLwicGE7WOciP3Yv6x8hBiy7+lmBZyRwgQmTneBqjntWimHJ9xlcFYtjhz47/
           mkdETLCoQbZqljtDjfkySCIk8VVKNybVH0ET13TmNyh/zXdAk7dIZZ4uqrbP23nDuZEP/XOOF5pl8BH+NjrD
           ZZn70MaLa/xrkh4yyQzpTAgb1ardeJge0x+GJvM294RtIy71POiQYsRw0/Zi3sped0mfpIjqxc6Jtp1r415C
           d0fAjXX8KLtFZ+QO2RreWFj9vQ6XHcH/2s+MNrsRSvRUO0FZfSj1gVBW0HEjtxo5t6iWy6MZxhFeyG6T9Nn/
           ZnIvqwtrd/OTmyIgoBgSpH5OQdXTU6Faj4gOmNTIrzqIIBnsobFNN0LY/qjon6XJnIbv1lNVUdjbormauKYg
           P7LmBDCIEAaWzgFZyCdQR8U/wXU7GyKHz+BFUtaSxT/jqz8T6NSeaW/RkRwshEtpM4r2AwtYhJQiJrwpgONW
           9PZQ46vZm+WXC4zXUeJwqb0zcC8w/P9lYiYfwvYrns3QWJM1mBXQXMOyh2f90K+RaI1b0UGGVD/n6txvySXb
           HascE1M11eFzlbl/i0KNVVFPr5+sCoiBi94rkAP2feYkXl9rcmyHfQFagerMR9Nk+YQET9yMaQQcyoOBW8WS
           9RZQs1V0Z9J+V76ckXvUFuvYgHZYWPmgFk7azimIhXbaijENE8SzgRRGM2pDMPSJTex0C9gQ9YwiEq4VR1sl
           cLHoRPUEh7XllnsQtSThYlYXqXQ/Rs5Mc3y+Wxj7bBJ+inUwWmPDyB5VdyWlvzTOro/jvjesWkgF2kHrN5eY
           2XzLfsHlKfJ676wgyuQ4tWP5CZkqhfIgaQ+Mp4HHvSOsXArlURBiyzcKynV5MIsFfhJU4F8I0wUUod49zRVq
           oPLXOhaey6+8cVkWRtsN1mNeLNbcN817HUaOYAM5WxLsR0ysKjW2nPSCPu570+UEcybjJJckgoxhqmG8sDb+
           V0H0TIDq5yio69GN4lioyEtP5WWVlR2IHA3nTFxajVNEMVSDrhm9Ds5XaHGUx75q9+OKJOmmN6NbbyCdt7YU
           2PNJ6HlRzfqBuBcqHgL5DQZxcO/FAAlwxfWhWMd3xMR9d2fqAeWmTr8+cqxN0u6m7erCpjEAX74B0jfRkZcy
           6XTEEGytX/E7Cx4ijWgNSpESuAE3vGO5/eddd2K9yb7Rlj8KME2BvdW9Hq8z55xugbmyQFXWkXxpqwybD99t
           js7YEHLSwCtygaW7f9PPaHFFgd8Uuuz3DeME8Z8jpeOlrOLHU3uz89TRakPzlg+AqSFlF5kjsOmd9DdLK9c4
           u/JASJ01BDwV0Wtut5wil2IV0Q3ys3lrAtk8x4MbF0U=
           
           ---> </div>';
                    } ?>

                </section>
            </header>
            <div class="welcoming">
                <h2> <img src="img/light.svg" height="12px" alt=""> LinkedIn vous aide dans votre recherche d'emploi : <span style="border-bottom:1px solid #666666;">n'attendez plus et postulez avec <a href="" style="color:#0a66c2;">#nevergetanswerback</a></span></h2>

            </div>

            <section class="container-sections">
                <div class="container-desktop-left">

                    <div class="container-presentation-desktop" id="presentation-desktop">

                        <div class="cover-presentation">
                        </div>


                        <div class="description-profil alternance">

                            <div class="avatar-presentation">
                                <div class="avatar-img-profil">
                                    <img src="img/avatar.png" width="100%" height="100%" alt="">

                                </div>
                            </div>

                            <p class="name-presentation"><b>Charley Geoffroy</b></p>
                            <p class="description-presentation text-alternatif">Crative Full-Stack Developper <br> Alternative CV 🕵🏼‍♀️ 🚀</p>
                            <div class="alternance_cesi">
                                <p class="description-presentation text-alternatif"><img src="img/ecole.svg" width="12px" alt="" style="margin-right:7px;">Recherche Alternance </p>

                            </div>

                        </div>


                        <div class="description-profil last">


                        </div>
                    </div>


                    <div class="container-presentation-desktop fixed" id="presentation-desktop-fixed">


                        <div class="description-profil-title">
                            <p class="description-presentation text-alternatif title">Récent</b></p>
                        </div>

                        <div class="description-profil-recent">
                            <a href="#">
                                <p class="description-presentation text-alternatif desktop"><img src="img/diez.svg" alt="" style="margin-right:4px;">JavaScript</p>
                            </a>
                        </div>

                        <div class="description-profil-recent">
                            <a href="#">
                                <p class="description-presentation text-alternatif desktop"><img src="img/diez.svg" alt="" style="margin-right:4px;">PHP </p>
                            </a>
                        </div>
                        <div class="description-profil-recent">
                            <a href="#">
                                <p class="description-presentation text-alternatif desktop"><img src="img/diez.svg" alt="" style="margin-right:4px;">C# </p>
                            </a>
                        </div>

                        <div class="description-profil-recent">
                            <a href="#">
                                <p class="description-presentation text-alternatif desktop"><img src="img/diez.svg" alt="" style="margin-right:4px;">RECRUTEMENT </p>
                            </a>
                        </div>

                        <div class="description-profil-recent">
                            <a href="#">
                                <p class="description-presentation text-alternatif desktop"><img src="img/diez.svg" alt="" style="margin-right:4px;">ARG </p>
                            </a>
                        </div>

                        <div class="description-profil-recent">
                            <a href="#">
                                <p class="description-presentation text-alternatif desktop"><img src="img/diez.svg" alt="" style="margin-right:4px;">CTF </p>
                            </a>
                        </div>

                        <div class="description-profil-recent">
                            <a href="#">
                                <p class="description-presentation text-alternatif desktop"><img src="img/diez.svg" alt="" style="margin-right:4px;">CRÉATIVITÉ </p>
                            </a>
                        </div>

                        <?php if (isset($_SESSION['user']) && $_SESSION['start'] == 'last') {
                            echo ' <div class="description-profil-recent">
                <a href="https://www.google.fr/maps/@13.4455807,103.862787,3a,75y,56.22h,61.87t/data=!3m7!1e1!3m5!1s3JUKmu1LbGRwxNh_c2575Q!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3D3JUKmu1LbGRwxNh_c2575Q%26cb_client%3Dmaps_sv.tactile.gps%26w%3D203%26h%3D100%26yaw%3D160.69733%26pitch%3D0%26thumbfov%3D100!7i13312!8i6656" target="_blank">
                    <p class="description-presentation text-alternatif desktop"><img src="img/diez.svg" alt="" style="margin-right:4px;">USERNAME </p>
                </a></div>';
                        } ?>

                        <div class="description-profil-recent" style="padding-bottom:.5rem;">
                            <a href="#">
                                <p class="description-presentation text-alternatif desktop"><img src="img/diez.svg" alt="" style="margin-right:4px;">CICADA3301 </p>
                            </a>
                        </div>


                        <div class="description-profil-title">
                            <p class="description-presentation text-alternatif title">Top 10 des gagnants (0)</b></p>
                        </div>



                    </div>
                </div>


                <script>
                    let closeHover = document.getElementById("bloc-close");
                    let arrow = document.getElementById("close-game");

                    closeHover.addEventListener("mouseenter", function(event) {

                        var hover = anime.timeline({
                            targets: arrow,
                            duration: 300, // Can be inherited``
                            delay: function(el, i) {
                                return i * 250
                            },
                            easing: 'easeOutExpo', // Can be inherited
                            direction: 'alternate', // Is not inherited
                            loop: false, // Is not inherited
                        });

                        hover.add({
                                translateX: 5,
                                scale: 1.3

                            })
                            .add({
                                rotate: 360,
                            })
                            .add({
                                translateX: 0,
                                rotate: 0,
                                scale: 1
                            });

                    });


                    var IdHeaders = [{
                            idpop: "PopupMenu",
                            idbutton: "button-noti",
                            idimg: "notification-active",
                        },
                        {
                            idpop: "PopupAcces",
                            idbutton: "button-access",
                            idimg: "notification-lock",
                        },
                    ];

                    IdHeaders.forEach(function(IdHeader) {
                        var buttonPop = document.getElementById(IdHeader.idbutton);

                        closeHover.addEventListener("click", function(event) {

                            var Notif = document.getElementById(IdHeader.idpop);
                            Notif.classList.toggle("active");
                            var icone = document.getElementById(IdHeader.idimg);
                            icone.classList.toggle("none");
                        });
                    })
                </script>
                <div class="container-feed">