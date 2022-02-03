<?php
require('../modele/dbConnect.php');
session_start();

if(empty($_SESSION['user_ip']) || empty($_SESSION['user']) ||  empty($_SESSION['start'])){
    header('Location:../login.php?3301=hq9I2sNe128s76dGH&err_mdp=true');

}

function MailSetup($winner)
{

    $from = "e-scapegame@contact.fr";
    $to = 'geoffroy-charley@hotmail.fr';
    $subject = "Gagnant e-scape";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    // En-têtes additionnels
    $headers[] = 'To:' . $to;
    $headers[] = 'From:' . $from;

    $message = '
    <html>
    <head>
      <title>Gagnant E-scapegame </title>
      <meta charset="utf-8" />
    </head>
    <body>
      <font color="#303030";>
        <div align="center">
          <table width="600px">
            <tr>
              <td>
                
                <div align="center"><b>' . $winner . '</b> à remplis toutes les enigmes</div>
                
                
              </td>
            </tr>
            <tr>
              <td align="center">
                <font size="2">
                  Ceci est un email automatique, merci de ne pas y répondre
                </font>
              </td>
            </tr>
          </table>
        </div>
      </font>
    </body>
    </html>    ';
    if(mail($to, $subject, $message, implode("\r\n", $headers))){
        header('Location:../index?succes=complet');
    }else{
        header('Location:../index?succes=complet&mail=error');
    }
}

// fonction de test DATA (anti-hack)
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// On initialise les variables d'enregistrement
$name = $_POST['Pseudo-win'];
$pin = $_POST['Password-win'];

test_input($pin);
test_input($name);


$pseudo = $_SESSION['user'];
// On vérifie si le nom existe dans la base de donée

if (!empty($name) && $name === '@helloKitten') {

    if ($pin === 'Aero87AATHLETICDIVISION') {

        $_SESSION['winner'] = 'true';
        $_SESSION['start'] = 'done';
        $winner = $pseudo;
        $req = $conn->prepare("INSERT INTO Winners(Pseudo_winners) 
        VALUES (?)");
        // on place les variables dans les champs de la BDD
        $inf_user = array($winner);
        // ON EXECUTE LA REQUETE
        $req->execute($inf_user);
        MailSetup($winner);
      
    } else {
        header('Location:../login?3301=hq9I2sNe128s76dGH&err_mdp=true');
    }
} else {
    header('Location:../login?3301=hq9I2sNe128s76dGH&err_username=true');
}
