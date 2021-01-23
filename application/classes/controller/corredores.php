<?php
defined("SYSPATH") or die("No direct script access.");

class Controller_Corredores extends Controller_Index {
    public function before() {
        parent::before();
        $this->_name = $this->request->controller();
        $this->template->titulo .= " - Corredores";
        if ($this->request->is_ajax()) {
            $this->auto_render = FALSE;
        }
    }

    public function action_index($mensagem = "", $erro = false) {
        //INSTANCIA A VIEW DE LISTAGEM POR DEFAULT
        $view = View::Factory("corredores/list");
        
        $ordem = "COR_ID";
        $sentido = "desc";
        //BUSCA OS REGISTROS        
        $view->corredores = ORM::factory("corredores")->find_all();

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
        $idade = Controller_Index::ddmmaaaa_aaaammdd($post['COR_DATA_NASCIMENTO']);
        // separando yyyy, mm, ddd
        list($ano, $mes, $dia) = explode('-', $idade);
        // data atual
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        // Descobre a unix timestamp da data de nascimento do fulano
        $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
        // cálculo
        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
        if ($idade < 18){ 
            $query = false;
            $mensagem = "Não é permitida a inscrição de menores de idade.";
            $this->action_index("<p class='res-alert warning'>".$mensagem."</p>", false);
        } else {
            //INSERE
            $corredores = ORM::factory("corredores");
            foreach($post as $campo => $value){
                $corredores->$campo = $value;
            }

            //TENTA SALVAR. SE NÃO PASSAR NA VALIDAÇÃO, VAI PRO CATCH
            try{
                $query = $corredores->save();
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
