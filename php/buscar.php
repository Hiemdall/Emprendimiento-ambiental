<?php
// Conexión local
include("./php/config.php");

/* Obtener el valor del parámetro "select" enviado a través de una solicitud POST.
   Asignar el valor a la variable $empresa para su posterior procesamiento. */
$empresas = $_POST["select"];

// Consulta en la base de datos
$sql_datos = "SELECT direccion, contacto
              FROM empresas WHERE id = '$nombre'";

// Ejecutar la consulta en la tabla "empresas"
$result_datos = mysqli_query($conn, $sql_datos);

if (mysqli_num_rows($result_datos) > 0) {
    $row_datos = mysqli_fetch_assoc($result_datos);

    // Variables de la tabla "empresas"
    $direccion = $row_datos["direccion"];
    $contacto = $row_datos["contacto"];

    $data = array(
        "exists" => true,
        "direccion" => $direccion,
        "contacto" => $contacto,
    );

    echo json_encode($data);
} else {
    // Coloca vacío los input
    $data = array(
        "exists" => true,
        "direccion" => "",
        "contacto" => "",
    );
    echo json_encode($data);
}

$conn->close();
?>
