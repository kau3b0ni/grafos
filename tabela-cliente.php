<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">




    <!-- Main content -->
    <section class="content">
        <!-- #alerta da operação -->
        <?php
        if (isset($_SESSION["mensagem"])) {
            ?>
            <div class="alert alert-<?= $_SESSION["tipo"] ?>">
                <strong><?= $_SESSION["mensagem"] ?></strong>
            </div>
            <?php
        }
        limpa_alerta();
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">CLientes</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Pesquisar">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>CNPJ</th>
                                <th>Telefone</th>
                                <th>Celular</th>
                                <th>E-mail</th>
                            </tr>
                            <?php

                            $clientes = controller\listaCliente();

                            foreach ($clientes as $cliente) :
                            ?>
                            <tr>
                                <td><?= $cliente->nome ?></td>
                                <td><?= $cliente->cpf ?></td>
                                <td><?= $cliente->cnpj ?></td>
                                <td><?= $cliente->telefone ?></td>
                                <td><?= $cliente->celular ?></td>
                                <td><?= $cliente->email ?></td>

                                <td class="actions">
                                    <form action="cliente-edit.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo("$cliente->id"); ?>" >
                                        <button class="btn btn-warning">Edit</button>
                                    </form>
                                </td>
                                <td class="actions">
                                    <form action="remove-cliente.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo("$cliente->id"); ?>" >
                                        <button class="btn btn-danger">remover</button>
                                    </form>
                                </td>


                            </tr>


                                <?php
                            endforeach
                            ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->




