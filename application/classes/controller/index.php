<?php 

defined('SYSPATH') or die('No direct script access.');
class Controller_Index extends Controller_Template {

    //VIEW DEFAULT
    public $template = 'template';

    public $titulo = 'Corrida';
    //NOME DA SESSÃO, PARA NÃO DAR BAGUNÇA COM OUTRA RESTRITAS E AFINS ABERTOS NO NAVEGADOR
    //DOMÍNIO
    public $dominio = "http://localhost/corrida/";
    
    public function before() {
        parent::before();

        $this->template->titulo = $this->titulo;
        //Quantidade de itens por pagina
    }
    public function action_index() {
        $view = View::Factory('index');

        $this->template->conteudo = $view;
    }

    public static function ddmmaaaa_aaaammdd($dd_mm_aaaa) {
        $axdia = substr($dd_mm_aaaa, 0, 2);
        $axmes = substr($dd_mm_aaaa, 3, 2);
        $axano = substr($dd_mm_aaaa, 6, 4);
        $aaaa_mm_dd = $axano . "-" . $axmes . "-" . $axdia;
        return $aaaa_mm_dd;
    }

    public static function aaaammdd_ddmmaaaa($aaaa_mm_dd) {
        $axdia = substr($aaaa_mm_dd, 8, 2);
        $axmes = substr($aaaa_mm_dd, 5, 2);
        $axano = substr($aaaa_mm_dd, 0, 4);
        $dd_mm_aaaa = $axdia . "/" . $axmes . "/" . $axano;
        return $dd_mm_aaaa;
    }

    
}

// End Template
