<?php
defined("SYSPATH") or die("No direct script access.");

class Controller_Corredoresprovas extends Controller_Index {
    public function before() {
        parent::before();
        $this->_name = $this->request->controller();
        $this->template->titulo .= " - Corredores Provas";
        if ($this->request->is_ajax()) {
            $this->auto_render = FALSE;
        }
    }

    public function action_index($mensagem = "", $erro = false) {
        //INSTANCIA A VIEW DE LISTAGEM POR DEFAULT
        $view = View::Factory("corredoresprovas/list");
        
        $ordem = "COR_ID";
        $sentido = "desc";
        //BUSCA OS REGISTROS        
        $view->corredoresprovas = ORM::factory("corredoresprovas")->with('corredores')->with('provas')->find_all();
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
        $prova = ORM::factory("provas")->where('PRO_ID','=',$post['PRO_ID'])->find();
        $mesmadata = ORM::factory('corredoresprovas')->with('provas')
        ->where('PRO_DATA','=',$prova->PRO_DATA)
        ->where('COR_ID','=',$post['COR_ID'])
        ->find();
        if ($mesmadata->PRO_ID != ''){ 
            $query = false;
            $mensagem = "Não é permitido cadastrar o mesmo corredor em duas provas diferentes na mesma data.!";
            $this->action_index("<p class='res-alert warning'>".$mensagem."</p>", false);
        } else {
            //INSERE
            $corredoresprovas = ORM::factory("corredoresprovas");
            foreach($post as $campo => $value){
                $corredoresprovas->$campo = $value;
            }
            //TENTA SALVAR. SE NÃO PASSAR NA VALIDAÇÃO, VAI PRO CATCH
            try{
                $query = $corredoresprovas->save();
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
