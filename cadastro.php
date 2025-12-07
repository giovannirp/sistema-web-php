<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
  <div class="container">
    <?php
      include("./includes/nav.php");
    ?>
    <h1 class="text-success mt-3 mb-2">Cadastro</h1>
    <form action="recebe-cadastro.php" method="post">
      <div class="form-group mb-3">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control">
      </div>
      <div class="form-group mb-3">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control">
      </div>
      <div class="form-group mb-3">
        <label for="cidade">Cidade</label>
        <input type="text" id="cidade" name="cidade" class="form-control">
      </div>
      <div class="form-group mb-3">
        <button class="btn btn-primary">Enviar</button>
      </div>
    </form>
  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>