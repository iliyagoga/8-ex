<?php
require 'vendor/autoload.php';
require 'lib/CRUD.php';
$crud = new CRUD('TOKEN');
$res=$crud->disk->getPublishResources();

include 'form.php'
?>