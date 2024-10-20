<?php
require 'vendor/autoload.php';
require 'lib/CRUD.php';
$disk = new CRUD('TOKEN');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resourse=$disk->disk->getResource($_FILES['file']['name']);
    $resourse->upload($_FILES['file']['tmp_name']);
    $resourse->setPublish(true);
    header('Location: '.$_SERVER['HTTP_REFERER']);
 
}else{
    if($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['delete'])) {
        $resourse=$disk->disk->getResource($_GET['delete']);
        $resourse->delete();
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
   
}




?>