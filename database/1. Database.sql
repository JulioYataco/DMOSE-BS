CREATE DATABASE OCUPACIONAL;
USE OCUPACIONAL;

CREATE TABLE PERSONAS
(
	idpersona 		INT AUTO_INCREMENT PRIMARY KEY,
	apepaterno 		VARCHAR(30) 	NOT NULL,
	apematerno 		VARCHAR(30) 	NOT NULL,
	nombres				VARCHAR(50) 	NOT NULL,
	fechanac			DATE 					NOT NULL,
	sexo					CHAR(1)						NULL,
	estcivil    	CHAR(2)      			NULL, -- (Casado = CA - Conviviente = CV - Soltero = ST...)
	tipodoc				CHAR(2)				NOT NULL, -- (Carnet extranjeria = CE(12) - Carta andina = CA () - Pasaporte = PT (12)...)
	numdoc				VARCHAR(13)		NOT NULL,
	celular 			CHAR(11)    			NULL,
	correo				VARCHAR(70)     	NULL,
	direccion			VARCHAR(100)    	NULL,
	ubigeodirec 	CHAR(6)     	NOT NULL,
	ubigeonac			CHAR(6)				NOT NULL,
	CONSTRAINT uk_per_numdoc UNIQUE (numdoc, tipodoc),
	CONSTRAINT fk_per_ubigeodirec FOREIGN KEY (ubigeodirec) REFERENCES ubigeos (ubigeo),
	CONSTRAINT fk_per_ubigeonac FOREIGN KEY (ubigeonac) REFERENCES ubigeos (ubigeo)
)ENGINE = INNODB;



-- CREADA --
CREATE TABLE EMPRESAS
(
	idempresa 		INT AUTO_INCREMENT PRIMARY KEY,
	empresa				VARCHAR(100)  NOT NULL,
	razonsocial 	VARCHAR(100) 	NOT NULL,
	ruc 					CHAR(11) 			NOT NULL,
	correo 				VARCHAR(100) 	NOT NULL,
	direccion 		VARCHAR(100) 			NULL,
	ubigeo 				CHAR(6) 					NULL,
	idusuariocre  INT 							NULL,
	idusuariomod  INT 							NULL,
	idusuariobaja INT 							NULL,
	fechahoracre 	DATETIME 					NOT NULL DEFAULT NOW(),
	fechahoramod 	DATETIME 					NULL,
	fechahorabaja DATETIME 					NULL,
	estado				BIT 					NOT NULL DEFAULT 1,
	CONSTRAINT uk_emp_ruc UNIQUE (ruc),
	CONSTRAINT uk_emp_ubigeo FOREIGN KEY (ubigeo) REFERENCES ubigeos (ubigeo)
	-- constraint fk_emp_idusuariocre foreign key (idusuariocre) USUARIOS (idusuario),
	-- CONSTRAINT fk_emp_idusuariomod FOREIGN KEY (idusuariomod) USUARIOS (idusuario),
	-- CONSTRAINT fk_emp_idusuariobaja FOREIGN KEY (idusuariobaja) USUARIOS (idusuario)
)ENGINE = INNODB;




CREATE TABLE USUARIOS
(
	idusuario 		INT AUTO_INCREMENT PRIMARY KEY,
	idempresa 		INT 							NULL,
	tipousuario 	CHAR(2) 			NOT NULL, -- AD(Administrador), MD(Médico), GR(Gerente), EF(Enfermeros)
	usuario				CHAR(30) 			NOT NULL,
	clave 				VARCHAR(100)	NOT NULL,
	idusuariocre  INT 							NULL,
	idusuariomod  INT 							NULL,
	idusuariobaja INT 							NULL,
	fechahoracre 	DATETIME 					NOT NULL DEFAULT NOW(),
	fechahoramod 	DATETIME 					NULL,
	fechahorabaja DATETIME 					NULL,
	estado 				BIT 					NOT NULL DEFAULT 1,
	CONSTRAINT uk_usu_usuario UNIQUE (usuario),
	CONSTRAINT fk_usu_idempresa FOREIGN KEY (idempresa) REFERENCES EMPRESAS (idempresa)
	-- constraint fk_usu_idusuariocre FOREIGN KEY (idusuariocre) USUARIOS (idusuario),
	-- CONSTRAINT fk_usu_idusuariomod FOREIGN KEY (idusuariomod) USUARIOS (idusuario),
	-- CONSTRAINT fk_usu_idusuariobaja FOREIGN KEY (idusuariobaja) USUARIOS (idusuario)
)ENGINE = INNODB;

SELECT * FROM ubigeos;



CREATE TABLE TIPOEXAMENES
(
	idtipoexamen 	INT AUTO_INCREMENT PRIMARY KEY,
	nomtipoexamen VARCHAR(50) NOT NULL,
	estado 				BIT 				NOT NULL DEFAULT 1, -- A = Activo / I = Inactivo
	CONSTRAINT uk_tex_nomtipoexamen UNIQUE (nomtipoexamen)
)ENGINE = INNODB;




CREATE TABLE AREASLABORATORIOS
(
	idarealaboratorio INT AUTO_INCREMENT PRIMARY KEY,
	tipo							CHAR(2)			NOT NULL, -- AR (area), ME (Metodo), MU (Muestra)
	nombrearea				VARCHAR(50) NOT NULL,
	idusuariocre			INT 				NOT NULL,
	fechahoracre			DATETIME 		NOT NULL DEFAULT NOW(),
	idusuariomod			INT 						NULL,
	fechahoramod			DATETIME				NULL,
	estado   					CHAR(1) 		NOT NULL DEFAULT 1,
	CONSTRAINT fk_arl_idusuariocre FOREIGN KEY (idusuariocre) REFERENCES USUARIOS (idusuario),
	CONSTRAINT fk_arl_idusuariomod FOREIGN KEY (idusuariomod) REFERENCES USUARIOS (idusuario)
)ENGINE = INNODB;




CREATE TABLE SEDES
(
	idsede 					INT AUTO_INCREMENT PRIMARY KEY,
	ubigeo					CHAR(6) 			NOT NULL,
	sede						VARCHAR(60) 	NOT NULL,
	direccion 			VARCHAR(100) 	NOT NULL,
	idusuariocre		INT 					NOT NULL,
	fechahoracre		DATETIME 			NOT NULL DEFAULT NOW(),
	idusuariomod		INT 							NULL,
	fechahoramod		DATETIME					NULL,
	CONSTRAINT uk_sed_sede UNIQUE (sede),
	CONSTRAINT fk_sed_idusuariocre FOREIGN KEY (idusuariocre) REFERENCES USUARIOS (idusuario),
	CONSTRAINT fk_sed_idusuariomod FOREIGN KEY (idusuariomod) REFERENCES USUARIOS (idusuario)
)ENGINE = INNODB;




CREATE TABLE SERVICIOS
(
	idservicio 		INT AUTO_INCREMENT PRIMARY KEY,
	idsede				INT 				NOT NULL,
	servicio   		VARCHAR(70) NOT NULL,
	idusuariocre	INT 				NOT NULL,
	fechahoracre	DATETIME 		NOT NULL DEFAULT NOW(),
	idusuariomod	INT 						NULL,
	fechahoramod	DATETIME				NULL,
	idusuariobaja INT 						NULL,
	fechabaja			DATETIME 				NULL,
	estado      	CHAR(1) 		NOT NULL DEFAULT 1,
	CONSTRAINT uk_srv_servicio UNIQUE (idsede, servicio),
	CONSTRAINT fk_srv_idsede FOREIGN KEY (idsede) REFERENCES SEDES (idsede),
	CONSTRAINT fk_srv_idusuariocre FOREIGN KEY (idusuariocre) REFERENCES USUARIOS (idusuario),
	CONSTRAINT fk_srv_idusuariomod FOREIGN KEY (idusuariomod) REFERENCES USUARIOS (idusuario),
	CONSTRAINT fk_srv_idusuariobaja FOREIGN KEY (idusuariobaja) REFERENCES USUARIOS (idusuario)
)ENGINE = INNODB;


CREATE TABLE PRECIOS
(
	idprecio 			INT AUTO_INCREMENT PRIMARY KEY,
	idservicio		INT 					NOT NULL,
	precio				DECIMAL(7,2) 	NOT NULL,
	idusuariocre	INT 					NOT NULL,
	fechahoracre	DATETIME 			NOT NULL DEFAULT NOW(),
	idusuariomod	INT 							NULL,
	fechahoramod	DATETIME					NULL,
	estado     		BIT 					NOT NULL DEFAULT 1,
	CONSTRAINT fk_pre_idservicio FOREIGN KEY (idservicio) REFERENCES SERVICIOS (idservicio),
	CONSTRAINT fk_pre_idusuariocre FOREIGN KEY (idusuariocre) REFERENCES USUARIOS (idusuario),
	CONSTRAINT fk_pre_idusuariomod FOREIGN KEY (idusuariomod) REFERENCES USUARIOS (idusuario)
)ENGINE = INNODB;


CREATE TABLE DETSERVICIOS
(
	iddetservicio INT AUTO_INCREMENT PRIMARY KEY,
	idprotocolo		INT NOT NULL,
	idservicio 		INT NOT NULL,
	CONSTRAINT fk_dsv_idprotocolo FOREIGN KEY idprotocolo REFERENCES PROTOCOLOS (idprotocolo),
	CONSTRAINT fk_dsv_idservicio FOREIGN KEY idservicio REFERENCES SERVICIOS (idservicio)
)ENGINE = INNODB;


CREATE TABLE DESCUENTOS
(
	iddescuento 	INT AUTO_INCREMENT PRIMARY KEY,
	iddetservicio INT 		NOT NULL,
	idcotizacion  INT 		NOT NULL,
	descuento     CHAR(3) 		NULL,
	estado     		CHAR(1) NOT NULL DEFAULT 'A',				
)ENGINE = INNODB;

CREATE TABLE SUBSERVICIOS
(
	idsubservicio 	INT AUTO_INCREMENT PRIMARY KEY,
	idservicio 			INT 				NOT NULL,
	idarea					INT 				NOT NULL,
	idmuestra				INT 				NOT NULL,
	idespecialidad 	INT 				NOT NULL,
	tipo						VARCHAR(50) NOT NULL,
	estado   				CHAR(1) 		NOT NULL DEFAULT 'A',
	CONSTRAINT fk_sbs_idservicio FOREIGN KEY idservicio REFERENCES SERVICIOS (idservicio),
	CONSTRAINT fk_sbs_idarea FOREIGN KEY idarea REFERENCES AREAS (idarea),
	CONSTRAINT fk_sbs_idmuestra FOREIGN KEY idmuestra REFERENCES MUESTRAS (idmuestra),
	CONSTRAINT fk_sbs_idespecialidad FOREIGN KEY idespecialidad REFERENCES ESPECIALIDADES (idespecialidad)
)ENGINE = INNODB;



CREATE TABLE ESPECIALIDADES
(
	idespecialidad 	INT AUTO_INCREMENT PRIMARY KEY,
	especialidad 		VARCHAR(50) 	NOT NULL,
	idusuariocre		INT 					NOT NULL,
	fechahoracre		DATETIME 			NOT NULL DEFAULT NOW(),
	idusuariomod		INT 							NULL,
	fechahoramod		DATETIME					NULL,
	estado 					CHAR(1) 			NOT NULL DEFAULT 1,
	CONSTRAINT fk_esp_idusuariocre FOREIGN KEY (idusuariocre) REFERENCES USUARIOS (idusuario),
	CONSTRAINT fk_esp_idusuariomod FOREIGN KEY (idusuariomod) REFERENCES USUARIOS (idusuario)
)ENGINE = INNODB;



CREATE TABLE DETESPECIALIDADES
(
	iddetespecialidad INT AUTO_INCREMENT PRIMARY KEY,
	idmedico 					INT NOT NULL,
	idespecialidad 		INT NOT NULL,
	CONSTRAINT fk_dte_idmedico FOREIGN KEY (idmedico) REFERENCES MEDICOS (idmedico),
	CONSTRAINT fk_dte_idespecialidad FOREIGN KEY (idespecialidad) REFERENCES ESPECIALIDADES (idespecialidad)
)ENGINE = INNODB;


CREATE TABLE MEDICOS
(
	idmedico 			INT AUTO_INCREMENT PRIMARY KEY,
	idpersona 		INT 					NOT NULL,
	firma					VARCHAR(100) 	 		NULL,
	idusuariocre	INT 					NOT NULL,
	fechahoracre	DATETIME 			NOT NULL DEFAULT NOW(),
	idusuariomod	INT 							NULL,
	fechahoramod	DATETIME					NULL,
	idusuariobaja INT 							NULL,
	fechabaja			DATETIME 					NULL,
	estado      	CHAR(1) 			NOT NULL DEFAULT 1,
	CONSTRAINT fk_med_idpersona FOREIGN KEY (idpersona) REFERENCES PERSONAS (idpersona),
	CONSTRAINT fk_med_idusuariocre FOREIGN KEY (idusuariocre) REFERENCES USUARIOS (idusuario),
	CONSTRAINT fk_med_idusuariomod FOREIGN KEY (idusuariomod) REFERENCES USUARIOS (idusuario),
	CONSTRAINT fk_med_idusuariobaja FOREIGN KEY (idusuariobaja) REFERENCES USUARIOS (idusuario)
)ENGINE = INNODB;

CREATE TABLE EMPLEADOS
(
	idempleado 				INT AUTO_INCREMENT PRIMARY KEY,
	idpersona 				INT 		NOT NULL,
	idpuesto					INT 		NOT NULL,
	idempresa					INT 		NOT NULL,
	canthijos   			TINYINT	NOT NULL,
	cantdependente 		TINYINT 		NULL,
	seguro						CHAR(3) NOT NULL, -- ESA (ESSALUD) - EPS - OTR
	gradoinstruccion 	CHAR(2) NOT NULL, -- PI(Primaria Incompleta) - PC(Primaria completa) - Secundaria ...
	consentinformado 	BIT 				NULL,
	consetdrogas 			BIT 				NULL,
	CONSTRAINT fk_emd_idpersona FOREIGN KEY (idpersona) REFERENCES PERSONAS (idpersona),
	CONSTRAINT fk_emd_idempresa FOREIGN KEY (idempresa) REFERENCES EMPRESAS (idempresa),
	CONSTRAINT fk_emd_idpuesto FOREIGN KEY (idpuesto) REFERENCES PUESTOS (idpuesto)
)ENGINE = INNODB;


CREATE TABLE PUESTOS
(
	idpuesto INT AUTO_INCREMENT PRIMARY KEY,
	puesto 	VARCHAR(70) NOT NULL
)ENGINE = INNODB;

CREATE TABLE DETPROTOCOLOS
(
	iddetprotocolo 	INT AUTO_INCREMENT PRIMARY KEY,
	idempleado   		INT NOT NULL,
	idprotocolo 		INT NOT NULL,
	CONSTRAINT fk_dtp_idempleado FOREIGN KEY (idempleado) REFERENCES EMPLEADOS (idempleado),
	CONSTRAINT fk_dtp_idprotocolo FOREIGN KEY (idprotocolo) REFERENCES PROTOCOLOS (idprotocolo)
)ENGINE = INNODB;


-- CREADA --
CREATE TABLE PROTOCOLOS
(
	idprotocolo 		INT AUTO_INCREMENT PRIMARY KEY,
	idempresa     	INT 				NOT NULL,
	idtipoexamen 		INT 				NOT NULL,
	protocolo 			VARCHAR(70) NOT NULL,
	consinformado 	CHAR(2)					NULL, -- SI - NO
	consdrogas			CHAR(2)			 		NULL, -- SI - NO
	idusuariocre		INT 				NOT NULL,
	fechahoracre		DATETIME 		NOT NULL DEFAULT NOW(),
	idusuariomod		INT 						NULL,
	fechahoramod		DATETIME				NULL,
	estado 					BIT 				NOT NULL DEFAULT 1, -- A = Activo / I = Inactivo
	CONSTRAINT uk_prt_protocolo UNIQUE (idempresa, protocolo),
	CONSTRAINT fk_prt_idempresa FOREIGN KEY (idempresa) REFERENCES EMPRESAS (idempresa),
	CONSTRAINT fk_prt_idtipoexamen FOREIGN KEY (idtipoexamen) REFERENCES TIPOEXAMENES (idtipoexamen),
	CONSTRAINT fk_prt_idusuariocre FOREIGN KEY (idusuariocre) REFERENCES USUARIOS (idusuario),
	CONSTRAINT fk_prt_idusuariomod FOREIGN KEY (idusuariomod) REFERENCES USUARIOS (idusuario)
)ENGINE = INNODB;


CREATE TABLE PATOLOGIA
(
	idpatologia INT AUTO_INCREMENT PRIMARY KEY,
	idatencion  INT NOT NULL,
	idcie				INT NOT NULL,
	CONSTRAINT fk_ptl_idcie FOREIGN KEY (idcie) REFERENCES CIES (idcie)
	CONSTRAINT fk_ptl_idcie FOREIGN KEY (idcie) REFERENCES CIES (idcie)
)ENGINE = INNODB;


CREATE TABLE VALORESNORMALES
(
	idvalornormal INT AUTO_INCREMENT PRIMARY KEY,
	valornormal 	VARCHAR(50) NOT NULL
)ENGINE = INNODB;

CREATE TABLE UNIDADMEDIDAS
(
	idunidadmedida 	INT AUTO_INCREMENT PRIMARY KEY,
	unidad					INT 				NOT NULL,
	abreviatura			VARCHAR(3) 			NULL
)ENGINE = INNODB;


CREATE TABLE COMPONENTES
(
	idcomponente 		INT AUTO_INCREMENT PRIMARY KEY,
	idsubservicio		INT 				NOT NULL,
	idvalornormal 	INT 				NOT NULL,
	idunidadmedida 	INT 				NOT NULL,
	componente			VARCHAR(50) NOT NULL,
	estado   				CHAR(1) 		NOT NULL DEFAULT 'A',
	CONSTRAINT fk_com_idsubservicio FOREIGN KEY (idsubservicio) REFERENCES SUBSERVICIOS (idsubservicio),
	CONSTRAINT fk_com_idvalornormal FOREIGN KEY (idvalornormal) REFERENCES VALORESNORMALES (idvalornormal),
	CONSTRAINT fk_com_idunidadmedida FOREIGN KEY (idunidadmedida) REFERENCES UNIDADMEDIDAS (idunidadmedida)
)ENGINE = INNODB;


CREATE TABLE RESULTADOS
(
	idresultado 	INT AUTO_INCREMENT PRIMARY KEY,
	idcomponente	INT 					NOT NULL,
	resultado			VARCHAR(100) 	NOT NULL,
	CONSTRAINT fk_rsl_idcomponente FOREIGN KEY idcomponente REFERENCES COMPONENTES (idcomponente)
)ENGINE = INNODB;


CREATE TABLE CIES
(
	idcie 					INT AUTO_INCREMENT PRIMARY KEY,
	idespecialidad 	INT 				NOT NULL,
	cie							VARCHAR(10) NOT NULL,
	descripcion 		VARCHAR(50) NOT NULL,
	recomendacion 	TEXT 				NOT NULL,
	fechaalta				DATETIME 		NOT NULL DEFAULT NOW(),
	fechanbaja			DATETIME 				NULL,
	estado   				CHAR(1) 		NOT NULL DEFAULT 'A',
	CONSTRAINT fk_cie_idespecialidad FOREIGN KEY idespecialidad REFERENCES ESPECIALIDADES (idespecialidad)
)ENGINE = INNODB;