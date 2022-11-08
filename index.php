<?php
require __DIR__ . '/vendor/autoload.php';

use App\Gerador;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\File\GeraHtml;

$geraHtml = new GeraHtml();
if(isset($_POST['nome'], $_POST['curso'], $_POST['squad'])){

    $geraHtml->aluno = $_POST['nome'];
    $geraHtml->curso = $_POST['curso'];
    $geraHtml->horas = $_POST['horas'];
    $geraHtml->data = $_POST['data'];
    $geraHtml->squad = $_POST['squad'];
    $nomeArquivo = $geraHtml->geraHtml();

    $options = new Options();
    $domPdf = new Dompdf($options);
    $options->setChroot(__DIR__);
    $options->setIsRemoteEnabled(true);
    $domPdf->loadHtmlFile(__DIR__.'/'.$nomeArquivo);
    $domPdf->setPaper('A4', 'landscape');
    $domPdf->render();
    
    header('Content-type: application/pdf');
    
    echo $domPdf->output();
}

require __DIR__.'/includes/header.php';
require __DIR__.'/includes/formularios.php';
require __DIR__.'/includes/footer.php';

?>