<?php
defined("SYSPATH") or die("No direct script access.");

class Controller_Classificacaoidade extends Controller_Index {
    public function before() {
        parent::before();
        $this->_name = $this->request->controller();
        $this->template->titulo .= " - Classificação por Idade";
        if ($this->request->is_ajax()) {
            $this->auto_render = FALSE;
        }
    }

    public function action_index($mensagem = "", $erro = false) {
        //INSTANCIA A VIEW DE LISTAGEM POR DEFAULT
        $view = View::Factory("classificacao/idade");

        $view->provas = ORM::factory("provas")->find_all();
        
        //PASSA A MENSAGEM
        $view->mensagem = $mensagem;
        $view->erro = $erro;
        
        $this->template->bt_voltar = true;
        
        $this->template->conteudo = $view;
    }
    
    //FUNCAO DE PESQUISA
    public function action_pesquisa(){
        $this->action_index("", false);
    }

}

// End Corredores
