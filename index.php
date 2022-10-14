<?php
require __DIR__ . '/vendor/autoload.php';
use \App\Gerador;

if(isset($_POST['nome'], $_POST['curso'], $_POST['squad'])){
    $gerador = new Gerador();
}

require __DIR__.'/includes/header.php';
require __DIR__.'/includes/formularios.php';
require __DIR__.'/includes/footer.php';

?>