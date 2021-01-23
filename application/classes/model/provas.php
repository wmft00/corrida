<?php

defined("SYSPATH") OR die("No Direct Script Access");

Class Model_Provas extends ORM {

    protected $_table_name = "PROVAS";
    protected $_primary_key = "PRO_ID";
        protected $_sorting = array("PRO_DATA" => "desc");
    
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
            "PRO_TIPO" => array(
                array("not_empty"),
            ),
            "PRO_DATA" => array(
                array("not_empty"),
            ),
        );
    }
    
    //FILTROS
    public function filters(){
        return array(
            "PRO_DATA" => array(
                array(array($this, "arrumaData")),
            ),
        );
    }

    public function __construct($id = NULL) {
        //GERA A TABELA
        Database::instance()->query(Database::INSERT, "CREATE TABLE IF NOT EXISTS PROVAS (
            PRO_ID INT (11) unsigned NOT NULL auto_increment,
            PRO_TIPO INT (11) NOT NULL  default '0',
            PRO_DATA DATE  NOT NULL ,
            PRIMARY KEY  (PRO_ID)
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;");
        
        parent::__construct($id);
    }
}
