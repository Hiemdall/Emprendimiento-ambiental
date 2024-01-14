<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Residuos - Emprendimiento Ambiental</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <!-- Cabecera -->
    </header>

    <main>
    <h1>Formulario de Registro de Residuos</h1>
    <form action="submit_form.php" method="post">
        <div>
            <label for="empresa">Empresa:</label>
            <input type="text" id="empresa" name="empresa" required>
        </div>

        <div>
            <label for="direccionEmpresa">Dirección de la Empresa:</label>
            <input type="text" id="direccionEmpresa" name="direccionEmpresa">
        </div>

        <div>
            <label for="contactoEmpresa">Contacto de la Empresa:</label>
            <input type="text" id="contactoEmpresa" name="contactoEmpresa">
        </div>

        <div>
            <label for="transportista">Transportista:</label>
            <input type="text" id="transportista" name="transportista" required>
        </div>

        <div>
            <label for="licenciaTransportista">Licencia del Transportista:</label>
            <input type="text" id="licenciaTransportista" name="licenciaTransportista">
        </div>

        <div>
            <label for="tipoResiduo">Tipo de Residuo:</label>
            <input type="text" id="tipoResiduo" name="tipoResiduo" required>
        </div>

        <div>
            <label for="pesoResiduo">Peso del Residuo (Kg):</label>
            <input type="number" id="pesoResiduo" name="pesoResiduo" step="0.01" required>
        </div>

        <div>
            <label for="costo">Costo ($):</label>
            <input type="number" id="costo" name="costo" step="0.01" required>
        </div>

        <div>
            <button type="submit">Registrar</button>
        </div>
    </form>
</main>

<footer>
    <!-- Pie de página -->
</footer>

<script src="js/main.js"></script>
</body>
</html>   
