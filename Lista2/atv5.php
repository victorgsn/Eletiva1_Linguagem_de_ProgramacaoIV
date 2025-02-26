<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
        <form action="resp5.php" method="POST">
            <label for="num1" class="form-label">Nota 1:</label>
            <input type="number" class="form-control" id="num1" name="num1">

            <label for="num2" class="form-label">Nota 2:</label>
            <input type="number" class="form-control" id="num2" name="num2">

            <label for="num3" class="form-label">Nota 3:</label>
            <input type="number" class="form-control" id="num3" name="num3">

            <button type="submit" value="Média das notas">Enviar</button>
        </form>
    </main>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>