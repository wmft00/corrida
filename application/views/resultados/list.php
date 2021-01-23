<section id="lista">
    <h1>Corredores Prova</h1>
    
    <!--MENSAGEM DE INCLUSAO, ALTERACAO OU EXCLUSAO-->
    <?php if($mensagem != ""){ ?>
        <?php echo $mensagem ?>
    <?php } ?>
    
  
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <form action="<?php echo url::base() ?>resultados/save" class="form-horizontal" id="formEdit" name="formEdit" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="PRO_ID" class="col-sm-2 control-label">Prova *</label>
                        <div class="col-sm-10">
                            <select type="text" validar="int"  class="form-control select2" placeholder="Prova" value="" id="PRO_ID" name="PRO_ID">
                                <option value="">Selecione a prova</option>
                                <?php foreach ($provas as $pro){ ?>
                                    <option value="<?php echo $pro->PRO_ID; ?>"><?php echo $pro->PRO_TIPO; ?> KM - <?php echo Controller_Index::aaaammdd_ddmmaaaa($pro->PRO_DATA); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="COR_ID" class="col-sm-2 control-label">Corredor *</label>
                        <div class="col-sm-10">
                            <select type="text" validar="int"  class="form-control select2" placeholder="Corredor" value="" id="COR_ID" name="COR_ID">
                                <option value="">Selecione o corredor</option>
                                <?php foreach ($corredores as $cor){ ?>
                                    <option value="<?php echo $cor->COR_ID; ?>"><?php echo $cor->COR_NOME; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="RES_INICIO" class="col-sm-2 control-label">Início *</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <input type="text" validar="texto"  class="form-control hora pequeno" placeholder="Início" value="" id="RES_INICIO" name="RES_INICIO">
                        </div>
                    </div>
                                                    
                    <div class="form-group">
                        <label for="RES_FIM" class="col-sm-2 control-label">Fim *</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <input type="text" validar="texto"  class="form-control hora pequeno" placeholder="Fim" value="" id="RES_FIM" name="RES_FIM">
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
                                <th>Prova</th>
                                <th>Corredor</th>
                                <th>Início</th>
                                <th>Fim</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //SE TEM CADASTRADO, MOSTRA. SENÃO, MOSTRA O AVISO
                            if (count($resultados) > 0) {
                                foreach($resultados as $res){
                                    ?>
                                    <tr><td><span class="label">Prova </span><span class="hide-mobile"><?php echo $res->provas->PRO_TIPO; ?> KM  - <?php echo Controller_Index::aaaammdd_ddmmaaaa($res->provas->PRO_DATA); ?></span></td>
                                    <td><span class="label">Corredor</span><span class="hide-mobile"><?php echo $res->corredores->COR_NOME; ?></span></td>

                                    <td><span class="label">Início</span><span class="hide-mobile"><?php echo $res->RES_INICIO; ?></span></td>
                                    <td><span class="label">Fim</span><span class="hide-mobile"><?php echo $res->RES_FIM; ?></span></td>
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
