<!-- ## !!ADICIONE O CABECALHO E O RODAPE PARA ESTA PAGINA -->
<!-- Use o controladorProduto.php para encaminhar os dados do seu cadastro -->

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

<h2>Cadastro de Produtos</h2>
<form action="#" method="post">
    <div class="form-group">
        <label for="produto">Produto:</label>
        <input name="titulo" type="text" class="form-control" id="produto" aria-describedby="nome produto" placeholder="">
    </div>

    <div class="form-group">
        <label for="preco">Preco</label>
        <input name="preco" type="number" step="0.01" class="form-control" id="preco" placeholder="">
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input name="quantidade" type="number" class="form-control" id="quantidade" placeholder="">
    </div>

    <div class="form-group">
        <label for="Categoria">Categoria</label>
        <select name="categoria" class="form-control" id="Categoria">
            <option>Fruta</option>
            <option>Legume</option>
            <option>Hortaliça</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>

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