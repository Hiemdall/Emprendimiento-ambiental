<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario CSS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/index.css" rel="stylesheet">

</head>

<body>
<header>
            <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white shadow sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none ">
                    <img src="assets/img/logo.png" alt="Logo" style="width: 250px; height: 70px;">
                </a>
                <div class="collapse justify-content-start navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                    <a href="index.html" class="navbar-brand me-6 d-flex align-items-center" style="width: 350px">
                        <img src="assets/img/logo.png" alt="Logo" style="width: 250px; height: 70px;">
                   </a>
                   <a href="Registro.php">registrar residuos</a>
                   
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    </header>

<main>
    <div class="container-xxl py-7" id="Contact">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow shadow py-3 fadeInUp" data-wow-delay="0.5s">
                <article class="container-fluid my-3">
                        <img src="./assets/img/logo.png" alt="" class="w-100">
                    </article>
                    <h2 class="mb-4 text-center">Transformando el mañana con emprendimiento verde hoy: ¡Cultivando un futuro sostenible juntos!</h2>
                    </div>
                <div class="col-lg-4 wow shadow py-3 fadeInUp" data-wow-delay="0.5s">
                    <h1 class="mb-4 text-center">Ingresar</h1>
                    <form action="./procesos/proceso_login.php" method="post" class="row flex-column align-items-center g-3">
                        <div class="col-sm-8">
                            <div class="form-floating">
                                <select class="form-select" id="username" name="username" required>
                                    <option value="">Seleccionar Usuario</option>
                                    <?php
                                    // Conexión local
                                    include("./procesos/combo_cargo.php");
                                    ?>
                                </select>
                                <label for="username">Usuario:</label>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="form-floating">
                                <input class="form-control" placeholder="Ingresa tu contraseña" type="password" id="password" name="password" required>
                                <label for="password">Contraseña</label>
                            </div>
                        </div>

                        <div class="col-4 text-center">
                            <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                        </div>

                        <div class="col-12 text-center">
                            <a href="form_crear_user.php">Crear tu cuenta</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

    
<footer>
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">2023 Service</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="fw-medium text-light" href="/">Service</a>
                    Distributed By <a class="fw-medium text-light" href="/">Service</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
</footer>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script>// Esta función mueve el foco al siguiente campo de entrada cuando se presiona la tecla Enter
function moveToNextInput(event, nextInputId) {
  if (event.keyCode === 13) {
      event.preventDefault();
      document.getElementById(nextInputId).focus();
  }
}

// La información de la base de datos va a cada input del formulario
document.getElementById("empresas").addEventListener("change", function () {
  var selectValue = this.value;

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "buscar.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          var response = JSON.parse(this.responseText);
          if (response.exists) {
              // Update input fields based on the new structure of the response
              document.getElementById("direccionEmpresa").value = response.direccion;
              document.getElementById("contactoEmpresa").value = response.contacto;
          }
      }
  };
  xhr.send("select=" + selectValue);
});
</script>
    <script src="js/main.js"></script>
</body>
</html>   
