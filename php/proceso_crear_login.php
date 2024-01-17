<?php
include("../php/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Encriptando la contraseña
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Manejo del archivo de imagen
    if (!empty($_FILES["archivo"]["name"])) {
        // Cambia esto a la ruta completa de tu directorio de imágenes
        $targetDirectory = "C:/xampp/htdocs/emprendimiento-Ambiental/assets/img/";
        $filename = uniqid() . "_" . basename($_FILES["archivo"]["name"]);
        $targetFile = $targetDirectory . $filename;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Verificar si el archivo es una imagen real o una imagen falsa
        $check = getimagesize($_FILES["archivo"]["tmp_name"]);
        if ($check === false) {
            echo "El archivo no es una imagen.";
            $uploadOk = 0;
        }

        // Verificar si el archivo ya existe
        if (file_exists($targetFile)) {
            echo "Lo siento, el archivo ya existe.";
            $uploadOk = 0;
        }

        // Verificar el tamaño del archivo
        if ($_FILES["archivo"]["size"] > 500000) {
            echo "Lo siento, tu archivo es demasiado grande.";
            $uploadOk = 0;
        }

        // Permitir ciertos formatos de archivo
        if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
            echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
            $uploadOk = 0;
        }

        // Verificar si $uploadOk está configurado en 0 por un error
        if ($uploadOk == 0) {
            echo "Lo siento, tu archivo no fue cargado.";
        } else {
            // Si todo está bien, intenta subir el archivo
            if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $targetFile)) {
                echo "El archivo " . htmlspecialchars($filename) . " ha sido cargado.";

                // Insertar el usuario en la base de datos con el nombre del archivo
                $sql = "INSERT INTO  transportistas (username, password, email, archivo) VALUES ('$username', '$hashedPassword', '$email', '$filename')";

                if ($conn->query($sql) === TRUE) {
                    echo "Usuario registrado exitosamente";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Lo siento, hubo un error al cargar tu archivo.";
            }
        }
    } else {
        echo "Por favor, selecciona un archivo.";
    }

    $conn->close();
}
?>


