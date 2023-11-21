<?php
/* Script de conexão ao servidor de banco de Dados */
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "microblog_joao_victor";


/* Usando a função mysqli_connect para conectar ao servidor de banco de dados */
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

/* Definindo o chartset da conexão também como utf8 */
mysqli_set_charset($conexao, "utf8");

/* Verificando a conexão */

/* Se não for POSSÍVEL realizar a conexão */
if ( !$conexao ) {
    /* PARE a aplicação e mostre uma mensagem de erro */
   die("Deu ruim: ".mysqli_connect_error());
} // else {
    //Senão, a conexão foi feita com sucesso! */
   //echo "Usuário cadastrado com sucesso!";
//} 










