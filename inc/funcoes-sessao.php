<?php
/* Sessões no PHP
Recurso usado para o controle de acesso à determinadas paginas e/ou recursos do site.

Exemplos: área administrativa, painel de controle, área de cliente/aluno etc.

Nestas áreas o acesso só é possivel mediante a alguma forma de autenticação. Exemplo: login/senha, digital, facial ect.*/


/* Verificar se já NÃO EXISTE uma sessão de funcionamento */
if( !isset($_SESSION) ){
    // Então inicie uma sessão
    session_start();
}

function verificaAcesso(){
    /* Se NÃO EXISTIR uma variavel de sessão chamada "id" baseada no id de um usuario logado, então significa que ele/ela NÃO ESTÁ LOGADO(A) no sistema */
    if( !isset($_SESSION['id']) ){
        /* Portanto, destrua os dados de sessão, redirecione para pagina login.php e pare o script. */
        session_destroy();
        header("location:..login.php?acesso_negado");
        exit; //die()
    }
}
















