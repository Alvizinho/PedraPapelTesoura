<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <title>Resultado</title>
</head>
<body align="center">
    <h1>Resultado!</h1>

    <?php
            $valor = $_GET["valor"];
            $bot = rand(0,2);
    
            //Escrever na pagina o que o jogador selecionou
            if ($valor == 0){
                echo "Pedra";
            }elseif ($valor == 1){
                echo "Papel";
            }else {
                echo "Tesoura";
            }

            //Escrever na pagina o que o bot selecionou
            if ($bot == 0){
                echo "Pedra";
            }elseif ($bot == 1){
                echo "Papel";
            }else {
                echo "Tesoura";
            }

            //Laço de repetição para verfificar o resultado do jogo
            //Papel contra pedra
            if ($valor == 1 and $bot == 0){
                echo "Ganhou!";
            }
            //Tesoura contra papel
            elseif ($valor == 2 and $bot == 1){
                echo "Ganhou!";
            }
            //Pedra contra tesoura
            elseif ($valor == 0 and $bot == 2){
                echo "Ganhou!";
            }
            //Empate
            elseif ($valor == $bot){
                echo "Empate!";
            }
            //Derrota
            else {
                echo "Perdeu!";
            }
    ?>
    <a href="index.php" id="voltar"><button type="" <center> Voltar </center></a>
</body>
</html>