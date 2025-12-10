<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop, While, Do, For, Foreach</title>
</head>
<body>
    <?php 
        //while
        echo "While <br>";
        $i = 1;
        while($i <= 5){
            echo $i . "<br>"; //Imprimi o valçor de $i e pula a próxima linha
            $i++;
        }
        echo "<br>";

        $j = 2;
        while($j <= 10){
            echo $j . "<br>"; //Imprime os números pares
            $j += 2; // Incrementa de 2 em 2, o mesmo que $j = $j + 2
        }

         //Do While - Faça Enquanto
         echo "Do While <br>";
         $m = 1;
         do{
            echo $m . "<br>";
            $m++;
         }while($m <= 5);

         echo "<br> For <br>";
         //For
         for($n = 1; $n <= 5; $n++){
            echo $n . "<br>";
         }

         for($p = 1; $p <= 5; $p++){
            echo "O quadrado de $p é " . ($p * $p) . "<br>";
         }
         
         echo "<br> Foreach <br>";
        $frutas = ["Maçã", "Banana", "Laranja", "Uva"];
        foreach ($frutas as $fruta){
            echo $fruta . "<br>"; // Imprime o nome de cada fruta 
        }
        echo "<br>";
        $idades = [
            "João" => 25,
            "Maria" => 30,
            "Pedro" => 22
        ];

        foreach ($idades as $nome => $idade){
            echo "$nome tem $idade anos. <br>"; // Exibe nome e idade
        }

    ?>
</body>
</html>