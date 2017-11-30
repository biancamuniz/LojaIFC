<?php


require_once __DIR__."../models/Produto.php";
require_once __DIR__."../models/CrudProdutos.php";

if ( $_GET['acao'] == 'cadastrar'){

    $produto = new Produto($_POST['nome'], $_POST['preco'], $_POST['categoria'], $_POST['quantidade']);
    
    $crud = new CrudProdutos();
    $crud->salvar($produto);

    header('location: ../views/admin/produtos.php?msg=cadastrou com sucesso');
}

//quando um valor da URL for igual a editar faça isso
if ( ? == 'editar'){

    //algoritmo para editar
    //redirecione para a página de produtos
}

//quando um valor da URL for igual a excluir faça isso
if ( ? == 'excluir'){

    //algoritmo para excluir
    //redirecione para a página de produtos
}