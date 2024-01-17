<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Registro de Residuos - Emprendimiento Ambiental</title>
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
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none ">
                    <img src="assets\img\" alt="" style="width: 100px; height: 55px;">
                </a>
                <button type="button" class="navbar-toggler me-0 primary" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                    <a href="index.html" class="navbar-brand me-6 d-flex align-items-center" style="width: 350px">
                        <img src="assets/img/logo.png" alt="Logo" style="width: 90px; height: 70px;">
                        <div class="mx-2 mb-2 w-50">
                            <span class="d-block text-primary">Emprendimiento</span>
                            <span class="d-block">Ambiental</span>
                        </div>
                   </a>
                        <a href="#home" class="nav-item nav-link active">item</a> 
                        <a href="#about" class="nav-item nav-link active">item</a>
                        <a href="#servicios" class="nav-item nav-link active">item</a>
                        <a href="#project" class="nav-item nav-link active">item</a>
                        <a href="form_login.php" class="nav-item nav-link active">item</a>
                        <a href="#Contact" class="nav-item nav-link active">item</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    </header>

    <main>
    <div class="container-xxl py-5" id="Contact">
    <div class="container">
        <div class="row g-5">
 <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
    <h1 class="mb-4">Formulario de Registro de Residuos</h1>
    <form action="submit_form.php" method="post" class="row g-3">
    <div class="col-sm-6">
        <div class="form-floating">
            <select class="form-select" id="empresas" name="empresas" required>
                <option value="" selected>Otro</option>
                <?php
                // Conexión local
                include(".\php\combo_empresas.php");
                ?>
            </select>
            <label class="text-primary" for="empresas">Empresa:</label>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-floating">
            <input class="form-control" type="text" id="direccionEmpresa" name="direccionEmpresa" placeholder="Dirección de la Empresa:">
            <label for="direccionEmpresa">Dirección de la Empresa:</label>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-floating">
            <input class="form-control" type="text" id="contactoEmpresa" name="contactoEmpresa" placeholder="Contacto de la Empresa:">
            <label for="contactoEmpresa">Contacto de la Empresa:</label>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-floating">
            <select class="form-select" id="transportista" name="transportista" required>
                <option value="" selected>Otro</option>
                <?php
                // Conexión local
                include(".\php\combo_transportista.php");
                ?>
            </select>
            <label for="transportista">Transportista:</label>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-floating">
            <input class="form-control" type="text" id="licenciaTransportista" name="licenciaTransportista" placeholder="Licencia del Transportista:">
            <label for="licenciaTransportista">Licencia del Transportista:</label>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-floating">
            <select class="form-select" type="text" id="tipoResiduo" name="tipoResiduo" placeholder="Tipo de Residuo:" required>
            <option value="" selected>Otro</option>
                <?php
                // Conexión local
                include(".\php\combo_transportista.php");
                ?> 
                </select> 
            <label for="tipoResiduo">Tipo de Residuo:</label>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-floating">
            <input class="form-control" type="number" id="pesoResiduo" name="pesoResiduo" step="0.01" placeholder="Peso del Residuo (Kg):" required>
            <label for="pesoResiduo">Peso del Residuo (Kg):</label>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-floating">
            <input class="form-control" type="number" id="costo" name="costo" step="0.01" placeholder="Costo ($):" required>
            <label for="costo">Costo ($):</label>
        </div>
    </div>

    <div class="col-12 text-center">
        <button class="btn btn-primary w-100 py-3" type="submit">Registrar</button>
    </div>
</form>

</main>


<div class="container-fluid footer mt-1 py-5  fadeIn" data-wow-delay="0.1s"></div>
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
