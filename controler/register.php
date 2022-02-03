<?php
require('../modele/dbConnect.php');
$ip= '';

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
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
$name = $_POST['Pseudo'];
$pin = $_POST['Pin'];

test_input($pin);
test_input($name);

// On vérifie si le nom existe dans la base de donée

if (!empty($name) && strlen($name) < 15 && strlen($name) > 3 ) {

    $req = $conn->prepare("SELECT * FROM Users WHERE Pseudo=?");
    $req->execute([$name]);
    $user = $req->fetch();

    if ($user == false) {

        if (isset($pin) && strlen($pin) < 7) {
            // On prépare la requete
            $req = $conn->prepare("INSERT INTO Users(Pseudo, Pin, Ip_user) 
                 VALUES (?, ?, ?)");
            // on place les variables dans les champs de la BDD
            $inf_user = array($name, $pin, $ip);
            // ON EXECUTE LA REQUETE
            $req->execute($inf_user);

            session_start();

            $_SESSION['user_ip'] = $ip;
            $_SESSION['user'] = $name;
            $_SESSION['start'] = 'first';
         

            header('Location:../index?pseudo=succes');
        } else {


            
            header('Location:../index?reg_err=wrong_pin');
        }
    } else {
        header('Location:../index?reg_err=id_taken');
    }
} else {
    header('Location:../index?reg_err=wrong_pseudo');
}
