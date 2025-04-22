<?php require_once 'validacoes.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - Boletim</title>
</head>
<body>
    
    <h1>Aula 07 - Boletim</h1>

    <?php 
    
        if (form_post_nao_enviado()) {
            echo "<h3>Por favor, retorne à home e preencha o formulário</h3>";
            exit;
        }


        if (!empty($erros = validar_campos_form_boletim())) {
            
            mostrar_array_erros($erros);
            exit;
        }

        //verificar se estao no intervalo correto (0 - 10)
        if (!empty($erros = verificar_intervalo_notas())) {
            
            mostrar_array_erros($erros);
            exit;
        }
        
        // apos todas verificações prosseguir 

        // armazenar localmente os dados registrados no array superglobal $_POST
        $aluno = $_POST; // todos os dados de $_POST estao em $aluno
        
        // para visualização
        //echo "<pre>";
        //print_r($aluno);
        //echo "</pre>";

        $media = 0;
        $indice_maior = "";
        $indice_menor = "";
        $maior = 0;
        $menor = 10;
        // percorrer array dados

        echo "<h2>Boletim - 1º Bimestre</h2>";
        foreach ($aluno as $indice => $valor){

            echo "$indice: $valor<br>";

            // somando as notas para posteriormente calcular a media:
            // verificar se o $valor é numerico
            // verificar se o $indice nao é 'Aluno'

            if(is_numeric($valor)){
                
                $media += $valor; 
            }

            if($valor < $menor){

                $menor = $valor;
                $indice_menor = $indice; // copia o indice da menor nota
            }

            if($valor > $maior){
                $maior = $valor;
                $indice_maior = $indice; // copia o indice da maior nota
            }
            
        }
        //finalizar o calculo da media
        $media /= 8; // $media recebe seu proprio valor dividido por 8;

        // Mostrar media:
        echo "Media bimestral: " . formatar_nota($media) . "<br>";
        // mostrar menor nota
        echo "Menor nota: $menor <br>";
        //mostrar maior nota
        echo "Maior nota: $maior <br>";

        // mostrar conceito:
        if($media <= 4)
        {
            $conceito = 'E';
        }
        else if($media < 6){
            $conceito = 'D';
        }
        else if($media<8){
            $conceito = 'C';
        }
        else if($media < 9)
        {
            $conceito = 'B';
        }
        else
        {
            $conceito = 'A';
        }

        echo "Maior nota bimestral: $indice: " . formatar_nota($maior) . "<br>";






    ?>

        <p>
            <a href="index.php">
            Voltar para home
        </a>
        </p>


</body>
</html>