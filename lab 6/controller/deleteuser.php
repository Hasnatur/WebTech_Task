<?php 

require_once '../model/model.php';

if (deleteUser($_GET['ID'])) {
    header('Location: .view/viewalluser.php ');
}

 ?>