<?php
    session_start(); // iniciando a SESSION
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>
    
    <div class="div-conteudo">
        <form method="GET" action="logica/processamento.php">
            <!--O método GET mostra os inputs na URL, diferente do método POST-->
            <label>Primeiro número:</label>
            <input type="text" name="inputNum1" placeholder="Digite o número 1">
            <label>Segundo número:</label>
            <input type="text" name="inputNum2" placeholder="Digite o número 2">
            <select name="selectOperacoes">
                <option value="adicao">Adição</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
            <input id="botao" type="submit" value="Calcular">
        </form>
        <!--SESSION-->
        <!--Faz com que a variável resultado apareça em todas páginas do site, já que os valores só existem em um escopo-->
        <h1>
            <?php
                if(isset($_SESSION['resultado']))
                // verifica se existe uma variável SESSION com a chave 'resultado'
                {
                    echo $_SESSION['resultado']; // caso exista, exibe na tela
                }
            ?>
        </h1>
        <img src="img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>