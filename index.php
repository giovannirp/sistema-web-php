<?php
  include("./conexao/conexao.php");

  $consulta = "SELECT * FROM listas";

  // die vai matar a conexão do programa se não der certo

  /*
    (->) esse operador é conhecido informalmente como seta,
    serve para acessar propriedades ou métodos de um objeto
  */

  $con = $mysqli->query($consulta) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Web</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
  <div class="container">
    <?php
      include("./includes/nav.php");
    ?>

    <table class="table table-striped border">
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Cidade</th>
        <th>Excluir</th>
      </tr>
      <?php while($dado = $con->fetch_array()) {?>
        <tr>
          <td><?php echo $dado["id"] ?></td>
          <td><?php echo $dado["nome"] ?></td>
          <td><?php echo $dado["email"] ?></td>
          <td><?php echo $dado["cidade"] ?></td>
          <td>
            <a href="#">
              <i class="bi-trash text-danger"></i>
            </a>
          </td>
        </tr>
      <?php } ?>

  
    </table>

  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>