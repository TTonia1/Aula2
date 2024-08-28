<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aula2</title>
</head>
<body>
    <div>
        <form method="post">
            <h1>Questão 3</h1>
            <label for="celcius"> Temperatura em Celcius:</label>
            <input type="number" id="celcius" name="celcius" step="0.01" required>
            <button type="submit" name="converter_fahrenheit">converter para fahrenheit</button>
        </form>
        <form method="post">
            <h1>Questão 3</h1>
            <label for="fahrenheit"> Temperatura em fahrenheit:</label>
            <input type="number" id="fahrenheit" name="fahrenheit" step="0.01" required>
            <button type="submit" name="converter_celcius">converter para Celcius</button>
        </form>
        <form method="post">
            <h1>TRIANGULO</h1>
            <label for='base'>A base do triangulo: </label>
            <input type='number' id='base' name='base' step='0.01' required>
            <label for='altura'>A altura do triangulo:</label>
            <input type='number' id='altura' name='altura' step='0.01' required>
            <button type="submit" name="area_triangulo">A área é de</button>
        </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['converter_fahrenheit'])){
            $celcius = $_POST['celcius'];
            $fahrenheit = ($celcius *1.8 +32);
            echo '<p class = "resultado">'.$celcius.'ºC é igual a '.(int)$fahrenheit.'°F </p>';
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['converter_celcius'])){
            $fahrenheit = $_POST['fahrenheit'];
            $celcius = ($fahrenheit-32)/1.8;
            echo '<p class = "resultado">'.$fahrenheit.'°F é igual a '.(int)$celcius.'ºC</p>';
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['area_triangulo'])){
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            $area_triangulo = ($base * $altura)/2;
            if($area_triangulo> 100){
                echo '<p class = "resultado" >A área do triangulo exede o valor limite de 100</p>';
                echo '<p class = "resultado" >A área do triangulo é: '. $area_triangulo.'</p>';
            }else if($area_triangulo==100){
                echo '<p class = "resultado" >A área do triangulo é igual o valor limite 100</p>';
                echo '<p class = "resultado" >A área do triangulo é: '. $area_triangulo.'</p>';
            }else{
                echo '<p class = "resultado" >A área do triangulo é menor que o valor limite de 100</p>';
                echo '<p class = "resultado" >A área do triangulo é: '. $area_triangulo.'</p> </div>';
            }
        }
    }
    ?>
</body>
</html>