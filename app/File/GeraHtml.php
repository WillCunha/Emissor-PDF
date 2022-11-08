<?php

namespace App\File;

class GeraHtml {


   /**
     * Define o nome do aluno a receber o certificado
     * @var string
     */
    public $aluno;

    /**
     * Define o nome do curso
     * @var string
     */
    public $curso;

    /**
     * Define a carga horária do curso
     * @var string
     */
    public $horas;

    /**
     * Define o dia da conclusão do curso
     * @var string
     */
    public $data;

    /**
     * Define o squad para então selecionar o arquivo background
     * @var string
     */
    public $squad;

    /**
     * Define o HTML do certificado
     */
    public $html;

    /**
     * Define o nome do arquivo HTML
     * @var string
     */
    public $nomeArquivo;


    /**
     * Gera o arquivo HTML com os dados do aluno, curso e scrum master 
     */
    public function geraHtml(){

      $this->html = '<!DOCTYPE html>';
      $this->html .='<html lang="pt-BR">';      
      $this->html .='<head>';
      $this->html .='<meta charset="UTF-8">';
      $this->html .='<meta http-equiv="X-UA-Compatible" content="IE=edge">';
      $this->html .='<meta name="viewport" content="width=device-width, initial-scale=1.0">';
      $this->html .='<title>Arquivo PDF</title>';
      $this->html .='<link rel="preconnect" href="https://fonts.googleapis.com">';
      $this->html .='<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
      $this->html .='<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700;900&display=swap" rel="stylesheet">';
      $this->html .='<style>';
      $this->html .='body { background-image: url("src/images/'.$this->squad.'.jpg"); background-position: center; background-attachment: fixed; background-size: contain;font-family: "Poppins", sans-serif; background-repeat: no-repeat; }';      
      $this->html .='h1 { font-size: 30px; color: #434343; text-transform: uppercase; margin-top: 22%;margin-bottom: -0.5%; }';
      $this->html .= 'p {  color: #434343;font-size: 14px;font-weight: 500;line-height: 0px;}';
      $this->html .= '.conteudo-central { text-align: center; display: grid; align-items: center;align-content: center; height: 560px;}';
      $this->html .= '</style>';
      $this->html .= '</head>';
      $this->html .= '<body>';
      $this->html .= '<div class="conteudo-central">';
      $this->html .= '<h1>'.$this->aluno.'</h1>';
      $this->html .= '<p>Certificamos que '.$this->aluno.'</p>';
      $this->html .= '<p>concluiu com sucesso '.$this->horas.' horas do curso de</p>';
      $this->html .= '<p>'.$this->curso.' em '.$this->data.'</p>';
      $this->html .= '<p></p>';
      $this->html .= '</div>';
      $this->html .= '</body>';
      $this->html .= '</html>';

      $this->nomeArquivo = rand(10000,99999).''.uniqid().'.html';
      $arquivo = file_put_contents($this->nomeArquivo,$this->html);
      return $this->nomeArquivo;
        
    }

}

?>