<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07</title>
</head>
<body>
    
<h1>Aula 07 - Home</h1>

<h2>Boletim Bimestral - 1ºBimestre</h2>

    <form action="media.php" method="post">

<p>
    <label for="Aluno">Aluno:</label><br>
    <input type="text" name="Aluno" id="Aluno">
</p>

<p>
    <label for="Matematica">Nota de matemática:</label><br>
    <input type="number" name="NotaMatematica" id="NotaMatematica" step="0.1" >
</p>

<p>
    <label for="Fisica">Nota de física:</label><br>
    <input type="number" name="NotaFisica" id="NotaFisica" step="0.1">
</p>

<p>
    <label for="Biologia">Nota de biologia:</label><br>
    <input type="number" name="NotaBiologia" id="NotaBiologia" step="0.1">
</p>

<p>
    <label for="Portugues">Nota de portugues:</label><br>
    <input type="number" name="NotaPortugues" id="NotaPortugues" step="0.1">
</p>

<p>
    <label for="Historia">Nota de historia:</label><br>
    <input type="number" name="NotaHistoria" id="NotaHistoria" step="0.1">
</p>

<p>
    <label for="Geografia">Nota de geografia:</label><br>
    <input type="number" name="NotaGeografia" id="NotaGeografia" step="0.1">
</p>

<p>
    <label for="Filosofia">Nota de filosofia:</label><br>
    <input type="number" name="NotaFilosofia" id="NotaFilosofia" step="0.1">
</p>

    <button type="submit">Salvar</button>

    </form>

</body>
</html>