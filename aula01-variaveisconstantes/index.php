<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🐘 PHP</title>
</head>
<body>
    <h2>
        <?php 
            echo "Meu primeiro PHP\u{1F600}";
            echo "<br> <br>";
            //Váriaveis
            $nome = "Ricardo";
            $sobrenome = "Santana";

            // A variavel pode ser mudada
            $nome = "Luis Ricardo";
            echo "Seja bem vindo, $nome $sobrenome";
            echo "<br> <br>";

            const time = "Palmeiras";
            echo "Meu time de futebol é " . time;
            echo "<br> <br>";

            echo "Seja bem vindo, $nome $sobrenome seu time é " . time;

            echo "<br> <br>";

            //tipos de dados
            $sobrenome2 = "Oliveira"; //string
            $idade = 45; //int
            $peso = 85.3; //float
            $casado = false; //boolean

            echo "$sobrenome $idade $peso";
            //Método 1: Usando var_dump para exibir o valor do booleano
            var_dump($casado);

            //Método 2: Usando uma conversão para string
            echo ($casado ? "Casado" : "Não é casado");

        ?>
    </h2>
    <p>Meu primeiro páragrafo</p>
</body>
</html>