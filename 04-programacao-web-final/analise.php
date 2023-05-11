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
    

    <section>
        <br><br>
        <h1>Programação PHP</h1><br>
        <h2>Resultado da pesquisa</h2>   

            <?php 
                $pesquisa = $_GET["pesquisa"];

                switch($pesquisa){
                    case "hatch":                        
                        echo "<br><h2>O que é tipo de veículo hatch?</h2>
                        <p>Carros do tipo hatch​ são divididos em dois volumes principais: a caixa do motor e o bloco dos passageiros, que fica junto com o porta-malas.</p>
                        <p>Na prática, isso significa apenas que o automóvel é mais compacto.</p>
                        
                        <p>Uma das primeiras vantagens do hatch é o seu tamanho compacto, que pode facilitar muito na hora de conseguir uma vaga. Além disso, o carro hatch oferece melhor percepção das dimensões do próprio veículo.</p>";
                        break;
                    case "sedan":
                        echo "<h2>Carro para toda família</h2>

                        <p>Com seu espaço interno e um generoso porta-malas, sedans são a opção ideal para famílias que usam o carro para suas tarefas diárias ou para viagens de longa duração. Um sedan comporta confortavelmente as crianças e até mesmo animais de estimação, se necessário.</p>
                        
                        <p>As principal vantagem em adquirir um carro sedan é o conforto, oferecido por um espaço interno maior, e a capacidade do porta-malas — ideal para quem possui filhos e precisa de mais espaço para as bagagens.</p>";
                        break;
                    case"suv":
                        echo '<h2>SUV</h2>
                        <p>Em sua definição básica, SUV é a sigla para "Sport Utility Vehicle", ou "Veículo Utilitário Esportivo", ou seja, um carro destinado a carga/trabalho, como as picapes, mas com uma tocada mais esportiva. Normalmente é equipado com tração nas quatro rodas e caracteristicamente de porte avantajado.</p>
                        
                        <p>Qual a diferença de um carro SUV?</p>
                        <p>Os SUVs são veículos que têm mais adaptabilidade a diferentes terrenos, são mais altos e robustos e, também, confortáveis e arrojados. <p>O motor, no geral, é mais potente e alguns modelos têm, ainda, a opção de tração 4×4.</p>';
                        break;
                    default:
                        echo "Pesquisa nao encontrada";
                        break;
                }               
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