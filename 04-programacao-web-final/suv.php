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
        <div class="logo">
            <h3>Programação WEB</h3>
            <h4>Treinamentos HTML, CSS e PHP</h4>
        </div>
        <div class="btn-home">
            <a href="index.php">Inicio</a>
        </div>
    </header>
    <br><br><br><br>

    <section>
        <h1>Programação PHP</h1><br>
        <h2>Mais sobre carros SUV:</h2>  
        <br><br>
        
            <main class="main-content">
                <img src="img/suv-pesquisa.png" alt="Pesquisa sobre SUV"> <br><br>

                <h3>O que é um carro sedan:</h3>

                <p>A sigla SUV significa Sport Utility Vehicle -- ou seja, veículo utilitário esportivo. As SUVs costumam ter porte avantajado, além de interior espaçoso e possibilidade de trafegar dentro e fora da cidade.</p>

            </main>

            <br><br>

            <section>
                <fieldset>
                    <legend><h2>Consulte um orçamento de aluguel.</h2></legend>
                        <form action="aluguel.php" method="get" target="">
                            <label for="data">Data do orçamento:</label><br>
                            <input type="date" id="data" name="data">
                            <br><br>
                            <label for="tempo">Tempo de aluguel (dias):</label><br>
                            <input type="text" id="tempo" name="tempo">

                            <br><br>

                            <label>Escolha o veiculo(modelo):</label>
                            <select name="modelo">
                                <option>
                                    HATCH
                                </option>
                                <option>
                                    SEDAN
                                </option>
                                <option> SUV </option>
                            </select>

                            <br><br>

                            <label for="nomeCliente">Insira seu nome:</label><br>
                            <input type="text" id="nomeCliente" name="nome" placeholder="Insira seu nome completo.">

                            <br><br>

                            <label for="obs">Observações adicionais:</label><br>
                            <input type="text" id="obs" name="obs" placeholder="Alguma observação?">

                            <br><br>

                            <input type="submit" name="Enviar">
                        </form>
                </fieldset>
            </section>

        

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