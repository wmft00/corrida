<?php

defined("SYSPATH") OR die("No Direct Script Access");

Class Model_Resultados extends ORM {

    protected $_table_name = "RESULTADOS";
    protected $_primary_key = array();
    protected $_sorting = array("PRO_ID" => "asc");
    
    //RELATIONSHIP
    protected $_belongs_to = array(
        "corredores" => array(
            "model"       => "corredores",
            "foreign_key" => "COR_ID",
        ),
        "provas" => array(
            "model"       => "provas",
            "foreign_key" => "PRO_ID",
        ),
    );
    protected $_has_many = array(
    );
                
    //REGRAS DE VALIDAÇÃO
    //Define all validations our model must pass before being saved
    //Notice how the errors defined here correspond to the errors defined in our Messages file
    public function rules() {
        return array(
            "COR_ID" => array(
                array("not_empty"),
                array(array($this, "existsCor")),
            ),
            "PRO_ID" => array(
                array("not_empty"),
                array(array($this, "existsPro")),
            ),
            "RES_INICIO" => array(
                array("not_empty"),
            ),
            "RES_FIM" => array(
                array("not_empty"),
            ),
        );
    }
    
    //FILTROS
    public function filters(){
        return array(
        );
    }

    public function __construct($id = NULL) {
        //GERA A TABELA
        Database::instance()->query(Database::INSERT, "CREATE TABLE IF NOT EXISTS RESULTADOS (
            COR_ID INT (11) unsigned NOT NULL ,
            PRO_ID INT (11) unsigned NOT NULL ,
            RES_INICIO TIME  NOT NULL  default '00:00',
            RES_FIM TIME  NOT NULL  default '00:00',
            FOREIGN KEY (COR_ID) REFERENCES CORREDORES(COR_ID) ON DELETE RESTRICT ON UPDATE RESTRICT,
            FOREIGN KEY (PRO_ID) REFERENCES PROVAS(PRO_ID) ON DELETE RESTRICT ON UPDATE RESTRICT
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;");
        
        parent::__construct($id);
    }
                        
    //CHECA SE A CORREDORES EXISTE
    public static function existsCor($id) {
        $results = DB::select("*")->from("CORREDORES")->where("COR_ID", "=", $id)->execute()->as_array();
        if(count($results) == 0)
            return false;
        else
            return true;
    }
                        
    //CHECA SE A PROVAS EXISTE
    public static function existsPro($id) {
        $results = DB::select("*")->from("PROVAS")->where("PRO_ID", "=", $id)->execute()->as_array();
        if(count($results) == 0)
            return false;
        else
            return true;
    }
}
