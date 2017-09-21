<?php
	session_name('filemanager');
    session_start();
    //echo $_POST['aPath'];
    unset($_SESSION['aPath']);
    unset($_SESSION['auth']);
    $_SESSION['aPath'] = 'C:\wamp64\www\100Come\Dossier_de_test\Tutoriels';
    $_SESSION['auth'] = false;
    //include('C:\wamp64\www\100Come\tinyfilemanager.php');
?>
