<?php 

    function form_post_nao_enviado() {
        return $_SERVER['REQUEST_METHOD'] != 'POST';
    }

    // verifica se campo ficou vazio
    function validar_campos_form_boletim() {

        $erros = array();
        foreach ($_POST as $indice => $valor) {
            
            // se o campo for 'Aluno' E seu valor estiver vazio:
            if ($indice == 'Aluno' && empty($valor)) {
                $erros[] = "Nome do aluno não pode estar vazio";
            
            // senão, se o campo NÃO for 'Aluno' E seu valor NÃO for numérico:
            } else if ($indice != 'Aluno' && !is_numeric($valor)){
                $erros[] = "Nota de $indice não pode estar vazia, e deve ser um número";
            }

        }

        // retorna array erros, que pode não conter nenhum erro dentro dele...
        return $erros;

    }

    function mostrar_array_erros($erros) {

        echo "Verifique os erros abaixo:<br>";
        foreach ($erros as $erro_atual) {
            echo $erro_atual . "<br>";
        }
    }

    //função para validar intervalos das notas
    function verificar_intervalo_notas()
    {
        $erros = array(); // prepara array de erros

        foreach ($_POST as $indice => $valor){

            if($indice != 'Aluno' && ($valor < 0 || $valor > 10)){

                $erros[] = "Nota de $indice deve estar entre 0 e 10";
            }

        }

        return $erros;
    }

    function formatar_nota($nota){
        return number_format($nota, "1", ',', '.');
    }



?>