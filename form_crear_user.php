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
<main>
    <div class="container-xxl py-6" id="Contact">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="mb-4 text-center">Crea tu cuenta</h1>
                    <form action="./procesos/proceso_Crear_login.php" method="post" class="row g-3" enctype="multipart/form-data">

                        <div class="col-sm-12">
                            <div class="form-floating">
                                <input class="form-control" placeholder="Ingresa tu Nombre de usuario" type="text" id="username" name="username" required>
                                <label for="username">Usuario:</label>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-floating">
                                <input class="form-control" type="email" id="licenciaTransportista" name="licenciaTransportista" placeholder="Licencia del Transportista:" required>
                                <label for="username">Licencia del Transportista:</label>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-floating">
                                <input class="form-control" placeholder="Ingresa tu contraseña" type="password" id="password" name="password" required>
                                <label for="password">Contraseña</label>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-floating">
                                <input class="form-control" placeholder="Ingresa tu Nombre de usuario" type="file" id="archivo" name="archivo" accept="image/*" required>
                                <label for="username">Foto de perfil:</label>
                            </div>
                        </div>

                        <div class="col-3 text-center">
                            <button class="btn btn-primary w-100 py-3" type="submit">Crear</button>
                        </div>

                        <div class="text-center">
                            <a href="form_login.php">Iniciar sesión</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</main>


    
    <div class="container-fluid footer mt-1 py-5 fadeIn" data-wow-delay="0.1s"></div>
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
