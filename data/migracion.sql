CREATE DATABASE IF NOT EXISTS `proyectocomfaboy` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE proyectocomfaboy;

-- Volcando estructura para tabla proyectocomfaboy.hospedaje
-- Crear la tabla usuario primero
CREATE TABLE IF NOT EXISTS `usuario` (
  `IdUsuario` int NOT NULL AUTO_INCREMENT,
  `PrimerNombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `SegundoNombre` varchar(100) DEFAULT NULL,
  `PrimerApellido` varchar(100) NOT NULL,
  `SegundoApellido` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FechaNacimiento` date NOT NULL,
  `Documento` varchar(15) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Crear la tabla hospedaje
CREATE TABLE IF NOT EXISTS `hospedaje` (
  `IdHospedaje` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `TipoHospedaje` varchar(50) NOT NULL,
  `Precio` double NOT NULL,
  `Disponibilidad` varchar(50) NOT NULL,
  `Capacidad` double NOT NULL,
  PRIMARY KEY (`IdHospedaje`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Crear la tabla reservas, asegurándose de que las claves foráneas referencien las claves primarias
CREATE TABLE IF NOT EXISTS `reservas` (
  `IdReservas` int NOT NULL AUTO_INCREMENT,
  `IdUsuario` int NOT NULL,
  `IdHospedaje` int NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  PRIMARY KEY (`IdReservas`),
  KEY `IdUsuario` (`IdUsuario`),
  KEY `FK2_hospedaje_reservas` (`IdHospedaje`),
  CONSTRAINT `FK1_usuario_reservas` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`),
  CONSTRAINT `FK2_hospedaje_reservas` FOREIGN KEY (`IdHospedaje`) REFERENCES `hospedaje` (`IdHospedaje`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



-- Volcando datos para la tabla proyectocomfaboy.usuario: ~2 rows (aproximadamente)
INSERT INTO `usuario` (`IdUsuario`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `FechaNacimiento`, `Documento`, `Telefono`, `Email`, `Contrasena`) VALUES
	(1, 'Valentina', NULL, 'Suarez', 'Garcia', '2004-08-10', '1055126376', '3204503520', 'Valensuarez134@gmail.com', '123'),
	(2, 'Jhon', 'Rodney', 'Fuentes', NULL, '1981-02-25', '7179720', '32008816365', 'jhonrodney@yahoo.es', '345');
