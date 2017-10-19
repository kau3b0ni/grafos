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
            <form class="form-horizontal" action="adiciona-cliente.php" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="nome" class="col-sm-2 control-label">Nome</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome Completo">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="cpf" class="col-sm-2 control-label">CPF</label>
                        <div class="col-sm-10">
                            <input type="text" name="cpf" class="form-control" id="cpf" placeholder="000.000.000-00">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="cnpj" class="col-sm-2 control-label">CNPJ</label>
                        <div class="col-sm-10">
                            <input type="text" name="cnpj" class="form-control" id="cnpj" placeholder="00.000.000/0000-00">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="telefone" class="col-sm-2 control-label">Telefone</label>
                        <div class="col-sm-10">
                            <input type="text" name="telefone" class="form-control" id="telefone" placeholder="(00)0000-0000">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="celular" class="col-sm-2 control-label">Celular</label>
                        <div class="col-sm-10">
                            <input type="text" name="celular" class="form-control" id="celular" placeholder="(00)00000-0000">
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">E-mail.</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@email.com">
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




