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
                </div>

                <div> 
                    <h2>Sedan</h2>
                    <img src="img/sedan.png" alt="Carro Sedan"><br>
                </div>
                
                <div> 
                    <h2>SUV</h2>
                    <img src="img/suv.png" alt="Carro SUV"><br>
                </div>
            
            </div>
        </section>
    </section>
    <br>
    <section>
        <?php 
            $data = $_GET["data"];
            $tempo = $_GET["tempo"];
            $modelo = $_GET["modelo"];
            $nomeCliente = $_GET["nome"];
            $obs = $_GET["obs"];

            $modelo1 = $tempo*100;
            $modelo2 = $tempo*200;
            $modelo3 = $tempo*300;

            echo "Olá Sr(a) $nomeCliente, estamos preparamos o seu orçamento.<br>";
            echo "Para o modelo escolhido: <b>$modelo</b>, por <b>$tempo</b> dias a partir da data:<b> ($data)</b>.<br><br>";

            if($modelo == "HATCH"){
                echo "O valor total do orçamento durante <b>$tempo</b> dias sai por <b>R$$modelo1,00</b>.<br>";

            }elseif($modelo == "SEDAN"){
                echo "O valor total do orçamento durante <b>$tempo</b> dias sai por <b>R$$modelo2,00</b>.<br>";
            }else{
                echo "O valor total do orçamento durante <b>$tempo</b> dias sai por <b>R$$modelo3,00</b>.<br>";
            }

            echo "Observações adcionais do cliente:<b> $obs</b><br><br>";
            echo "Agradecemos a sua consulta.<br>"
        ?>

            <h5>WhatsApp para contato: (17) 98107-2933.</h5>
        <br><br>
        <a href="index.php"> << Voltar </a>
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