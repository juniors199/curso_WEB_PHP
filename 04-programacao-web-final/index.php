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
    <br>

    <section>
        <br><br><br>
        <h1>Aluguel de Veiculos</h1><br>
        <h2>Página de exemplo - Curso PHP</h2>

        <div class="formulario">
            <form action="analise.php" method="get" target="">
                <input type="text" id="pesquisa" name="pesquisa" placeholder="Digite sua pesquisa." >&nbsp;
                <input type="submit" id="enviar" name="enviar" value="Enviar"><br>
            </form>
        </div>
        <br><br>

        <section class="container" id="grid-container">
            <div class="grid">
                <div> 
                    <h2>Hatch</h2>
                    <img src="img/hatch.png" alt="Carro Hatch"><br>
                    <a href="hatch.php">CLIQUE PARA ALUGAR</a>
                </div>

                <div> 
                    <h2>Sedan</h2>
                    <img src="img/sedan.png" alt="Carro Sedan"><br>
                    <a href="sedan.php">CLIQUE PARA ALUGAR</a>
                </div>
                
                <div> 
                    <h2>SUV</h2>
                    <img src="img/suv.png" alt="Carro SUV"><br>
                    <a href="suv.php">CLIQUE PARA ALUGAR</a>
                </div>
               
            </div>
        </section>
    </section>
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
    <footer>
        <h3>Tectreinamentos Informática LTDA</h3>
        <h4>Programação Web com HTML, CSS e PHP</h4>
        <h4>Pagina modelo para os Cursos de Desenvolvimento Web</h4>
        <br>
        <p class="texto-rodape"><b>Contato:</b> marcio.spadari@gmail.com</p>
        <h6>Desenvolvido por Tectreinamentos Informática</h6>
        <h6>Seguimento do curso abordando Desenvolvido WEB + PHP</h6>
    </footer>

</body>
</html>