<?php
require "./conf.php";
session_start();
if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $_SESSION['status'] = false;
    $show = "SELECT * FROM `users`";

    $res = $conn->query($show);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            if ($row['name'] == $name && $row['pass'] == $pass) {
                $_SESSION['name'] = $row['name'];
                $_SESSION['pass'] = $row['pass'];
                $_SESSION['status'] = true;
                header("location:index.php?success=true");
                exit();
            }
        }
        ?>
            <script>
                alert('Usuario o contraseña incorrectos!')
                Swal.fire(
                    'An Error Occured',
                    'INVALID USERNAME AND PASSWORD',
                    'error'
                    )
            </script>
            <?php
    } else {
        ?>
        <script>
            alert('No hay usuarios registrados!')
        </script>

        <?php
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> -->
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <title>Acceso AdmTraining</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post">
      <img class="mb-4" src="logo-pequeno.png" alt="">
      <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
      <label for="name" class="sr-only">Usuario</label>
      <input name="name" type="text" id="inputPassword" class="form-control" placeholder="Usuario" required>
      <label for="pass" class="sr-only">Contraseña</label>
      <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login" name="login">Iniciar Sesión</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2024 By navegadores.cl</p>
    </form>
  </body>
</html>