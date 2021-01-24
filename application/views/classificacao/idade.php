<section id="lista">
    <h1>Classificação por Idade</h1>
    
    <!--MENSAGEM DE INCLUSAO, ALTERACAO OU EXCLUSAO-->
    <?php if($mensagem != ""){ ?>
        <?php echo $mensagem ?>
    <?php } ?>
    
  
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                <?php foreach ($provas as $pro){
                    $resultados = ORM::factory("resultados")
                    ->with('corredores')
                    ->with('provas')
                    ->where('resultados.PRO_ID','=',$pro->PRO_ID)
                    ->find_all();
                    $d25 = array();
                    $d35 = array();
                    $d45 = array();
                    $d55 = array();
                    $dvei = array();
                    foreach ($resultados as $res){
                        $idade = $res->corredores->COR_DATA_NASCIMENTO;
                        // separando yyyy, mm, ddd
                        list($ano, $mes, $dia) = explode('-', $idade);
                        // data atual
                        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                        // Descobre a unix timestamp da data de nascimento do fulano
                        $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
                        // cálculo
                        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
                        if ($idade >= 18 and $idade <= 25) { 
                            array_push($d25, $res);
                        } else if ($idade > 25 and $idade <= 35){
                            array_push($d35, $res);
                        } else if ($idade > 35 and $idade <= 45){
                            array_push($d45, $res);
                        }  else if ($idade > 45 and $idade <= 55){
                            array_push($d55, $res);
                        } else if ($idade > 55){
                            array_push($dvei, $res);
                        } 
                    } ?>
                    <table class="table table-bordered table-mobile">
                        <thead>
                            <tr>
                                <th>ID Prova <?php echo $pro->PRO_ID; ?></th>
                                <th colspan="3">Tipo <?php echo $pro->PRO_TIPO; ?> Km - <?php echo Controller_Index::aaaammdd_ddmmaaaa($pro->PRO_DATA); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                                <!--de 18 a 25 anos -->
                                <?php if (count($d25) > 0){
                                $colocacao = array();
                                $i = 0;
                                foreach ($d25 as $d){

                                    $idade = $d->corredores->COR_DATA_NASCIMENTO;
                                    // separando yyyy, mm, ddd
                                    list($ano, $mes, $dia) = explode('-', $idade);
                                    // data atual
                                    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                                    // Descobre a unix timestamp da data de nascimento do fulano
                                    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
                                    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
                                    
                                    $colocacao[$i]['id'] = $d->COR_ID;
                                    $colocacao[$i]['idade'] = $idade.' anos';
                                    $colocacao[$i]['nome'] = $d->corredores->COR_NOME;

                                    $HoraEntrada = new DateTime($d->RES_INICIO);
                                    $HoraSaida   = new DateTime($d->RES_FIM);
                                    $diferenca = $HoraSaida->diff($HoraEntrada)->format('%H:%I:%S');

                                    $colocacao[$i]['time'] = $diferenca;
                                    $i++;
                                }
                                usort($colocacao, 'sortTime'); ?>
                                <tr style="background-color:#AAE6F7;">
                                    <th colspan="4">De 18 a 25 anos</th>
                                </tr>
                                <tr style="background-color:#AAE6F7;">
                                    <th>ID Corredor</th>
                                    <th>Idade</th>
                                    <th>Nome</th>
                                    <th>Posição</th>
                                </tr>
                                <?php
                                $pos = 1;
                                foreach ($colocacao as $col){ ?>
                                <tr style="background-color:#AAE6F7;">
                                    <td><?php echo $col['id']; ?></td>
                                    <td><?php echo $col['idade']; ?></td>
                                    <td><?php echo $col['nome']; ?></td>
                                    <td><?php echo $pos; ?>º</td>
                                </tr>
                                <?php 
                                    $pos++;
                                    }
                                } else { ?>
                                <tr style="background-color:#AAE6F7;">
                                    <td colspan="4">Nenhum competidor entre 18 e 25 anos</td>
                                </tr>
                                <?php } ?>

                                <!--de 25 a 35 anos -->
                                <?php if (count($d35) > 0){
                                $colocacao = array();
                                $i = 0;
                                foreach ($d35 as $d){

                                    $idade = $d->corredores->COR_DATA_NASCIMENTO;
                                    // separando yyyy, mm, ddd
                                    list($ano, $mes, $dia) = explode('-', $idade);
                                    // data atual
                                    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                                    // Descobre a unix timestamp da data de nascimento do fulano
                                    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
                                    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
                                    
                                    $colocacao[$i]['id'] = $d->COR_ID;
                                    $colocacao[$i]['idade'] = $idade.' anos';
                                    $colocacao[$i]['nome'] = $d->corredores->COR_NOME;

                                    $HoraEntrada = new DateTime($d->RES_INICIO);
                                    $HoraSaida   = new DateTime($d->RES_FIM);
                                    $diferenca = $HoraSaida->diff($HoraEntrada)->format('%H:%I:%S');

                                    $colocacao[$i]['time'] = $diferenca;
                                    $i++;
                                }
                                usort($colocacao, 'sortTime'); ?>
                                <tr style="background-color:#F6F794;">
                                    <th colspan="4">De 25 a 35 anos</th>
                                </tr>
                                <tr style="background-color:#F6F794;">
                                    <th>ID Corredor</th>
                                    <th>Idade</th>
                                    <th>Nome</th>
                                    <th>Posição</th>
                                </tr>
                                <?php
                                $pos = 1;
                                foreach ($colocacao as $col){ ?>
                                <tr style="background-color:#F6F794;">
                                    <td><?php echo $col['id']; ?></td>
                                    <td><?php echo $col['idade']; ?></td>
                                    <td><?php echo $col['nome']; ?></td>
                                    <td><?php echo $pos; ?>º</td>
                                </tr>
                                <?php 
                                    $pos++;
                                    }
                                } else { ?>
                                <tr style="background-color:#F6F794;">
                                    <td colspan="4">Nenhum competidor entre 25 e 35 anos</td>
                                </tr>
                                <?php } ?>

                                <!--de 35 a 45 anos -->
                                <?php if (count($d45) > 0){
                                $colocacao = array();
                                $i = 0;
                                foreach ($d45 as $d){

                                    $idade = $d->corredores->COR_DATA_NASCIMENTO;
                                    // separando yyyy, mm, ddd
                                    list($ano, $mes, $dia) = explode('-', $idade);
                                    // data atual
                                    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                                    // Descobre a unix timestamp da data de nascimento do fulano
                                    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
                                    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
                                    
                                    $colocacao[$i]['id'] = $d->COR_ID;
                                    $colocacao[$i]['idade'] = $idade.' anos';
                                    $colocacao[$i]['nome'] = $d->corredores->COR_NOME;

                                    $HoraEntrada = new DateTime($d->RES_INICIO);
                                    $HoraSaida   = new DateTime($d->RES_FIM);
                                    $diferenca = $HoraSaida->diff($HoraEntrada)->format('%H:%I:%S');

                                    $colocacao[$i]['time'] = $diferenca;
                                    $i++;
                                }
                                usort($colocacao, 'sortTime'); ?>
                                <tr style="background-color:#F4DAE3;">
                                    <th colspan="4">De 35 a 45 anos</th>
                                </tr>
                                <tr style="background-color:#F4DAE3;">
                                    <th>ID Corredor</th>
                                    <th>Idade</th>
                                    <th>Nome</th>
                                    <th>Posição</th>
                                </tr>
                                <?php
                                $pos = 1;
                                foreach ($colocacao as $col){ ?>
                                <tr style="background-color:#F4DAE3;">
                                    <td><?php echo $col['id']; ?></td>
                                    <td><?php echo $col['idade']; ?></td>
                                    <td><?php echo $col['nome']; ?></td>
                                    <td><?php echo $pos; ?>º</td>
                                </tr>
                                <?php 
                                    $pos++;
                                    }
                                } else { ?>
                                <tr style="background-color:#F4DAE3;">
                                    <td colspan="4">Nenhum competidor entre 35 e 45 anos</td>
                                </tr>
                                <?php } ?>

                                <!--de 45 a 55 anos -->
                                <?php if (count($d55) > 0){
                                $colocacao = array();
                                $i = 0;
                                foreach ($d55 as $d){

                                    $idade = $d->corredores->COR_DATA_NASCIMENTO;
                                    // separando yyyy, mm, ddd
                                    list($ano, $mes, $dia) = explode('-', $idade);
                                    // data atual
                                    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                                    // Descobre a unix timestamp da data de nascimento do fulano
                                    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
                                    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
                                    
                                    $colocacao[$i]['id'] = $d->COR_ID;
                                    $colocacao[$i]['idade'] = $idade.' anos';
                                    $colocacao[$i]['nome'] = $d->corredores->COR_NOME;

                                    $HoraEntrada = new DateTime($d->RES_INICIO);
                                    $HoraSaida   = new DateTime($d->RES_FIM);
                                    $diferenca = $HoraSaida->diff($HoraEntrada)->format('%H:%I:%S');

                                    $colocacao[$i]['time'] = $diferenca;
                                    $i++;
                                }
                                usort($colocacao, 'sortTime'); ?>
                                <tr style="background-color:#DFB6F6;">
                                    <th colspan="4">De 45 a 55 anos</th>
                                </tr>
                                <tr style="background-color:#DFB6F6;">
                                    <th>ID Corredor</th>
                                    <th>Idade</th>
                                    <th>Nome</th>
                                    <th>Posição</th>
                                </tr>
                                <?php
                                $pos = 1;
                                foreach ($colocacao as $col){ ?>
                                <tr style="background-color:#DFB6F6;">
                                    <td><?php echo $col['id']; ?></td>
                                    <td><?php echo $col['idade']; ?></td>
                                    <td><?php echo $col['nome']; ?></td>
                                    <td><?php echo $pos; ?>º</td>
                                </tr>
                                <?php 
                                    $pos++;
                                    }
                                } else { ?>
                                <tr style="background-color:#DFB6F6;">
                                    <td colspan="4">Nenhum competidor entre 45 e 55 anos</td>
                                </tr>
                                <?php } ?>

                                <!--de 45 a 55 anos -->
                                <?php if (count($dvei) > 0){
                                $colocacao = array();
                                $i = 0;
                                foreach ($dvei as $d){

                                    $idade = $d->corredores->COR_DATA_NASCIMENTO;
                                    // separando yyyy, mm, ddd
                                    list($ano, $mes, $dia) = explode('-', $idade);
                                    // data atual
                                    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                                    // Descobre a unix timestamp da data de nascimento do fulano
                                    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
                                    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
                                    
                                    $colocacao[$i]['id'] = $d->COR_ID;
                                    $colocacao[$i]['idade'] = $idade.' anos';
                                    $colocacao[$i]['nome'] = $d->corredores->COR_NOME;

                                    $HoraEntrada = new DateTime($d->RES_INICIO);
                                    $HoraSaida   = new DateTime($d->RES_FIM);
                                    $diferenca = $HoraSaida->diff($HoraEntrada)->format('%H:%I:%S');

                                    $colocacao[$i]['time'] = $diferenca;
                                    $i++;
                                }
                                usort($colocacao, 'sortTime'); ?>
                                <tr style="background-color:#BDBDBD;">
                                    <th colspan="4">Acima de 55 anos</th>
                                </tr>
                                <tr style="background-color:#BDBDBD;">
                                    <th>ID Corredor</th>
                                    <th>Idade</th>
                                    <th>Nome</th>
                                    <th>Posição</th>
                                </tr>
                                <?php
                                $pos = 1;
                                foreach ($colocacao as $col){ ?>
                                <tr style="background-color:#BDBDBD;">
                                    <td><?php echo $col['id']; ?></td>
                                    <td><?php echo $col['idade']; ?></td>
                                    <td><?php echo $col['nome']; ?></td>
                                    <td><?php echo $pos; ?>º</td>
                                </tr>
                                <?php 
                                    $pos++;
                                    }
                                } else { ?>
                                <tr style="background-color:#BDBDBD;">
                                    <td colspan="4">Nenhum competidor acima de 55 anos</td>
                                </tr>
                                <?php } ?>
   
                        </tbody>
                    </table>
                    <hr>
                <?php } ?>
                </div>
    
                <!--EXCLUI TODOS MARCADOS--><!--PAGINACAO-->
                <?php echo $pagination; ?>
            </div>
        </div>
    </div>
</section>

<!--ONDE MONTA O FORMULARIO PARA EXCLUIR OS MARCADOS-->
<div id="formExc"></div>
<?php 
function sortTime($a, $b){
    return $a['time'] > $b['time'];
} ?> 
