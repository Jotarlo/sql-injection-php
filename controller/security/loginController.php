<?php

session_start();
// get the POST request with user and password from view form and send them to loginModel
if ($_POST) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    require_once '../../model/security/loginModel.php';
    $loginModel = new loginModel();
    $login = $loginModel->loginPrepared($user, $password);
    if ($login != null) {
        echo "Welcome " . $login["completeName"];
        $_SESSION['completeName'] = $login["completeName"];
        // redirect to index.php?view=home with success message
        header('Location: ../../index.php?view=home');
    } else {
        // redirect to index.php?view=login with error message
        header('Location: ../../index.php?view=login&error=1');
    }
}

?>