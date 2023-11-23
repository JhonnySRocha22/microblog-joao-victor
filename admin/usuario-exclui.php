<?php
require "../inc/funcoes-sessao.php";
verificaAcesso();

//Verificando se o usuario pode entrar nesta página.
verificaTipo();


require "../inc/funcoes-usuarios.php";
$id = $_GET['id'];
excluirUsuario($conexao, $id);
header("location:usuarios.php");