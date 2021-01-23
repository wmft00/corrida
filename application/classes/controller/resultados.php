<?php
defined("SYSPATH") or die("No direct script access.");

class Controller_Resultados extends Controller_Index {
    public function before() {
        parent::before();
        $this->_name = $this->request->controller();
        $this->template->titulo .= " - Inclusão de Resultados";
        if ($this->request->is_ajax()) {
            $this->auto_render = FALSE;
        }
    }

    public function action_index($mensagem = "", $erro = false) {
        //INSTANCIA A VIEW DE LISTAGEM POR DEFAULT
        $view = View::Factory("resultados/list");
        
        $ordem = "COR_ID";
        $sentido = "desc";
        //BUSCA OS REGISTROS        
        $view->resultados = ORM::factory("resultados")->with('corredores')->with('provas')->find_all();
        $view->provas = ORM::Factory('provas')->find_all();
        $view->corredores = ORM::Factory('corredores')->find_all();
        //PASSA A MENSAGEM
        $view->mensagem = $mensagem;
        $view->erro = $erro;
        
        $this->template->bt_voltar = true;
        
        $this->template->conteudo = $view;
    }

    //SALVA INFORMACOES
    public function action_save(){ //MENSAGEM DE OK, OU ERRO
        $mensagem = "Registro alterado com sucesso!";
        $post = $this->request->post();
        //SE O ID ESTIVER ZERADO, INSERT
        $resultados = ORM::factory("resultados")
        ->where('COR_ID','=',$post['COR_ID'])
        ->where('PRO_ID','=',$post['PRO_ID'])
        ->find();
        if ($resultados->PRO_ID != ''){
            $query = false;
            $mensagem = "O RESULTADO DESTE CORREDOR JA FOI CADASTRADO NESTA PROVA!";
            $this->action_index("<p class='res-alert warning'>".$mensagem."</p>", false);
        } else {
            //INSERE
            $resultados = ORM::factory("resultados");
            foreach($post as $campo => $value){
                $resultados->$campo = $value;
            }
            //TENTA SALVAR. SE NÃO PASSAR NA VALIDAÇÃO, VAI PRO CATCH
            try{
                $query = $resultados->save();
                $mensagem = "Registro inserido com sucesso!";
            } catch (ORM_Validation_Exception $e){
                $query = false;
                $mensagem = $e->errors("models");
            }
            //SE MENSAGEM FOR ARRAY, TRANSFORMA EM STRING
            if(is_array($mensagem)){
                $men = "";
                foreach($mensagem as $m){
                    $men .= $m."<br>";
                }
                $mensagem = $men;
            }
            //SE FUNCIONOU, VOLTA PRA LISTAGEM COM MENSAGEM DE OK
            if($query){
                $this->action_index("<p class='res-alert sucess'>".$mensagem."</p>", false);
            }else{
                //SENAO, VOLTA COM MENSAGEM DE ERRO
                $this->action_index("<p class='res-alert warning'>".$mensagem."</p>", true);
            }
        }
    }
    //FUNCAO DE PESQUISA
    public function action_pesquisa(){
        $this->action_index("", false);
    }

}

// End Corredores
