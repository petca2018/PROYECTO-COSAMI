<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!-- cdn icnonos-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="public/css/estilo.css">

    <title>Login</title>
  </head>
  <body>
    <h1></h1>
<div class="container col-xs-12 col-sm-6 col-md-8">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h2 class="card-title text-center mb-5 fw-light fs-5">INICIA SESION</h2>
            
            <form action="servidor/login/logear.php" method="post">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario" required>
                  <label for="usuario">Usuario</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
                  <label for="password">Contraseña</label>
                </div>

                <div class="d-grid">
                  <button class="btn btn-outline-danger" type="submit">Ingresar</button>
                  <div class="text-center">
                    <a class="small" href="registrousuario.php">Registrase aqui!</a>
                  </div>
                </div>

              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>