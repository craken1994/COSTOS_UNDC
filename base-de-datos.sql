CREATE DATABASE IF NOT EXISTS costo_produccion;
USE costo_produccion;

CREATE TABLE ordenes_produccion (
    numero_orden INT AUTO_INCREMENT PRIMARY KEY,
    nombre_orden VARCHAR(255) NOT NULL,
    fecha_expedicion DATE NOT NULL, -- Columna añadida para la fecha de expedición
    inventario_inicial_proceso DECIMAL(10, 2) DEFAULT 0.00,
    inventario_final_proceso DECIMAL(10, 2) DEFAULT 0.00,
    cantidad_a_producir INT DEFAULT 0
);

CREATE TABLE materia_prima_directa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_orden INT,
    nombre_material VARCHAR(255) NOT NULL,
    cantidad DECIMAL(10, 2) NOT NULL,
    precio_unitario DECIMAL(10, 2) NOT NULL,
    total DECIMAL(10, 2) AS (cantidad * precio_unitario) STORED,
    FOREIGN KEY (numero_orden) REFERENCES ordenes_produccion(numero_orden)
);

CREATE TABLE mano_obra_directa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_orden INT,
    nombre_trabajador VARCHAR(255) NOT NULL,
    fecha DATE NOT NULL,
    horas_trabajadas DECIMAL(10, 2) NOT NULL,
    costo_por_hora DECIMAL(10, 2) NOT NULL,
    horas_extras DECIMAL(10, 2) DEFAULT 0.00,
    minutos_extras DECIMAL(10, 2) DEFAULT 0.00,
    total DECIMAL(10, 2) DEFAULT 0.00, -- Se calculará en el backend
    FOREIGN KEY (numero_orden) REFERENCES ordenes_produccion(numero_orden)
);

CREATE TABLE costos_indirectos_fabricacion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_orden INT,
    FOREIGN KEY (numero_orden) REFERENCES ordenes_produccion(numero_orden)
);

CREATE TABLE materia_prima_indirecta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    costo_indirecto_id INT,
    nombre_material VARCHAR(255) NOT NULL,
    cantidad DECIMAL(10, 2) NOT NULL,
    precio_unitario DECIMAL(10, 2) NOT NULL,
    total DECIMAL(10, 2) AS (cantidad * precio_unitario) STORED,
    FOREIGN KEY (costo_indirecto_id) REFERENCES costos_indirectos_fabricacion(id)
);

CREATE TABLE mano_obra_indirecta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    costo_indirecto_id INT,
    nombre_trabajador VARCHAR(255) NOT NULL,
    fecha DATE NOT NULL,
    horas_trabajadas DECIMAL(10, 2) NOT NULL,
    costo_por_hora DECIMAL(10, 2) NOT NULL,
    horas_extras DECIMAL(10, 2) DEFAULT 0.00,
    minutos_extras DECIMAL(10, 2) DEFAULT 0.00,
    total DECIMAL(10, 2) DEFAULT 0.00, -- Se calculará en el backend
    FOREIGN KEY (costo_indirecto_id) REFERENCES costos_indirectos_fabricacion(id)
);

CREATE TABLE otros_costos_indirectos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    costo_indirecto_id INT,
    nombre_costo_servicio VARCHAR(255) NOT NULL,
    costo DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (costo_indirecto_id) REFERENCES costos_indirectos_fabricacion(id)
);
