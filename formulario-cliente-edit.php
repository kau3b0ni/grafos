<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Cadastro de Cliente</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php //var_dump($cliente); ?>
            <form class="form-horizontal" action="altera-cliente.php" method="post">
                <div class="box-body">
                    <input type="hidden" class="form-control" type="text" id="id" name="id" value="<?php echo "$cliente->id" ?>">
                    <div class="form-group">
                        <label for="nome" class="col-sm-2 control-label">Nome</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="nome" name="nome" value="<?php echo "$cliente->nome" ?>">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="cpf" class="col-sm-2 control-label">CPF</label>
                        <div class="col-sm-10">
                            <input type="text" name="cpf" class="form-control" id="cpf" value="<?php echo "$cliente->cpf" ?>">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="cnpj" class="col-sm-2 control-label">CNPJ</label>
                        <div class="col-sm-10">
                            <input type="text" name="cnpj" class="form-control" id="cnpj" value="<?php echo "$cliente->cnpj" ?>">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="telefone" class="col-sm-2 control-label">Telefone</label>
                        <div class="col-sm-10">
                            <input type="text" name="telefone" class="form-control" id="telefone" value="<?php echo "$cliente->telefone" ?>">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="celular" class="col-sm-2 control-label">Celular</label>
                        <div class="col-sm-10">
                            <input type="text" name="celular" class="form-control" id="celular" value="<?php echo "$cliente->celular" ?>">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">E-mail.</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="email" value="<?php echo "$cliente->email" ?>">
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




