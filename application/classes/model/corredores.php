<?php

defined("SYSPATH") OR die("No Direct Script Access");

Class Model_Corredores extends ORM {

    protected $_table_name = "CORREDORES";
    protected $_primary_key = "COR_ID";
        protected $_sorting = array("COR_DATA_NASCIMENTO" => "desc");
    
    //RELATIONSHIP
    protected $_belongs_to = array(
    );
    protected $_has_many = array(
    );
                
    //REGRAS DE VALIDAÇÃO
    //Define all validations our model must pass before being saved
    //Notice how the errors defined here correspond to the errors defined in our Messages file
    public function rules() {
        return array(
            "COR_NOME" => array(
                array("not_empty"),
                array("min_length", array(":value", 3)),
                array("max_length", array(":value", 100)),
            ),
            "COR_CPF" => array(
                array("not_empty"),
                array("min_length", array(":value", 3)),
                array("max_length", array(":value", 14)),
            ),
            "COR_DATA_NASCIMENTO" => array(
                array("not_empty"),
            ),
        );
    }
    
    //FILTROS
    public function filters(){
        return array(
            "COR_DATA_NASCIMENTO" => array(
                array(array($this, "arrumaData")),
            ),
        );
    }

    public function __construct($id = NULL) {
        //GERA A TABELA
        Database::instance()->query(Database::INSERT, "CREATE TABLE IF NOT EXISTS CORREDORES (
            COR_ID INT (11) unsigned NOT NULL auto_increment,
            COR_NOME VARCHAR (100) NOT NULL ,
            COR_CPF VARCHAR (14) NOT NULL ,
            COR_DATA_NASCIMENTO DATE  NOT NULL ,
            PRIMARY KEY  (COR_ID)
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;");
        
        parent::__construct($id);
    }
}
