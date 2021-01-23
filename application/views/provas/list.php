<section id="lista">
    <h1>Provas</h1>
    
    <!--MENSAGEM DE INCLUSAO, ALTERACAO OU EXCLUSAO-->
    <?php if($mensagem != ""){ ?>
        <?php echo $mensagem ?>
    <?php } ?>
    
  
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <form action="<?php echo url::base() ?>provas/save" class="form-horizontal" id="formEdit" name="formEdit" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="PRO_TIPO" class="col-sm-2 control-label">Tipo*</label>
                        <div class="col-sm-10">
                            <input type="text" validar="int"  class="form-control pequeno" placeholder="Tipo" value="" id="PRO_TIPO" name="PRO_TIPO">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="PRO_DATA" class="col-sm-2 control-label">Data *</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" validar="data"  class="form-control data pequeno" placeholder="Data" value="" id="PRO_DATA" name="PRO_DATA">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <p class="legenda"><em>*</em> Campos obrigatórios.</p>
                    <button type="submit" class="btn pull-right btn-success" id="salvar">Salvar</button>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-mobile">
                        <thead>
                            <tr>
                                    <th style="width: 70px">ID</th>
                                    <th>Tipo</th>
                                    <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //SE TEM CADASTRADO, MOSTRA. SENÃO, MOSTRA O AVISO
                            if (count($provas) > 0) {
                                foreach($provas as $pro){
                                    ?>
                                    <tr><td><span class="label">ID <?php echo $pro->PRO_ID; ?></span><span class="hide-mobile"><?php echo $pro->PRO_ID; ?></span></td>
                                    <td><span class="label">Tipo</span><span class="hide-mobile"><?php echo $pro->PRO_TIPO; ?> KM</span></td>
                                    <td><span class="label">Data</span><span class="hide-mobile"><?php echo Controller_Index::aaaammdd_ddmmaaaa($pro->PRO_DATA); ?></span></td>
                                    </tr>
                                    <?php
                                }
                            }
                            else {
                                ?>
                                <tr>
                                    <td colspan="2" class="naoEncontrado">Nenhum Provas encontrado</td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
    
                <!--EXCLUI TODOS MARCADOS--><!--PAGINACAO-->
                <?php echo $pagination; ?>
            </div>
        </div>
    </div>
</section>

<!--ONDE MONTA O FORMULARIO PARA EXCLUIR OS MARCADOS-->
<div id="formExc"></div>
