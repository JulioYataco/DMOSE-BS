/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.24-MariaDB : Database - ocupacional
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ocupacional` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `ocupacional`;

/*Table structure for table `areaslaboratorios` */

DROP TABLE IF EXISTS `areaslaboratorios`;

CREATE TABLE `areaslaboratorios` (
  `idarealaboratorio` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` char(2) NOT NULL,
  `nombrearea` varchar(50) NOT NULL,
  `idusuariocre` int(11) NOT NULL,
  `fechahoracre` datetime NOT NULL DEFAULT current_timestamp(),
  `idusuariomod` int(11) DEFAULT NULL,
  `fechahoramod` datetime DEFAULT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`idarealaboratorio`),
  KEY `fk_arl_idusuariocre` (`idusuariocre`),
  KEY `fk_arl_idusuariomod` (`idusuariomod`),
  CONSTRAINT `fk_arl_idusuariocre` FOREIGN KEY (`idusuariocre`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `fk_arl_idusuariomod` FOREIGN KEY (`idusuariomod`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `areaslaboratorios` */

insert  into `areaslaboratorios`(`idarealaboratorio`,`tipo`,`nombrearea`,`idusuariocre`,`fechahoracre`,`idusuariomod`,`fechahoramod`,`estado`) values 
(1,'AR','Bacteriologia',1,'2022-10-18 23:07:19',NULL,NULL,''),
(2,'ME','Eclia',1,'2022-10-18 23:07:19',NULL,NULL,''),
(3,'MU','Muestra Nueva 1',1,'2022-10-18 23:07:19',NULL,NULL,''),
(4,'AR','dDA',3,'2022-10-25 16:59:42',3,'2022-10-25 17:59:27',''),
(5,'AR','XD',3,'2022-10-25 16:59:52',NULL,NULL,'\0'),
(6,'ME','metodo',3,'2022-10-25 17:00:05',NULL,NULL,''),
(7,'MU','muestra',3,'2022-10-25 17:00:22',3,'2022-10-25 17:42:16',''),
(8,'AR','ja',3,'2022-10-25 17:00:40',NULL,NULL,'\0'),
(9,'ME','je',3,'2022-10-25 17:00:49',NULL,NULL,'\0'),
(10,'MU','ji',3,'2022-10-25 17:00:58',NULL,NULL,'\0');

/*Table structure for table `componentes` */

DROP TABLE IF EXISTS `componentes`;

CREATE TABLE `componentes` (
  `idcomponente` int(11) NOT NULL AUTO_INCREMENT,
  `idsubservicio` int(11) NOT NULL,
  `idunidadmedida` int(11) DEFAULT NULL,
  `componente` varchar(50) NOT NULL,
  `valornormal` text DEFAULT NULL,
  `orden` tinyint(4) DEFAULT NULL,
  `idusuariocre` int(11) NOT NULL,
  `fechahoracre` datetime NOT NULL DEFAULT current_timestamp(),
  `idusuariomod` int(11) DEFAULT NULL,
  `fechahoramod` datetime DEFAULT NULL,
  `idusuariobaja` int(11) DEFAULT NULL,
  `fechabaja` datetime DEFAULT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`idcomponente`),
  KEY `fk_cmp_idsubservicio` (`idsubservicio`),
  KEY `fk_cmp_idunidadmedida` (`idunidadmedida`),
  KEY `fk_cmp_idusuariocre` (`idusuariocre`),
  KEY `fk_cmp_idusuariomod` (`idusuariomod`),
  KEY `fk_cmp_idusuariobaja` (`idusuariobaja`),
  CONSTRAINT `fk_cmp_idsubservicio` FOREIGN KEY (`idsubservicio`) REFERENCES `subservicios` (`idsubservicio`),
  CONSTRAINT `fk_cmp_idunidadmedida` FOREIGN KEY (`idunidadmedida`) REFERENCES `unidadmedidas` (`idunidadmedida`),
  CONSTRAINT `fk_cmp_idusuariobaja` FOREIGN KEY (`idusuariobaja`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `fk_cmp_idusuariocre` FOREIGN KEY (`idusuariocre`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `fk_cmp_idusuariomod` FOREIGN KEY (`idusuariomod`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `componentes` */

/*Table structure for table `empleados` */

DROP TABLE IF EXISTS `empleados`;

CREATE TABLE `empleados` (
  `idempleado` int(11) NOT NULL AUTO_INCREMENT,
  `idpersona` int(11) NOT NULL,
  `idpuesto` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `canthijos` tinyint(4) NOT NULL,
  `cantdependente` tinyint(4) DEFAULT NULL,
  `seguro` char(3) NOT NULL,
  `gradoinstruccion` char(2) NOT NULL,
  `consentinformado` bit(1) DEFAULT NULL,
  `consetdrogas` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idempleado`),
  KEY `fk_emd_idpersona` (`idpersona`),
  KEY `fk_emd_idempresa` (`idempresa`),
  KEY `fk_emd_idpuesto` (`idpuesto`),
  CONSTRAINT `fk_emd_idempresa` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`),
  CONSTRAINT `fk_emd_idpersona` FOREIGN KEY (`idpersona`) REFERENCES `personas` (`idpersona`),
  CONSTRAINT `fk_emd_idpuesto` FOREIGN KEY (`idpuesto`) REFERENCES `puestos` (`idpuesto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `empleados` */

/*Table structure for table `empresas` */

DROP TABLE IF EXISTS `empresas`;

CREATE TABLE `empresas` (
  `idempresa` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(100) NOT NULL,
  `razonsocial` varchar(100) NOT NULL,
  `ruc` char(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `ubigeo` char(6) DEFAULT NULL,
  `diascredito` tinyint(4) DEFAULT NULL,
  `idusuariocre` int(11) DEFAULT NULL,
  `idusuariomod` int(11) DEFAULT NULL,
  `idusuariobaja` int(11) DEFAULT NULL,
  `fechahoracre` datetime NOT NULL DEFAULT current_timestamp(),
  `fechahoramod` datetime DEFAULT NULL,
  `fechahorabaja` datetime DEFAULT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`idempresa`),
  UNIQUE KEY `uk_emp_ruc` (`ruc`),
  KEY `uk_emp_ubigeo` (`ubigeo`),
  KEY `fk_emp_idusuariocre` (`idusuariocre`),
  KEY `fk_emp_idusuariomod` (`idusuariomod`),
  KEY `fk_emp_idusuariobaja` (`idusuariobaja`),
  CONSTRAINT `uk_emp_ubigeo` FOREIGN KEY (`ubigeo`) REFERENCES `ubigeos` (`ubigeo`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `empresas` */

insert  into `empresas`(`idempresa`,`empresa`,`razonsocial`,`ruc`,`correo`,`direccion`,`ubigeo`,`diascredito`,`idusuariocre`,`idusuariomod`,`idusuariobaja`,`fechahoracre`,`fechahoramod`,`fechahorabaja`,`estado`) values 
(1,'Peve bendezu','Transportes Lino S.A.C','20145789632','software@gmail.com','Av. 28 de julio #397','100205',NULL,NULL,NULL,NULL,'2022-10-13 14:17:43',NULL,NULL,''),
(2,'Jhon Francia','IOT','20236902851','jfranciaIOT@gmail.com','Av.Progreso #202','100204',NULL,NULL,NULL,NULL,'2022-10-13 14:17:43',NULL,NULL,''),
(3,'julio','ki','20154448484','ju@gmail.com','asdas','100205',NULL,1,NULL,NULL,'2022-10-25 15:23:02',NULL,NULL,'');

/*Table structure for table `especialidades` */

DROP TABLE IF EXISTS `especialidades`;

CREATE TABLE `especialidades` (
  `idespecialidad` int(11) NOT NULL AUTO_INCREMENT,
  `especialidad` varchar(50) NOT NULL,
  `idusuariocre` int(11) NOT NULL,
  `fechahoracre` datetime NOT NULL DEFAULT current_timestamp(),
  `idusuariomod` int(11) DEFAULT NULL,
  `fechahoramod` datetime DEFAULT NULL,
  `estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idespecialidad`),
  KEY `fk_esp_idusuariocre` (`idusuariocre`),
  KEY `fk_esp_idusuariomod` (`idusuariomod`),
  CONSTRAINT `fk_esp_idusuariocre` FOREIGN KEY (`idusuariocre`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `fk_esp_idusuariomod` FOREIGN KEY (`idusuariomod`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `especialidades` */

insert  into `especialidades`(`idespecialidad`,`especialidad`,`idusuariocre`,`fechahoracre`,`idusuariomod`,`fechahoramod`,`estado`) values 
(1,'Oftalmología',1,'2022-10-15 07:42:29',NULL,NULL,'1'),
(2,'Psicología',1,'2022-10-15 07:42:29',3,'2022-10-24 14:40:27','1'),
(3,'Audiometría1',3,'2022-10-15 08:32:22',3,'2022-10-15 08:37:18','0'),
(4,'S',3,'2022-10-25 18:27:30',NULL,NULL,'0');

/*Table structure for table `fichasmedicas` */

DROP TABLE IF EXISTS `fichasmedicas`;

CREATE TABLE `fichasmedicas` (
  `idfichamedica` int(11) NOT NULL AUTO_INCREMENT,
  `nomfichamedica` varchar(70) NOT NULL,
  `idusuariocre` int(11) NOT NULL,
  `idusuariomod` int(11) DEFAULT NULL,
  `fechahoracre` datetime NOT NULL DEFAULT current_timestamp(),
  `fechahoramod` datetime DEFAULT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`idfichamedica`),
  UNIQUE KEY `uk_fcm_nomfichamedica` (`nomfichamedica`),
  KEY `fk_fcm_idusuariocre` (`idusuariocre`),
  KEY `fk_fcm_idusuariomod` (`idusuariomod`),
  CONSTRAINT `fk_fcm_idusuariocre` FOREIGN KEY (`idusuariocre`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `fk_fcm_idusuariomod` FOREIGN KEY (`idusuariomod`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `fichasmedicas` */

insert  into `fichasmedicas`(`idfichamedica`,`nomfichamedica`,`idusuariocre`,`idusuariomod`,`fechahoracre`,`fechahoramod`,`estado`) values 
(1,'Audiometria',1,NULL,'2022-10-18 23:09:12',NULL,'');

/*Table structure for table `medicos` */

DROP TABLE IF EXISTS `medicos`;

CREATE TABLE `medicos` (
  `idmedico` int(11) NOT NULL AUTO_INCREMENT,
  `idpersona` int(11) NOT NULL,
  `firma` varchar(100) DEFAULT NULL,
  `idusuariocre` int(11) NOT NULL,
  `fechahoracre` datetime NOT NULL DEFAULT current_timestamp(),
  `idusuariomod` int(11) DEFAULT NULL,
  `fechahoramod` datetime DEFAULT NULL,
  `idusuariobaja` int(11) DEFAULT NULL,
  `fechabaja` datetime DEFAULT NULL,
  `estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idmedico`),
  KEY `fk_med_idpersona` (`idpersona`),
  KEY `fk_med_idusuariocre` (`idusuariocre`),
  KEY `fk_med_idusuariomod` (`idusuariomod`),
  KEY `fk_med_idusuariobaja` (`idusuariobaja`),
  CONSTRAINT `fk_med_idpersona` FOREIGN KEY (`idpersona`) REFERENCES `personas` (`idpersona`),
  CONSTRAINT `fk_med_idusuariobaja` FOREIGN KEY (`idusuariobaja`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `fk_med_idusuariocre` FOREIGN KEY (`idusuariocre`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `fk_med_idusuariomod` FOREIGN KEY (`idusuariomod`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `medicos` */

insert  into `medicos`(`idmedico`,`idpersona`,`firma`,`idusuariocre`,`fechahoracre`,`idusuariomod`,`fechahoramod`,`idusuariobaja`,`fechabaja`,`estado`) values 
(1,4,NULL,1,'2022-10-15 10:35:12',NULL,NULL,NULL,NULL,'1'),
(2,4,'',3,'2022-10-15 11:59:42',NULL,NULL,NULL,NULL,'1');

/*Table structure for table `personas` */

DROP TABLE IF EXISTS `personas`;

CREATE TABLE `personas` (
  `idpersona` int(11) NOT NULL AUTO_INCREMENT,
  `apepaterno` varchar(30) NOT NULL,
  `apematerno` varchar(30) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `fechanac` date NOT NULL,
  `sexo` char(1) DEFAULT NULL,
  `estcivil` char(2) DEFAULT NULL,
  `tipodoc` char(2) NOT NULL,
  `numdoc` varchar(13) NOT NULL,
  `celular` char(11) DEFAULT NULL,
  `correo` varchar(70) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `ubigeodirec` char(6) NOT NULL,
  `ubigeonac` char(6) NOT NULL,
  PRIMARY KEY (`idpersona`),
  UNIQUE KEY `uk_per_numdoc` (`numdoc`,`tipodoc`),
  KEY `fk_per_ubigeodirec` (`ubigeodirec`),
  KEY `fk_per_ubigeonac` (`ubigeonac`),
  CONSTRAINT `fk_per_ubigeodirec` FOREIGN KEY (`ubigeodirec`) REFERENCES `ubigeos` (`ubigeo`),
  CONSTRAINT `fk_per_ubigeonac` FOREIGN KEY (`ubigeonac`) REFERENCES `ubigeos` (`ubigeo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `personas` */

insert  into `personas`(`idpersona`,`apepaterno`,`apematerno`,`nombres`,`fechanac`,`sexo`,`estcivil`,`tipodoc`,`numdoc`,`celular`,`correo`,`direccion`,`ubigeodirec`,`ubigeonac`) values 
(1,'Vazques','Fuentes','Manuel Guillermo','0000-00-00','M','ST','DN','72754737','987654321','manuelitotuterror@gmail.com','Av. 28 de julio','100201','100205'),
(2,'Clinton','Canchari','Brick Cueva','0000-00-00','M','ST','DN','75614226','987654123','Cuevaclintonmasnaiki@gmail.com','Av. 29 de julio','100301','100206'),
(3,'Yataco','Herrera','Julio Smith','0000-00-00','M','ST','DN','75613162','987654321','julioyatacoherrera@gmail.com','Av. 30 de julio','100201','100205'),
(4,'Magallanes','Ortiz','Eduardo Guillermo','0000-00-00','M','CA','DN','40754412','987657894','eduardomagallanes@gmail.com','Av. 232 de julio','100203','100205');

/*Table structure for table `precios` */

DROP TABLE IF EXISTS `precios`;

CREATE TABLE `precios` (
  `idprecio` int(11) NOT NULL AUTO_INCREMENT,
  `idservicio` int(11) NOT NULL,
  `precio` decimal(7,2) NOT NULL,
  `idusuariocre` int(11) NOT NULL,
  `idusuariomod` int(11) DEFAULT NULL,
  `fechahoracre` datetime NOT NULL DEFAULT current_timestamp(),
  `fechahoramod` datetime DEFAULT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`idprecio`),
  KEY `fk_pre_idservicio` (`idservicio`),
  KEY `fk_pre_idusuariocre` (`idusuariocre`),
  KEY `fk_pre_idusuariomod` (`idusuariomod`),
  CONSTRAINT `fk_pre_idservicio` FOREIGN KEY (`idservicio`) REFERENCES `servicios` (`idservicio`),
  CONSTRAINT `fk_pre_idusuariocre` FOREIGN KEY (`idusuariocre`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `fk_pre_idusuariomod` FOREIGN KEY (`idusuariomod`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `precios` */

insert  into `precios`(`idprecio`,`idservicio`,`precio`,`idusuariocre`,`idusuariomod`,`fechahoracre`,`fechahoramod`,`estado`) values 
(1,12,12.00,3,NULL,'2022-10-25 18:42:23',NULL,'');

/*Table structure for table `protocolos` */

DROP TABLE IF EXISTS `protocolos`;

CREATE TABLE `protocolos` (
  `idprotocolo` int(11) NOT NULL AUTO_INCREMENT,
  `idempresa` int(11) NOT NULL,
  `idtipoexamen` int(11) NOT NULL,
  `protocolo` varchar(70) NOT NULL,
  `consinformado` char(2) DEFAULT NULL,
  `consdrogas` char(2) DEFAULT NULL,
  `idusuariocre` int(11) NOT NULL,
  `fechahoracre` datetime NOT NULL DEFAULT current_timestamp(),
  `idusuariomod` int(11) DEFAULT NULL,
  `fechahoramod` datetime DEFAULT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`idprotocolo`),
  UNIQUE KEY `uk_prt_protocolo` (`idempresa`,`protocolo`),
  KEY `fk_prt_idtipoexamen` (`idtipoexamen`),
  KEY `fk_prt_idusuariocre` (`idusuariocre`),
  KEY `fk_prt_idusuariomod` (`idusuariomod`),
  CONSTRAINT `fk_prt_idempresa` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`),
  CONSTRAINT `fk_prt_idtipoexamen` FOREIGN KEY (`idtipoexamen`) REFERENCES `tipoexamenes` (`idtipoexamen`),
  CONSTRAINT `fk_prt_idusuariocre` FOREIGN KEY (`idusuariocre`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `fk_prt_idusuariomod` FOREIGN KEY (`idusuariomod`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `protocolos` */

insert  into `protocolos`(`idprotocolo`,`idempresa`,`idtipoexamen`,`protocolo`,`consinformado`,`consdrogas`,`idusuariocre`,`fechahoracre`,`idusuariomod`,`fechahoramod`,`estado`) values 
(1,1,3,'Básico','NO','NO',3,'2022-10-19 16:43:11',NULL,NULL,''),
(2,2,3,'Programador','NO','NO',3,'2022-10-19 16:43:28',3,'2022-10-19 17:20:11','');

/*Table structure for table `puestos` */

DROP TABLE IF EXISTS `puestos`;

CREATE TABLE `puestos` (
  `idpuesto` int(11) NOT NULL AUTO_INCREMENT,
  `puesto` varchar(70) NOT NULL,
  PRIMARY KEY (`idpuesto`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `puestos` */

insert  into `puestos`(`idpuesto`,`puesto`) values 
(1,'Conductor'),
(2,'Programador'),
(3,'Administrador'),
(4,'Obrero'),
(5,'Limpieza'),
(6,'Tecnico electricista');

/*Table structure for table `sedes` */

DROP TABLE IF EXISTS `sedes`;

CREATE TABLE `sedes` (
  `idsede` int(11) NOT NULL AUTO_INCREMENT,
  `ubigeo` char(6) NOT NULL,
  `sede` varchar(60) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `idusuariocre` int(11) NOT NULL,
  `fechahoracre` datetime NOT NULL DEFAULT current_timestamp(),
  `idusuariomod` int(11) DEFAULT NULL,
  `fechahoramod` datetime DEFAULT NULL,
  PRIMARY KEY (`idsede`),
  UNIQUE KEY `uk_sed_sede` (`sede`),
  KEY `fk_sed_idusuariocre` (`idusuariocre`),
  KEY `fk_sed_idusuariomod` (`idusuariomod`),
  CONSTRAINT `fk_sed_idusuariocre` FOREIGN KEY (`idusuariocre`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `fk_sed_idusuariomod` FOREIGN KEY (`idusuariomod`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sedes` */

insert  into `sedes`(`idsede`,`ubigeo`,`sede`,`direccion`,`idusuariocre`,`fechahoracre`,`idusuariomod`,`fechahoramod`) values 
(1,'100205','Chincha','Av. 28 de Julio',3,'2022-10-13 17:56:07',NULL,NULL),
(2,'100405','Pisco','Av. Paracas',3,'2022-10-13 17:56:07',NULL,NULL),
(3,'140901','Lima','Av. Lima',3,'2022-10-13 17:56:07',NULL,NULL);

/*Table structure for table `servicios` */

DROP TABLE IF EXISTS `servicios`;

CREATE TABLE `servicios` (
  `idservicio` int(11) NOT NULL AUTO_INCREMENT,
  `idsede` int(11) NOT NULL,
  `servicio` varchar(70) NOT NULL,
  `idusuariocre` int(11) NOT NULL,
  `fechahoracre` datetime NOT NULL DEFAULT current_timestamp(),
  `idusuariomod` int(11) DEFAULT NULL,
  `fechahoramod` datetime DEFAULT NULL,
  `idusuariobaja` int(11) DEFAULT NULL,
  `fechabaja` datetime DEFAULT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`idservicio`),
  UNIQUE KEY `uk_srv_servicio` (`idsede`,`servicio`),
  KEY `fk_srv_idusuariocre` (`idusuariocre`),
  KEY `fk_srv_idusuariomod` (`idusuariomod`),
  KEY `fk_srv_idusuariobaja` (`idusuariobaja`),
  CONSTRAINT `fk_srv_idsede` FOREIGN KEY (`idsede`) REFERENCES `sedes` (`idsede`),
  CONSTRAINT `fk_srv_idusuariobaja` FOREIGN KEY (`idusuariobaja`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `fk_srv_idusuariocre` FOREIGN KEY (`idusuariocre`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `fk_srv_idusuariomod` FOREIGN KEY (`idusuariomod`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `servicios` */

insert  into `servicios`(`idservicio`,`idsede`,`servicio`,`idusuariocre`,`fechahoracre`,`idusuariomod`,`fechahoramod`,`idusuariobaja`,`fechabaja`,`estado`) values 
(1,1,'hjghg',3,'2022-10-24 15:07:18',NULL,NULL,NULL,NULL,'\0'),
(2,1,'ABC',3,'2022-10-24 15:09:24',NULL,NULL,NULL,NULL,'\0'),
(3,1,'ABCd',3,'2022-10-24 15:49:29',NULL,NULL,NULL,NULL,'\0'),
(4,2,'Oftalmología',3,'2022-10-24 15:56:38',NULL,NULL,NULL,NULL,'\0'),
(5,1,'',3,'2022-10-24 16:01:04',3,'2022-10-25 18:27:52',NULL,NULL,'\0'),
(6,1,'ss',3,'2022-10-24 16:01:24',NULL,NULL,NULL,NULL,'\0'),
(7,3,'SSS',3,'2022-10-24 16:02:03',NULL,NULL,NULL,NULL,'\0'),
(8,1,'Rayos X',3,'2022-10-24 16:03:31',NULL,NULL,NULL,NULL,'\0'),
(9,1,'JA',3,'2022-10-24 16:09:14',NULL,NULL,NULL,NULL,'\0'),
(10,1,'aaa',3,'2022-10-25 18:29:08',NULL,NULL,NULL,NULL,'\0'),
(11,1,'gf',3,'2022-10-25 18:36:40',NULL,NULL,NULL,NULL,'\0'),
(12,1,'lkk',3,'2022-10-25 18:42:23',NULL,NULL,NULL,NULL,'');

/*Table structure for table `subservicios` */

DROP TABLE IF EXISTS `subservicios`;

CREATE TABLE `subservicios` (
  `idsubservicio` int(11) NOT NULL AUTO_INCREMENT,
  `nomsubservicio` varchar(70) NOT NULL,
  `tipo` char(2) NOT NULL,
  `idarealaboratorio` int(11) DEFAULT NULL,
  `idespecialidad` int(11) NOT NULL,
  `idusuariocre` int(11) NOT NULL,
  `fechahoracre` datetime NOT NULL DEFAULT current_timestamp(),
  `idusuariomod` int(11) DEFAULT NULL,
  `fechahoramod` datetime DEFAULT NULL,
  `idusuariobaja` int(11) DEFAULT NULL,
  `fechabaja` datetime DEFAULT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `idfichamedica` int(11) DEFAULT NULL,
  PRIMARY KEY (`idsubservicio`),
  KEY `fk_sbs_idusuariocre` (`idusuariocre`),
  KEY `fk_sbs_idusuariomod` (`idusuariomod`),
  KEY `fk_sbs_idusuariobaja` (`idusuariobaja`),
  KEY `fk_sbs_idfichamedica` (`idfichamedica`),
  CONSTRAINT `fk_sbs_idfichamedica` FOREIGN KEY (`idfichamedica`) REFERENCES `fichasmedicas` (`idfichamedica`),
  CONSTRAINT `fk_sbs_idusuariobaja` FOREIGN KEY (`idusuariobaja`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `fk_sbs_idusuariocre` FOREIGN KEY (`idusuariocre`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `fk_sbs_idusuariomod` FOREIGN KEY (`idusuariomod`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `subservicios` */

/*Table structure for table `tipoexamenes` */

DROP TABLE IF EXISTS `tipoexamenes`;

CREATE TABLE `tipoexamenes` (
  `idtipoexamen` int(11) NOT NULL AUTO_INCREMENT,
  `nomtipoexamen` varchar(50) NOT NULL,
  `idusuariocre` int(11) NOT NULL,
  `fechahoracre` datetime NOT NULL DEFAULT current_timestamp(),
  `idusuariomod` int(11) DEFAULT NULL,
  `fechahoramod` datetime DEFAULT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`idtipoexamen`),
  UNIQUE KEY `uk_tpe_nomtipoexamen` (`nomtipoexamen`),
  KEY `fk_tpe_idusuariocre` (`idusuariocre`),
  KEY `fk_tpe_idusuariomod` (`idusuariomod`),
  CONSTRAINT `fk_tpe_idusuariocre` FOREIGN KEY (`idusuariocre`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `fk_tpe_idusuariomod` FOREIGN KEY (`idusuariomod`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tipoexamenes` */

insert  into `tipoexamenes`(`idtipoexamen`,`nomtipoexamen`,`idusuariocre`,`fechahoracre`,`idusuariomod`,`fechahoramod`,`estado`) values 
(1,'Preocupacional',1,'2022-10-19 12:21:44',NULL,NULL,''),
(2,'Reubicación',1,'2022-10-19 12:21:58',NULL,NULL,''),
(3,'Periodico',1,'2022-10-19 12:22:05',NULL,NULL,''),
(4,'Retiro',1,'2022-10-19 12:22:13',NULL,NULL,''),
(5,'juliocrack',1,'2022-10-19 12:26:47',NULL,'2022-10-19 14:41:47',''),
(6,'XSS',3,'2022-10-25 18:27:43',NULL,'2022-10-25 18:27:51','');

/*Table structure for table `ubigeos` */

DROP TABLE IF EXISTS `ubigeos`;

CREATE TABLE `ubigeos` (
  `ubigeo` char(6) NOT NULL,
  `dpto` varchar(32) DEFAULT NULL,
  `prov` varchar(32) DEFAULT NULL,
  `distrito` varchar(32) DEFAULT NULL,
  `coddist` char(6) DEFAULT NULL,
  `orden` varchar(1) DEFAULT '0',
  PRIMARY KEY (`ubigeo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ubigeos` */

insert  into `ubigeos`(`ubigeo`,`dpto`,`prov`,`distrito`,`coddist`,`orden`) values 
('010101','Amazonas','Chachapoyas','Chachapoyas','010101','0'),
('010102','Amazonas','Chachapoyas','Asuncion','010102','0'),
('010103','Amazonas','Chachapoyas','Balsas','010103','0'),
('010104','Amazonas','Chachapoyas','Cheto','010104','0'),
('010105','Amazonas','Chachapoyas','Chiliquin','010105','0'),
('010106','Amazonas','Chachapoyas','Chuquibamba','010106','0'),
('010107','Amazonas','Chachapoyas','Granada','010107','0'),
('010108','Amazonas','Chachapoyas','Huancas','010108','0'),
('010109','Amazonas','Chachapoyas','La Jalca','010109','0'),
('010110','Amazonas','Chachapoyas','Leymebamba','010110','0'),
('010111','Amazonas','Chachapoyas','Levanto','010111','0'),
('010112','Amazonas','Chachapoyas','Magdalena','010112','0'),
('010113','Amazonas','Chachapoyas','Mariscal Castilla','010113','0'),
('010114','Amazonas','Chachapoyas','Molinopampa','010114','0'),
('010115','Amazonas','Chachapoyas','Montevideo','010115','0'),
('010116','Amazonas','Chachapoyas','Olleros','010116','0'),
('010117','Amazonas','Chachapoyas','Quinjalca','010117','0'),
('010118','Amazonas','Chachapoyas','San Francisco De Daguas','010118','0'),
('010119','Amazonas','Chachapoyas','San Isidro De Maino','010119','0'),
('010120','Amazonas','Chachapoyas','Soloco','010120','0'),
('010121','Amazonas','Chachapoyas','Sonche','010121','0'),
('010201','Amazonas','Bagua','La Peca','010201','0'),
('010202','Amazonas','Bagua','Aramango','010202','0'),
('010203','Amazonas','Bagua','Copallin','010203','0'),
('010204','Amazonas','Bagua','El Parco','010204','0'),
('010206','Amazonas','Bagua','Imaza','010205','0'),
('010301','Amazonas','Bongara','Jumbilla','010301','0'),
('010302','Amazonas','Bongara','Corosha','010304','0'),
('010303','Amazonas','Bongara','Cuispes','010305','0'),
('010304','Amazonas','Bongara','Chisquilla','010302','0'),
('010305','Amazonas','Bongara','Churuja','010303','0'),
('010306','Amazonas','Bongara','Florida','010306','0'),
('010307','Amazonas','Bongara','Recta','010308','0'),
('010308','Amazonas','Bongara','San Carlos','010309','0'),
('010309','Amazonas','Bongara','Shipasbamba','010310','0'),
('010310','Amazonas','Bongara','Valera','010311','0'),
('010311','Amazonas','Bongara','Yambrasbamba','010312','0'),
('010312','Amazonas','Bongara','Jazan','010307','0'),
('010401','Amazonas','Luya','Lamud','010501','0'),
('010402','Amazonas','Luya','Camporredondo','010502','0'),
('010403','Amazonas','Luya','Cocabamba','010503','0'),
('010404','Amazonas','Luya','Colcamar','010504','0'),
('010405','Amazonas','Luya','Conila','010505','0'),
('010406','Amazonas','Luya','Inguilpata','010506','0'),
('010407','Amazonas','Luya','Longuita','010507','0'),
('010408','Amazonas','Luya','Lonya Chico','010508','0'),
('010409','Amazonas','Luya','Luya','010509','0'),
('010410','Amazonas','Luya','Luya Viejo','010510','0'),
('010411','Amazonas','Luya','Maria','010511','0'),
('010412','Amazonas','Luya','Ocalli','010512','0'),
('010413','Amazonas','Luya','Ocumal','010513','0'),
('010414','Amazonas','Luya','Pisuquia','010514','0'),
('010415','Amazonas','Luya','San Cristobal','010516','0'),
('010416','Amazonas','Luya','San Francisco De Yeso','010517','0'),
('010417','Amazonas','Luya','San Jeronimo','010518','0'),
('010418','Amazonas','Luya','San Juan De Lopecancha','010519','0'),
('010419','Amazonas','Luya','Santa Catalina','010520','0'),
('010420','Amazonas','Luya','Santo Tomas','010521','0'),
('010421','Amazonas','Luya','Tingo','010522','0'),
('010422','Amazonas','Luya','Trita','010523','0'),
('010423','Amazonas','Luya','Providencia','010515','0'),
('010501','Amazonas','Rodriguez De Mendoza','San Nicolas','010601','0'),
('010502','Amazonas','Rodriguez De Mendoza','Cochamal','010603','0'),
('010503','Amazonas','Rodriguez De Mendoza','Chirimoto','010602','0'),
('010504','Amazonas','Rodriguez De Mendoza','Huambo','010604','0'),
('010505','Amazonas','Rodriguez De Mendoza','Limabamba','010605','0'),
('010506','Amazonas','Rodriguez De Mendoza','Longar','010606','0'),
('010507','Amazonas','Rodriguez De Mendoza','Milpucc','010608','0'),
('010508','Amazonas','Rodriguez De Mendoza','Mariscal Benavides','010607','0'),
('010509','Amazonas','Rodriguez De Mendoza','Omia','010609','0'),
('010510','Amazonas','Rodriguez De Mendoza','Santa Rosa','010610','0'),
('010511','Amazonas','Rodriguez De Mendoza','Totora','010611','0'),
('010512','Amazonas','Rodriguez De Mendoza','Vista Alegre','010612','0'),
('010601','Amazonas','Condorcanqui','Nieva','010401','0'),
('010602','Amazonas','Condorcanqui','Rio Santiago','010403','0'),
('010603','Amazonas','Condorcanqui','El Cenepa','010402','0'),
('010701','Amazonas','Utcubamba','Bagua Grande','010701','0'),
('010702','Amazonas','Utcubamba','Cajaruro','010702','0'),
('010703','Amazonas','Utcubamba','Cumba','010703','0'),
('010704','Amazonas','Utcubamba','El Milagro','010704','0'),
('010705','Amazonas','Utcubamba','Jamalca','010705','0'),
('010706','Amazonas','Utcubamba','Lonya Grande','010706','0'),
('010707','Amazonas','Utcubamba','Yamon','010707','0'),
('020101','Ancash','Huaraz','Huaraz','020101','1'),
('020102','Ancash','Huaraz','Independencia','020105','1'),
('020103','Ancash','Huaraz','Cochabamba','020102','1'),
('020104','Ancash','Huaraz','Colcabamba','020103','1'),
('020105','Ancash','Huaraz','Huanchay','020104','1'),
('020106','Ancash','Huaraz','Jangas','020106','1'),
('020107','Ancash','Huaraz','La Libertad','020107','1'),
('020108','Ancash','Huaraz','Olleros','020108','1'),
('020109','Ancash','Huaraz','Pampas','020109','1'),
('020110','Ancash','Huaraz','Pariacoto','020110','1'),
('020111','Ancash','Huaraz','Pira','020111','1'),
('020112','Ancash','Huaraz','Tarica','020112','1'),
('020201','Ancash','Aija','Aija','020201','1'),
('020203','Ancash','Aija','Coris','020202','1'),
('020205','Ancash','Aija','Huacllan','020203','1'),
('020206','Ancash','Aija','La Merced','020204','1'),
('020208','Ancash','Aija','Succha','020205','1'),
('020301','Ancash','Bolognesi','Chiquian','020501','1'),
('020302','Ancash','Bolognesi','Abelardo Pardo Lezameta','020502','1'),
('020304','Ancash','Bolognesi','Aquia','020504','1'),
('020305','Ancash','Bolognesi','Cajacay','020505','1'),
('020310','Ancash','Bolognesi','Huayllacayan','020510','1'),
('020311','Ancash','Bolognesi','Huasta','020509','1'),
('020313','Ancash','Bolognesi','Mangas','020512','1'),
('020315','Ancash','Bolognesi','Pacllon','020513','1'),
('020317','Ancash','Bolognesi','San Miguel De Corpanqui','020514','1'),
('020320','Ancash','Bolognesi','Ticllos','020515','1'),
('020321','Ancash','Bolognesi','Antonio Raimondi','020503','1'),
('020322','Ancash','Bolognesi','Canis','020506','1'),
('020323','Ancash','Bolognesi','Colquioc','020507','1'),
('020324','Ancash','Bolognesi','La Primavera','020511','1'),
('020325','Ancash','Bolognesi','Huallanca','020508','1'),
('020401','Ancash','Carhuaz','Carhuaz','020601','1'),
('020402','Ancash','Carhuaz','Acopampa','020602','1'),
('020403','Ancash','Carhuaz','Amashca','020603','1'),
('020404','Ancash','Carhuaz','Anta','020604','1'),
('020405','Ancash','Carhuaz','Ataquero','020605','1'),
('020406','Ancash','Carhuaz','Marcara','020606','1'),
('020407','Ancash','Carhuaz','Pariahuanca','020607','1'),
('020408','Ancash','Carhuaz','San Miguel De Aco','020608','1'),
('020409','Ancash','Carhuaz','Shilla','020609','1'),
('020410','Ancash','Carhuaz','Tinco','020610','1'),
('020411','Ancash','Carhuaz','Yungar','020611','1'),
('020501','Ancash','Casma','Casma','020801','1'),
('020502','Ancash','Casma','Buena Vista Alta','020802','1'),
('020503','Ancash','Casma','Comandante Noel','020803','1'),
('020505','Ancash','Casma','Yautan','020804','1'),
('020601','Ancash','Corongo','Corongo','020901','1'),
('020602','Ancash','Corongo','Aco','020902','1'),
('020603','Ancash','Corongo','Bambas','020903','1'),
('020604','Ancash','Corongo','Cusca','020904','1'),
('020605','Ancash','Corongo','La Pampa','020905','1'),
('020606','Ancash','Corongo','Yanac','020906','1'),
('020607','Ancash','Corongo','Yupan','020907','1'),
('020701','Ancash','Huaylas','Caraz','021201','1'),
('020702','Ancash','Huaylas','Huallanca','021202','1'),
('020703','Ancash','Huaylas','Huata','021203','1'),
('020704','Ancash','Huaylas','Huaylas','021204','1'),
('020705','Ancash','Huaylas','Mato','021205','1'),
('020706','Ancash','Huaylas','Pamparomas','021206','1'),
('020707','Ancash','Huaylas','Pueblo Libre','021207','1'),
('020708','Ancash','Huaylas','Santa Cruz','021208','1'),
('020709','Ancash','Huaylas','Yuracmarca','021210','1'),
('020710','Ancash','Huaylas','Santo Toribio','021209','1'),
('020801','Ancash','Huari','Huari','021001','1'),
('020802','Ancash','Huari','Cajay','021003','1'),
('020803','Ancash','Huari','Chavin De Huantar','021004','1'),
('020804','Ancash','Huari','Huacachi','021005','1'),
('020805','Ancash','Huari','Huachis','021007','1'),
('020806','Ancash','Huari','Huacchis','021006','1'),
('020807','Ancash','Huari','Huantar','021008','1'),
('020808','Ancash','Huari','Masin','021009','1'),
('020809','Ancash','Huari','Paucas','021010','1'),
('020810','Ancash','Huari','Ponto','021011','1'),
('020811','Ancash','Huari','Rahuapampa','021012','1'),
('020812','Ancash','Huari','Rapayan','021013','1'),
('020813','Ancash','Huari','San Marcos','021014','1'),
('020814','Ancash','Huari','San Pedro De Chana','021015','1'),
('020815','Ancash','Huari','Uco','021016','1'),
('020816','Ancash','Huari','Anra','021002','1'),
('020901','Ancash','Mariscal Luzuriaga','Piscobamba','021301','1'),
('020902','Ancash','Mariscal Luzuriaga','Casca','021302','1'),
('020903','Ancash','Mariscal Luzuriaga','Lucma','021307','1'),
('020904','Ancash','Mariscal Luzuriaga','Fidel Olivas Escudero','021304','1'),
('020905','Ancash','Mariscal Luzuriaga','Llama','021305','1'),
('020906','Ancash','Mariscal Luzuriaga','Llumpa','021306','1'),
('020907','Ancash','Mariscal Luzuriaga','Musga','021308','1'),
('020908','Ancash','Mariscal Luzuriaga','Eleazar Guzman Barron','021303','1'),
('021001','Ancash','Pallasca','Cabana','021501','1'),
('021002','Ancash','Pallasca','Bolognesi','021502','1'),
('021003','Ancash','Pallasca','Conchucos','021503','1'),
('021004','Ancash','Pallasca','Huacaschuque','021504','1'),
('021005','Ancash','Pallasca','Huandoval','021505','1'),
('021006','Ancash','Pallasca','Lacabamba','021506','1'),
('021007','Ancash','Pallasca','Llapo','021507','1'),
('021008','Ancash','Pallasca','Pallasca','021508','1'),
('021009','Ancash','Pallasca','Pampas','021509','1'),
('021010','Ancash','Pallasca','Santa Rosa','021510','1'),
('021011','Ancash','Pallasca','Tauca','021511','1'),
('021101','Ancash','Pomabamba','Pomabamba','021601','1'),
('021102','Ancash','Pomabamba','Huayllan','021602','1'),
('021103','Ancash','Pomabamba','Parobamba','021603','1'),
('021104','Ancash','Pomabamba','Quinuabamba','021604','1'),
('021201','Ancash','Recuay','Recuay','021701','1'),
('021202','Ancash','Recuay','Cotaparaco','021703','1'),
('021203','Ancash','Recuay','Huayllapampa','021704','1'),
('021204','Ancash','Recuay','Marca','021706','1'),
('021205','Ancash','Recuay','Pampas Chico','021707','1'),
('021206','Ancash','Recuay','Pararin','021708','1'),
('021207','Ancash','Recuay','Tapacocha','021709','1'),
('021208','Ancash','Recuay','Ticapampa','021710','1'),
('021209','Ancash','Recuay','Llacllin','021705','1'),
('021210','Ancash','Recuay','Catac','021702','1'),
('021301','Ancash','Santa','Chimbote','021801','0'),
('021302','Ancash','Santa','Caceres Del Peru','021802','0'),
('021303','Ancash','Santa','Macate','021804','0'),
('021304','Ancash','Santa','Moro','021805','0'),
('021305','Ancash','Santa','Nepeña','021806','0'),
('021306','Ancash','Santa','Samanco','021807','0'),
('021307','Ancash','Santa','Santa','021808','0'),
('021308','Ancash','Santa','Coishco','021803','0'),
('021309','Ancash','Santa','Nuevo Chimbote','021809','0'),
('021401','Ancash','Sihuas','Sihuas','021901','1'),
('021402','Ancash','Sihuas','Alfonso Ugarte','021903','1'),
('021403','Ancash','Sihuas','Chingalpo','021905','1'),
('021404','Ancash','Sihuas','Huayllabamba','021906','1'),
('021405','Ancash','Sihuas','Quiches','021907','1'),
('021406','Ancash','Sihuas','Sicsibamba','021910','1'),
('021407','Ancash','Sihuas','Acobamba','021902','1'),
('021408','Ancash','Sihuas','Cashapampa','021904','1'),
('021409','Ancash','Sihuas','Ragash','021908','1'),
('021410','Ancash','Sihuas','San Juan','021909','1'),
('021501','Ancash','Yungay','Yungay','022001','1'),
('021502','Ancash','Yungay','Cascapara','022002','1'),
('021503','Ancash','Yungay','Mancos','022003','1'),
('021504','Ancash','Yungay','Matacoto','022004','1'),
('021505','Ancash','Yungay','Quillo','022005','1'),
('021506','Ancash','Yungay','Ranrahirca','022006','1'),
('021507','Ancash','Yungay','Shupluy','022007','1'),
('021508','Ancash','Yungay','Yanama','022008','1'),
('021601','Ancash','Antonio Raimondi','Llamellin','020301','1'),
('021602','Ancash','Antonio Raimondi','Aczo','020302','1'),
('021603','Ancash','Antonio Raimondi','Chaccho','020303','1'),
('021604','Ancash','Antonio Raimondi','Chingas','020304','1'),
('021605','Ancash','Antonio Raimondi','Mirgas','020305','1'),
('021606','Ancash','Antonio Raimondi','San Juan De Rontoy','020306','1'),
('021701','Ancash','Carlos Fermin Fitzcarrald','San Luis','020701','1'),
('021702','Ancash','Carlos Fermin Fitzcarrald','Yauya','020703','1'),
('021703','Ancash','Carlos Fermin Fitzcarrald','San Nicolas','020702','1'),
('021801','Ancash','Asuncion','Chacas','020401','1'),
('021802','Ancash','Asuncion','Acochaca','020402','1'),
('021901','Ancash','Huarmey','Huarmey','021101','1'),
('021902','Ancash','Huarmey','Cochapeti','021102','1'),
('021903','Ancash','Huarmey','Huayan','021104','1'),
('021904','Ancash','Huarmey','Malvas','021105','1'),
('021905','Ancash','Huarmey','Culebras','021103','1'),
('022001','Ancash','Ocros','Acas','021402','1'),
('022002','Ancash','Ocros','Cajamarquilla','021403','1'),
('022003','Ancash','Ocros','Carhuapampa','021404','1'),
('022004','Ancash','Ocros','Cochas','021405','1'),
('022005','Ancash','Ocros','Congas','021406','1'),
('022006','Ancash','Ocros','Llipa','021407','1'),
('022007','Ancash','Ocros','Ocros','021401','1'),
('022008','Ancash','Ocros','San Cristobal De Rajan','021408','1'),
('022009','Ancash','Ocros','San Pedro','021409','1'),
('022010','Ancash','Ocros','Santiago De Chilcas','021410','1'),
('030101','Apurimac','Abancay','Abancay','030101','0'),
('030102','Apurimac','Abancay','Circa','030103','0'),
('030103','Apurimac','Abancay','Curahuasi','030104','0'),
('030104','Apurimac','Abancay','Chacoche','030102','0'),
('030105','Apurimac','Abancay','Huanipaca','030105','0'),
('030106','Apurimac','Abancay','Lambrama','030106','0'),
('030107','Apurimac','Abancay','Pichirhua','030107','0'),
('030108','Apurimac','Abancay','San Pedro De Cachora','030108','0'),
('030109','Apurimac','Abancay','Tamburco','030109','0'),
('030201','Apurimac','Aymaraes','Chalhuanca','030401','0'),
('030202','Apurimac','Aymaraes','Capaya','030402','0'),
('030203','Apurimac','Aymaraes','Caraybamba','030403','0'),
('030204','Apurimac','Aymaraes','Colcabamba','030405','0'),
('030205','Apurimac','Aymaraes','Cotaruse','030406','0'),
('030206','Apurimac','Aymaraes','Chapimarca','030404','0'),
('030207','Apurimac','Aymaraes','Ihuayllo','030407','0'),
('030208','Apurimac','Aymaraes','Lucre','030409','0'),
('030209','Apurimac','Aymaraes','Pocohuanca','030410','0'),
('030210','Apurimac','Aymaraes','Sañayca','030412','0'),
('030211','Apurimac','Aymaraes','Soraya','030413','0'),
('030212','Apurimac','Aymaraes','Tapairihua','030414','0'),
('030213','Apurimac','Aymaraes','Tintay','030415','0'),
('030214','Apurimac','Aymaraes','Toraya','030416','0'),
('030215','Apurimac','Aymaraes','Yanaca','030417','0'),
('030216','Apurimac','Aymaraes','San Juan De Chacña','030411','0'),
('030217','Apurimac','Aymaraes','Justo Apu Sahuaraura','030408','0'),
('030301','Apurimac','Andahuaylas','Andahuaylas','030201','0'),
('030302','Apurimac','Andahuaylas','Andarapa','030202','0'),
('030303','Apurimac','Andahuaylas','Chiara','030203','0'),
('030304','Apurimac','Andahuaylas','Huancarama','030204','0'),
('030305','Apurimac','Andahuaylas','Huancaray','030205','0'),
('030306','Apurimac','Andahuaylas','Kishuara','030207','0'),
('030307','Apurimac','Andahuaylas','Pacobamba','030208','0'),
('030308','Apurimac','Andahuaylas','Pampachiri','030210','0'),
('030309','Apurimac','Andahuaylas','San Antonio De Cachi','030212','0'),
('030310','Apurimac','Andahuaylas','San Jeronimo','030213','0'),
('030311','Apurimac','Andahuaylas','Talavera','030216','0'),
('030312','Apurimac','Andahuaylas','Turpo','030218','0'),
('030313','Apurimac','Andahuaylas','Pacucha','030209','0'),
('030314','Apurimac','Andahuaylas','Pomacocha','030211','0'),
('030315','Apurimac','Andahuaylas','Santa Maria De Chicmo','030215','0'),
('030316','Apurimac','Andahuaylas','Tumay Huaraca','030217','0'),
('030317','Apurimac','Andahuaylas','Huayana','030206','0'),
('030318','Apurimac','Andahuaylas','San Miguel De Chaccrampa','030214','0'),
('030319','Apurimac','Andahuaylas','Kaquiabamba','030219','0'),
('030401','Apurimac','Antabamba','Antabamba','030301','0'),
('030402','Apurimac','Antabamba','El Oro','030302','0'),
('030403','Apurimac','Antabamba','Huaquirca','030303','0'),
('030404','Apurimac','Antabamba','Juan Espinoza Medrano','030304','0'),
('030405','Apurimac','Antabamba','Oropesa','030305','0'),
('030406','Apurimac','Antabamba','Pachaconas','030306','0'),
('030407','Apurimac','Antabamba','Sabaino','030307','0'),
('030501','Apurimac','Cotabambas','Tambobamba','030501','0'),
('030502','Apurimac','Cotabambas','Coyllurqui','030503','0'),
('030503','Apurimac','Cotabambas','Cotabambas','030502','0'),
('030504','Apurimac','Cotabambas','Haquira','030504','0'),
('030505','Apurimac','Cotabambas','Mara','030505','0'),
('030506','Apurimac','Cotabambas','Challhuahuacho','030506','0'),
('030601','Apurimac','Grau','Chuquibambilla','030701','0'),
('030602','Apurimac','Grau','Curpahuasi','030702','0'),
('030603','Apurimac','Grau','Huayllati','030704','0'),
('030604','Apurimac','Grau','Mamara','030705','0'),
('030605','Apurimac','Grau','Mariscal Gamarra','030703','0'),
('030606','Apurimac','Grau','Micaela Bastidas','030706','0'),
('030607','Apurimac','Grau','Progreso','030708','0'),
('030608','Apurimac','Grau','Pataypampa','030707','0'),
('030609','Apurimac','Grau','San Antonio','030709','0'),
('030610','Apurimac','Grau','Turpay','030711','0'),
('030611','Apurimac','Grau','Vilcabamba','030712','0'),
('030612','Apurimac','Grau','Virundo','030713','0'),
('030613','Apurimac','Grau','Santa Rosa','030710','0'),
('030614','Apurimac','Grau','Curasco','030714','0'),
('030701','Apurimac','Chincheros','Chincheros','030601','0'),
('030702','Apurimac','Chincheros','Ongoy','030606','0'),
('030703','Apurimac','Chincheros','Ocobamba','030605','0'),
('030704','Apurimac','Chincheros','Cocharcas','030603','0'),
('030705','Apurimac','Chincheros','Anco Huallo','030602','0'),
('030706','Apurimac','Chincheros','Huaccana','030604','0'),
('030707','Apurimac','Chincheros','Uranmarca','030607','0'),
('030708','Apurimac','Chincheros','Ranracancha','030608','0'),
('040101','Arequipa','Arequipa','Arequipa','040101','0'),
('040102','Arequipa','Arequipa','Cayma','040103','0'),
('040103','Arequipa','Arequipa','Cerro Colorado','040104','0'),
('040104','Arequipa','Arequipa','Characato','040105','0'),
('040105','Arequipa','Arequipa','Chiguata','040106','0'),
('040106','Arequipa','Arequipa','La Joya','040108','0'),
('040107','Arequipa','Arequipa','Miraflores','040110','0'),
('040108','Arequipa','Arequipa','Mollebaya','040111','0'),
('040109','Arequipa','Arequipa','Paucarpata','040112','0'),
('040110','Arequipa','Arequipa','Pocsi','040113','0'),
('040111','Arequipa','Arequipa','Polobaya','040114','0'),
('040112','Arequipa','Arequipa','Quequeña','040115','0'),
('040113','Arequipa','Arequipa','Sabandia','040116','0'),
('040114','Arequipa','Arequipa','Sachaca','040117','0'),
('040115','Arequipa','Arequipa','San Juan De Siguas','040118','0'),
('040116','Arequipa','Arequipa','San Juan De Tarucani','040119','0'),
('040117','Arequipa','Arequipa','Santa Isabel De Siguas','040120','0'),
('040118','Arequipa','Arequipa','Santa Rita De Sihuas','040121','0'),
('040119','Arequipa','Arequipa','Socabaya','040122','0'),
('040120','Arequipa','Arequipa','Tiabaya','040123','0'),
('040121','Arequipa','Arequipa','Uchumayo','040124','0'),
('040122','Arequipa','Arequipa','Vitor','040125','0'),
('040123','Arequipa','Arequipa','Yanahuara','040126','0'),
('040124','Arequipa','Arequipa','Yarabamba','040127','0'),
('040125','Arequipa','Arequipa','Yura','040128','0'),
('040126','Arequipa','Arequipa','Mariano Melgar','040109','0'),
('040127','Arequipa','Arequipa','Jacobo Hunter','040107','0'),
('040128','Arequipa','Arequipa','Alto Selva Alegre','040102','0'),
('040129','Arequipa','Arequipa','Jose Luis Bustamante Y Rivero','040129','0'),
('040201','Arequipa','Caylloma','Chivay','040501','0'),
('040202','Arequipa','Caylloma','Achoma','040502','0'),
('040203','Arequipa','Caylloma','Cabanaconde','040503','0'),
('040204','Arequipa','Caylloma','Caylloma','040505','0'),
('040205','Arequipa','Caylloma','Callalli','040504','0'),
('040206','Arequipa','Caylloma','Coporaque','040506','0'),
('040207','Arequipa','Caylloma','Huambo','040507','0'),
('040208','Arequipa','Caylloma','Huanca','040508','0'),
('040209','Arequipa','Caylloma','Ichupampa','040509','0'),
('040210','Arequipa','Caylloma','Lari','040510','0'),
('040211','Arequipa','Caylloma','Lluta','040511','0'),
('040212','Arequipa','Caylloma','Maca','040512','0'),
('040213','Arequipa','Caylloma','Madrigal','040513','0'),
('040214','Arequipa','Caylloma','San Antonio De Chuca','040514','0'),
('040215','Arequipa','Caylloma','Sibayo','040515','0'),
('040216','Arequipa','Caylloma','Tapay','040516','0'),
('040217','Arequipa','Caylloma','Tisco','040517','0'),
('040218','Arequipa','Caylloma','Tuti','040518','0'),
('040219','Arequipa','Caylloma','Yanque','040519','0'),
('040220','Arequipa','Caylloma','Majes','040520','0'),
('040301','Arequipa','Camana','Camana','040201','0'),
('040302','Arequipa','Camana','Jose Maria Quimper','040202','0'),
('040303','Arequipa','Camana','Mariano Nicolas Valcarcel','040203','0'),
('040304','Arequipa','Camana','Mariscal Caceres','040204','0'),
('040305','Arequipa','Camana','Nicolas De Pierola','040205','0'),
('040306','Arequipa','Camana','Ocoña','040206','0'),
('040307','Arequipa','Camana','Quilca','040207','0'),
('040308','Arequipa','Camana','Samuel Pastor','040208','0'),
('040401','Arequipa','Caraveli','Caraveli','040301','0'),
('040402','Arequipa','Caraveli','Acari','040302','0'),
('040403','Arequipa','Caraveli','Atico','040303','0'),
('040404','Arequipa','Caraveli','Atiquipa','040304','0'),
('040405','Arequipa','Caraveli','Bella Union','040305','0'),
('040406','Arequipa','Caraveli','Cahuacho','040306','0'),
('040407','Arequipa','Caraveli','Chala','040307','0'),
('040408','Arequipa','Caraveli','Chaparra','040308','0'),
('040409','Arequipa','Caraveli','Huanuhuanu','040309','0'),
('040410','Arequipa','Caraveli','Jaqui','040310','0'),
('040411','Arequipa','Caraveli','Lomas','040311','0'),
('040412','Arequipa','Caraveli','Quicacha','040312','0'),
('040413','Arequipa','Caraveli','Yauca','040313','0'),
('040501','Arequipa','Castilla','Aplao','040401','0'),
('040502','Arequipa','Castilla','Andagua','040402','0'),
('040503','Arequipa','Castilla','Ayo','040403','0'),
('040504','Arequipa','Castilla','Chachas','040404','0'),
('040505','Arequipa','Castilla','Chilcaymarca','040405','0'),
('040506','Arequipa','Castilla','Choco','040406','0'),
('040507','Arequipa','Castilla','Huancarqui','040407','0'),
('040508','Arequipa','Castilla','Machaguay','040408','0'),
('040509','Arequipa','Castilla','Orcopampa','040409','0'),
('040510','Arequipa','Castilla','Pampacolca','040410','0'),
('040511','Arequipa','Castilla','Tipan','040411','0'),
('040512','Arequipa','Castilla','Uraca','040413','0'),
('040513','Arequipa','Castilla','Uñon','040412','0'),
('040514','Arequipa','Castilla','Viraco','040414','0'),
('040601','Arequipa','Condesuyos','Chuquibamba','040601','0'),
('040602','Arequipa','Condesuyos','Andaray','040602','0'),
('040603','Arequipa','Condesuyos','Cayarani','040603','0'),
('040604','Arequipa','Condesuyos','Chichas','040604','0'),
('040605','Arequipa','Condesuyos','Iray','040605','0'),
('040606','Arequipa','Condesuyos','Salamanca','040607','0'),
('040607','Arequipa','Condesuyos','Yanaquihua','040608','0'),
('040608','Arequipa','Condesuyos','Rio Grande','040606','0'),
('040701','Arequipa','Islay','Mollendo','040701','0'),
('040702','Arequipa','Islay','Cocachacra','040702','0'),
('040703','Arequipa','Islay','Dean Valdivia','040703','0'),
('040704','Arequipa','Islay','Islay','040704','0'),
('040705','Arequipa','Islay','Mejia','040705','0'),
('040706','Arequipa','Islay','Punta De Bombon','040706','0'),
('040801','Arequipa','La Union','Cotahuasi','040801','0'),
('040802','Arequipa','La Union','Alca','040802','0'),
('040803','Arequipa','La Union','Charcana','040803','0'),
('040804','Arequipa','La Union','Huaynacotas','040804','0'),
('040805','Arequipa','La Union','Pampamarca','040805','0'),
('040806','Arequipa','La Union','Puyca','040806','0'),
('040807','Arequipa','La Union','Quechualla','040807','0'),
('040808','Arequipa','La Union','Sayla','040808','0'),
('040809','Arequipa','La Union','Tauria','040809','0'),
('040810','Arequipa','La Union','Tomepampa','040810','0'),
('040811','Arequipa','La Union','Toro','040811','0'),
('050101','Ayacucho','Huamanga','Ayacucho','050101','0'),
('050102','Ayacucho','Huamanga','Acos Vinchos','050103','0'),
('050103','Ayacucho','Huamanga','Carmen Alto','050104','0'),
('050104','Ayacucho','Huamanga','Chiara','050105','0'),
('050105','Ayacucho','Huamanga','Quinua','050108','0'),
('050106','Ayacucho','Huamanga','San Jose De Ticllas','050109','0'),
('050107','Ayacucho','Huamanga','San Juan Bautista','050110','0'),
('050108','Ayacucho','Huamanga','Santiago De Pischa','050111','0'),
('050109','Ayacucho','Huamanga','Vinchos','050114','0'),
('050110','Ayacucho','Huamanga','Tambillo','050113','0'),
('050111','Ayacucho','Huamanga','Acocro','050102','0'),
('050112','Ayacucho','Huamanga','Socos','050112','0'),
('050113','Ayacucho','Huamanga','Ocros','050106','0'),
('050114','Ayacucho','Huamanga','Pacaycasa','050107','0'),
('050115','Ayacucho','Huamanga','Jesus Nazareno','050115','0'),
('050201','Ayacucho','Cangallo','Cangallo','050201','0'),
('050204','Ayacucho','Cangallo','Chuschi','050202','0'),
('050206','Ayacucho','Cangallo','Los Morochucos','050203','0'),
('050207','Ayacucho','Cangallo','Paras','050205','0'),
('050208','Ayacucho','Cangallo','Totos','050206','0'),
('050211','Ayacucho','Cangallo','Maria Parado De Bellido','050204','0'),
('050301','Ayacucho','Huanta','Huanta','050401','0'),
('050302','Ayacucho','Huanta','Ayahuanco','050402','0'),
('050303','Ayacucho','Huanta','Huamanguilla','050403','0'),
('050304','Ayacucho','Huanta','Iguain','050404','0'),
('050305','Ayacucho','Huanta','Luricocha','050405','0'),
('050307','Ayacucho','Huanta','Santillana','050406','0'),
('050308','Ayacucho','Huanta','Sivia','050407','0'),
('050309','Ayacucho','Huanta','Llochegua','050408','0'),
('050401','Ayacucho','La Mar','San Miguel','050501','0'),
('050402','Ayacucho','La Mar','Anco','050502','0'),
('050403','Ayacucho','La Mar','Ayna','050503','0'),
('050404','Ayacucho','La Mar','Chilcas','050504','0'),
('050405','Ayacucho','La Mar','Chungui','050505','0'),
('050406','Ayacucho','La Mar','Tambo','050508','0'),
('050407','Ayacucho','La Mar','Luis Carranza','050506','0'),
('050408','Ayacucho','La Mar','Santa Rosa','050507','0'),
('050501','Ayacucho','Lucanas','Puquio','050601','0'),
('050502','Ayacucho','Lucanas','Aucara','050602','0'),
('050503','Ayacucho','Lucanas','Cabana','050603','0'),
('050504','Ayacucho','Lucanas','Carmen Salcedo','050604','0'),
('050506','Ayacucho','Lucanas','Chaviña','050605','0'),
('050508','Ayacucho','Lucanas','Chipao','050606','0'),
('050510','Ayacucho','Lucanas','Huac-huas','050607','0'),
('050511','Ayacucho','Lucanas','Laramate','050608','0'),
('050512','Ayacucho','Lucanas','Leoncio Prado','050609','0'),
('050513','Ayacucho','Lucanas','Lucanas','050611','0'),
('050514','Ayacucho','Lucanas','Llauta','050610','0'),
('050516','Ayacucho','Lucanas','Ocaña','050612','0'),
('050517','Ayacucho','Lucanas','Otoca','050613','0'),
('050520','Ayacucho','Lucanas','Sancos','050619','0'),
('050521','Ayacucho','Lucanas','San Juan','050616','0'),
('050522','Ayacucho','Lucanas','San Pedro','050617','0'),
('050524','Ayacucho','Lucanas','Santa Ana De Huaycahuacho','050620','0'),
('050525','Ayacucho','Lucanas','Santa Lucia','050621','0'),
('050529','Ayacucho','Lucanas','Saisa','050614','0'),
('050531','Ayacucho','Lucanas','San Pedro De Palco','050618','0'),
('050532','Ayacucho','Lucanas','San Cristobal','050615','0'),
('050601','Ayacucho','Parinacochas','Coracora','050701','0'),
('050604','Ayacucho','Parinacochas','Coronel Castañeda','050703','0'),
('050605','Ayacucho','Parinacochas','Chumpi','050702','0'),
('050608','Ayacucho','Parinacochas','Pacapausa','050704','0'),
('050611','Ayacucho','Parinacochas','Pullo','050705','0'),
('050612','Ayacucho','Parinacochas','Puyusca','050706','0'),
('050615','Ayacucho','Parinacochas','San Francisco De Ravacayco','050707','0'),
('050616','Ayacucho','Parinacochas','Upahuacho','050708','0'),
('050701','Ayacucho','Victor Fajardo','Huancapi','051001','0'),
('050702','Ayacucho','Victor Fajardo','Alcamenca','051002','0'),
('050703','Ayacucho','Victor Fajardo','Apongo','051003','0'),
('050704','Ayacucho','Victor Fajardo','Canaria','051005','0'),
('050706','Ayacucho','Victor Fajardo','Cayara','051006','0'),
('050707','Ayacucho','Victor Fajardo','Colca','051007','0'),
('050708','Ayacucho','Victor Fajardo','Huaya','051010','0'),
('050709','Ayacucho','Victor Fajardo','Huamanquiquia','051008','0'),
('050710','Ayacucho','Victor Fajardo','Huancaraylla','051009','0'),
('050713','Ayacucho','Victor Fajardo','Sarhua','051011','0'),
('050714','Ayacucho','Victor Fajardo','Vilcanchos','051012','0'),
('050715','Ayacucho','Victor Fajardo','Asquipata','051004','0'),
('050801','Ayacucho','Huanca Sancos','Sancos','050301','0'),
('050802','Ayacucho','Huanca Sancos','Sacsamarca','050303','0'),
('050803','Ayacucho','Huanca Sancos','Santiago De Lucanamarca','050304','0'),
('050804','Ayacucho','Huanca Sancos','Carapo','050302','0'),
('050901','Ayacucho','Vilcas Huaman','Vilcas Huaman','051101','0'),
('050902','Ayacucho','Vilcas Huaman','Vischongo','051108','0'),
('050903','Ayacucho','Vilcas Huaman','Accomarca','051102','0'),
('050904','Ayacucho','Vilcas Huaman','Carhuanca','051103','0'),
('050905','Ayacucho','Vilcas Huaman','Concepcion','051104','0'),
('050906','Ayacucho','Vilcas Huaman','Huambalpa','051105','0'),
('050907','Ayacucho','Vilcas Huaman','Saurama','051107','0'),
('050908','Ayacucho','Vilcas Huaman','Independencia','051106','0'),
('051001','Ayacucho','Paucar Del Sara Sara','Pausa','050801','0'),
('051002','Ayacucho','Paucar Del Sara Sara','Colta','050802','0'),
('051003','Ayacucho','Paucar Del Sara Sara','Corculla','050803','0'),
('051004','Ayacucho','Paucar Del Sara Sara','Lampa','050804','0'),
('051005','Ayacucho','Paucar Del Sara Sara','Marcabamba','050805','0'),
('051006','Ayacucho','Paucar Del Sara Sara','Oyolo','050806','0'),
('051007','Ayacucho','Paucar Del Sara Sara','Pararca','050807','0'),
('051008','Ayacucho','Paucar Del Sara Sara','San Javier De Alpabamba','050808','0'),
('051009','Ayacucho','Paucar Del Sara Sara','San Jose De Ushua','050809','0'),
('051010','Ayacucho','Paucar Del Sara Sara','Sara Sara','050810','0'),
('051101','Ayacucho','Sucre','Querobamba','050901','0'),
('051102','Ayacucho','Sucre','Belen','050902','0'),
('051103','Ayacucho','Sucre','Chalcos','050903','0'),
('051104','Ayacucho','Sucre','San Salvador De Quije','050909','0'),
('051105','Ayacucho','Sucre','Paico','050907','0'),
('051106','Ayacucho','Sucre','Santiago De Paucaray','050910','0'),
('051107','Ayacucho','Sucre','San Pedro De Larcay','050908','0'),
('051108','Ayacucho','Sucre','Soras','050911','0'),
('051109','Ayacucho','Sucre','Huacaña','050905','0'),
('051110','Ayacucho','Sucre','Chilcayoc','050904','0'),
('051111','Ayacucho','Sucre','Morcolla','050906','0'),
('060101','Cajamarca','Cajamarca','Cajamarca','060101','0'),
('060102','Cajamarca','Cajamarca','Asuncion','060102','0'),
('060103','Cajamarca','Cajamarca','Cospan','060104','0'),
('060104','Cajamarca','Cajamarca','Chetilla','060103','0'),
('060105','Cajamarca','Cajamarca','Encañada','060105','0'),
('060106','Cajamarca','Cajamarca','Jesus','060106','0'),
('060107','Cajamarca','Cajamarca','Los Baños Del Inca','060108','0'),
('060108','Cajamarca','Cajamarca','Llacanora','060107','0'),
('060109','Cajamarca','Cajamarca','Magdalena','060109','0'),
('060110','Cajamarca','Cajamarca','Matara','060110','0'),
('060111','Cajamarca','Cajamarca','Namora','060111','0'),
('060112','Cajamarca','Cajamarca','San Juan','060112','0'),
('060201','Cajamarca','Cajabamba','Cajabamba','060201','1'),
('060202','Cajamarca','Cajabamba','Cachachi','060202','1'),
('060203','Cajamarca','Cajabamba','Condebamba','060203','1'),
('060205','Cajamarca','Cajabamba','Sitacocha','060204','1'),
('060301','Cajamarca','Celendin','Celendin','060301','1'),
('060302','Cajamarca','Celendin','Cortegana','060303','1'),
('060303','Cajamarca','Celendin','Chumuch','060302','1'),
('060304','Cajamarca','Celendin','Huasmin','060304','1'),
('060305','Cajamarca','Celendin','Jorge Chavez','060305','1'),
('060306','Cajamarca','Celendin','Jose Galvez','060306','1'),
('060307','Cajamarca','Celendin','Miguel Iglesias','060307','1'),
('060308','Cajamarca','Celendin','Oxamarca','060308','1'),
('060309','Cajamarca','Celendin','Sorochuco','060309','1'),
('060310','Cajamarca','Celendin','Sucre','060310','1'),
('060311','Cajamarca','Celendin','Utco','060311','1'),
('060312','Cajamarca','Celendin','La Libertad De Pallan','060312','1'),
('060401','Cajamarca','Contumaza','Contumaza','060501','1'),
('060403','Cajamarca','Contumaza','Chilete','060502','1'),
('060404','Cajamarca','Contumaza','Guzmango','060504','1'),
('060405','Cajamarca','Contumaza','San Benito','060505','1'),
('060406','Cajamarca','Contumaza','Cupisnique','060503','1'),
('060407','Cajamarca','Contumaza','Tantarica','060507','1'),
('060408','Cajamarca','Contumaza','Yonan','060508','1'),
('060409','Cajamarca','Contumaza','Santa Cruz De Toled','060506','1'),
('060501','Cajamarca','Cutervo','Cutervo','060601','1'),
('060502','Cajamarca','Cutervo','Callayuc','060602','1'),
('060503','Cajamarca','Cutervo','Cujillo','060604','1'),
('060504','Cajamarca','Cutervo','Choros','060603','1'),
('060505','Cajamarca','Cutervo','La Ramada','060605','1'),
('060506','Cajamarca','Cutervo','Pimpingos','060606','1'),
('060507','Cajamarca','Cutervo','Querocotillo','060607','1'),
('060508','Cajamarca','Cutervo','San Andres De Cutervo','060608','1'),
('060509','Cajamarca','Cutervo','San Juan De Cutervo','060609','1'),
('060510','Cajamarca','Cutervo','San Luis De Lucma','060610','1'),
('060511','Cajamarca','Cutervo','Santa Cruz','060611','1'),
('060512','Cajamarca','Cutervo','Santo Domingo De La Capilla','060612','1'),
('060513','Cajamarca','Cutervo','Santo Tomas','060613','1'),
('060514','Cajamarca','Cutervo','Socota','060614','1'),
('060515','Cajamarca','Cutervo','Toribio Casanova','060615','1'),
('060601','Cajamarca','Chota','Chota','060401','1'),
('060602','Cajamarca','Chota','Anguia','060402','1'),
('060603','Cajamarca','Chota','Cochabamba','060407','1'),
('060604','Cajamarca','Chota','Conchan','060408','1'),
('060605','Cajamarca','Chota','Chadin','060403','1'),
('060606','Cajamarca','Chota','Chiguirip','060404','1'),
('060607','Cajamarca','Chota','Chimban','060405','1'),
('060608','Cajamarca','Chota','Huambos','060409','1'),
('060609','Cajamarca','Chota','Lajas','060410','1'),
('060610','Cajamarca','Chota','Llama','060411','1'),
('060611','Cajamarca','Chota','Miracosta','060412','1'),
('060612','Cajamarca','Chota','Paccha','060413','1'),
('060613','Cajamarca','Chota','Pion','060414','1'),
('060614','Cajamarca','Chota','Querocoto','060415','1'),
('060615','Cajamarca','Chota','Tacabamba','060417','1'),
('060616','Cajamarca','Chota','Tocmoche','060418','1'),
('060617','Cajamarca','Chota','San Juan De Licupis','060416','1'),
('060618','Cajamarca','Chota','Choropampa','060406','1'),
('060619','Cajamarca','Chota','Chalamarca','060419','1'),
('060701','Cajamarca','Hualgayoc','Bambamarca','060701','1'),
('060702','Cajamarca','Hualgayoc','Chugur','060702','1'),
('060703','Cajamarca','Hualgayoc','Hualgayoc','060703','1'),
('060801','Cajamarca','Jaen','Jaen','060801','1'),
('060802','Cajamarca','Jaen','Bellavista','060802','1'),
('060803','Cajamarca','Jaen','Colasay','060804','1'),
('060804','Cajamarca','Jaen','Chontali','060803','1'),
('060805','Cajamarca','Jaen','Pomahuaca','060807','1'),
('060806','Cajamarca','Jaen','Pucara','060808','1'),
('060807','Cajamarca','Jaen','Sallique','060809','1'),
('060808','Cajamarca','Jaen','San Felipe','060810','1'),
('060809','Cajamarca','Jaen','San Jose Del Alto','060811','1'),
('060810','Cajamarca','Jaen','Santa Rosa','060812','1'),
('060811','Cajamarca','Jaen','Las Pirias','060806','1'),
('060812','Cajamarca','Jaen','Huabal','060805','1'),
('060901','Cajamarca','Santa Cruz','Santa Cruz','061301','1'),
('060902','Cajamarca','Santa Cruz','Catache','061303','1'),
('060903','Cajamarca','Santa Cruz','Chancaybaños','061304','1'),
('060904','Cajamarca','Santa Cruz','La Esperanza','061305','1'),
('060905','Cajamarca','Santa Cruz','Ninabamba','061306','1'),
('060906','Cajamarca','Santa Cruz','Pulan','061307','1'),
('060907','Cajamarca','Santa Cruz','Sexi','061309','1'),
('060908','Cajamarca','Santa Cruz','Uticyacu','061310','1'),
('060909','Cajamarca','Santa Cruz','Yauyucan','061311','1'),
('060910','Cajamarca','Santa Cruz','Andabamba','061302','1'),
('060911','Cajamarca','Santa Cruz','Saucepampa','061308','1'),
('061001','Cajamarca','San Miguel','San Miguel','061101','1'),
('061002','Cajamarca','San Miguel','Calquis','061103','1'),
('061003','Cajamarca','San Miguel','La Florida','061106','1'),
('061004','Cajamarca','San Miguel','Llapa','061107','1'),
('061005','Cajamarca','San Miguel','Nanchoc','061108','1'),
('061006','Cajamarca','San Miguel','Niepos','061109','1'),
('061007','Cajamarca','San Miguel','San Gregorio','061110','1'),
('061008','Cajamarca','San Miguel','San Silvestre De Cochan','061111','1'),
('061009','Cajamarca','San Miguel','El Prado','061105','1'),
('061010','Cajamarca','San Miguel','Union Agua Blanca','061113','1'),
('061011','Cajamarca','San Miguel','Tongod','061112','1'),
('061012','Cajamarca','San Miguel','Catilluc','061104','1'),
('061013','Cajamarca','San Miguel','Bolivar','061102','1'),
('061101','Cajamarca','San Ignacio','San Ignacio','060901','1'),
('061102','Cajamarca','San Ignacio','Chirinos','060902','1'),
('061103','Cajamarca','San Ignacio','Huarango','060903','1'),
('061104','Cajamarca','San Ignacio','Namballe','060905','1'),
('061105','Cajamarca','San Ignacio','La Coipa','060904','1'),
('061106','Cajamarca','San Ignacio','San Jose De Lourdes','060906','1'),
('061107','Cajamarca','San Ignacio','Tabaconas','060907','1'),
('061201','Cajamarca','San Marcos','Pedro Galvez','061001','1'),
('061202','Cajamarca','San Marcos','Ichocan','061005','1'),
('061203','Cajamarca','San Marcos','Gregorio Pita','061004','1'),
('061204','Cajamarca','San Marcos','Jose Manuel Quiroz','061006','1'),
('061205','Cajamarca','San Marcos','Eduardo Villanueva','061003','1'),
('061206','Cajamarca','San Marcos','Jose Sabogal','061007','1'),
('061207','Cajamarca','San Marcos','Chancay','061002','1'),
('061301','Cajamarca','San Pablo','San Pablo','061201','1'),
('061302','Cajamarca','San Pablo','San Bernardino','061202','1'),
('061303','Cajamarca','San Pablo','San Luis','061203','1'),
('061304','Cajamarca','San Pablo','Tumbaden','061204','1'),
('070101','Cusco','Cusco','Cusco','080101','0'),
('070102','Cusco','Cusco','Ccorca','080102','0'),
('070103','Cusco','Cusco','Poroy','080103','0'),
('070104','Cusco','Cusco','San Jeronimo','080104','0'),
('070105','Cusco','Cusco','San Sebastian','080105','0'),
('070106','Cusco','Cusco','Santiago','080106','0'),
('070107','Cusco','Cusco','Saylla','080107','0'),
('070108','Cusco','Cusco','Wanchaq','080108','0'),
('070201','Cusco','Acomayo','Acomayo','080201','1'),
('070202','Cusco','Acomayo','Acopia','080202','1'),
('070203','Cusco','Acomayo','Acos','080203','1'),
('070204','Cusco','Acomayo','Pomacanchi','080205','1'),
('070205','Cusco','Acomayo','Rondocan','080206','1'),
('070206','Cusco','Acomayo','Sangarara','080207','1'),
('070207','Cusco','Acomayo','Mosoc Llacta','080204','1'),
('070301','Cusco','Anta','Anta','080301','1'),
('070302','Cusco','Anta','Chinchaypujio','080304','1'),
('070303','Cusco','Anta','Huarocondo','080305','1'),
('070304','Cusco','Anta','Limatambo','080306','1'),
('070305','Cusco','Anta','Mollepata','080307','1'),
('070306','Cusco','Anta','Pucyura','080308','1'),
('070307','Cusco','Anta','Zurite','080309','1'),
('070308','Cusco','Anta','Cachimayo','080303','1'),
('070309','Cusco','Anta','Ancahuasi','080302','1'),
('070401','Cusco','Calca','Calca','080401','1'),
('070402','Cusco','Calca','Coya','080402','1'),
('070403','Cusco','Calca','Lamay','080403','1'),
('070404','Cusco','Calca','Lares','080404','1'),
('070405','Cusco','Calca','Pisac','080405','1'),
('070406','Cusco','Calca','San Salvador','080406','1'),
('070407','Cusco','Calca','Taray','080407','1'),
('070408','Cusco','Calca','Yanatile','080408','1'),
('070501','Cusco','Canas','Yanaoca','080501','1'),
('070502','Cusco','Canas','Checca','080502','1'),
('070503','Cusco','Canas','Kunturkanki','080503','1'),
('070504','Cusco','Canas','Langui','080504','1'),
('070505','Cusco','Canas','Layo','080505','1'),
('070506','Cusco','Canas','Pampamarca','080506','1'),
('070507','Cusco','Canas','Quehue','080507','1'),
('070508','Cusco','Canas','Tupac Amaru','080508','1'),
('070601','Cusco','Canchis','Sicuani','080601','1'),
('070602','Cusco','Canchis','Combapata','080603','1'),
('070603','Cusco','Canchis','Checacupe','080602','1'),
('070604','Cusco','Canchis','Marangani','080604','1'),
('070605','Cusco','Canchis','Pitumarca','080605','1'),
('070606','Cusco','Canchis','San Pablo','080606','1'),
('070607','Cusco','Canchis','San Pedro','080607','1'),
('070608','Cusco','Canchis','Tinta','080608','1'),
('070701','Cusco','Chumbivilcas','Santo Tomas','080701','1'),
('070702','Cusco','Chumbivilcas','Capacmarca','080702','1'),
('070703','Cusco','Chumbivilcas','Colquemarca','080704','1'),
('070704','Cusco','Chumbivilcas','Chamaca','080703','1'),
('070705','Cusco','Chumbivilcas','Livitaca','080705','1'),
('070706','Cusco','Chumbivilcas','Llusco','080706','1'),
('070707','Cusco','Chumbivilcas','Quiñota','080707','1'),
('070708','Cusco','Chumbivilcas','Velille','080708','1'),
('070801','Cusco','Espinar','Espinar','080801','1'),
('070802','Cusco','Espinar','Condoroma','080802','1'),
('070803','Cusco','Espinar','Coporaque','080803','1'),
('070804','Cusco','Espinar','Occoruro','080804','1'),
('070805','Cusco','Espinar','Pallpata','080805','1'),
('070806','Cusco','Espinar','Pichigua','080806','1'),
('070807','Cusco','Espinar','Suyckutambo','080807','1'),
('070808','Cusco','Espinar','Alto Pichigua','080808','1'),
('070901','Cusco','La Convencion','Santa Ana','080901','1'),
('070902','Cusco','La Convencion','Echarati','080902','1'),
('070903','Cusco','La Convencion','Huayopata','080903','1'),
('070904','Cusco','La Convencion','Maranura','080904','1'),
('070905','Cusco','La Convencion','Ocobamba','080905','1'),
('070906','Cusco','La Convencion','Santa Teresa','080908','1'),
('070907','Cusco','La Convencion','Vilcabamba','080909','1'),
('070908','Cusco','La Convencion','Quellouno','080906','1'),
('070909','Cusco','La Convencion','Kimbiri','080907','1'),
('070910','Cusco','La Convencion','Pichari','080910','1'),
('071001','Cusco','Paruro','Paruro','081001','1'),
('071002','Cusco','Paruro','Accha','081002','1'),
('071003','Cusco','Paruro','Ccapi','081003','1'),
('071004','Cusco','Paruro','Colcha','081004','1'),
('071005','Cusco','Paruro','Huanoquite','081005','1'),
('071006','Cusco','Paruro','Omacha','081006','1'),
('071007','Cusco','Paruro','Yaurisque','081009','1'),
('071008','Cusco','Paruro','Paccaritambo','081007','1'),
('071009','Cusco','Paruro','Pillpinto','081008','1'),
('071101','Cusco','Paucartambo','Paucartambo','081101','1'),
('071102','Cusco','Paucartambo','Caicay','081102','1'),
('071103','Cusco','Paucartambo','Colquepata','081104','1'),
('071104','Cusco','Paucartambo','Challabamba','081103','1'),
('071105','Cusco','Paucartambo','Kosñipata','081106','1'),
('071106','Cusco','Paucartambo','Huancarani','081105','1'),
('071201','Cusco','Quispicanchi','Urcos','081201','1'),
('071202','Cusco','Quispicanchi','Andahuaylillas','081202','1'),
('071203','Cusco','Quispicanchi','Camanti','081203','1'),
('071204','Cusco','Quispicanchi','Ccarhuayo','081204','1'),
('071205','Cusco','Quispicanchi','Ccatca','081205','1'),
('071206','Cusco','Quispicanchi','Cusipata','081206','1'),
('071207','Cusco','Quispicanchi','Huaro','081207','1'),
('071208','Cusco','Quispicanchi','Lucre','081208','1'),
('071209','Cusco','Quispicanchi','Marcapata','081209','1'),
('071210','Cusco','Quispicanchi','Ocongate','081210','1'),
('071211','Cusco','Quispicanchi','Oropesa','081211','1'),
('071212','Cusco','Quispicanchi','Quiquijana','081212','1'),
('071301','Cusco','Urubamba','Urubamba','081301','1'),
('071302','Cusco','Urubamba','Chinchero','081302','1'),
('071303','Cusco','Urubamba','Huayllabamba','081303','1'),
('071304','Cusco','Urubamba','Machupicchu','081304','1'),
('071305','Cusco','Urubamba','Maras','081305','1'),
('071306','Cusco','Urubamba','Ollantaytambo','081306','1'),
('071307','Cusco','Urubamba','Yucay','081307','1'),
('080101','Huancavelica','Huancavelica','Huancavelica','090101','0'),
('080102','Huancavelica','Huancavelica','Acobambilla','090102','0'),
('080103','Huancavelica','Huancavelica','Acoria','090103','0'),
('080104','Huancavelica','Huancavelica','Conayca','090104','0'),
('080105','Huancavelica','Huancavelica','Cuenca','090105','0'),
('080106','Huancavelica','Huancavelica','Huachocolpa','090106','0'),
('080108','Huancavelica','Huancavelica','Huayllahuara','090107','0'),
('080109','Huancavelica','Huancavelica','Izcuchaca','090108','0'),
('080110','Huancavelica','Huancavelica','Laria','090109','0'),
('080111','Huancavelica','Huancavelica','Manta','090110','0'),
('080112','Huancavelica','Huancavelica','Mariscal Caceres','090111','0'),
('080113','Huancavelica','Huancavelica','Moya','090112','0'),
('080114','Huancavelica','Huancavelica','Nuevo Occoro','090113','0'),
('080115','Huancavelica','Huancavelica','Palca','090114','0'),
('080116','Huancavelica','Huancavelica','Pilchaca','090115','0'),
('080117','Huancavelica','Huancavelica','Vilca','090116','0'),
('080118','Huancavelica','Huancavelica','Yauli','090117','0'),
('080119','Huancavelica','Huancavelica','Ascension','090118','0'),
('080120','Huancavelica','Huancavelica','Huando','090119','0'),
('080201','Huancavelica','Acobamba','Acobamba','090201','0'),
('080202','Huancavelica','Acobamba','Anta','090203','0'),
('080203','Huancavelica','Acobamba','Andabamba','090202','0'),
('080204','Huancavelica','Acobamba','Caja','090204','0'),
('080205','Huancavelica','Acobamba','Marcas','090205','0'),
('080206','Huancavelica','Acobamba','Paucara','090206','0'),
('080207','Huancavelica','Acobamba','Pomacocha','090207','0'),
('080208','Huancavelica','Acobamba','Rosario','090208','0'),
('080301','Huancavelica','Angaraes','Lircay','090301','0'),
('080302','Huancavelica','Angaraes','Anchonga','090302','0'),
('080303','Huancavelica','Angaraes','Callanmarca','090303','0'),
('080304','Huancavelica','Angaraes','Congalla','090306','0'),
('080305','Huancavelica','Angaraes','Chincho','090305','0'),
('080306','Huancavelica','Angaraes','Huallay-grande','090308','0'),
('080307','Huancavelica','Angaraes','Huanca-huanca','090307','0'),
('080308','Huancavelica','Angaraes','Julcamarca','090309','0'),
('080309','Huancavelica','Angaraes','San Antonio De Antaparco','090310','0'),
('080310','Huancavelica','Angaraes','Santo Tomas De Pata','090311','0'),
('080311','Huancavelica','Angaraes','Secclla','090312','0'),
('080312','Huancavelica','Angaraes','Ccochaccasa','090304','0'),
('080401','Huancavelica','Castrovirreyna','Castrovirreyna','090401','0'),
('080402','Huancavelica','Castrovirreyna','Arma','090402','0'),
('080403','Huancavelica','Castrovirreyna','Aurahua','090403','0'),
('080405','Huancavelica','Castrovirreyna','Capillas','090404','0'),
('080406','Huancavelica','Castrovirreyna','Cocas','090406','0'),
('080408','Huancavelica','Castrovirreyna','Chupamarca','090405','0'),
('080409','Huancavelica','Castrovirreyna','Huachos','090407','0'),
('080410','Huancavelica','Castrovirreyna','Huamatambo','090408','0'),
('080414','Huancavelica','Castrovirreyna','Mollepampa','090409','0'),
('080422','Huancavelica','Castrovirreyna','San Juan','090410','0'),
('080427','Huancavelica','Castrovirreyna','Tantara','090412','0'),
('080428','Huancavelica','Castrovirreyna','Ticrapo','090413','0'),
('080429','Huancavelica','Castrovirreyna','Santa Ana','090411','0'),
('080501','Huancavelica','Tayacaja','Pampas','090701','0'),
('080502','Huancavelica','Tayacaja','Acostambo','090702','0'),
('080503','Huancavelica','Tayacaja','Acraquia','090703','0'),
('080504','Huancavelica','Tayacaja','Ahuaycha','090704','0'),
('080506','Huancavelica','Tayacaja','Colcabamba','090705','0'),
('080509','Huancavelica','Tayacaja','Daniel Hernandez','090706','0'),
('080511','Huancavelica','Tayacaja','Huachocolpa','090707','0'),
('080512','Huancavelica','Tayacaja','Huaribamba','090709','0'),
('080515','Huancavelica','Tayacaja','ñahuimpuquio','090710','0'),
('080517','Huancavelica','Tayacaja','Pazos','090711','0'),
('080518','Huancavelica','Tayacaja','Quishuar','090713','0'),
('080519','Huancavelica','Tayacaja','Salcabamba','090714','0'),
('080520','Huancavelica','Tayacaja','San Marcos De Rocchac','090716','0'),
('080523','Huancavelica','Tayacaja','Surcabamba','090717','0'),
('080525','Huancavelica','Tayacaja','Tintay Puncu','090718','0'),
('080526','Huancavelica','Tayacaja','Salcahuasi','090715','0'),
('080601','Huancavelica','Huaytara','Ayavi','090602','0'),
('080602','Huancavelica','Huaytara','Cordova','090603','0'),
('080603','Huancavelica','Huaytara','Huayacundo Arma','090604','0'),
('080604','Huancavelica','Huaytara','Huaytara','090601','0'),
('080605','Huancavelica','Huaytara','Laramarca','090605','0'),
('080606','Huancavelica','Huaytara','Ocoyo','090606','0'),
('080607','Huancavelica','Huaytara','Pilpichaca','090607','0'),
('080608','Huancavelica','Huaytara','Querco','090608','0'),
('080609','Huancavelica','Huaytara','Quito Arma','090609','0'),
('080610','Huancavelica','Huaytara','San Antonio De Cusicancha','090610','0'),
('080611','Huancavelica','Huaytara','San Francisco De Sangayaico','090611','0'),
('080612','Huancavelica','Huaytara','San Isidro','090612','0'),
('080613','Huancavelica','Huaytara','Santiago De Chocorvos','090613','0'),
('080614','Huancavelica','Huaytara','Santiago De Quirahuara','090614','0'),
('080615','Huancavelica','Huaytara','Santo Domingo De Capillas','090615','0'),
('080616','Huancavelica','Huaytara','Tambo','090616','0'),
('080701','Huancavelica','Churcampa','Churcampa','090501','0'),
('080702','Huancavelica','Churcampa','Anco','090502','0'),
('080703','Huancavelica','Churcampa','Chinchihuasi','090503','0'),
('080704','Huancavelica','Churcampa','El Carmen','090504','0'),
('080705','Huancavelica','Churcampa','La Merced','090505','0'),
('080706','Huancavelica','Churcampa','Locroja','090506','0'),
('080707','Huancavelica','Churcampa','Paucarbamba','090507','0'),
('080708','Huancavelica','Churcampa','San Miguel De Mayocc','090508','0'),
('080709','Huancavelica','Churcampa','San Pedro De Coris','090509','0'),
('080710','Huancavelica','Churcampa','Pachamarca','090510','0'),
('090101','Huanuco','Huanuco','Huanuco','100101','0'),
('090102','Huanuco','Huanuco','Chinchao','100103','0'),
('090103','Huanuco','Huanuco','Churubamba','100104','0'),
('090104','Huanuco','Huanuco','Margos','100105','0'),
('090105','Huanuco','Huanuco','Quisqui','100106','0'),
('090106','Huanuco','Huanuco','San Francisco De Cayran','100107','0'),
('090107','Huanuco','Huanuco','San Pedro De Chaulan','100108','0'),
('090108','Huanuco','Huanuco','Santa Maria Del Valle','100109','0'),
('090109','Huanuco','Huanuco','Yarumayo','100110','0'),
('090110','Huanuco','Huanuco','Amarilis','100102','0'),
('090111','Huanuco','Huanuco','Pillco Marca','100111','0'),
('090201','Huanuco','Ambo','Ambo','100201','1'),
('090202','Huanuco','Ambo','Cayna','100202','1'),
('090203','Huanuco','Ambo','Colpas','100203','1'),
('090204','Huanuco','Ambo','Conchamarca','100204','1'),
('090205','Huanuco','Ambo','Huacar','100205','1'),
('090206','Huanuco','Ambo','San Francisco','100206','1'),
('090207','Huanuco','Ambo','San Rafael','100207','1'),
('090208','Huanuco','Ambo','Tomay-kichwa','100208','1'),
('090301','Huanuco','Dos De Mayo','La Union','100301','1'),
('090307','Huanuco','Dos De Mayo','Chuquis','100307','1'),
('090312','Huanuco','Dos De Mayo','Marias','100311','1'),
('090314','Huanuco','Dos De Mayo','Pachas','100313','1'),
('090316','Huanuco','Dos De Mayo','Quivilla','100316','1'),
('090317','Huanuco','Dos De Mayo','Ripan','100317','1'),
('090321','Huanuco','Dos De Mayo','Shunqui','100321','1'),
('090322','Huanuco','Dos De Mayo','Sillapata','100322','1'),
('090323','Huanuco','Dos De Mayo','Yanas','100323','1'),
('090401','Huanuco','Huamalies','Llata','100501','1'),
('090402','Huanuco','Huamalies','Arancay','100502','1'),
('090403','Huanuco','Huamalies','Chavin De Pariarca','100503','1'),
('090404','Huanuco','Huamalies','Jacas Grande','100504','1'),
('090405','Huanuco','Huamalies','Jircan','100505','1'),
('090406','Huanuco','Huamalies','Miraflores','100506','1'),
('090407','Huanuco','Huamalies','Monzon','100507','1'),
('090408','Huanuco','Huamalies','Punchao','100508','1'),
('090409','Huanuco','Huamalies','Puños','100509','1'),
('090410','Huanuco','Huamalies','Singa','100510','1'),
('090411','Huanuco','Huamalies','Tantamayo','100511','1'),
('090501','Huanuco','Marañon','Huacrachuco','100701','1'),
('090502','Huanuco','Marañon','Cholon','100702','1'),
('090505','Huanuco','Marañon','San Buenaventura','100703','1'),
('090601','Huanuco','Leoncio Prado','Rupa-rupa','100601','1'),
('090602','Huanuco','Leoncio Prado','Daniel Alomia Robles','100602','1'),
('090603','Huanuco','Leoncio Prado','Hermilio Valdizan','100603','1'),
('090604','Huanuco','Leoncio Prado','Luyando','100605','1'),
('090605','Huanuco','Leoncio Prado','Mariano Damaso Beraun','100606','1'),
('090606','Huanuco','Leoncio Prado','Jose Crespo Y Castillo','100604','1'),
('090701','Huanuco','Pachitea','Panao','100801','1'),
('090702','Huanuco','Pachitea','Chaglla','100802','1'),
('090704','Huanuco','Pachitea','Molino','100803','1'),
('090706','Huanuco','Pachitea','Umari','100804','1'),
('090801','Huanuco','Puerto Inca','Honoria','100903','1'),
('090802','Huanuco','Puerto Inca','Puerto Inca','100901','1'),
('090803','Huanuco','Puerto Inca','Codo Del Pozuzo','100902','1'),
('090804','Huanuco','Puerto Inca','Tournavista','100904','1'),
('090805','Huanuco','Puerto Inca','Yuyapichis','100905','1'),
('090901','Huanuco','Huacaybamba','Huacaybamba','100401','1'),
('090902','Huanuco','Huacaybamba','Pinra','100404','1'),
('090903','Huanuco','Huacaybamba','Canchabamba','100402','1'),
('090904','Huanuco','Huacaybamba','Cochabamba','100403','1'),
('091001','Huanuco','Lauricocha','Jesus','101001','1'),
('091002','Huanuco','Lauricocha','Baños','101002','1'),
('091003','Huanuco','Lauricocha','San Francisco De Asis','101006','1'),
('091004','Huanuco','Lauricocha','Queropalca','101004','1'),
('091005','Huanuco','Lauricocha','San Miguel De Cauri','101007','1'),
('091006','Huanuco','Lauricocha','Rondos','101005','1'),
('091007','Huanuco','Lauricocha','Jivia','101003','1'),
('091101','Huanuco','Yarowilca','Chavinillo','101101','1'),
('091102','Huanuco','Yarowilca','Aparicio Pomares','101104','1'),
('091103','Huanuco','Yarowilca','Cahuac','101102','1'),
('091104','Huanuco','Yarowilca','Chacabamba','101103','1'),
('091105','Huanuco','Yarowilca','Jacas Chico','101105','1'),
('091106','Huanuco','Yarowilca','Obas','101106','1'),
('091107','Huanuco','Yarowilca','Pampamarca','101107','1'),
('091108','Huanuco','Yarowilca','Choras','101108','1'),
('100101','Ica','Ica','Ica','110101','0'),
('100102','Ica','Ica','La Tinguiña','110102','0'),
('100103','Ica','Ica','Los Aquijes','110103','0'),
('100104','Ica','Ica','Parcona','110106','0'),
('100105','Ica','Ica','Pueblo Nuevo','110107','0'),
('100106','Ica','Ica','Salas','110108','0'),
('100107','Ica','Ica','San Jose De Los Molinos','110109','0'),
('100108','Ica','Ica','San Juan Bautista','110110','0'),
('100109','Ica','Ica','Santiago','110111','0'),
('100110','Ica','Ica','Subtanjalla','110112','0'),
('100111','Ica','Ica','Yauca Del Rosario','110114','0'),
('100112','Ica','Ica','Tate','110113','0'),
('100113','Ica','Ica','Pachacutec','110105','0'),
('100114','Ica','Ica','Ocucaje','110104','0'),
('100201','Ica','Chincha','Chincha Alta','110201','0'),
('100202','Ica','Chincha','Chavin','110203','0'),
('100203','Ica','Chincha','Chincha Baja','110204','0'),
('100204','Ica','Chincha','El Carmen','110205','0'),
('100205','Ica','Chincha','Grocio Prado','110206','0'),
('100206','Ica','Chincha','San Pedro De Huacarpana','110209','0'),
('100207','Ica','Chincha','Sunampe','110210','0'),
('100208','Ica','Chincha','Tambo De Mora','110211','0'),
('100209','Ica','Chincha','Alto Laran','110202','0'),
('100210','Ica','Chincha','Pueblo Nuevo','110207','0'),
('100211','Ica','Chincha','San Juan De Yanac','110208','0'),
('100301','Ica','Nazca','Nazca','110301','0'),
('100302','Ica','Nazca','Changuillo','110302','0'),
('100303','Ica','Nazca','El Ingenio','110303','0'),
('100304','Ica','Nazca','Marcona','110304','0'),
('100305','Ica','Nazca','Vista Alegre','110305','0'),
('100401','Ica','Pisco','Pisco','110501','0'),
('100402','Ica','Pisco','Huancano','110502','0'),
('100403','Ica','Pisco','Humay','110503','0'),
('100404','Ica','Pisco','Independencia','110504','0'),
('100405','Ica','Pisco','Paracas','110505','0'),
('100406','Ica','Pisco','San Andres','110506','0'),
('100407','Ica','Pisco','San Clemente','110507','0'),
('100408','Ica','Pisco','Tupac Amaru Inca','110508','0'),
('100501','Ica','Palpa','Palpa','110401','0'),
('100502','Ica','Palpa','Llipata','110402','0'),
('100503','Ica','Palpa','Rio Grande','110403','0'),
('100504','Ica','Palpa','Santa Cruz','110404','0'),
('100505','Ica','Palpa','Tibillo','110405','0'),
('110101','Junin','Huancayo','Huancayo','120101','0'),
('110103','Junin','Huancayo','Carhuacallanga','120104','0'),
('110104','Junin','Huancayo','Colca','120112','0'),
('110105','Junin','Huancayo','Cullhuas','120113','0'),
('110106','Junin','Huancayo','Chacapampa','120105','0'),
('110107','Junin','Huancayo','Chicche','120106','0'),
('110108','Junin','Huancayo','Chilca','120107','0'),
('110109','Junin','Huancayo','Chongos Alto','120108','0'),
('110112','Junin','Huancayo','Chupuro','120111','0'),
('110113','Junin','Huancayo','El Tambo','120114','0'),
('110114','Junin','Huancayo','Huacrapuquio','120116','0'),
('110116','Junin','Huancayo','Hualhuas','120117','0'),
('110118','Junin','Huancayo','Huancan','120119','0'),
('110119','Junin','Huancayo','Huasicancha','120120','0'),
('110120','Junin','Huancayo','Huayucachi','120121','0'),
('110121','Junin','Huancayo','Ingenio','120122','0'),
('110122','Junin','Huancayo','Pariahuanca','120124','0'),
('110123','Junin','Huancayo','Pilcomayo','120125','0'),
('110124','Junin','Huancayo','Pucara','120126','0'),
('110125','Junin','Huancayo','Quichuay','120127','0'),
('110126','Junin','Huancayo','Quilcas','120128','0'),
('110127','Junin','Huancayo','San Agustin','120129','0'),
('110128','Junin','Huancayo','San Jeronimo De Tunan','120130','0'),
('110131','Junin','Huancayo','Santo Domingo De Acobamba','120135','0'),
('110132','Junin','Huancayo','Saño','120132','0'),
('110133','Junin','Huancayo','Sapallanga','120133','0'),
('110134','Junin','Huancayo','Sicaya','120134','0'),
('110136','Junin','Huancayo','Viques','120136','0'),
('110201','Junin','Concepcion','Concepcion','120201','1'),
('110202','Junin','Concepcion','Aco','120202','1'),
('110203','Junin','Concepcion','Andamarca','120203','1'),
('110204','Junin','Concepcion','Comas','120206','1'),
('110205','Junin','Concepcion','Cochas','120205','1'),
('110206','Junin','Concepcion','Chambara','120204','1'),
('110207','Junin','Concepcion','Heroinas Toledo','120207','1'),
('110208','Junin','Concepcion','Manzanares','120208','1'),
('110209','Junin','Concepcion','Mariscal Castilla','120209','1'),
('110210','Junin','Concepcion','Matahuasi','120210','1'),
('110211','Junin','Concepcion','Mito','120211','1'),
('110212','Junin','Concepcion','Nueve De Julio','120212','1'),
('110213','Junin','Concepcion','Orcotuna','120213','1'),
('110214','Junin','Concepcion','Santa Rosa De Ocopa','120215','1'),
('110215','Junin','Concepcion','San Jose De Quero','120214','1'),
('110301','Junin','Jauja','Jauja','120401','1'),
('110302','Junin','Jauja','Acolla','120402','1'),
('110303','Junin','Jauja','Apata','120403','1'),
('110304','Junin','Jauja','Ataura','120404','1'),
('110305','Junin','Jauja','Canchayllo','120405','1'),
('110306','Junin','Jauja','El Mantaro','120407','1'),
('110307','Junin','Jauja','Huamali','120408','1'),
('110308','Junin','Jauja','Huaripampa','120409','1'),
('110309','Junin','Jauja','Huertas','120410','1'),
('110310','Junin','Jauja','Janjaillo','120411','1'),
('110311','Junin','Jauja','Julcan','120412','1'),
('110312','Junin','Jauja','Leonor Ordoñez','120413','1'),
('110313','Junin','Jauja','Llocllapampa','120414','1'),
('110314','Junin','Jauja','Marco','120415','1'),
('110315','Junin','Jauja','Masma','120416','1'),
('110316','Junin','Jauja','Molinos','120418','1'),
('110317','Junin','Jauja','Monobamba','120419','1'),
('110318','Junin','Jauja','Muqui','120420','1'),
('110319','Junin','Jauja','Muquiyauyo','120421','1'),
('110320','Junin','Jauja','Paca','120422','1'),
('110321','Junin','Jauja','Paccha','120423','1'),
('110322','Junin','Jauja','Pancan','120424','1'),
('110323','Junin','Jauja','Parco','120425','1'),
('110324','Junin','Jauja','Pomacancha','120426','1'),
('110325','Junin','Jauja','Ricran','120427','1'),
('110326','Junin','Jauja','San Lorenzo','120428','1'),
('110327','Junin','Jauja','San Pedro De Chunan','120429','1'),
('110328','Junin','Jauja','Sincos','120431','1'),
('110329','Junin','Jauja','Tunan Marca','120432','1'),
('110330','Junin','Jauja','Yauli','120433','1'),
('110331','Junin','Jauja','Curicaca','120406','1'),
('110332','Junin','Jauja','Masma Chicche','120417','1'),
('110333','Junin','Jauja','Sausa','120430','1'),
('110334','Junin','Jauja','Yauyos','120434','1'),
('110401','Junin','Junin','Junin','120501','1'),
('110402','Junin','Junin','Carhuamayo','120502','1'),
('110403','Junin','Junin','Ondores','120503','1'),
('110404','Junin','Junin','Ulcumayo','120504','1'),
('110501','Junin','Tarma','Tarma','120701','1'),
('110502','Junin','Tarma','Acobamba','120702','1'),
('110503','Junin','Tarma','Huaricolca','120703','1'),
('110504','Junin','Tarma','Huasahuasi','120704','1'),
('110505','Junin','Tarma','La Union','120705','1'),
('110506','Junin','Tarma','Palca','120706','1'),
('110507','Junin','Tarma','Palcamayo','120707','1'),
('110508','Junin','Tarma','San Pedro De Cajas','120708','1'),
('110509','Junin','Tarma','Tapo','120709','1'),
('110601','Junin','Yauli','La Oroya','120801','1'),
('110602','Junin','Yauli','Chacapalpa','120802','1'),
('110603','Junin','Yauli','Huay Huay','120803','1'),
('110604','Junin','Yauli','Marcapomacocha','120804','1'),
('110605','Junin','Yauli','Morococha','120805','1'),
('110606','Junin','Yauli','Paccha','120806','1'),
('110607','Junin','Yauli','Santa Barbara De Carhuacayan','120807','1'),
('110608','Junin','Yauli','Suitucancha','120809','1'),
('110609','Junin','Yauli','Yauli','120810','1'),
('110610','Junin','Yauli','Santa Rosa De Sacco','120808','1'),
('110701','Junin','Satipo','Satipo','120601','1'),
('110702','Junin','Satipo','Coviriali','120602','1'),
('110703','Junin','Satipo','Llaylla','120603','1'),
('110704','Junin','Satipo','Mazamari','120604','1'),
('110705','Junin','Satipo','Pampa Hermosa','120605','1'),
('110706','Junin','Satipo','Pangoa','120606','1'),
('110707','Junin','Satipo','Rio Negro','120607','1'),
('110708','Junin','Satipo','Rio Tambo','120608','1'),
('110801','Junin','Chanchamayo','Chanchamayo','120301','1'),
('110802','Junin','Chanchamayo','San Ramon','120305','1'),
('110803','Junin','Chanchamayo','Vitoc','120306','1'),
('110804','Junin','Chanchamayo','San Luis De Shuaro','120304','1'),
('110805','Junin','Chanchamayo','Pichanaqui','120303','1'),
('110806','Junin','Chanchamayo','Perene','120302','1'),
('110901','Junin','Chupaca','Chupaca','120901','1'),
('110902','Junin','Chupaca','Ahuac','120902','1'),
('110903','Junin','Chupaca','Chongos Bajo','120903','1'),
('110904','Junin','Chupaca','Huachac','120904','1'),
('110905','Junin','Chupaca','Huamancaca Chico','120905','1'),
('110906','Junin','Chupaca','San Juan De Yscos','120906','1'),
('110907','Junin','Chupaca','San Juan De Jarpa','120907','1'),
('110908','Junin','Chupaca','Tres De Diciembre','120908','1'),
('110909','Junin','Chupaca','Yanacancha','120909','1'),
('120101','La Libertad','Trujillo','Trujillo','130101','0'),
('120102','La Libertad','Trujillo','Huanchaco','130104','0'),
('120103','La Libertad','Trujillo','Laredo','130106','0'),
('120104','La Libertad','Trujillo','Moche','130107','0'),
('120105','La Libertad','Trujillo','Salaverry','130109','0'),
('120106','La Libertad','Trujillo','Simbal','130110','0'),
('120107','La Libertad','Trujillo','Victor Larco Herrera','130111','0'),
('120109','La Libertad','Trujillo','Poroto','130108','0'),
('120110','La Libertad','Trujillo','El Porvenir','130102','0'),
('120111','La Libertad','Trujillo','La Esperanza','130105','0'),
('120112','La Libertad','Trujillo','Florencia De Mora','130103','0'),
('120201','La Libertad','Bolivar','Bolivar','130301','1'),
('120202','La Libertad','Bolivar','Bambamarca','130302','1'),
('120203','La Libertad','Bolivar','Condormarca','130303','1'),
('120204','La Libertad','Bolivar','Longotea','130304','1'),
('120205','La Libertad','Bolivar','Ucuncha','130306','1'),
('120206','La Libertad','Bolivar','Uchumarca','130305','1'),
('120301','La Libertad','Sanchez Carrion','Huamachuco','130901','1'),
('120302','La Libertad','Sanchez Carrion','Cochorco','130903','1'),
('120303','La Libertad','Sanchez Carrion','Curgos','130904','1'),
('120304','La Libertad','Sanchez Carrion','Chugay','130902','1'),
('120305','La Libertad','Sanchez Carrion','Marcabal','130905','1'),
('120306','La Libertad','Sanchez Carrion','Sanagoran','130906','1'),
('120307','La Libertad','Sanchez Carrion','Sarin','130907','1'),
('120308','La Libertad','Sanchez Carrion','Sartibamba','130908','1'),
('120401','La Libertad','Otuzco','Otuzco','130601','1'),
('120402','La Libertad','Otuzco','Agallpampa','130602','1'),
('120403','La Libertad','Otuzco','Charat','130604','1'),
('120404','La Libertad','Otuzco','Huaranchal','130605','1'),
('120405','La Libertad','Otuzco','La Cuesta','130606','1'),
('120408','La Libertad','Otuzco','Paranday','130610','1'),
('120409','La Libertad','Otuzco','Salpo','130611','1'),
('120410','La Libertad','Otuzco','Sinsicap','130613','1'),
('120411','La Libertad','Otuzco','Usquil','130614','1'),
('120413','La Libertad','Otuzco','Mache','130608','1'),
('120501','La Libertad','Pacasmayo','San Pedro De Lloc','130701','1'),
('120503','La Libertad','Pacasmayo','Guadalupe','130702','1'),
('120504','La Libertad','Pacasmayo','Jequetepeque','130703','1'),
('120506','La Libertad','Pacasmayo','Pacasmayo','130704','1'),
('120508','La Libertad','Pacasmayo','San Jose','130705','1'),
('120601','La Libertad','Pataz','Tayabamba','130801','1'),
('120602','La Libertad','Pataz','Buldibuyo','130802','1'),
('120603','La Libertad','Pataz','Chillia','130803','1'),
('120604','La Libertad','Pataz','Huaylillas','130805','1'),
('120605','La Libertad','Pataz','Huancaspata','130804','1'),
('120606','La Libertad','Pataz','Huayo','130806','1'),
('120607','La Libertad','Pataz','Ongon','130807','1'),
('120608','La Libertad','Pataz','Parcoy','130808','1'),
('120609','La Libertad','Pataz','Pataz','130809','1'),
('120610','La Libertad','Pataz','Pias','130810','1'),
('120611','La Libertad','Pataz','Taurija','130812','1'),
('120612','La Libertad','Pataz','Urpay','130813','1'),
('120613','La Libertad','Pataz','Santiago De Challas','130811','1'),
('120701','La Libertad','Santiago De Chuco','Santiago De Chuco','131001','1'),
('120702','La Libertad','Santiago De Chuco','Cachicadan','131003','1'),
('120703','La Libertad','Santiago De Chuco','Mollebamba','131004','1'),
('120704','La Libertad','Santiago De Chuco','Mollepata','131005','1'),
('120705','La Libertad','Santiago De Chuco','Quiruvilca','131006','1'),
('120706','La Libertad','Santiago De Chuco','Santa Cruz De Chuca','131007','1'),
('120707','La Libertad','Santiago De Chuco','Sitabamba','131008','1'),
('120708','La Libertad','Santiago De Chuco','Angasmarca','131002','1'),
('120801','La Libertad','Ascope','Ascope','130201','1'),
('120802','La Libertad','Ascope','Chicama','130202','1'),
('120803','La Libertad','Ascope','Chocope','130203','1'),
('120804','La Libertad','Ascope','Santiago De Cao','130207','1'),
('120805','La Libertad','Ascope','Magdalena De Cao','130204','1'),
('120806','La Libertad','Ascope','Paijan','130205','1'),
('120807','La Libertad','Ascope','Razuri','130206','1'),
('120808','La Libertad','Ascope','Casa Grande','130208','1'),
('120901','La Libertad','Chepen','Chepen','130401','1'),
('120902','La Libertad','Chepen','Pacanga','130402','1'),
('120903','La Libertad','Chepen','Pueblo Nuevo','130403','1'),
('121001','La Libertad','Julcan','Julcan','130501','1'),
('121002','La Libertad','Julcan','Carabamba','130503','1'),
('121003','La Libertad','Julcan','Calamarca','130502','1'),
('121004','La Libertad','Julcan','Huaso','130504','1'),
('121101','La Libertad','Gran Chimu','Cascas','131101','1'),
('121102','La Libertad','Gran Chimu','Lucma','131102','1'),
('121103','La Libertad','Gran Chimu','Marmot','131103','1'),
('121104','La Libertad','Gran Chimu','Sayapullo','131104','1'),
('121201','La Libertad','Viru','Viru','131201','1'),
('121202','La Libertad','Viru','Chao','131202','1'),
('121203','La Libertad','Viru','Guadalupito','131203','1'),
('130101','Lambayeque','Chiclayo','Chiclayo','140101','0'),
('130102','Lambayeque','Chiclayo','Chongoyape','140102','0'),
('130103','Lambayeque','Chiclayo','Eten','140103','0'),
('130104','Lambayeque','Chiclayo','Eten Puerto','140104','0'),
('130105','Lambayeque','Chiclayo','Lagunas','140107','0'),
('130106','Lambayeque','Chiclayo','Monsefu','140108','0'),
('130107','Lambayeque','Chiclayo','Nueva Arica','140109','0'),
('130108','Lambayeque','Chiclayo','Oyotun','140110','0'),
('130109','Lambayeque','Chiclayo','Picsi','140111','0'),
('130110','Lambayeque','Chiclayo','Pimentel','140112','0'),
('130111','Lambayeque','Chiclayo','Reque','140113','0'),
('130112','Lambayeque','Chiclayo','Jose Leonardo Ortiz','140105','0'),
('130113','Lambayeque','Chiclayo','Santa Rosa','140114','0'),
('130114','Lambayeque','Chiclayo','Saña','140115','0'),
('130115','Lambayeque','Chiclayo','La Victoria','140106','0'),
('130116','Lambayeque','Chiclayo','Cayalti','140116','0'),
('130117','Lambayeque','Chiclayo','Patapo','140117','0'),
('130118','Lambayeque','Chiclayo','Pomalca','140118','0'),
('130119','Lambayeque','Chiclayo','Pucala','140119','0'),
('130120','Lambayeque','Chiclayo','Tuman','140120','0'),
('130201','Lambayeque','Ferreñafe','Ferreñafe','140201','1'),
('130202','Lambayeque','Ferreñafe','Incahuasi','140203','1'),
('130203','Lambayeque','Ferreñafe','Cañaris','140202','1'),
('130204','Lambayeque','Ferreñafe','Pitipo','140205','1'),
('130205','Lambayeque','Ferreñafe','Pueblo Nuevo','140206','1'),
('130206','Lambayeque','Ferreñafe','Manuel Antonio Mesones Muro','140204','1'),
('130301','Lambayeque','Lambayeque','Lambayeque','140301','1'),
('130302','Lambayeque','Lambayeque','Chochope','140302','1'),
('130303','Lambayeque','Lambayeque','Illimo','140303','1'),
('130304','Lambayeque','Lambayeque','Jayanca','140304','1'),
('130305','Lambayeque','Lambayeque','Mochumi','140305','1'),
('130306','Lambayeque','Lambayeque','Morrope','140306','1'),
('130307','Lambayeque','Lambayeque','Motupe','140307','1'),
('130308','Lambayeque','Lambayeque','Olmos','140308','1'),
('130309','Lambayeque','Lambayeque','Pacora','140309','1'),
('130310','Lambayeque','Lambayeque','Salas','140310','1'),
('130311','Lambayeque','Lambayeque','San Jose','140311','1'),
('130312','Lambayeque','Lambayeque','Tucume','140312','1'),
('140101','Lima','Lima','Lima','150101','0'),
('140102','Lima','Lima','Ancon','150102','0'),
('140103','Lima','Lima','Ate','150103','0'),
('140104','Lima','Lima','Breña','150105','0'),
('140105','Lima','Lima','Carabayllo','150106','0'),
('140106','Lima','Lima','Comas','150110','0'),
('140107','Lima','Lima','Chaclacayo','150107','0'),
('140108','Lima','Lima','Chorrillos','150108','0'),
('140109','Lima','Lima','La Victoria','150115','0'),
('140110','Lima','Lima','La Molina','150114','0'),
('140111','Lima','Lima','Lince','150116','0'),
('140112','Lima','Lima','Lurigancho','150118','0'),
('140113','Lima','Lima','Lurin','150119','0'),
('140114','Lima','Lima','Magdalena Del Mar','150120','0'),
('140115','Lima','Lima','Miraflores','150122','0'),
('140116','Lima','Lima','Pachacamac','150123','0'),
('140117','Lima','Lima','Pueblo Libre','150121','0'),
('140118','Lima','Lima','Pucusana','150124','0'),
('140119','Lima','Lima','Puente Piedra','150125','0'),
('140120','Lima','Lima','Punta Hermosa','150126','0'),
('140121','Lima','Lima','Punta Negra','150127','0'),
('140122','Lima','Lima','Rimac','150128','0'),
('140123','Lima','Lima','San Bartolo','150129','0'),
('140124','Lima','Lima','San Isidro','150131','0'),
('140125','Lima','Lima','Barranco','150104','0'),
('140126','Lima','Lima','San Martin De Porres','150135','0'),
('140127','Lima','Lima','San Miguel','150136','0'),
('140128','Lima','Lima','Santa Maria Del Mar','150138','0'),
('140129','Lima','Lima','Santa Rosa','150139','0'),
('140130','Lima','Lima','Santiago De Surco','150140','0'),
('140131','Lima','Lima','Surquillo','150141','0'),
('140132','Lima','Lima','Villa Maria Del Triunfo','150143','0'),
('140133','Lima','Lima','Jesus Maria','150113','0'),
('140134','Lima','Lima','Independencia','150112','0'),
('140135','Lima','Lima','El Agustino','150111','0'),
('140136','Lima','Lima','San Juan De Miraflores','150133','0'),
('140137','Lima','Lima','San Juan De Lurigancho','150132','0'),
('140138','Lima','Lima','San Luis','150134','0'),
('140139','Lima','Lima','Cieneguilla','150109','0'),
('140140','Lima','Lima','San Borja','150130','0'),
('140141','Lima','Lima','Villa El Salvador','150142','0'),
('140142','Lima','Lima','Los Olivos','150117','0'),
('140143','Lima','Lima','Santa Anita','150137','0'),
('140201','Lima','Cajatambo','Cajatambo','150301','0'),
('140205','Lima','Cajatambo','Copa','150302','0'),
('140206','Lima','Cajatambo','Gorgor','150303','0'),
('140207','Lima','Cajatambo','Huancapon','150304','0'),
('140208','Lima','Cajatambo','Manas','150305','0'),
('140301','Lima','Canta','Canta','150401','0'),
('140302','Lima','Canta','Arahuay','150402','0'),
('140303','Lima','Canta','Huamantanga','150403','0'),
('140304','Lima','Canta','Huaros','150404','0'),
('140305','Lima','Canta','Lachaqui','150405','0'),
('140306','Lima','Canta','San Buenaventura','150406','0'),
('140307','Lima','Canta','Santa Rosa De Quives','150407','0'),
('140401','Lima','Cañete','San Vicente De Cañete','150501','0'),
('140402','Lima','Cañete','Calango','150503','0'),
('140403','Lima','Cañete','Cerro Azul','150504','0'),
('140404','Lima','Cañete','Coayllo','150506','0'),
('140405','Lima','Cañete','Chilca','150505','0'),
('140406','Lima','Cañete','Imperial','150507','0'),
('140407','Lima','Cañete','Lunahuana','150508','0'),
('140408','Lima','Cañete','Mala','150509','0'),
('140409','Lima','Cañete','Nuevo Imperial','150510','0'),
('140410','Lima','Cañete','Pacaran','150511','0'),
('140411','Lima','Cañete','Quilmana','150512','0'),
('140412','Lima','Cañete','San Antonio','150513','0'),
('140413','Lima','Cañete','San Luis','150514','0'),
('140414','Lima','Cañete','Santa Cruz De Flores','150515','0'),
('140415','Lima','Cañete','Zuñiga','150516','0'),
('140416','Lima','Cañete','Asia','150502','0'),
('140501','Lima','Huaura','Huacho','150801','0'),
('140502','Lima','Huaura','Ambar','150802','0'),
('140504','Lima','Huaura','Caleta De Carquin','150803','0'),
('140505','Lima','Huaura','Checras','150804','0'),
('140506','Lima','Huaura','Hualmay','150805','0'),
('140507','Lima','Huaura','Huaura','150806','0'),
('140508','Lima','Huaura','Leoncio Prado','150807','0'),
('140509','Lima','Huaura','Paccho','150808','0'),
('140511','Lima','Huaura','Santa Leonor','150809','0'),
('140512','Lima','Huaura','Santa Maria','150810','0'),
('140513','Lima','Huaura','Sayan','150811','0'),
('140516','Lima','Huaura','Vegueta','150812','0'),
('140601','Lima','Huarochiri','Matucana','150701','0'),
('140602','Lima','Huarochiri','Antioquia','150702','0'),
('140603','Lima','Huarochiri','Callahuanca','150703','0'),
('140604','Lima','Huarochiri','Carampoma','150704','0'),
('140605','Lima','Huarochiri','San Pedro De Casta','150724','0'),
('140606','Lima','Huarochiri','Cuenca','150706','0'),
('140607','Lima','Huarochiri','Chicla','150705','0'),
('140608','Lima','Huarochiri','Huanza','150708','0'),
('140609','Lima','Huarochiri','Huarochiri','150709','0'),
('140610','Lima','Huarochiri','Lahuaytambo','150710','0'),
('140611','Lima','Huarochiri','Langa','150711','0'),
('140612','Lima','Huarochiri','Mariatana','150713','0'),
('140613','Lima','Huarochiri','Ricardo Palma','150714','0'),
('140614','Lima','Huarochiri','San Andres De Tupicocha','150715','0'),
('140615','Lima','Huarochiri','San Antonio','150716','0'),
('140616','Lima','Huarochiri','San Bartolome','150717','0'),
('140617','Lima','Huarochiri','San Damian','150718','0'),
('140618','Lima','Huarochiri','Sangallaya','150726','0'),
('140619','Lima','Huarochiri','San Juan De Tantaranche','150720','0'),
('140620','Lima','Huarochiri','San Lorenzo De Quinti','150721','0'),
('140621','Lima','Huarochiri','San Mateo','150722','0'),
('140622','Lima','Huarochiri','San Mateo De Otao','150723','0'),
('140623','Lima','Huarochiri','San Pedro De Huancayre','150725','0'),
('140624','Lima','Huarochiri','Santa Cruz De Cocachacra','150727','0'),
('140625','Lima','Huarochiri','Santa Eulalia','150728','0'),
('140626','Lima','Huarochiri','Santiago De Anchucaya','150729','0'),
('140627','Lima','Huarochiri','Santiago De Tuna','150730','0'),
('140628','Lima','Huarochiri','Santo Domingo De Los Olleros','150731','0'),
('140629','Lima','Huarochiri','Surco','150732','0'),
('140630','Lima','Huarochiri','Huachupampa','150707','0'),
('140631','Lima','Huarochiri','Laraos','150712','0'),
('140632','Lima','Huarochiri','San Juan De Iris','150719','0'),
('140701','Lima','Yauyos','Yauyos','151001','0'),
('140702','Lima','Yauyos','Alis','151002','0'),
('140703','Lima','Yauyos','Ayauca','151003','0'),
('140704','Lima','Yauyos','Ayaviri','151004','0'),
('140705','Lima','Yauyos','Azangaro','151005','0'),
('140706','Lima','Yauyos','Cacra','151006','0'),
('140707','Lima','Yauyos','Carania','151007','0'),
('140708','Lima','Yauyos','Cochas','151010','0'),
('140709','Lima','Yauyos','Colonia','151011','0'),
('140710','Lima','Yauyos','Chocos','151009','0'),
('140711','Lima','Yauyos','Huampara','151013','0'),
('140712','Lima','Yauyos','Huancaya','151014','0'),
('140713','Lima','Yauyos','Huangascar','151015','0'),
('140714','Lima','Yauyos','Huantan','151016','0'),
('140715','Lima','Yauyos','Huañec','151017','0'),
('140716','Lima','Yauyos','Laraos','151018','0'),
('140717','Lima','Yauyos','Lincha','151019','0'),
('140718','Lima','Yauyos','Miraflores','151021','0'),
('140719','Lima','Yauyos','Omas','151022','0'),
('140720','Lima','Yauyos','Quinches','151024','0'),
('140721','Lima','Yauyos','Quinocay','151025','0'),
('140722','Lima','Yauyos','San Joaquin','151026','0'),
('140723','Lima','Yauyos','San Pedro De Pilas','151027','0'),
('140724','Lima','Yauyos','Tanta','151028','0'),
('140725','Lima','Yauyos','Tauripampa','151029','0'),
('140726','Lima','Yauyos','Tupe','151031','0'),
('140727','Lima','Yauyos','Tomas','151030','0'),
('140728','Lima','Yauyos','Viñac','151032','0'),
('140729','Lima','Yauyos','Vitis','151033','0'),
('140730','Lima','Yauyos','Hongos','151012','0'),
('140731','Lima','Yauyos','Madean','151020','0'),
('140732','Lima','Yauyos','Putinza','151023','0'),
('140733','Lima','Yauyos','Catahuasi','151008','0'),
('140801','Lima','Huaral','Huaral','150601','0'),
('140802','Lima','Huaral','Atavillos Alto','150602','0'),
('140803','Lima','Huaral','Atavillos Bajo','150603','0'),
('140804','Lima','Huaral','Aucallama','150604','0'),
('140805','Lima','Huaral','Chancay','150605','0'),
('140806','Lima','Huaral','Ihuari','150606','0'),
('140807','Lima','Huaral','Lampian','150607','0'),
('140808','Lima','Huaral','Pacaraos','150608','0'),
('140809','Lima','Huaral','San Miguel De Acos','150609','0'),
('140810','Lima','Huaral','Veintisiete De Noviembre','150612','0'),
('140811','Lima','Huaral','Santa Cruz De Andamarca','150610','0'),
('140812','Lima','Huaral','Sumbilca','150611','0'),
('140901','Lima','Barranca','Barranca','150201','0'),
('140902','Lima','Barranca','Paramonga','150202','0'),
('140903','Lima','Barranca','Pativilca','150203','0'),
('140904','Lima','Barranca','Supe','150204','0'),
('140905','Lima','Barranca','Supe Puerto','150205','0'),
('141001','Lima','Oyon','Oyon','150901','0'),
('141002','Lima','Oyon','Navan','150905','0'),
('141003','Lima','Oyon','Caujul','150903','0'),
('141004','Lima','Oyon','Andajes','150902','0'),
('141005','Lima','Oyon','Pachangara','150906','0'),
('141006','Lima','Oyon','Cochamarca','150904','0'),
('150101','Loreto','Maynas','Iquitos','160101','0'),
('150102','Loreto','Maynas','Alto Nanay','160102','0'),
('150103','Loreto','Maynas','Fernando Lores','160103','0'),
('150104','Loreto','Maynas','Las Amazonas','160105','0'),
('150105','Loreto','Maynas','Mazan','160106','0'),
('150106','Loreto','Maynas','Napo','160107','0'),
('150107','Loreto','Maynas','Putumayo','160109','0'),
('150108','Loreto','Maynas','Torres Causana','160110','0'),
('150110','Loreto','Maynas','Indiana','160104','0'),
('150111','Loreto','Maynas','Punchana','160108','0'),
('150112','Loreto','Maynas','Belen','160112','0'),
('150113','Loreto','Maynas','San Juan Bautista','160113','0'),
('150114','Loreto','Maynas','Tnte Manuel Clavero','160114','0'),
('150201','Loreto','Alto Amazonas','Yurimaguas','160201','0'),
('150202','Loreto','Alto Amazonas','Balsa Puerto','160202','0'),
('150205','Loreto','Alto Amazonas','Jeberos','160205','0'),
('150206','Loreto','Alto Amazonas','Lagunas','160206','0'),
('150210','Loreto','Alto Amazonas','Santa Cruz','160210','0'),
('150211','Loreto','Alto Amazonas','Teniente Cesar Lopez Rojas','160211','0'),
('150301','Loreto','Loreto','Nauta','160301','0'),
('150302','Loreto','Loreto','Parinari','160302','0'),
('150303','Loreto','Loreto','Tigre','160303','0'),
('150304','Loreto','Loreto','Urarinas','160305','0'),
('150305','Loreto','Loreto','Trompeteros','160304','0'),
('150401','Loreto','Requena','Requena','160501','0'),
('150402','Loreto','Requena','Alto Tapiche','160502','0'),
('150403','Loreto','Requena','Capelo','160503','0'),
('150404','Loreto','Requena','Emilio San Martin','160504','0'),
('150405','Loreto','Requena','Maquia','160505','0'),
('150406','Loreto','Requena','Puinahua','160506','0'),
('150407','Loreto','Requena','Saquena','160507','0'),
('150408','Loreto','Requena','Soplin','160508','0'),
('150409','Loreto','Requena','Tapiche','160509','0'),
('150410','Loreto','Requena','Jenaro Herrera','160510','0'),
('150411','Loreto','Requena','Yaquerana','160511','0'),
('150501','Loreto','Ucayali','Contamana','160601','0'),
('150502','Loreto','Ucayali','Vargas Guerra','160606','0'),
('150503','Loreto','Ucayali','Padre Marquez','160603','0'),
('150504','Loreto','Ucayali','Pampa Hermosa','160604','0'),
('150505','Loreto','Ucayali','Sarayacu','160605','0'),
('150506','Loreto','Ucayali','Inahuaya','160602','0'),
('150601','Loreto','Mariscal Ramon Castilla','Ramon Castilla','160401','0'),
('150602','Loreto','Mariscal Ramon Castilla','Pebas','160402','0'),
('150603','Loreto','Mariscal Ramon Castilla','Yavari','160403','0'),
('150604','Loreto','Mariscal Ramon Castilla','San Pablo','160404','0'),
('150701','Loreto','Datem Del Marañon','Barranca','160701','0'),
('150702','Loreto','Datem Del Marañon','Andoas','160706','0'),
('150703','Loreto','Datem Del Marañon','Cahuapanas','160702','0'),
('150704','Loreto','Datem Del Marañon','Manseriche','160703','0'),
('150705','Loreto','Datem Del Marañon','Morona','160704','0'),
('150706','Loreto','Datem Del Marañon','Pastaza','160705','0'),
('160101','Madre De Dios','Tambopata','Tambopata','170101','0'),
('160102','Madre De Dios','Tambopata','Inambari','170102','0'),
('160103','Madre De Dios','Tambopata','Las Piedras','170103','0'),
('160104','Madre De Dios','Tambopata','Laberinto','170104','0'),
('160201','Madre De Dios','Manu','Manu','170201','0'),
('160202','Madre De Dios','Manu','Fitzcarrald','170202','0'),
('160203','Madre De Dios','Manu','Madre De Dios','170203','0'),
('160204','Madre De Dios','Manu','Huepetuhe','170204','0'),
('160301','Madre De Dios','Tahuamanu','Iñapari','170301','0'),
('160302','Madre De Dios','Tahuamanu','Iberia','170302','0'),
('160303','Madre De Dios','Tahuamanu','Tahuamanu','170303','0'),
('170101','Moquegua','Mariscal Nieto','Moquegua','180101','0'),
('170102','Moquegua','Mariscal Nieto','Carumas','180102','0'),
('170103','Moquegua','Mariscal Nieto','Cuchumbaya','180103','0'),
('170104','Moquegua','Mariscal Nieto','San Cristobal','180105','0'),
('170105','Moquegua','Mariscal Nieto','Torata','180106','0'),
('170106','Moquegua','Mariscal Nieto','Samegua','180104','0'),
('170201','Moquegua','General Sanchez Cerro','Omate','180201','0'),
('170202','Moquegua','General Sanchez Cerro','Coalaque','180203','0'),
('170203','Moquegua','General Sanchez Cerro','Chojata','180202','0'),
('170204','Moquegua','General Sanchez Cerro','Ichuña','180204','0'),
('170205','Moquegua','General Sanchez Cerro','La Capilla','180205','0'),
('170206','Moquegua','General Sanchez Cerro','Lloque','180206','0'),
('170207','Moquegua','General Sanchez Cerro','Matalaque','180207','0'),
('170208','Moquegua','General Sanchez Cerro','Puquina','180208','0'),
('170209','Moquegua','General Sanchez Cerro','Quinistaquillas','180209','0'),
('170210','Moquegua','General Sanchez Cerro','Ubinas','180210','0'),
('170211','Moquegua','General Sanchez Cerro','Yunga','180211','0'),
('170301','Moquegua','Ilo','Ilo','180301','0'),
('170302','Moquegua','Ilo','El Algarrobal','180302','0'),
('170303','Moquegua','Ilo','Pacocha','180303','0'),
('180101','Pasco','Pasco','Chaupimarca','190101','0'),
('180103','Pasco','Pasco','Huachon','190102','0'),
('180104','Pasco','Pasco','Huariaca','190103','0'),
('180105','Pasco','Pasco','Huayllay','190104','0'),
('180106','Pasco','Pasco','Ninacaca','190105','0'),
('180107','Pasco','Pasco','Pallanchacra','190106','0'),
('180108','Pasco','Pasco','Paucartambo','190107','0'),
('180109','Pasco','Pasco','San Francisco De Asis De Yarus','190108','0'),
('180110','Pasco','Pasco','Simon Bolivar','190109','0'),
('180111','Pasco','Pasco','Ticlacayan','190110','0'),
('180112','Pasco','Pasco','Tinyahuarco','190111','0'),
('180113','Pasco','Pasco','Vicco','190112','0'),
('180114','Pasco','Pasco','Yanacancha','190113','0'),
('180201','Pasco','Daniel Alcides Carrion','Yanahuanca','190201','0'),
('180202','Pasco','Daniel Alcides Carrion','Chacayan','190202','0'),
('180203','Pasco','Daniel Alcides Carrion','Goyllarisquizga','190203','0'),
('180204','Pasco','Daniel Alcides Carrion','Paucar','190204','0'),
('180205','Pasco','Daniel Alcides Carrion','San Pedro De Pillao','190205','0'),
('180206','Pasco','Daniel Alcides Carrion','Santa Ana De Tusi','190206','0'),
('180207','Pasco','Daniel Alcides Carrion','Tapuc','190207','0'),
('180208','Pasco','Daniel Alcides Carrion','Vilcabamba','190208','0'),
('180301','Pasco','Oxapampa','Oxapampa','190301','0'),
('180302','Pasco','Oxapampa','Chontabamba','190302','0'),
('180303','Pasco','Oxapampa','Huancabamba','190303','0'),
('180304','Pasco','Oxapampa','Puerto Bermudez','190306','0'),
('180305','Pasco','Oxapampa','Villa Rica','190307','0'),
('180306','Pasco','Oxapampa','Pozuzo','190305','0'),
('180307','Pasco','Oxapampa','Palcazu','190304','0'),
('190101','Piura','Piura','Piura','200101','0'),
('190103','Piura','Piura','Castilla','200104','0'),
('190104','Piura','Piura','Catacaos','200105','0'),
('190105','Piura','Piura','La Arena','200109','0'),
('190106','Piura','Piura','La Union','200110','0'),
('190107','Piura','Piura','Las Lomas','200111','0'),
('190109','Piura','Piura','Tambo Grande','200114','0'),
('190113','Piura','Piura','Cura Mori','200107','0'),
('190114','Piura','Piura','El Tallan','200108','0'),
('190201','Piura','Ayabaca','Ayabaca','200201','1'),
('190202','Piura','Ayabaca','Frias','200202','1'),
('190203','Piura','Ayabaca','Lagunas','200204','1'),
('190204','Piura','Ayabaca','Montero','200205','1'),
('190205','Piura','Ayabaca','Pacaipampa','200206','1'),
('190206','Piura','Ayabaca','Sapillica','200208','1'),
('190207','Piura','Ayabaca','Sicchez','200209','1'),
('190208','Piura','Ayabaca','Suyo','200210','1'),
('190209','Piura','Ayabaca','Jilili','200203','1'),
('190210','Piura','Ayabaca','Paimas','200207','1'),
('190301','Piura','Huancabamba','Huancabamba','200301','1'),
('190302','Piura','Huancabamba','Canchaque','200302','1'),
('190303','Piura','Huancabamba','Huarmaca','200304','1'),
('190304','Piura','Huancabamba','Sondor','200307','1'),
('190305','Piura','Huancabamba','Sondorillo','200308','1'),
('190306','Piura','Huancabamba','El Carmen De La Frontera','200303','1'),
('190307','Piura','Huancabamba','San Miguel De El Faique','200306','1'),
('190308','Piura','Huancabamba','Lalaquiz','200305','1'),
('190401','Piura','Morropon','Chulucanas','200401','1'),
('190402','Piura','Morropon','Buenos Aires','200402','1'),
('190403','Piura','Morropon','Chalaco','200403','1'),
('190404','Piura','Morropon','Morropon','200405','1'),
('190405','Piura','Morropon','Salitral','200406','1'),
('190406','Piura','Morropon','Santa Catalina De Mossa','200408','1'),
('190407','Piura','Morropon','Santo Domingo','200409','1'),
('190408','Piura','Morropon','La Matanza','200404','1'),
('190409','Piura','Morropon','Yamango','200410','1'),
('190410','Piura','Morropon','San Juan De Bigote','200407','1'),
('190501','Piura','Paita','Paita','200501','1'),
('190502','Piura','Paita','Amotape','200502','1'),
('190503','Piura','Paita','Arenal','200503','1'),
('190504','Piura','Paita','La Huaca','200505','1'),
('190505','Piura','Paita','Colan','200504','1'),
('190506','Piura','Paita','Tamarindo','200506','1'),
('190507','Piura','Paita','Vichayal','200507','1'),
('190601','Piura','Sullana','Sullana','200601','1'),
('190602','Piura','Sullana','Bellavista','200602','1'),
('190603','Piura','Sullana','Lancones','200604','1'),
('190604','Piura','Sullana','Marcavelica','200605','1'),
('190605','Piura','Sullana','Miguel Checa','200606','1'),
('190606','Piura','Sullana','Querecotillo','200607','1'),
('190607','Piura','Sullana','Salitral','200608','1'),
('190608','Piura','Sullana','Ignacio Escudero','200603','1'),
('190701','Piura','Talara','Pariñas','200701','1'),
('190702','Piura','Talara','El Alto','200702','1'),
('190703','Piura','Talara','La Brea','200703','1'),
('190704','Piura','Talara','Lobitos','200704','1'),
('190705','Piura','Talara','Mancora','200706','1'),
('190706','Piura','Talara','Los Organos','200705','1'),
('190801','Piura','Sechura','Sechura','200801','1'),
('190802','Piura','Sechura','Vice','200805','1'),
('190803','Piura','Sechura','Bernal','200803','1'),
('190804','Piura','Sechura','Bellavista De La Union','200802','1'),
('190805','Piura','Sechura','Cristo Nos Valga','200804','1'),
('190806','Piura','Sechura','Rinconada-llicuar','200806','1'),
('200101','Puno','Puno','Puno','210101','0'),
('200102','Puno','Puno','Acora','210102','0'),
('200103','Puno','Puno','Atuncolla','210104','0'),
('200104','Puno','Puno','Capachica','210105','0'),
('200105','Puno','Puno','Coata','210107','0'),
('200106','Puno','Puno','Chucuito','210106','0'),
('200107','Puno','Puno','Huata','210108','0'),
('200108','Puno','Puno','Mañazo','210109','0'),
('200109','Puno','Puno','Paucarcolla','210110','0'),
('200110','Puno','Puno','Pichacani','210111','0'),
('200111','Puno','Puno','San Antonio','210113','0'),
('200112','Puno','Puno','Tiquillaca','210114','0'),
('200113','Puno','Puno','Vilque','210115','0'),
('200114','Puno','Puno','Plateria','210112','0'),
('200115','Puno','Puno','Amantani','210103','0'),
('200201','Puno','Azangaro','Azangaro','210201','1'),
('200202','Puno','Azangaro','Achaya','210202','1'),
('200203','Puno','Azangaro','Arapa','210203','1'),
('200204','Puno','Azangaro','Asillo','210204','1'),
('200205','Puno','Azangaro','Caminaca','210205','1'),
('200206','Puno','Azangaro','Chupa','210206','1'),
('200207','Puno','Azangaro','Jose Domingo Choquehuanca','210207','1'),
('200208','Puno','Azangaro','Muñani','210208','1'),
('200210','Puno','Azangaro','Potoni','210209','1'),
('200212','Puno','Azangaro','Saman','210210','1'),
('200213','Puno','Azangaro','San Anton','210211','1'),
('200214','Puno','Azangaro','San Jose','210212','1'),
('200215','Puno','Azangaro','San Juan De Salinas','210213','1'),
('200216','Puno','Azangaro','Santiago De Pupuja','210214','1'),
('200217','Puno','Azangaro','Tirapata','210215','1'),
('200301','Puno','Carabaya','Macusani','210301','1'),
('200302','Puno','Carabaya','Ajoyani','210302','1'),
('200303','Puno','Carabaya','Ayapata','210303','1'),
('200304','Puno','Carabaya','Coasa','210304','1'),
('200305','Puno','Carabaya','Corani','210305','1'),
('200306','Puno','Carabaya','Crucero','210306','1'),
('200307','Puno','Carabaya','Ituata','210307','1'),
('200308','Puno','Carabaya','Ollachea','210308','1'),
('200309','Puno','Carabaya','San Gaban','210309','1'),
('200310','Puno','Carabaya','Usicayos','210310','1'),
('200401','Puno','Chucuito','Juli','210401','1'),
('200402','Puno','Chucuito','Desaguadero','210402','1'),
('200403','Puno','Chucuito','Huacullani','210403','1'),
('200406','Puno','Chucuito','Pisacoma','210405','1'),
('200407','Puno','Chucuito','Pomata','210406','1'),
('200410','Puno','Chucuito','Zepita','210407','1'),
('200412','Puno','Chucuito','Kelluyo','210404','1'),
('200501','Puno','Huancane','Huancane','210601','1'),
('200502','Puno','Huancane','Cojata','210602','1'),
('200504','Puno','Huancane','Inchupalla','210604','1'),
('200506','Puno','Huancane','Pusi','210605','1'),
('200507','Puno','Huancane','Rosaspata','210606','1'),
('200508','Puno','Huancane','Taraco','210607','1'),
('200509','Puno','Huancane','Vilque Chico','210608','1'),
('200511','Puno','Huancane','Huatasani','210603','1'),
('200601','Puno','Lampa','Lampa','210701','1'),
('200602','Puno','Lampa','Cabanilla','210702','1'),
('200603','Puno','Lampa','Calapuja','210703','1'),
('200604','Puno','Lampa','Nicasio','210704','1'),
('200605','Puno','Lampa','Ocuviri','210705','1'),
('200606','Puno','Lampa','Palca','210706','1'),
('200607','Puno','Lampa','Paratia','210707','1'),
('200608','Puno','Lampa','Pucara','210708','1'),
('200609','Puno','Lampa','Santa Lucia','210709','1'),
('200610','Puno','Lampa','Vilavila','210710','1'),
('200701','Puno','Melgar','Ayaviri','210801','1'),
('200702','Puno','Melgar','Antauta','210802','1'),
('200703','Puno','Melgar','Cupi','210803','1'),
('200704','Puno','Melgar','Llalli','210804','1'),
('200705','Puno','Melgar','Macari','210805','1'),
('200706','Puno','Melgar','Nuñoa','210806','1'),
('200707','Puno','Melgar','Orurillo','210807','1'),
('200708','Puno','Melgar','Santa Rosa','210808','1'),
('200709','Puno','Melgar','Umachiri','210809','1'),
('200801','Puno','Sandia','Sandia','211201','1'),
('200803','Puno','Sandia','Cuyocuyo','211202','1'),
('200804','Puno','Sandia','Limbani','211203','1'),
('200805','Puno','Sandia','Phara','211205','1'),
('200806','Puno','Sandia','Patambuco','211204','1'),
('200807','Puno','Sandia','Quiaca','211206','1'),
('200808','Puno','Sandia','San Juan Del Oro','211207','1'),
('200810','Puno','Sandia','Yanahuaya','211208','1'),
('200811','Puno','Sandia','Alto Inambari','211209','1'),
('200812','Puno','Sandia','San Pedro De Putina Punco','211210','1'),
('200901','Puno','San Roman','Juliaca','211101','1'),
('200902','Puno','San Roman','Cabana','211102','1'),
('200903','Puno','San Roman','Cabanillas','211103','1'),
('200904','Puno','San Roman','Caracoto','211104','1'),
('201001','Puno','Yunguyo','Yunguyo','211301','1'),
('201002','Puno','Yunguyo','Unicachi','211307','1'),
('201003','Puno','Yunguyo','Anapia','211302','1'),
('201004','Puno','Yunguyo','Copani','211303','1'),
('201005','Puno','Yunguyo','Cuturapi','211304','1'),
('201006','Puno','Yunguyo','Ollaraya','211305','1'),
('201007','Puno','Yunguyo','Tinicachi','211306','1'),
('201101','Puno','San Antonio De Putina','Putina','211001','1'),
('201102','Puno','San Antonio De Putina','Pedro Vilca Apaza','211003','1'),
('201103','Puno','San Antonio De Putina','Quilcapuncu','211004','1'),
('201104','Puno','San Antonio De Putina','Ananea','211002','1'),
('201105','Puno','San Antonio De Putina','Sina','211005','1'),
('201201','Puno','El Collao','Ilave','210501','1'),
('201202','Puno','El Collao','Pilcuyo','210503','1'),
('201203','Puno','El Collao','Santa Rosa','210504','1'),
('201204','Puno','El Collao','Capaso','210502','1'),
('201205','Puno','El Collao','Conduriri','210505','1'),
('201301','Puno','Moho','Moho','210901','1'),
('201302','Puno','Moho','Conima','210902','1'),
('201303','Puno','Moho','Tilali','210904','1'),
('201304','Puno','Moho','Huayrapata','210903','1'),
('210101','San Martin','Moyobamba','Moyobamba','220101','0'),
('210102','San Martin','Moyobamba','Calzada','220102','0'),
('210103','San Martin','Moyobamba','Habana','220103','0'),
('210104','San Martin','Moyobamba','Jepelacio','220104','0'),
('210105','San Martin','Moyobamba','Soritor','220105','0'),
('210106','San Martin','Moyobamba','Yantalo','220106','0'),
('210201','San Martin','Huallaga','Saposoa','220401','0'),
('210202','San Martin','Huallaga','Piscoyacu','220404','0'),
('210203','San Martin','Huallaga','Sacanche','220405','0'),
('210204','San Martin','Huallaga','Tingo De Saposoa','220406','0'),
('210205','San Martin','Huallaga','Alto Saposoa','220402','0'),
('210206','San Martin','Huallaga','El Eslabon','220403','0'),
('210301','San Martin','Lamas','Lamas','220501','0'),
('210303','San Martin','Lamas','Barranquita','220503','0'),
('210304','San Martin','Lamas','Caynarachi','220504','0'),
('210305','San Martin','Lamas','Cuñumbuqui','220505','0'),
('210306','San Martin','Lamas','Pinto Recodo','220506','0'),
('210307','San Martin','Lamas','Rumisapa','220507','0'),
('210311','San Martin','Lamas','Shanao','220509','0'),
('210313','San Martin','Lamas','Tabalosos','220510','0'),
('210314','San Martin','Lamas','Zapatero','220511','0'),
('210315','San Martin','Lamas','Alonso De Alvarado','220502','0'),
('210316','San Martin','Lamas','San Roque De Cumbaza','220508','0'),
('210401','San Martin','Mariscal Caceres','Juanjui','220601','0'),
('210402','San Martin','Mariscal Caceres','Campanilla','220602','0'),
('210403','San Martin','Mariscal Caceres','Huicungo','220603','0'),
('210404','San Martin','Mariscal Caceres','Pachiza','220604','0'),
('210405','San Martin','Mariscal Caceres','Pajarillo','220605','0'),
('210501','San Martin','Rioja','Rioja','220801','0'),
('210502','San Martin','Rioja','Posic','220806','0'),
('210503','San Martin','Rioja','Yorongos','220808','0'),
('210504','San Martin','Rioja','Yuracyacu','220809','0'),
('210505','San Martin','Rioja','Nueva Cajamarca','220804','0'),
('210506','San Martin','Rioja','Elias Soplin','220803','0'),
('210507','San Martin','Rioja','San Fernando','220807','0'),
('210508','San Martin','Rioja','Pardo Miguel','220805','0'),
('210509','San Martin','Rioja','Awajun','220802','0'),
('210601','San Martin','San Martin','Tarapoto','220901','0'),
('210602','San Martin','San Martin','Alberto Leveau','220902','0'),
('210604','San Martin','San Martin','Cacatachi','220903','0'),
('210606','San Martin','San Martin','Chazuta','220904','0'),
('210607','San Martin','San Martin','Chipurana','220905','0'),
('210608','San Martin','San Martin','El Porvenir','220906','0'),
('210609','San Martin','San Martin','Huimbayoc','220907','0'),
('210610','San Martin','San Martin','Juan Guerra','220908','0'),
('210611','San Martin','San Martin','Morales','220910','0'),
('210612','San Martin','San Martin','Papa-playa','220911','0'),
('210616','San Martin','San Martin','San Antonio','220912','0'),
('210619','San Martin','San Martin','Sauce','220913','0'),
('210620','San Martin','San Martin','Shapaja','220914','0'),
('210621','San Martin','San Martin','La Banda De Shilcayo','220909','0'),
('210701','San Martin','Bellavista','Bellavista','220201','0'),
('210702','San Martin','Bellavista','San Rafael','220206','0'),
('210703','San Martin','Bellavista','San Pablo','220205','0'),
('210704','San Martin','Bellavista','Alto Biavo','220202','0'),
('210705','San Martin','Bellavista','Huallaga','220204','0'),
('210706','San Martin','Bellavista','Bajo Biavo','220203','0'),
('210801','San Martin','Tocache','Tocache','221001','0'),
('210802','San Martin','Tocache','Nuevo Progreso','221002','0'),
('210803','San Martin','Tocache','Polvora','221003','0'),
('210804','San Martin','Tocache','Shunte','221004','0'),
('210805','San Martin','Tocache','Uchiza','221005','0'),
('210901','San Martin','Picota','Picota','220701','0'),
('210902','San Martin','Picota','Buenos Aires','220702','0'),
('210903','San Martin','Picota','Caspizapa','220703','0'),
('210904','San Martin','Picota','Pilluana','220704','0'),
('210905','San Martin','Picota','Pucacaca','220705','0'),
('210906','San Martin','Picota','San Cristobal','220706','0'),
('210907','San Martin','Picota','San Hilarion','220707','0'),
('210908','San Martin','Picota','Tingo De Ponasa','220709','0'),
('210909','San Martin','Picota','Tres Unidos','220710','0'),
('210910','San Martin','Picota','Shamboyacu','220708','0'),
('211001','San Martin','El Dorado','San Jose De Sisa','220301','0'),
('211002','San Martin','El Dorado','Agua Blanca','220302','0'),
('211003','San Martin','El Dorado','Shatoja','220305','0'),
('211004','San Martin','El Dorado','San Martin','220303','0'),
('211005','San Martin','El Dorado','Santa Rosa','220304','0'),
('220101','Tacna','Tacna','Tacna','230101','0'),
('220102','Tacna','Tacna','Calana','230103','0'),
('220104','Tacna','Tacna','Inclan','230105','0'),
('220107','Tacna','Tacna','Pachia','230106','0'),
('220108','Tacna','Tacna','Palca','230107','0'),
('220109','Tacna','Tacna','Pocollay','230108','0'),
('220110','Tacna','Tacna','Sama','230109','0'),
('220111','Tacna','Tacna','Alto De La Alianza','230102','0'),
('220112','Tacna','Tacna','Ciudad Nueva','230104','0'),
('220113','Tacna','Tacna','Coronel Gregorio Albarracin La','230110','0'),
('220201','Tacna','Tarata','Tarata','230401','1'),
('220205','Tacna','Tarata','Heroes Albarracin','230402','1'),
('220206','Tacna','Tarata','Estique','230403','1'),
('220207','Tacna','Tarata','Estique Pampa','230404','1'),
('220210','Tacna','Tarata','Sitajara','230405','1'),
('220211','Tacna','Tarata','Susapaya','230406','1'),
('220212','Tacna','Tarata','Tarucachi','230407','1'),
('220213','Tacna','Tarata','Ticaco','230408','1'),
('220301','Tacna','Jorge Basadre','Locumba','230301','1'),
('220302','Tacna','Jorge Basadre','Ite','230303','1'),
('220303','Tacna','Jorge Basadre','Ilabaya','230302','1'),
('220401','Tacna','Candarave','Candarave','230201','1'),
('220402','Tacna','Candarave','Cairani','230202','1'),
('220403','Tacna','Candarave','Curibaya','230204','1'),
('220404','Tacna','Candarave','Huanuara','230205','1'),
('220405','Tacna','Candarave','Quilahuani','230206','1'),
('220406','Tacna','Candarave','Camilaca','230203','1'),
('230101','Tumbes','Tumbes','Tumbes','240101','0'),
('230102','Tumbes','Tumbes','Corrales','240102','0'),
('230103','Tumbes','Tumbes','La Cruz','240103','0'),
('230104','Tumbes','Tumbes','Pampas De Hospital','240104','0'),
('230105','Tumbes','Tumbes','San Jacinto','240105','0'),
('230106','Tumbes','Tumbes','San Juan De La Virgen','240106','0'),
('230201','Tumbes','Contralmirante Villar','Zorritos','240201','0'),
('230202','Tumbes','Contralmirante Villar','Casitas','240202','0'),
('230203','Tumbes','Contralmirante Villar','Canoas De Punta Sal','240203','0'),
('230301','Tumbes','Zarumilla','Zarumilla','240301','0'),
('230302','Tumbes','Zarumilla','Matapalo','240303','0'),
('230303','Tumbes','Zarumilla','Papayal','240304','0'),
('230304','Tumbes','Zarumilla','Aguas Verdes','240302','0'),
('240101','Callao','Callao','Callao','070101','0'),
('240102','Callao','Callao','Bellavista','070102','0'),
('240103','Callao','Callao','La Punta','070105','0'),
('240104','Callao','Callao','Carmen De La Legua Reynoso','070103','0'),
('240105','Callao','Callao','La Perla','070104','0'),
('240106','Callao','Callao','Ventanilla','070106','0'),
('250101','Ucayali','Coronel Portillo','Calleria','250101','0'),
('250102','Ucayali','Coronel Portillo','Yarinacocha','250105','0'),
('250103','Ucayali','Coronel Portillo','Masisea','250104','0'),
('250104','Ucayali','Coronel Portillo','Campoverde','250102','0'),
('250105','Ucayali','Coronel Portillo','Iparia','250103','0'),
('250106','Ucayali','Coronel Portillo','Nueva Requena','250106','0'),
('250107','Ucayali','Coronel Portillo','Manantay','250107','0'),
('250201','Ucayali','Padre Abad','Padre Abad','250301','1'),
('250202','Ucayali','Padre Abad','Irazola','250302','1'),
('250203','Ucayali','Padre Abad','Curimana','250303','1'),
('250301','Ucayali','Atalaya','Raimondi','250201','1'),
('250302','Ucayali','Atalaya','Tahuania','250203','1'),
('250303','Ucayali','Atalaya','Yurua','250204','1'),
('250304','Ucayali','Atalaya','Sepahua','250202','1'),
('250401','Ucayali','Purus','Purus','250401','1');

/*Table structure for table `unidadmedidas` */

DROP TABLE IF EXISTS `unidadmedidas`;

CREATE TABLE `unidadmedidas` (
  `idunidadmedida` int(11) NOT NULL AUTO_INCREMENT,
  `unidad` varchar(50) NOT NULL,
  `abreviatura` char(3) DEFAULT NULL,
  PRIMARY KEY (`idunidadmedida`),
  UNIQUE KEY `uk_und_unidad` (`unidad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `unidadmedidas` */

insert  into `unidadmedidas`(`idunidadmedida`,`unidad`,`abreviatura`) values 
(1,'Kilogramos','kl'),
(2,'Miligramos','ml');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `idpersona` int(11) NOT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `tipousuario` char(2) NOT NULL,
  `usuario` char(30) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `idusuariocre` int(11) DEFAULT NULL,
  `idusuariomod` int(11) DEFAULT NULL,
  `idusuariobaja` int(11) DEFAULT NULL,
  `fechahoracre` datetime NOT NULL DEFAULT current_timestamp(),
  `fechahoramod` datetime DEFAULT NULL,
  `fechahorabaja` datetime DEFAULT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `uk_usu_usuario` (`usuario`),
  KEY `fk_usu_idpersona` (`idpersona`),
  KEY `fk_usu_idempresa` (`idempresa`),
  CONSTRAINT `fk_usu_idempresa` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`),
  CONSTRAINT `fk_usu_idpersona` FOREIGN KEY (`idpersona`) REFERENCES `personas` (`idpersona`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuarios` */

insert  into `usuarios`(`idusuario`,`idpersona`,`idempresa`,`tipousuario`,`usuario`,`clave`,`idusuariocre`,`idusuariomod`,`idusuariobaja`,`fechahoracre`,`fechahoramod`,`fechahorabaja`,`estado`) values 
(1,2,NULL,'AD','Admin','$2y$10$MPK0MMZdHAt/CInSiGBSq.WuTyL5YQW8UKs90mXvU9Bt4ye0FV.dS',NULL,NULL,NULL,'2022-10-12 17:34:50',NULL,NULL,''),
(3,3,NULL,'AD','Julio','$2y$10$MPK0MMZdHAt/CInSiGBSq.WuTyL5YQW8UKs90mXvU9Bt4ye0FV.dS',NULL,NULL,NULL,'2022-10-13 16:21:36',NULL,NULL,'');

/* Procedure structure for procedure `spu_areaslaboratorio_area_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_areaslaboratorio_area_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_areaslaboratorio_area_listar`()
BEGIN
	SELECT * from vs_arealaboratorio_full;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_areaslaboratorio_eliminar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_areaslaboratorio_eliminar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_areaslaboratorio_eliminar`(IN _idarealaboratorio INT)
BEGIN
	UPDATE AREASLABORATORIOS SET 
		estado = 0
		WHERE idarealaboratorio = _idarealaboratorio;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_areaslaboratorio_metodo_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_areaslaboratorio_metodo_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_areaslaboratorio_metodo_listar`()
BEGIN
	SELECT * FROM vs_metodolaboratorio_full;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_areaslaboratorio_modificar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_areaslaboratorio_modificar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_areaslaboratorio_modificar`(
	IN _idarealaboratorio INT,
	IN _nombrearea VARCHAR(50),
	IN _idusuariomod INT
)
BEGIN
	UPDATE AREASLABORATORIOS SET 
		nombrearea 		= _nombrearea,
		idusuariomod 	= _idusuariomod,
		fechahoramod 	= NOW()
		WHERE idarealaboratorio = _idarealaboratorio;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_areaslaboratorio_muestra_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_areaslaboratorio_muestra_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_areaslaboratorio_muestra_listar`()
BEGIN
	SELECT * FROM vs_muestralaboratorio_full;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_areaslaboratorio_onedata_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_areaslaboratorio_onedata_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_areaslaboratorio_onedata_listar`(IN _idarealaboratorio INT)
BEGIN
	SELECT * FROM AREASLABORATORIOS 
		WHERE idarealaboratorio = _idarealaboratorio AND estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_areaslaboratorio_registrar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_areaslaboratorio_registrar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_areaslaboratorio_registrar`(
	IN _tipo CHAR(2),
	IN _nombrearea VARCHAR(50),
	IN _idusuariocre INT
)
BEGIN
	INSERT INTO AREASLABORATORIOS (tipo, nombrearea, idusuariocre) 
		VALUES (_tipo, _nombrearea, _idusuariocre);
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_comando_onedata_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_comando_onedata_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_comando_onedata_listar`(IN _idsubservicio INT)
BEGIN
	SELECT * FROM SUBSERVICIOS 
		WHERE idsubservicio = _idsubservicio AND estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_componentes_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_componentes_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_componentes_listar`()
BEGIN
	SELECT * FROM COMPONENTES WHERE estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_componentes_registrar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_componentes_registrar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_componentes_registrar`(
	IN _idsubservicio 		INT,
	IN _idunidadmedida 		INT,
	IN _componente 				VARCHAR(50),
	IN _valornormal 			TEXT,
	IN _orden 						TINYINT,
	IN _idusuariocre 			INT
)
BEGIN
	IF _idunidadmedida = '' THEN SET _idunidadmedida = NULL; END IF;
	IF _valornormal = '' THEN SET _valornormal = NULL; END IF;
	IF _orden = '' THEN SET _orden = NULL; END IF;
	
INSERT INTO COMPONENTES (idsubservicio, idunidadmedida, componente, valornormal, orden, idusuariocre)
		VALUES (_idsubservicio, _idunidadmedida, _componente, _valornormal, _orden, _idusuariocre);
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_empleados_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_empleados_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_empleados_listar`()
BEGIN
	SELECT * FROM EMPLEADOS;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_empleados_registrar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_empleados_registrar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_empleados_registrar`(
	IN _idpersona 				INT,
	IN _idpuesto 					INT,
	IN _idempresa 				int,
	IN _canthijos    			TINYINT,
	IN _cantdependente		TINYINT,
	IN _seguro 						CHAR(3),
	IN _gradoinstruccion	CHAR(2),
	IN _consentinformado  BIT,
	IN _consetdrogas			BIT
)
BEGIN
	IF _cantdependente = '' THEN SET _cantdependente = NULL; END IF;
	IF _consentinformado = '' THEN SET _consentinformado = NULL; END IF;
	IF _consetdrogas = '' THEN SET _consetdrogas = NULL; END IF;

INSERT INTO EMPLEADOS (idpersona, idpuesto, idempresa, canthijos, cantdependente, seguro, gradoinstruccion, consentinformado, consetdrogas)
		VALUES (_idpersona, _idpuesto, _idempresa, _canthijos, _cantdependente, _seguro, _gradoinstruccion, _consentinformado, _consetdrogas);
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_empresas_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_empresas_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_empresas_listar`()
BEGIN
	SELECT * FROM EMPRESAS WHERE estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_empresas_listar_paginacion` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_empresas_listar_paginacion` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_empresas_listar_paginacion`(
	IN _offset INT,
	IN _limit  TINYINT 
)
BEGIN
	SELECT* FROM EMPRESAS order by idempresa desc LIMIT _limit OFFSET _offset;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_empresas_registrar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_empresas_registrar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_empresas_registrar`(
	IN _empresa				VARCHAR(100),
	IN _razonsocial 	VARCHAR(100),
	IN _ruc 					CHAR(11),
	IN _correo 				VARCHAR(100),
	IN _direccion 		VARCHAR(100),
	IN _ubigeo 				CHAR(6),
	IN _idusuariocre  INT 			
)
BEGIN
	INSERT INTO EMPRESAS (empresa, razonsocial, ruc, correo, direccion, ubigeo, idusuariocre)
		VALUES(_empresa, _razonsocial, _ruc, _correo, _direccion, _ubigeo, _idusuariocre);
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_especialidades_eliminar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_especialidades_eliminar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_especialidades_eliminar`(IN _idespecialidad INT)
BEGIN
	UPDATE ESPECIALIDADES SET 
		estado = 0
		WHERE idespecialidad = _idespecialidad;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_especialidades_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_especialidades_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_especialidades_listar`()
BEGIN
	SELECT * FROM ESPECIALIDADES WHERE estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_especialidades_modificar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_especialidades_modificar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_especialidades_modificar`(
	IN _idespecialidad 		INT,
	IN _especialidad 			VARCHAR(50),
	IN _idusuariomod 			INT
)
BEGIN
	UPDATE ESPECIALIDADES SET 
		especialidad 	= _especialidad,
		idusuariomod 	= _idusuariomod,
		fechahoramod 	= NOW()
		WHERE idespecialidad = _idespecialidad;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_especialidades_onedata_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_especialidades_onedata_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_especialidades_onedata_listar`(IN _idespecialidad INT)
BEGIN
	SELECT * FROM ESPECIALIDADES 
		WHERE idespecialidad = _idespecialidad AND estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_especialidades_registrar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_especialidades_registrar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_especialidades_registrar`(
	IN _especialidad VARCHAR(50),
	IN _idusuariocre INT
)
BEGIN
	INSERT INTO ESPECIALIDADES (especialidad, idusuariocre) 
		VALUES (_especialidad, _idusuariocre);
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_fichasmedicas_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_fichasmedicas_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_fichasmedicas_listar`()
BEGIN
	SELECT * FROM FICHASMEDICAS WHERE estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_fichasmedicas_modificar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_fichasmedicas_modificar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_fichasmedicas_modificar`(
	IN _idfichamedica INT,
	IN _nomfichamedica VARCHAR(70),
	IN _idusuariomod INT
)
BEGIN
	UPDATE FICHASMEDICAS SET 
		nomfichamedica 	= _nomfichamedica,
		idusuariomod 		= _idusuariomod,
		fechahoramod 		= NOW()
		WHERE idfichamedica = _idfichamedica;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_fichasmedicas_onedata_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_fichasmedicas_onedata_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_fichasmedicas_onedata_listar`(IN _idfichamedica INT)
BEGIN
	SELECT * FROM FICHASMEDICAS 
		WHERE idfichamedica = _idfichamedica AND estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_fichasmedicas_registrar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_fichasmedicas_registrar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_fichasmedicas_registrar`(
	IN _nomfichamedica VARCHAR(70),
	IN _idusuariocre INT
)
BEGIN
	INSERT INTO FICHASMEDICAS (nomfichamedica, idusuariocre) 
		VALUES (_nomfichamedica, _idusuariocre);
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_login_user` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_login_user` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_login_user`(in _usuario varchar(30))
begin
	select * from USUARIOS where usuario = _usuario;
end */$$
DELIMITER ;

/* Procedure structure for procedure `spu_medicos_eliminar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_medicos_eliminar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_medicos_eliminar`(IN _idmedico INT)
BEGIN
	UPDATE MEDICOS SET 
		estado = 0
		WHERE idmedico = _idmedico;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_medicos_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_medicos_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_medicos_listar`()
BEGIN
	SELECT * FROM MEDICOS WHERE estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_medicos_modificar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_medicos_modificar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_medicos_modificar`(
	IN _idmedico 			INT,
	IN _idpersona 		int,
	IN _firma 				VARCHAR(100),
	IN _idusuariomod 	INT
)
BEGIN
	UPDATE MEDICOS SET 
		idpersona 		= _idpersona,
		firma        	= _firma,
		idusuariomod 	= _idusuariomod,
		fechahoramod 	= NOW()
		WHERE idmedico = _idmedico;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_medicos_onedata_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_medicos_onedata_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_medicos_onedata_listar`(IN _idmedico INT)
BEGIN
	SELECT * FROM MEDICOS 
		WHERE idmedico = _idmedico AND estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_medicos_registrar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_medicos_registrar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_medicos_registrar`(
	in _idpersona 		int,
	IN _firma 				VARCHAR(100),
	IN _idusuariocre 	INT
)
BEGIN
	INSERT INTO MEDICOS (idpersona, firma, idusuariocre) 
		VALUES (_idpersona, _firma, _idusuariocre);
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_personas_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_personas_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_personas_listar`()
BEGIN
	SELECT * FROM PERSONAS;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_personas_registrar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_personas_registrar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_personas_registrar`(
	IN _apepaterno 		VARCHAR(30),
	IN _apematerno 		VARCHAR(30),
	IN _nombres 			VARCHAR(50),
	IN _fechanac 			DATE,
	in _sexo    			char(1),
	in _estcivil			char(2),
	in _tipodoc 			char(2),
	in _numdoc				varchar(13),
	in _celular     	char(11),
	in _correo				varchar(70),
	in _direccion 		varchar(100),
	in _ubigeodirec		char(6),
	in _ubigeonac			char(6)
)
BEGIN
	if _sexo = '' then set _sexo = null; end if;
	IF _estcivil = '' THEN SET _estcivil = NULL; END IF;
	IF _celular = '' THEN SET _celular = NULL; END IF;
	IF _correo = '' THEN SET _correo = NULL; END IF;
	IF _direccion = '' THEN SET _direccion = NULL; END IF;

INSERT INTO PERSONAS (apepaterno, apematerno, nombres, fechanac, sexo, estcivil, tipodoc, numdoc, celular, correo, direccion, ubigeodirec, ubigeonac)
		VALUES (_apepaterno, _apematerno, _nombres, _fechanac, _sexo, _estcivil, _tipodoc, _numdoc, _celular, _correo, _direccion, _ubigeodirec, _ubigeonac);
		
SELECT LAST_INSERT_ID() AS 'idpersona';
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_precios_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_precios_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_precios_listar`()
BEGIN
	SELECT SRV.idservicio, SRV.servicio, PRE.precio, SRV.idusuariocre,
					SRV.fechahoracre, SRV.idusuariomod, SRV.fechahoramod
	FROM PRECIOS PRE
	INNER JOIN SERVICIOS SRV on SRV.idservicio = PRE.idservicio
	WHERE SRV.estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_precios_registrar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_precios_registrar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_precios_registrar`(
	IN _idservicio		INT,
	IN _precio 				CHAR(2),
	IN _idusuariocre 	INT
)
BEGIN
INSERT INTO PRECIOS (idservicio, precio, idusuariocre)
		VALUES (_idservicio, _precio, _idusuariocre);
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_protocolos_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_protocolos_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_protocolos_listar`()
BEGIN
	SELECT * FROM PROTOCOLOS WHERE estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_protocolos_modificar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_protocolos_modificar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_protocolos_modificar`(
	IN _idprotocolo 		INT,
	IN _idempresa				INT,
	IN _idtipoexamen 		INT,
	IN _protocolo 			VARCHAR(70),
	IN _consinformado 	char(2),
	IN _consdrogas			char(2),
	IN _idusuariomod 		INT
)
BEGIN
	IF _consinformado = '' THEN SET _consinformado = NULL; END IF;
	IF _consdrogas = '' THEN SET _consdrogas = NULL; END IF;
	
	UPDATE PROTOCOLOS SET 
		idempresa 			= _idempresa,
		idtipoexamen 		= _idtipoexamen,
		protocolo 			= _protocolo,
		consinformado 	= _consinformado,
		consdrogas 			= _consdrogas,
		idusuariomod 		= _idusuariomod,
		fechahoramod 		= NOW()
		WHERE idprotocolo = _idprotocolo;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_protocolos_registrar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_protocolos_registrar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_protocolos_registrar`(
	IN _idempresa				INT,
	IN _idtipoexamen 		INT,
	IN _protocolo 			VARCHAR(70),
	IN _consinformado 	char(2),
	IN _consdrogas			char(2),
	IN _idusuariocre 		INT
)
BEGIN
	IF _consinformado = '' THEN SET _consinformado = null; END IF;
	IF _consdrogas = '' THEN SET _consdrogas = null; END IF;

	
INSERT INTO PROTOCOLOS (idempresa, idtipoexamen, protocolo, consinformado, consdrogas, idusuariocre)
		VALUES (_idempresa, _idtipoexamen, _protocolo, _consinformado, _consdrogas, _idusuariocre);
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_protocolo_onedata_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_protocolo_onedata_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_protocolo_onedata_listar`(IN _idprotocolo INT)
BEGIN
	SELECT * FROM PROTOCOLOS 
		WHERE idprotocolo = _idprotocolo AND estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_sedes_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_sedes_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_sedes_listar`()
BEGIN
	SELECT * FROM SEDES;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_servicios_eliminar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_servicios_eliminar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_servicios_eliminar`(IN _idservicio INT)
BEGIN
	UPDATE SERVICIOS SET 
		estado = 0
		WHERE idservicio = _idservicio;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_servicios_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_servicios_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_servicios_listar`()
BEGIN
	SELECT * FROM SERVICIOS where estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_servicios_modificar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_servicios_modificar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_servicios_modificar`(
	IN _idservicio INT,
	IN _servicio VARCHAR(50),
	IN _idusuariomod INT
)
BEGIN
	UPDATE SERVICIOS SET 
		servicio 			= _servicio,
		idusuariomod 	= _idusuariomod,
		fechahoramod 	= NOW()
		WHERE idservicio = _idservicio;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_servicios_registrar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_servicios_registrar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_servicios_registrar`(
	IN _idsede 				INT,
	IN _servicio 			VARCHAR(70),
	IN _idusuariocre 	INT
)
BEGIN
INSERT INTO SERVICIOS (idsede, servicio, idusuariocre)
		VALUES (_idsede, _servicio, _idusuariocre);
		
SELECT LAST_INSERT_ID() AS 'idservicio';  
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_servicio_onedata_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_servicio_onedata_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_servicio_onedata_listar`(IN _idservicio INT)
BEGIN
	SELECT * FROM SERVICIOS 
		WHERE idservicio = _idservicio AND estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_subservicios_onedata_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_subservicios_onedata_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_subservicios_onedata_listar`(IN _idsubservicio INT)
BEGIN
	SELECT * FROM SUBSERVICIOS 
		WHERE idsubservicio = _idsubservicio AND estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_subservicio_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_subservicio_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_subservicio_listar`()
BEGIN
	SELECT * FROM SUBSERVICIOS WHERE estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_subservicio_modificar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_subservicio_modificar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_subservicio_modificar`(
	IN _idsubservicio 		INT,
	IN _nomsubservicio 		VARCHAR(70),
	IN _tipo 							CHAR(2),
	IN _idarealaboratorio INT,
	IN _idespecialidad 		INT,
	IN _idfichamedica 		INT,
	IN _idusuariomod 			INT
)
BEGIN
	IF _idfichamedica = '' THEN SET _idfichamedica = NULL; END IF;
	IF _idarealaboratorio = '' THEN SET _idarealaboratorio = NULL; END IF;
	
	UPDATE SUBSERVICIOS SET 
		nomsubservicio 			= _nomsubservicio,
		tipo 								= _tipo,
		idarealaboratorio 	= _idarealaboratorio,
		idespecialidad 			= _idespecialidad,
		idfichamedica 			= _idfichamedica,
		idusuariomod 				= _idusuariomod,
		fechahoramod 				= NOW()
		WHERE idsubservicio = _idsubservicio;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_subservicio_registrar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_subservicio_registrar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_subservicio_registrar`(
	IN _nomsubservicio 		VARCHAR(70),
	IN _tipo 							CHAR(2),
	IN _idarealaboratorio INT,
	IN _idespecialidad 		INT,
	IN _idusuariocre 			INT,
	IN _idfichamedica 		INT
)
BEGIN
	IF _idfichamedica = '' THEN SET _idfichamedica = NULL; END IF;
	IF _idarealaboratorio = '' THEN SET _idarealaboratorio = NULL; END IF;
	
	INSERT INTO SUBSERVICIOS (nomsubservicio, tipo, idarealaboratorio, idespecialidad, idusuariocre, idfichamedica) 
		VALUES (_nomsubservicio, _tipo, _idarealaboratorio, _idespecialidad, _idusuariocre, _idfichamedica);
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_tipoexamenes_eliminar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_tipoexamenes_eliminar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_tipoexamenes_eliminar`(IN _idtipoexamen INT)
BEGIN
	UPDATE TIPOEXAMENES SET 
		estado = 0
		WHERE idtipoexamen = _idtipoexamen;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_tipoexamenes_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_tipoexamenes_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_tipoexamenes_listar`()
BEGIN
	SELECT * FROM TIPOEXAMENES WHERE estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_tipoexamenes_modificar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_tipoexamenes_modificar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_tipoexamenes_modificar`(
	IN _idtipoexamen INT,
	IN _nomtipoexamen VARCHAR(50),
	in _idusuariomod	int
)
BEGIN
	UPDATE TIPOEXAMENES SET 
		nomtipoexamen = _nomtipoexamen,
		idusuariomod = _idusuariomod,
		fechahoramod = now()
		WHERE idtipoexamen = _idtipoexamen;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_tipoexamenes_onedata_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_tipoexamenes_onedata_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_tipoexamenes_onedata_listar`(IN _idtipoexamen INT)
BEGIN
	SELECT * FROM TIPOEXAMENES 
		WHERE idtipoexamen = _idtipoexamen AND estado = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_tipoexamenes_registrar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_tipoexamenes_registrar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_tipoexamenes_registrar`(
	IN _nomtipoexamen VARCHAR(50),
	in _idusuariocre 	int
)
BEGIN
	INSERT INTO TIPOEXAMENES (nomtipoexamen, idusuariocre) VALUES (_nomtipoexamen, _idusuariocre);
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_ubigeos_buscar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_ubigeos_buscar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_ubigeos_buscar`(IN _search VARCHAR(30))
BEGIN
 SELECT * FROM vs_ubigeo_full 
	WHERE vs_ubigeo_full.text LIKE CONCAT('%', _search, '%');
END */$$
DELIMITER ;

/* Procedure structure for procedure `spu_unidadmedida_listar` */

/*!50003 DROP PROCEDURE IF EXISTS  `spu_unidadmedida_listar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spu_unidadmedida_listar`()
BEGIN
	SELECT * FROM UNIDADMEDIDAS;
END */$$
DELIMITER ;

/*Table structure for table `vs_arealaboratorio_full` */

DROP TABLE IF EXISTS `vs_arealaboratorio_full`;

/*!50001 DROP VIEW IF EXISTS `vs_arealaboratorio_full` */;
/*!50001 DROP TABLE IF EXISTS `vs_arealaboratorio_full` */;

/*!50001 CREATE TABLE  `vs_arealaboratorio_full`(
 `idarealaboratorio` int(11) ,
 `nombrearea` varchar(50) ,
 `usuariocre` char(30) ,
 `fechahoracre` datetime ,
 `idusuariomod` int(11) ,
 `fechahoramod` datetime 
)*/;

/*Table structure for table `vs_metodolaboratorio_full` */

DROP TABLE IF EXISTS `vs_metodolaboratorio_full`;

/*!50001 DROP VIEW IF EXISTS `vs_metodolaboratorio_full` */;
/*!50001 DROP TABLE IF EXISTS `vs_metodolaboratorio_full` */;

/*!50001 CREATE TABLE  `vs_metodolaboratorio_full`(
 `idarealaboratorio` int(11) ,
 `nombrearea` varchar(50) ,
 `usuariocre` char(30) ,
 `fechahoracre` datetime ,
 `idusuariomod` int(11) ,
 `fechahoramod` datetime 
)*/;

/*Table structure for table `vs_muestralaboratorio_full` */

DROP TABLE IF EXISTS `vs_muestralaboratorio_full`;

/*!50001 DROP VIEW IF EXISTS `vs_muestralaboratorio_full` */;
/*!50001 DROP TABLE IF EXISTS `vs_muestralaboratorio_full` */;

/*!50001 CREATE TABLE  `vs_muestralaboratorio_full`(
 `idarealaboratorio` int(11) ,
 `nombrearea` varchar(50) ,
 `usuariocre` char(30) ,
 `fechahoracre` datetime ,
 `idusuariomod` int(11) ,
 `fechahoramod` datetime 
)*/;

/*Table structure for table `vs_ubigeo_full` */

DROP TABLE IF EXISTS `vs_ubigeo_full`;

/*!50001 DROP VIEW IF EXISTS `vs_ubigeo_full` */;
/*!50001 DROP TABLE IF EXISTS `vs_ubigeo_full` */;

/*!50001 CREATE TABLE  `vs_ubigeo_full`(
 `ubigeo` char(6) ,
 `text` varchar(102) 
)*/;

/*View structure for view vs_arealaboratorio_full */

/*!50001 DROP TABLE IF EXISTS `vs_arealaboratorio_full` */;
/*!50001 DROP VIEW IF EXISTS `vs_arealaboratorio_full` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vs_arealaboratorio_full` AS select `arl`.`idarealaboratorio` AS `idarealaboratorio`,`arl`.`nombrearea` AS `nombrearea`,`usu`.`usuario` AS `usuariocre`,`arl`.`fechahoracre` AS `fechahoracre`,`arl`.`idusuariomod` AS `idusuariomod`,`arl`.`fechahoramod` AS `fechahoramod` from (`areaslaboratorios` `arl` join `usuarios` `usu` on(`arl`.`idusuariocre` = `usu`.`idusuario`)) where `arl`.`tipo` = 'AR' and `arl`.`estado` = 1 */;

/*View structure for view vs_metodolaboratorio_full */

/*!50001 DROP TABLE IF EXISTS `vs_metodolaboratorio_full` */;
/*!50001 DROP VIEW IF EXISTS `vs_metodolaboratorio_full` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vs_metodolaboratorio_full` AS select `arl`.`idarealaboratorio` AS `idarealaboratorio`,`arl`.`nombrearea` AS `nombrearea`,`usu`.`usuario` AS `usuariocre`,`arl`.`fechahoracre` AS `fechahoracre`,`arl`.`idusuariomod` AS `idusuariomod`,`arl`.`fechahoramod` AS `fechahoramod` from (`areaslaboratorios` `arl` join `usuarios` `usu` on(`usu`.`idusuario` = `arl`.`idusuariocre`)) where `arl`.`tipo` = 'ME' and `arl`.`estado` = 1 */;

/*View structure for view vs_muestralaboratorio_full */

/*!50001 DROP TABLE IF EXISTS `vs_muestralaboratorio_full` */;
/*!50001 DROP VIEW IF EXISTS `vs_muestralaboratorio_full` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vs_muestralaboratorio_full` AS select `arl`.`idarealaboratorio` AS `idarealaboratorio`,`arl`.`nombrearea` AS `nombrearea`,`usu`.`usuario` AS `usuariocre`,`arl`.`fechahoracre` AS `fechahoracre`,`arl`.`idusuariomod` AS `idusuariomod`,`arl`.`fechahoramod` AS `fechahoramod` from (`areaslaboratorios` `arl` join `usuarios` `usu` on(`usu`.`idusuario` = `arl`.`idusuariocre`)) where `arl`.`tipo` = 'MU' and `arl`.`estado` = 1 */;

/*View structure for view vs_ubigeo_full */

/*!50001 DROP TABLE IF EXISTS `vs_ubigeo_full` */;
/*!50001 DROP VIEW IF EXISTS `vs_ubigeo_full` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vs_ubigeo_full` AS select `ubigeos`.`ubigeo` AS `ubigeo`,concat(`ubigeos`.`dpto`,' - ',`ubigeos`.`prov`,' - ',`ubigeos`.`distrito`) AS `text` from `ubigeos` order by 2 */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
