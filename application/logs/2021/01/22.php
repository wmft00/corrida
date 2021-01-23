<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2021-01-22 15:16:22 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: titulo ~ SYSPATH\classes\kohana\view.php [ 171 ]
2021-01-22 15:16:22 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: titulo ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\xampp\htdocs\corrida\application\classes\controller\corredores.php(8): Kohana_View->__get('titulo')
#1 [internal function]: Controller_Corredores->before()
#2 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(104): ReflectionMethod->invoke(Object(Controller_Corredores))
#3 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#6 {main}
2021-01-22 15:16:48 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: titulo ~ SYSPATH\classes\kohana\view.php [ 171 ]
2021-01-22 15:16:48 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: titulo ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\xampp\htdocs\corrida\application\classes\controller\corredores.php(8): Kohana_View->__get('titulo')
#1 [internal function]: Controller_Corredores->before()
#2 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(104): ReflectionMethod->invoke(Object(Controller_Corredores))
#3 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#6 {main}
2021-01-22 15:17:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Corredores::action_page() ~ APPPATH\classes\controller\corredores.php [ 37 ]
2021-01-22 15:17:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Corredores::action_page() ~ APPPATH\classes\controller\corredores.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 15:18:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Corredores::action_page() ~ APPPATH\classes\controller\corredores.php [ 37 ]
2021-01-22 15:18:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Corredores::action_page() ~ APPPATH\classes\controller\corredores.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 15:19:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'corredores.COR_DATA NASCIMENTO' in 'order clause' [ SELECT `corredores`.`COR_ID` AS `COR_ID`, `corredores`.`COR_NOME` AS `COR_NOME`, `corredores`.`COR_CPF` AS `COR_CPF`, `corredores`.`COR_DATA_NASCIMENTO` AS `COR_DATA_NASCIMENTO` FROM `CORREDORES` AS `corredores` ORDER BY `corredores`.`COR_DATA NASCIMENTO` DESC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2021-01-22 15:19:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'corredores.COR_DATA NASCIMENTO' in 'order clause' [ SELECT `corredores`.`COR_ID` AS `COR_ID`, `corredores`.`COR_NOME` AS `COR_NOME`, `corredores`.`COR_CPF` AS `COR_CPF`, `corredores`.`COR_DATA_NASCIMENTO` AS `COR_DATA_NASCIMENTO` FROM `CORREDORES` AS `corredores` ORDER BY `corredores`.`COR_DATA NASCIMENTO` DESC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `corredo...', 'Model_Corredore...', Array)
#1 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(902): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(851): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\corrida\application\classes\controller\corredores.php(21): Kohana_ORM->find_all()
#4 [internal function]: Controller_Corredores->action_index()
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Corredores))
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#9 {main}
2021-01-22 15:20:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'corredores.COR_DATA NASCIMENTO' in 'order clause' [ SELECT `corredores`.`COR_ID` AS `COR_ID`, `corredores`.`COR_NOME` AS `COR_NOME`, `corredores`.`COR_CPF` AS `COR_CPF`, `corredores`.`COR_DATA_NASCIMENTO` AS `COR_DATA_NASCIMENTO` FROM `CORREDORES` AS `corredores` ORDER BY `corredores`.`COR_DATA NASCIMENTO` DESC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2021-01-22 15:20:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'corredores.COR_DATA NASCIMENTO' in 'order clause' [ SELECT `corredores`.`COR_ID` AS `COR_ID`, `corredores`.`COR_NOME` AS `COR_NOME`, `corredores`.`COR_CPF` AS `COR_CPF`, `corredores`.`COR_DATA_NASCIMENTO` AS `COR_DATA_NASCIMENTO` FROM `CORREDORES` AS `corredores` ORDER BY `corredores`.`COR_DATA NASCIMENTO` DESC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `corredo...', 'Model_Corredore...', Array)
#1 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(902): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(851): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\corrida\application\classes\controller\corredores.php(21): Kohana_ORM->find_all()
#4 [internal function]: Controller_Corredores->action_index()
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Corredores))
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#9 {main}
2021-01-22 15:23:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Index::aaaammdd_ddmmaaaa() ~ APPPATH\views\corredores\list.php [ 46 ]
2021-01-22 15:23:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Index::aaaammdd_ddmmaaaa() ~ APPPATH\views\corredores\list.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 15:24:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Index::aaaammdd_ddmmaaaa() ~ APPPATH\views\corredores\edit.php [ 39 ]
2021-01-22 15:24:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Index::aaaammdd_ddmmaaaa() ~ APPPATH\views\corredores\edit.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 15:25:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Index::aaaammdd_ddmmaaaa() ~ APPPATH\views\corredores\edit.php [ 39 ]
2021-01-22 15:25:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Index::aaaammdd_ddmmaaaa() ~ APPPATH\views\corredores\edit.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 15:35:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Index::ddmmaaaa_aaaammdd() ~ MODPATH\orm\classes\kohana\orm.php [ 2104 ]
2021-01-22 15:35:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Index::ddmmaaaa_aaaammdd() ~ MODPATH\orm\classes\kohana\orm.php [ 2104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 15:35:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Index::ddmmaaaa_aaaammdd() ~ MODPATH\orm\classes\kohana\orm.php [ 2104 ]
2021-01-22 15:35:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Index::ddmmaaaa_aaaammdd() ~ MODPATH\orm\classes\kohana\orm.php [ 2104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 15:36:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Index::ddmmaaaa_aaaammdd() ~ MODPATH\orm\classes\kohana\orm.php [ 2104 ]
2021-01-22 15:36:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Index::ddmmaaaa_aaaammdd() ~ MODPATH\orm\classes\kohana\orm.php [ 2104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 15:36:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Index::ddmmaaaa_aaaammdd() ~ MODPATH\orm\classes\kohana\orm.php [ 2104 ]
2021-01-22 15:36:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Index::ddmmaaaa_aaaammdd() ~ MODPATH\orm\classes\kohana\orm.php [ 2104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 15:36:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Index::ddmmaaaa_aaaammdd() ~ MODPATH\orm\classes\kohana\orm.php [ 2104 ]
2021-01-22 15:36:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Index::ddmmaaaa_aaaammdd() ~ MODPATH\orm\classes\kohana\orm.php [ 2104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 15:50:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Provas::action_page() ~ APPPATH\classes\controller\provas.php [ 46 ]
2021-01-22 15:50:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Provas::action_page() ~ APPPATH\classes\controller\provas.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 15:55:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Index::aaaammdd_ddmmaaaa() ~ APPPATH\views\corredores\list.php [ 77 ]
2021-01-22 15:55:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Index::aaaammdd_ddmmaaaa() ~ APPPATH\views\corredores\list.php [ 77 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 16:15:38 --- ERROR: View_Exception [ 0 ]: The requested view corredoresprovas/list could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2021-01-22 16:15:38 --- STRACE: View_Exception [ 0 ]: The requested view corredoresprovas/list could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(137): Kohana_View->set_filename('corredoresprova...')
#1 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(30): Kohana_View->__construct('corredoresprova...', NULL)
#2 C:\xampp\htdocs\corrida\application\classes\controller\corredoresprovas.php(16): Kohana_View::factory('corredoresprova...')
#3 [internal function]: Controller_Corredoresprovas->action_index()
#4 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Corredoresprovas))
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#8 {main}
2021-01-22 16:17:50 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '),
            FOREIGN KEY (COR_ID) REFERENCES CORREDORES(COR_ID) ON DELETE REST' at line 4 [ CREATE TABLE IF NOT EXISTS CORREDORES_PROVAS (
            COR_ID INT (11) unsigned NOT NULL ,
            PRO_ID INT (11) unsigned NOT NULL ,
            PRIMARY KEY  (),
            FOREIGN KEY (COR_ID) REFERENCES CORREDORES(COR_ID) ON DELETE RESTRICT ON UPDATE RESTRICT,
            FOREIGN KEY (PRO_ID) REFERENCES PROVAS(PRO_ID) ON DELETE RESTRICT ON UPDATE RESTRICT
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1; ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2021-01-22 16:17:50 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '),
            FOREIGN KEY (COR_ID) REFERENCES CORREDORES(COR_ID) ON DELETE REST' at line 4 [ CREATE TABLE IF NOT EXISTS CORREDORES_PROVAS (
            COR_ID INT (11) unsigned NOT NULL ,
            PRO_ID INT (11) unsigned NOT NULL ,
            PRIMARY KEY  (),
            FOREIGN KEY (COR_ID) REFERENCES CORREDORES(COR_ID) ON DELETE RESTRICT ON UPDATE RESTRICT,
            FOREIGN KEY (PRO_ID) REFERENCES PROVAS(PRO_ID) ON DELETE RESTRICT ON UPDATE RESTRICT
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1; ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\corrida\application\classes\model\corredoresprovas.php(55): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#1 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(39): Model_Corredoresprovas->__construct(NULL)
#2 C:\xampp\htdocs\corrida\application\classes\controller\corredoresprovas.php(21): Kohana_ORM::factory('corredoresprova...')
#3 [internal function]: Controller_Corredoresprovas->action_index()
#4 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Corredoresprovas))
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#8 {main}
2021-01-22 16:18:49 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '),
            FOREIGN KEY (COR_ID) REFERENCES CORREDORES(COR_ID) ON DELETE REST' at line 4 [ CREATE TABLE IF NOT EXISTS CORREDORES_PROVAS (
            COR_ID INT (11) unsigned NOT NULL ,
            PRO_ID INT (11) unsigned NOT NULL ,
            PRIMARY KEY  (),
            FOREIGN KEY (COR_ID) REFERENCES CORREDORES(COR_ID) ON DELETE RESTRICT ON UPDATE RESTRICT,
            FOREIGN KEY (PRO_ID) REFERENCES PROVAS(PRO_ID) ON DELETE RESTRICT ON UPDATE RESTRICT
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1; ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2021-01-22 16:18:49 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '),
            FOREIGN KEY (COR_ID) REFERENCES CORREDORES(COR_ID) ON DELETE REST' at line 4 [ CREATE TABLE IF NOT EXISTS CORREDORES_PROVAS (
            COR_ID INT (11) unsigned NOT NULL ,
            PRO_ID INT (11) unsigned NOT NULL ,
            PRIMARY KEY  (),
            FOREIGN KEY (COR_ID) REFERENCES CORREDORES(COR_ID) ON DELETE RESTRICT ON UPDATE RESTRICT,
            FOREIGN KEY (PRO_ID) REFERENCES PROVAS(PRO_ID) ON DELETE RESTRICT ON UPDATE RESTRICT
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1; ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\corrida\application\classes\model\corredoresprovas.php(55): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#1 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(39): Model_Corredoresprovas->__construct(NULL)
#2 C:\xampp\htdocs\corrida\application\classes\controller\corredoresprovas.php(21): Kohana_ORM::factory('corredoresprova...')
#3 [internal function]: Controller_Corredoresprovas->action_index()
#4 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Corredoresprovas))
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#8 {main}
2021-01-22 16:19:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'corredoresprovas.PRO_' in 'order clause' [ SELECT `corredores`.`COR_ID` AS `corredores:COR_ID`, `corredores`.`COR_NOME` AS `corredores:COR_NOME`, `corredores`.`COR_CPF` AS `corredores:COR_CPF`, `corredores`.`COR_DATA_NASCIMENTO` AS `corredores:COR_DATA_NASCIMENTO`, `provas`.`PRO_ID` AS `provas:PRO_ID`, `provas`.`PRO_TIPO` AS `provas:PRO_TIPO`, `provas`.`PRO_DATA` AS `provas:PRO_DATA`, `corredoresprovas`.`COR_ID` AS `COR_ID`, `corredoresprovas`.`PRO_ID` AS `PRO_ID` FROM `CORREDORES_PROVAS` AS `corredoresprovas` LEFT JOIN `CORREDORES` AS `corredores` ON (`corredores`.`COR_ID` = `corredoresprovas`.`COR_ID`) LEFT JOIN `PROVAS` AS `provas` ON (`provas`.`PRO_ID` = `corredoresprovas`.`PRO_ID`) ORDER BY `corredoresprovas`.`PRO_` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2021-01-22 16:19:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'corredoresprovas.PRO_' in 'order clause' [ SELECT `corredores`.`COR_ID` AS `corredores:COR_ID`, `corredores`.`COR_NOME` AS `corredores:COR_NOME`, `corredores`.`COR_CPF` AS `corredores:COR_CPF`, `corredores`.`COR_DATA_NASCIMENTO` AS `corredores:COR_DATA_NASCIMENTO`, `provas`.`PRO_ID` AS `provas:PRO_ID`, `provas`.`PRO_TIPO` AS `provas:PRO_TIPO`, `provas`.`PRO_DATA` AS `provas:PRO_DATA`, `corredoresprovas`.`COR_ID` AS `COR_ID`, `corredoresprovas`.`PRO_ID` AS `PRO_ID` FROM `CORREDORES_PROVAS` AS `corredoresprovas` LEFT JOIN `CORREDORES` AS `corredores` ON (`corredores`.`COR_ID` = `corredoresprovas`.`COR_ID`) LEFT JOIN `PROVAS` AS `provas` ON (`provas`.`PRO_ID` = `corredoresprovas`.`PRO_ID`) ORDER BY `corredoresprovas`.`PRO_` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `corredo...', 'Model_Corredore...', Array)
#1 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(902): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(851): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\corrida\application\classes\controller\corredoresprovas.php(21): Kohana_ORM->find_all()
#4 [internal function]: Controller_Corredoresprovas->action_index()
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Corredoresprovas))
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#9 {main}
2021-01-22 16:30:46 --- ERROR: Kohana_Exception [ 0 ]: The COR_TIPO property does not exist in the Model_Provas class ~ MODPATH\orm\classes\kohana\orm.php [ 573 ]
2021-01-22 16:30:46 --- STRACE: Kohana_Exception [ 0 ]: The COR_TIPO property does not exist in the Model_Provas class ~ MODPATH\orm\classes\kohana\orm.php [ 573 ]
--
#0 C:\xampp\htdocs\corrida\application\views\corredoresprovas\list.php(21): Kohana_ORM->__get('COR_TIPO')
#1 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\corrida\application\views\template.php(132): Kohana_View->__toString()
#5 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\corrida\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Corredoresprovas))
#10 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#13 {main}
2021-01-22 16:50:53 --- ERROR: View_Exception [ 0 ]: The requested view resultados/list could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2021-01-22 16:50:53 --- STRACE: View_Exception [ 0 ]: The requested view resultados/list could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(137): Kohana_View->set_filename('resultados/list')
#1 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(30): Kohana_View->__construct('resultados/list', NULL)
#2 C:\xampp\htdocs\corrida\application\classes\controller\resultados.php(16): Kohana_View::factory('resultados/list')
#3 [internal function]: Controller_Resultados->action_index()
#4 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Resultados))
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#8 {main}
2021-01-22 16:57:44 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '),
            FOREIGN KEY (COR_ID) REFERENCES CORREDORES(COR_ID) ON DELETE REST' at line 6 [ CREATE TABLE IF NOT EXISTS RESULTADOS (
            COR_ID INT (11) unsigned NOT NULL ,
            PRO_ID INT (11) unsigned NOT NULL ,
            RES_INICIO TIME  NOT NULL  default '00:00',
            RES_FIM TIME  NOT NULL  default '00:00',
            PRIMARY KEY  (),
            FOREIGN KEY (COR_ID) REFERENCES CORREDORES(COR_ID) ON DELETE RESTRICT ON UPDATE RESTRICT,
            FOREIGN KEY (PRO_ID) REFERENCES PROVAS(PRO_ID) ON DELETE RESTRICT ON UPDATE RESTRICT
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1; ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2021-01-22 16:57:44 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '),
            FOREIGN KEY (COR_ID) REFERENCES CORREDORES(COR_ID) ON DELETE REST' at line 6 [ CREATE TABLE IF NOT EXISTS RESULTADOS (
            COR_ID INT (11) unsigned NOT NULL ,
            PRO_ID INT (11) unsigned NOT NULL ,
            RES_INICIO TIME  NOT NULL  default '00:00',
            RES_FIM TIME  NOT NULL  default '00:00',
            PRIMARY KEY  (),
            FOREIGN KEY (COR_ID) REFERENCES CORREDORES(COR_ID) ON DELETE RESTRICT ON UPDATE RESTRICT,
            FOREIGN KEY (PRO_ID) REFERENCES PROVAS(PRO_ID) ON DELETE RESTRICT ON UPDATE RESTRICT
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1; ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\corrida\application\classes\model\resultados.php(63): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#1 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(39): Model_Resultados->__construct(NULL)
#2 C:\xampp\htdocs\corrida\application\classes\controller\resultados.php(21): Kohana_ORM::factory('resultados')
#3 [internal function]: Controller_Resultados->action_index()
#4 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Resultados))
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#8 {main}
2021-01-22 16:58:37 --- ERROR: Kohana_Exception [ 0 ]: The RES_INICIO property does not exist in the Model_Corredoresprovas class ~ MODPATH\orm\classes\kohana\orm.php [ 629 ]
2021-01-22 16:58:37 --- STRACE: Kohana_Exception [ 0 ]: The RES_INICIO property does not exist in the Model_Corredoresprovas class ~ MODPATH\orm\classes\kohana\orm.php [ 629 ]
--
#0 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(590): Kohana_ORM->set('RES_INICIO', '10:20')
#1 C:\xampp\htdocs\corrida\application\classes\controller\resultados.php(48): Kohana_ORM->__set('RES_INICIO', '10:20')
#2 [internal function]: Controller_Resultados->action_save()
#3 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Resultados))
#4 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#7 {main}
2021-01-22 16:59:52 --- ERROR: Kohana_Exception [ 0 ]: The RES_INICIO property does not exist in the Model_Corredoresprovas class ~ MODPATH\orm\classes\kohana\orm.php [ 629 ]
2021-01-22 16:59:52 --- STRACE: Kohana_Exception [ 0 ]: The RES_INICIO property does not exist in the Model_Corredoresprovas class ~ MODPATH\orm\classes\kohana\orm.php [ 629 ]
--
#0 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(590): Kohana_ORM->set('RES_INICIO', '10:20')
#1 C:\xampp\htdocs\corrida\application\classes\controller\resultados.php(48): Kohana_ORM->__set('RES_INICIO', '10:20')
#2 [internal function]: Controller_Resultados->action_save()
#3 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Resultados))
#4 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#7 {main}
2021-01-22 17:15:06 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`corrida`.`resultados`, CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`COR_ID`) REFERENCES `CORREDORES` (`COR_ID`)) [ INSERT INTO `RESULTADOS` () VALUES () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2021-01-22 17:15:06 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`corrida`.`resultados`, CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`COR_ID`) REFERENCES `CORREDORES` (`COR_ID`)) [ INSERT INTO `RESULTADOS` () VALUES () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `RE...', false, Array)
#1 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(1153): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(1287): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\corrida\application\classes\controller\resultados.php(54): Kohana_ORM->save()
#4 [internal function]: Controller_Resultados->action_save()
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Resultados))
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#9 {main}
2021-01-22 17:16:00 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`corrida`.`resultados`, CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`COR_ID`) REFERENCES `CORREDORES` (`COR_ID`)) [ INSERT INTO `RESULTADOS` () VALUES () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2021-01-22 17:16:00 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`corrida`.`resultados`, CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`COR_ID`) REFERENCES `CORREDORES` (`COR_ID`)) [ INSERT INTO `RESULTADOS` () VALUES () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `RE...', false, Array)
#1 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(1153): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(1287): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\corrida\application\classes\controller\resultados.php(54): Kohana_ORM->save()
#4 [internal function]: Controller_Resultados->action_save()
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Resultados))
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#9 {main}
2021-01-22 17:16:28 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`corrida`.`resultados`, CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`COR_ID`) REFERENCES `CORREDORES` (`COR_ID`)) [ INSERT INTO `RESULTADOS` () VALUES () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2021-01-22 17:16:28 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`corrida`.`resultados`, CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`COR_ID`) REFERENCES `CORREDORES` (`COR_ID`)) [ INSERT INTO `RESULTADOS` () VALUES () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `RE...', false, Array)
#1 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(1153): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(1287): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\corrida\application\classes\controller\resultados.php(54): Kohana_ORM->save()
#4 [internal function]: Controller_Resultados->action_save()
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Resultados))
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#9 {main}
2021-01-22 17:37:20 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2021-01-22 17:37:20 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('CORRIDA')
#1 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\corrida\application\classes\model\resultados.php(62): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#3 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(39): Model_Resultados->__construct(NULL)
#4 C:\xampp\htdocs\corrida\application\classes\controller\resultados.php(21): Kohana_ORM::factory('resultados')
#5 [internal function]: Controller_Resultados->action_index()
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Resultados))
#7 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#10 {main}
2021-01-22 17:37:48 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2021-01-22 17:37:48 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('CORRIDA')
#1 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\corrida\application\classes\model\resultados.php(62): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#3 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(39): Model_Resultados->__construct(NULL)
#4 C:\xampp\htdocs\corrida\application\classes\controller\resultados.php(21): Kohana_ORM::factory('resultados')
#5 [internal function]: Controller_Resultados->action_index()
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Resultados))
#7 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#10 {main}
2021-01-22 17:38:33 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2021-01-22 17:38:33 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('CORRIDA')
#1 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\corrida\application\classes\model\resultados.php(62): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#3 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(39): Model_Resultados->__construct(NULL)
#4 C:\xampp\htdocs\corrida\application\classes\controller\resultados.php(21): Kohana_ORM::factory('resultados')
#5 [internal function]: Controller_Resultados->action_index()
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Resultados))
#7 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#10 {main}
2021-01-22 17:39:03 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2021-01-22 17:39:03 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('CORRIDA')
#1 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\corrida\application\classes\model\resultados.php(62): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#3 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(39): Model_Resultados->__construct(NULL)
#4 C:\xampp\htdocs\corrida\application\classes\controller\resultados.php(21): Kohana_ORM::factory('resultados')
#5 [internal function]: Controller_Resultados->action_index()
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Resultados))
#7 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#10 {main}
2021-01-22 17:49:41 --- ERROR: Kohana_Exception [ 0 ]: The corredor property does not exist in the Model_Resultados class ~ MODPATH\orm\classes\kohana\orm.php [ 573 ]
2021-01-22 17:49:41 --- STRACE: Kohana_Exception [ 0 ]: The corredor property does not exist in the Model_Resultados class ~ MODPATH\orm\classes\kohana\orm.php [ 573 ]
--
#0 C:\xampp\htdocs\corrida\application\views\classificacao\idade.php(45): Kohana_ORM->__get('corredor')
#1 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\corrida\application\views\template.php(147): Kohana_View->__toString()
#5 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\corrida\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Classificacaoidade))
#10 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#13 {main}
2021-01-22 17:51:33 --- ERROR: View_Exception [ 0 ]: The requested view classificacao/geral could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2021-01-22 17:51:33 --- STRACE: View_Exception [ 0 ]: The requested view classificacao/geral could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(137): Kohana_View->set_filename('classificacao/g...')
#1 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(30): Kohana_View->__construct('classificacao/g...', NULL)
#2 C:\xampp\htdocs\corrida\application\classes\controller\classificacaogeral.php(16): Kohana_View::factory('classificacao/g...')
#3 [internal function]: Controller_Classificacaogeral->action_index()
#4 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Classificacaogeral))
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#8 {main}
2021-01-22 17:56:26 --- ERROR: Kohana_Exception [ 0 ]: The PRO_DATA property does not exist in the Model_Corredoresprovas class ~ MODPATH\orm\classes\kohana\orm.php [ 573 ]
2021-01-22 17:56:26 --- STRACE: Kohana_Exception [ 0 ]: The PRO_DATA property does not exist in the Model_Corredoresprovas class ~ MODPATH\orm\classes\kohana\orm.php [ 573 ]
--
#0 C:\xampp\htdocs\corrida\application\classes\controller\corredoresprovas.php(39): Kohana_ORM->__get('PRO_DATA')
#1 [internal function]: Controller_Corredoresprovas->action_save()
#2 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Corredoresprovas))
#3 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#6 {main}
2021-01-22 17:57:19 --- ERROR: Kohana_Exception [ 0 ]: The COR_ID property does not exist in the Model_Provas class ~ MODPATH\orm\classes\kohana\orm.php [ 573 ]
2021-01-22 17:57:19 --- STRACE: Kohana_Exception [ 0 ]: The COR_ID property does not exist in the Model_Provas class ~ MODPATH\orm\classes\kohana\orm.php [ 573 ]
--
#0 C:\xampp\htdocs\corrida\application\classes\controller\corredoresprovas.php(40): Kohana_ORM->__get('COR_ID')
#1 [internal function]: Controller_Corredoresprovas->action_save()
#2 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Corredoresprovas))
#3 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#6 {main}
2021-01-22 17:57:32 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`corrida`.`corredores_provas`, CONSTRAINT `corredores_provas_ibfk_1` FOREIGN KEY (`COR_ID`) REFERENCES `CORREDORES` (`COR_ID`)) [ INSERT INTO `CORREDORES_PROVAS` () VALUES () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2021-01-22 17:57:32 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`corrida`.`corredores_provas`, CONSTRAINT `corredores_provas_ibfk_1` FOREIGN KEY (`COR_ID`) REFERENCES `CORREDORES` (`COR_ID`)) [ INSERT INTO `CORREDORES_PROVAS` () VALUES () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `CO...', false, Array)
#1 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(1153): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(1287): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\corrida\application\classes\controller\corredoresprovas.php(52): Kohana_ORM->save()
#4 [internal function]: Controller_Corredoresprovas->action_save()
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Corredoresprovas))
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#9 {main}
2021-01-22 17:58:14 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`corrida`.`corredores_provas`, CONSTRAINT `corredores_provas_ibfk_1` FOREIGN KEY (`COR_ID`) REFERENCES `CORREDORES` (`COR_ID`)) [ INSERT INTO `CORREDORES_PROVAS` () VALUES () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2021-01-22 17:58:14 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`corrida`.`corredores_provas`, CONSTRAINT `corredores_provas_ibfk_1` FOREIGN KEY (`COR_ID`) REFERENCES `CORREDORES` (`COR_ID`)) [ INSERT INTO `CORREDORES_PROVAS` () VALUES () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `CO...', false, Array)
#1 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(1153): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(1287): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\corrida\application\classes\controller\corredoresprovas.php(52): Kohana_ORM->save()
#4 [internal function]: Controller_Corredoresprovas->action_save()
#5 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Corredoresprovas))
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#9 {main}
2021-01-22 18:08:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::save() ~ APPPATH\classes\controller\corredores.php [ 60 ]
2021-01-22 18:08:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::save() ~ APPPATH\classes\controller\corredores.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 18:08:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::save() ~ APPPATH\classes\controller\corredores.php [ 60 ]
2021-01-22 18:08:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::save() ~ APPPATH\classes\controller\corredores.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 18:09:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::save() ~ APPPATH\classes\controller\corredores.php [ 60 ]
2021-01-22 18:09:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::save() ~ APPPATH\classes\controller\corredores.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 18:22:43 --- ERROR: Kohana_Exception [ 0 ]: The COR_DATA_NASCIMENTO property does not exist in the Model_Resultados class ~ MODPATH\orm\classes\kohana\orm.php [ 573 ]
2021-01-22 18:22:43 --- STRACE: Kohana_Exception [ 0 ]: The COR_DATA_NASCIMENTO property does not exist in the Model_Resultados class ~ MODPATH\orm\classes\kohana\orm.php [ 573 ]
--
#0 C:\xampp\htdocs\corrida\application\classes\controller\classificacaoidade.php(28): Kohana_ORM->__get('COR_DATA_NASCIM...')
#1 [internal function]: Controller_Classificacaoidade->action_index()
#2 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Classificacaoidade))
#3 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#6 {main}
2021-01-22 18:25:17 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Resultados as array ~ APPPATH\classes\controller\classificacaoidade.php [ 55 ]
2021-01-22 18:25:17 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Resultados as array ~ APPPATH\classes\controller\classificacaoidade.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 18:25:36 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Resultados as array ~ APPPATH\classes\controller\classificacaoidade.php [ 55 ]
2021-01-22 18:25:36 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Resultados as array ~ APPPATH\classes\controller\classificacaoidade.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 18:31:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\views\classificacao\idade.php [ 51 ]
2021-01-22 18:31:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\views\classificacao\idade.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2021-01-22 20:24:39 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2021-01-22 20:24:39 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('CORRIDA')
#1 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\corrida\application\classes\model\corredores.php(55): Kohana_Database_MySQL->query(2, 'CREATE TABLE IF...')
#3 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(39): Model_Corredores->__construct(NULL)
#4 C:\xampp\htdocs\corrida\application\classes\controller\corredores.php(21): Kohana_ORM::factory('corredores')
#5 [internal function]: Controller_Corredores->action_index()
#6 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Corredores))
#7 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#10 {main}
2021-01-22 20:47:10 --- ERROR: Database_Exception [ 1052 ]: Column 'PRO_ID' in where clause is ambiguous [ SELECT `corredores`.`COR_ID` AS `corredores:COR_ID`, `corredores`.`COR_NOME` AS `corredores:COR_NOME`, `corredores`.`COR_CPF` AS `corredores:COR_CPF`, `corredores`.`COR_DATA_NASCIMENTO` AS `corredores:COR_DATA_NASCIMENTO`, `provas`.`PRO_ID` AS `provas:PRO_ID`, `provas`.`PRO_TIPO` AS `provas:PRO_TIPO`, `provas`.`PRO_DATA` AS `provas:PRO_DATA`, `resultados`.`COR_ID` AS `COR_ID`, `resultados`.`PRO_ID` AS `PRO_ID`, `resultados`.`RES_INICIO` AS `RES_INICIO`, `resultados`.`RES_FIM` AS `RES_FIM` FROM `RESULTADOS` AS `resultados` LEFT JOIN `CORREDORES` AS `corredores` ON (`corredores`.`COR_ID` = `resultados`.`COR_ID`) LEFT JOIN `PROVAS` AS `provas` ON (`provas`.`PRO_ID` = `resultados`.`PRO_ID`) WHERE `PRO_ID` = '1' ORDER BY `resultados`.`PRO_ID` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2021-01-22 20:47:10 --- STRACE: Database_Exception [ 1052 ]: Column 'PRO_ID' in where clause is ambiguous [ SELECT `corredores`.`COR_ID` AS `corredores:COR_ID`, `corredores`.`COR_NOME` AS `corredores:COR_NOME`, `corredores`.`COR_CPF` AS `corredores:COR_CPF`, `corredores`.`COR_DATA_NASCIMENTO` AS `corredores:COR_DATA_NASCIMENTO`, `provas`.`PRO_ID` AS `provas:PRO_ID`, `provas`.`PRO_TIPO` AS `provas:PRO_TIPO`, `provas`.`PRO_DATA` AS `provas:PRO_DATA`, `resultados`.`COR_ID` AS `COR_ID`, `resultados`.`PRO_ID` AS `PRO_ID`, `resultados`.`RES_INICIO` AS `RES_INICIO`, `resultados`.`RES_FIM` AS `RES_FIM` FROM `RESULTADOS` AS `resultados` LEFT JOIN `CORREDORES` AS `corredores` ON (`corredores`.`COR_ID` = `resultados`.`COR_ID`) LEFT JOIN `PROVAS` AS `provas` ON (`provas`.`PRO_ID` = `resultados`.`PRO_ID`) WHERE `PRO_ID` = '1' ORDER BY `resultados`.`PRO_ID` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\corrida\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `corredo...', 'Model_Resultado...', Array)
#1 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(902): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\corrida\modules\orm\classes\kohana\orm.php(851): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\corrida\application\views\classificacao\idade.php(20): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(61): include('C:\\xampp\\htdocs...')
#5 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#6 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\corrida\application\views\template.php(147): Kohana_View->__toString()
#8 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(61): include('C:\\xampp\\htdocs...')
#9 C:\xampp\htdocs\corrida\system\classes\kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#10 C:\xampp\htdocs\corrida\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 [internal function]: Kohana_Controller_Template->after()
#12 C:\xampp\htdocs\corrida\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Classificacaoidade))
#13 C:\xampp\htdocs\corrida\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 C:\xampp\htdocs\corrida\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\corrida\index.php(109): Kohana_Request->execute()
#16 {main}