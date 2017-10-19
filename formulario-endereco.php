
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Cadastro de Endereço</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="adiciona-endereco.php" method="post">

                <div class="box-body">
                    <div class="form-group">
                        <label for="nome" class="col-sm-2 control-label">Logradouro</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" type="text" id="cliente_id" name="cliente_id" value="<?php echo ($_SESSION["cliente_id"]) ?>">
                            <input class="form-control" type="text" id="logradouro" name="logradouro" placeholder="Logradouro">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="numero" class="col-sm-2 control-label">Numero</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" id="numero" name="numero" placeholder="Numero">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="bairro" class="col-sm-2 control-label">Bairro</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="bairro" name="bairro" placeholder="Bairro">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="complemento" class="col-sm-2 control-label">Complemento</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="complemento" name="complemento" placeholder="Complemento">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="cep" class="col-sm-2 control-label">CEP</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="cep" name="cep" placeholder="CEP">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="cidade" class="col-sm-2 control-label">Cidade</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="cidade" name="cidade" placeholder="Cidade">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="uf" class="col-sm-2 control-label">UF</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="uf" name="uf" placeholder="UF">
                        </div>
                    </div>
                </div>


                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="reset" class="btn btn-default">Limpar</button>
                    <button type="submit" class="btn btn-info pull-right">Salvar</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->


}