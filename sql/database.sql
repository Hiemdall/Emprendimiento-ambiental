-- Nombre de la base de datos
EcoGestorDB

-- Creación de la tabla para Empresas
CREATE TABLE empresas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    direccion VARCHAR(255),
    contacto VARCHAR(100)
);

-- Creación de la tabla para Transportistas
CREATE TABLE transportistas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    licencia VARCHAR(50),
    vehiculo VARCHAR(100)
);

-- Creación de la tabla para Tipos de Residuos
CREATE TABLE tipos_residuos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50) NOT NULL,
    descripcion TEXT
);

-- Creación de la tabla para Registro de Residuos
CREATE TABLE registro_residuos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    empresa_id INT NOT NULL,
    transportista_id INT NOT NULL,
    tipo_residuo_id INT NOT NULL,
    peso DECIMAL(10, 2) NOT NULL,
    costo DECIMAL(10, 2) NOT NULL,
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (empresa_id) REFERENCES empresas(id),
    FOREIGN KEY (transportista_id) REFERENCES transportistas(id),
    FOREIGN KEY (tipo_residuo_id) REFERENCES tipos_residuos(id)
);

-- Esta tabla almacenará los datos generales de cada factura.
CREATE TABLE facturas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    empresa_id INT NOT NULL,
    fecha_emision DATE NOT NULL,
    fecha_vencimiento DATE NOT NULL,
    total DECIMAL(10, 2) NOT NULL,
    estado VARCHAR(50),
    FOREIGN KEY (empresa_id) REFERENCES empresas(id)
);

-- Esta tabla contendrá los detalles específicos de los servicios o productos facturados.
CREATE TABLE detalles_factura (
    id INT AUTO_INCREMENT PRIMARY KEY,
    factura_id INT NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10, 2) NOT NULL,
    subtotal DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (factura_id) REFERENCES facturas(id)
);