CREATE DATABASE IF NOT EXISTS inventario_mercamix;
USE proyecto;
CREATE TABLE IF NOT EXISTS usuario (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30),
    dni VARCHAR(11),
    email VARCHAR(50),
    password VARCHAR(125),
    id_permiso INT(11)
);
CREATE TABLE IF NOT EXISTS bitacora (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    accion VARCHAR(11),
    fecha_accion DATETIME,
    id_user INT(11)
);
CREATE TABLE IF NOT EXISTS permisos (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30),
    create_user BOOLEAN,
    update_user BOOLEAN,
    delete_user BOOLEAN,
    read_mov BOOLEAN,
    create_mov BOOLEAN,
    update_move BOOLEAN,
    delete_mov BOOLEAN
);
CREATE TABLE IF NOT EXISTS compra (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_user INT(11),
    total FLOAT(9, 2),
    fecha DATETIME
);
CREATE TABLE IF NOT EXISTS detalles_compra (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_compra INT(11),
    id_producto INT(11),
    cantidad INT(3)
);
CREATE TABLE IF NOT EXISTS producto (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(25),
    codigo VARCHAR(25),
    precio FLOAT(7, 2),
    id_proveedor INT(11),
    id_tag INT(11)
);
CREATE TABLE IF NOT EXISTS proveedor (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    direccion VARCHAR(100),
    codigo VARCHAR(25),
    observacion TEXT
);
CREATE TABLE IF NOT EXISTS tag (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(25)
);
CREATE TABLE IF NOT EXISTS producto_tags (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_tag INT(11),
    id_producto INT(11)
);
CREATE TABLE IF NOT EXISTS inventario (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_producto INT(11),
    cantidad INT(11)
);
CREATE TABLE IF NOT EXISTS movimientos_inventario (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_inv INT(11),
    tipo ENUM('A', 'D', 'V'),
    cantidad INT(3),
    fecha DATETIME,
    cantidad_actual INT(3)
);
