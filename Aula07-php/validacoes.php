<?php 

//empty - verificar se uma variavel esta vazia (0 é vazio)
//isset - verificar se uma variavel foi declarada
//is_numeric - verificar se um valor é numerico

function form_post_nao_enviado(){
    return $_SERVER['REQUEST_METHOD' != 'POST']; // verificar se o metodo de retorno é diferente de POST
}

function validar_campos_form_boletim(){

    foreach ($_POST as $indice => $valor) {

        if ($indice == 'Aluno' && empty($valor)){
            $erros[] = "Nome do aluno não pode estar em branco";
            } else if ($indice == 'Aluno' && strlen($valor) < 3) {
                $erros[] = "Nome do aluno deve ter pelo menos 3 caracteres";

    } else if  ($indice != 'Aluno' && !is_numeric($valor)){
                $erros[] = "Nota de $indice não pode estar vazia, e deve ser um numero";
    }

}

if (isset($erros)){
    return $erros;
}

//retorna array erros, que pode nao conter nenhum erro dentro dele
return $erros;
}


?>