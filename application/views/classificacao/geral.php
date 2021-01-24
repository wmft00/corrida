<section id="lista">
    <h1>Classificação Geral</h1>
    
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
                    $colocacao = array();
                    $i = 0;
                    foreach ($resultados as $res){
                        $idade = $res->corredores->COR_DATA_NASCIMENTO;
                        // separando yyyy, mm, ddd
                        list($ano, $mes, $dia) = explode('-', $idade);
                        // data atual
                        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                        // Descobre a unix timestamp da data de nascimento do fulano
                        $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
                        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
                        
                        $colocacao[$i]['id'] = $res->COR_ID;
                        $colocacao[$i]['idade'] = $idade.' anos';
                        $colocacao[$i]['nome'] = $res->corredores->COR_NOME;

                        $HoraEntrada = new DateTime($res->RES_INICIO);
                        $HoraSaida   = new DateTime($res->RES_FIM);
                        $diferenca = $HoraSaida->diff($HoraEntrada)->format('%H:%I:%S');

                        $colocacao[$i]['time'] = $diferenca;
                        $i++;
                    } ?>
                    <table class="table table-bordered table-mobile">
                        <thead>
                            <tr>
                                <th>ID Prova <?php echo $pro->PRO_ID; ?></th>
                                <th colspan="3">Tipo <?php echo $pro->PRO_TIPO; ?> Km - <?php echo Controller_Index::aaaammdd_ddmmaaaa($pro->PRO_DATA); ?></th>
                            </tr>
                            <?php if (count($resultados) > 0){ ?>
                            <tr style="background-color:#AAE6F7;">
                                <th>ID Corredor</th>
                                <th>Idade</th>
                                <th>Nome</th>
                                <th>Posição</th>
                            </tr>
                            <?php } else { ?>
                                <tr style="background-color:#AAE6F7;">
                                <th colspan="4">Nenhum resultado</th>
                            </tr>
                            <?php } ?>
                            
                        </thead>
                        <tbody>
                        <?php 
                            $pos = 1;
                            usort($colocacao, 'sortTime'); 
                            foreach ($colocacao as $col){ ?>
                            <tr style="background-color:#AAE6F7;">
                                <td><?php echo $col['id']; ?></td>
                                <td><?php echo $col['idade']; ?></td>
                                <td><?php echo $col['nome']; ?></td>
                                <td><?php echo $pos; ?>º em <?php echo $col['time']; ?></td>
                            </tr>
                        <?php 
                            $pos++;
                            } 
                        ?>
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
