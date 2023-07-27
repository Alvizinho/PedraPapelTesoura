<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
        $valor = ($_GET["valor"]);
        $bot = rand(0,2);

        if ($valor == 1 and $bot == 0){
            echo "Ganhou";
            echo "$bot";
        }if ($valor == 2 and $bot == 1){
            echo "Ganhou";
            echo "$bot";
        }if ($valor == 0 and $bot == 2){
            echo "Ganhou";
            echo "$bot";
        }if ($valor == $bot){
            echo "empate";
        }else {
            echo "perdeu";
            echo "$bot";
        }

    ?>
</body>
</html>