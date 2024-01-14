<?php
require 'config.php';

function obtenerResiduos() {
    global $conn;
    $sql = "SELECT * FROM residuos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Tipo: " . $row["tipo"]. " - Peso: " . $row["peso"]. "<br>";
        }
    } else {
        echo "0 resultados";
    }
}

// Más funciones CRUD aquí
?>
