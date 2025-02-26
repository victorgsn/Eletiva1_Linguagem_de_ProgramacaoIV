<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 2 de PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            if ($num2 == 0) {
                echo "<p> Divisão por zero está proibida, por favor insira um valor válido!<p>";
            } else {
                $resultado = $num1/$num2;

            echo "Resultado: $num1 dividido por $num2 = $resultado";
            }
            
        }
        ?>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>