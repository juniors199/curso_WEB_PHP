<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação PHP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <header>
        <h3>Programação WEB</h3>
        <h4>Treinamentos HTML, CSS e PHP</h4>
    </header>
    <br>

    <section>
        <h1>Programação PHP</h1><br>
        <h2>Reseultados de FGTS</h2>   

            <?php 
                $nomeCliente = $_POST["nome"];
                $salarioCliente = $_POST["salario"];

                $resultadoMensal = $salarioCliente/100 * 8;
                $resultadoAnual = $resultadoMensal * 12;
                echo "<br>Olá Sr(a) $nomeCliente seu recolhimento mensal é de $resultadoMensal";
                echo "<br>E o recolhimento anual é de $resultadoAnual";
            ?>

           <br><br>
           <a href="index.php"><< Voltar</a>

    </section>
    <br>

    <footer>
        <h3>Tectreinamentos Informática LTDA</h3>
        <h4>Programação Web com HTML, CSS e PHP</h4>
        <br>
        <p class="texto-rodape"><b>Contatos</b></p>
        <p class="texto-rodape">E-mail: marcio.spadari@gmail.com</p>
        <p class="texto-rodape">WhatsApp: (17) 98107-2933</p>
        <br>
        <p class="texto-rodape">Desenvolvido por Tectreinamentos Informática</p>
        <p class="texto-rodape">Seguimento do curso abordando Desenvolvido WEB + PHP</p>
    </footer>

</body>
</html>