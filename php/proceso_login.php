<?php
include("../php/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT id, password, access_level, email, archivo FROM tbl_users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result === false) {
        // Si hay un error de consulta, se muestra un mensaje de error
        echo "Error de consulta: " . mysqli_error($conn);
    } elseif (mysqli_num_rows($result) == 1) {
        // Si el usuario existe, se obtiene su nivel de acceso
        $row = mysqli_fetch_assoc($result);
        
        // Verificar si las claves existen antes de intentar acceder a ellas
        $access_level = isset($row['access_level']) ? $row['access_level'] : null;
        $email = isset($row['email']) ? $row['email'] : null;
        $archivo = isset($row['archivo']) ? $row['archivo'] : null;

        // Se inicia la sesión y se establece el nivel de acceso del usuario
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['access_level'] = $access_level;
        $_SESSION['email'] = $email;
        $_SESSION['archivo'] = $archivo;

        if ($access_level >= 1) {
            header('Location: ../Registro .php');
            exit();
        } else {
            header('Location: ../verify.html');
            exit();
        }
    } else {
        // Si el usuario no existe, se muestra un mensaje de error 
        // Generar una alerta
        $mensaje = "Nombre de usuario o contraseña incorrectos.";
        echo '<script>alert("'. $mensaje . '");</script>';
        header('Location: ../form_login.php');
        exit();
    }
    // Cierre de la conexión a la base de datos
    mysqli_close($conn);
}
?>
