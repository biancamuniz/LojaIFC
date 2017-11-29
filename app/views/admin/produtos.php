<?php

    require_once __DIR__."/../../models/CrudProdutos.php";
    $crud = new CrudProdutos();

    $listaProdutos = $crud->getProdutos();

    ## !!ADICIONE AQUI O CABECALHO DA PAGINA


?>

<!--Barra de busca-->
<link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../../../assets/css/ifc-style.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Página inicial</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container-fluid">

    <!-- Page Features -->
    <div class="row">

        <div class="col-md-2 px-0 admin-menu" style="position: fixed; top: 50px; bottom: 0; ">
            <img src="../../../assets/imagens/avatar.gif" alt="" class="img-fluid rounded-circle" style="padding: 15px;">
            <ul>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="cadastro-produto.php">Cadastrar Produto</a></li>
                <li><a href="editar-produto.php">Editar Produtos</a></li>
            </ul>
        </div>

        <div class="col-md-10 offset-md-2" style="margin-top: 45px; margin-bottom: 20px;">

<div class="row">
    <div class="col-md-12">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="digite o nome do produto" aria-describedby="basic-addon2">
            <button class="input-group-addon" id="basic-addon2">buscar</button>
        </div>
    </div>
</div>
<br>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Título</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Categoria</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($listaProdutos as $produto): ?>
    <tr>
        <th scope="row">mostre o código do produto</th>
        <td>##mostre o nome</td>
        <td>##mostre o preco</td>
        <td>##mostre o estoque</td>
        <td>##mostre a categoria</td>
        <td>##editar | remover</td>
    </tr>
   <?php endforeach; ?>

    </tbody>
</table>

<br />
<!-- Footer -->
<div class="row footer">
    <footer class="py-3 bg-dark col-md-12">
        <p class="m-0 text-center text-white">Instituto Federal Catarinense de Educação, Ciência e Tecnologia</p>
    </footer>
</div>

</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript -->
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>