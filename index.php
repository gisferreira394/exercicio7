<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST">
        divisivel por 3 e 5
        <input type="number" name="divisor">

        <button type="submit" name="Verificar">Converta</button>
    </form>

    <?php



    if (isset($_POST["Verificar"])) {
        $n = $_POST["divisor"];



        if ($n % 3 == 0) {
            echo "É divisivel por 3";
        } 
        elseif ($n % 5 == 0) {
            echo "É divisivel por 5";
        } else {
            echo "Não é divisivel por 3 e 5";
        }
    }
    ?>

</body>

</html>