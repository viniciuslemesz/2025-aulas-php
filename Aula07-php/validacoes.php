<?php 

//empty - verificar se uma variavel esta vazia (0 é vazio)
//isset - verificar se uma variavel foi declarada
//is_numeric - verificar se um valor é numerico

function form_post_nao_enviado(){
    return $_SERVER['REQUEST_METHOD' != 'POST'] // verificar se o metodo de retorno é diferente de POST
}



?>