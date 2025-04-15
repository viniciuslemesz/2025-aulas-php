<?php require_once 'validacoes.php';?>
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
    
    if (form_post_nao_enviado()) // verificar a funcao
    {
        echo "<h3>Por favor, retorne à home e preencha o formulário</h3>";
        exit;
    }
    
    $erros = validar_campos_form_boletim();

    


    ?>


</body>
</html>