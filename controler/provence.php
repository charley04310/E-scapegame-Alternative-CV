<?php

$key = 'J/B67!;X3455JZA?!qM<§("&qvhd';

function encryptthis($data, $key)
{
    $ciphering = 'AES-256-CBC';
    $encryption_iv = 'cica3301';
    $encrypted = openssl_encrypt($data, $ciphering, $encryption_iv, 0, $key);
    session_start();
    $_SESSION['welcoming'] = $encrypted;
    header('Location:../openssl?succes=msg');
}
function decryptthis($data, $key, $msg)
{
    if ($key != 'J/B67!;X3455JZA?!qM<§("&qvhd') {
        header('Location:../openssl?key_err=wrong_key');
    } else {
        $msg = ' 
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
         ';
        

        $msg =  preg_replace('/\s+/', '', $msg); 
        $data = preg_replace('/\s+/', '', $data); 


        if ($data != $msg) {
            header('Location:../openssl?key_err=wrong_msg');
        } else {
            $ciphering = 'AES-256-CBC';
            $encryption_iv = 'cica3301';
            $decrypted = openssl_decrypt($data, $ciphering, $encryption_iv, 0, $key);
            session_start();
            $_SESSION['welcoming'] = $decrypted;
            header('Location:../openssl?succes=msg');
        }
    }
}


function test_input($data)
{

    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['encrypt-it'])) {

    $msg = $_POST['encrypt-it'];
    $enc = encryptthis($msg, $key);

    echo $enc;
}

if (isset($_POST['decrypt-it']) && isset($_POST['key'])) {

    $key = $_POST['key'];
    $data = $_POST['decrypt-it'];
    test_input($decrypt);
    test_input($key);
    $dec = decryptthis($data, $key, $msg);
}
