<?php
require "funcoes-sessao.php";
verificaAcesso();

require "../inc/funcoes-usuarios.php";
$id = $_GET['id'];
excluirUsuario($conexao, $id);
header("location:usuarios.php");