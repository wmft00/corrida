<section id="lista">
    <h1>Corredores</h1>
    
    <!--MENSAGEM DE INCLUSAO, ALTERACAO OU EXCLUSAO-->
    <?php if($mensagem != ""){ ?>
        <?php echo $mensagem ?>
    <?php } ?>
    
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
            <form action="<?php echo url::base() ?>corredores/save" class="form-horizontal" id="formEdit" name="formEdit" method="post">
                    
            <div class="box-body">
        
            <!--SE NECESSÁRIO, EXPLICAÇÃO-->
            <!--<p></p>-->
            <!--FORMULARIO COM INFORMACOES-->
            <div class="form-group">
                <label for="COR_NOME" class="col-sm-2 control-label">Nome *</label>
                <div class="col-sm-10">
                    
                    <input type="text" validar="texto"  class="form-control  " placeholder="Nome" value="" id="COR_NOME" name="COR_NOME" >
                </div>
            </div>
            <div class="form-group">
                <label for="COR_CPF" class="col-sm-2 control-label">CPF *</label>
                <div class="col-sm-10">
                    
                    <input type="text" validar="texto"  class="form-control cpf" placeholder="CPF" value="" id="COR_CPF" name="COR_CPF" >
                </div>
            </div>
            <div class="form-group">
                <label for="COR_DATA_NASCIMENTO" class="col-sm-2 control-label">Data Nascimento *</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" validar="nascimento"  class="form-control data pequeno" placeholder="Data Nascimento" value="" id="COR_DATA_NASCIMENTO" name="COR_DATA_NASCIMENTO">
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
                                <th style="width: 70px">ID
                                </th>
                                <th>Nome
                                </th>
                                <th>CPF
                                </th>
                                <th>Data de Nascimento
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //SE TEM CADASTRADO, MOSTRA. SENÃO, MOSTRA O AVISO
                            if (count($corredores) > 0) {
                                foreach($corredores as $cor){
                                    ?>
                                    <tr><td><span class="label">ID <?php echo $cor->COR_ID; ?></span><span class="hide-mobile"><?php echo $cor->COR_ID; ?></span></td>
                                        <td><span class="label">Nome</span><?php echo $cor->COR_NOME; ?></td>
                                        <td><span class="label">CPF</span><?php echo $cor->COR_CPF; ?></td>
                                        <td><span class="label">Data de Nascimento</span><?php echo Controller_Index::aaaammdd_ddmmaaaa($cor->COR_DATA_NASCIMENTO); ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            else {
                                ?>
                                <tr>
                                    <td colspan="4" class="naoEncontrado">Nenhum Corredores encontrado</td>
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
