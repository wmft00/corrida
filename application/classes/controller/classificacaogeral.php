<?php
defined("SYSPATH") or die("No direct script access.");

class Controller_Classificacaogeral extends Controller_Index {
    public function before() {
        parent::before();
        $this->_name = $this->request->controller();
        $this->template->titulo .= " - Classificação Geral";
        if ($this->request->is_ajax()) {
            $this->auto_render = FALSE;
        }
    }

    public function action_index($mensagem = "", $erro = false) {
        //INSTANCIA A VIEW DE LISTAGEM POR DEFAULT
        $view = View::Factory("classificacao/geral");

        $view->provas = ORM::factory("provas")->find_all();
        
        //PASSA A MENSAGEM
        $view->mensagem = $mensagem;
        $view->erro = $erro;
        
        $this->template->bt_voltar = true;
        
        $this->template->conteudo = $view;
    }

}

// End Corredores
