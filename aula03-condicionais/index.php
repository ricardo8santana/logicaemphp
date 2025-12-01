<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    <?php 
        //Condicional
        if(1 < 2){
            echo "O número 1 é menor <br>";
        }

        $idade = 18;
        if($idade >= 18){
            echo "Você é maior de idade";
        }
        echo "<br>";

        //Condicional else
        $a = 10;
        $b = 14;

        if($a == $b){
            echo "As variaveis são iguais.";
        }else{
            echo "As variaveis são difernetes.";
        }
        echo"<br>";

        //Condicional elseif
        $idadepessoa = 25;

        if($idadepessoa < 13){
            echo"Você é uma criança";
        }else if ($idadepessoa >= 13 && $idadepessoa <= 19){
            echo"Você é adolescente.";
        }else if($idadepessoa >= 20 && $idadepessoa <= 59){
            echo"Você é um adulto.";
        }else {
            echo"Você é idoso";
        }
        echo"<br>";

        //Condicional switch
        $numero = 3;

        switch(true){
            case($numero < 5):
                echo"O número é menor a 5.";
            break;
            case($numero == 5):
                echo"O número é igual a 5.";
            break;
            case($numero > 5):
                echo "Número é maior que 5.";
            break;
            default:
                echo"Número não identificado!";
            break;
        }
        echo "<br>";
        
        $animal = "gato";

        switch($animal){
            case "cachorro":
                echo"É um cachorro";
                break;
            
            case "peixe":
                echo "É um peixe";
            break;

            default:
            //Só executa se nenhum case anterior bateu
            echo "Animal não encontrado!";
            break;
        }


    ?>
</body>
</html>