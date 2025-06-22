CREATE DATABASE reservacion;

USE reservacion;

CREATE TABLE reservacion (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50),
  email VARCHAR(50),
  telefono VARCHAR(10),
  invitados VARCHAR (50),
  tipo_evento VARCHAR(50),
  fecha DATE,
  hora TIME,
  comentarios VARCHAR (100),
  fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
