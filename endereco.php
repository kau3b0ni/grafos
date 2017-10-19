

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Endereço</h3>
                <address>
                    <br />
                    <?php $endereco = \controller\buscaEndereco($cliente_id); ?>
                    <?php
                        echo $endereco->logradouro;
                        echo "<br />";
                        echo $endereco->numero;
                        echo "<br />";
                        echo $endereco->bairro;
                        echo "<br />";
                        echo $endereco->complemento;
                        echo "<br />";
                        echo $endereco->cep;
                        echo "<br />";
                        echo $endereco->cidade;
                        echo "<br />";
                        echo $endereco->uf;
                        echo "<br />";
                    ?>
                </address>
            </div>
        </div>
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->


}