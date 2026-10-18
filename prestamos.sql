SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE usuarios (
    id_prestamo INT AUTO_INCREMENT PRIMARY KEY,
    nombre_solicitante VARCHAR(100) NOT NULL,
    tipo_usuario ENUM('Alumno', 'Docente') NOT NULL,
    equipo_solicitado VARCHAR(100) NOT NULL,
    numero_inventario VARCHAR(50) NOT NULL,
    fecha_prestamo DATE NOT NULL,
    fecha_devolucion DATE,
    estado_prestamo ENUM('Activo', 'Devuelto', 'Retrasado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO usuarios 
(nombre_solicitante, tipo_usuario, equipo_solicitado, numero_inventario, fecha_prestamo, fecha_devolucion, estado_prestamo)
VALUES
('Juan Pérez', 'Alumno', 'Laptop Dell Inspiron', 'INV-001', '2026-10-10', '2026-10-15', 'Devuelto'),
('María López', 'Docente', 'Proyector Epson', 'INV-002', '2026-10-12', NULL, 'Activo'),
('Carlos Hernández', 'Alumno', 'Tablet Samsung Galaxy', 'INV-003', '2026-10-08', '2026-10-14', 'Devuelto'),
('Ana Torres', 'Docente', 'Cámara Canon EOS', 'INV-004', '2026-10-05', NULL, 'Retrasado'),
('Luis Martínez', 'Alumno', 'Laptop HP Pavilion', 'INV-005', '2026-10-11', '2026-10-16', 'Devuelto');

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_prestamo`);

ALTER TABLE `usuarios`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;