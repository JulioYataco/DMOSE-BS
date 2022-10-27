USE OCUPACIONAL;


-- --------------------------------------------------------------------------------------- 
--  PERSONAS
-- --------------------------------------------------------------------------------------- 
-- LISTAR
DELIMITER $$
CREATE PROCEDURE spu_personas_listar()
BEGIN
	SELECT * FROM PERSONAS;
END $$

-- REGISTRAR
DELIMITER $$
CREATE PROCEDURE spu_personas_registrar 
(
	IN _apepaterno 		VARCHAR(30),
	IN _apematerno 		VARCHAR(30),
	IN _nombres 			VARCHAR(50),
	IN _fechanac 			DATE,
	IN _sexo    			CHAR(1),
	IN _estcivil			CHAR(2),
	IN _tipodoc 			CHAR(2),
	IN _numdoc				VARCHAR(13),
	IN _celular     	CHAR(11),
	IN _correo				VARCHAR(70),
	IN _direccion 		VARCHAR(100),
	IN _ubigeodirec		CHAR(6),
	IN _ubigeonac			CHAR(6)
)
BEGIN
	IF _sexo = '' THEN SET _sexo = NULL; END IF;
	IF _estcivil = '' THEN SET _estcivil = NULL; END IF;
	IF _celular = '' THEN SET _celular = NULL; END IF;
	IF _correo = '' THEN SET _correo = NULL; END IF;
	IF _direccion = '' THEN SET _direccion = NULL; END IF;

INSERT INTO PERSONAS (apepaterno, apematerno, nombres, fechanac, sexo, estcivil, tipodoc, numdoc, celular, correo, direccion, ubigeodirec, ubigeonac)
		VALUES (_apepaterno, _apematerno, _nombres, _fechanac, _sexo, _estcivil, _tipodoc, _numdoc, _celular, _correo, _direccion, _ubigeodirec, _ubigeonac);
		
SELECT LAST_INSERT_ID() AS 'idpersona';
END $$


-- --------------------------------------------------------------------------------------- 
--  EMPLEADOS
-- --------------------------------------------------------------------------------------- 
-- LISTAR
DELIMITER $$
CREATE PROCEDURE spu_empleados_listar()
BEGIN
	SELECT * FROM EMPLEADOS;
END $$

-- PENDIENTE
DELIMITER $$
CREATE PROCEDURE spu_empleados_registrar 
(
	IN _idpersona 				INT,
	IN _idpuesto 					INT,
	IN _idempresa 				INT,
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
END $$
		
-- --------------------------------------------------------------------------------------- 
--  UBIGEOS 
-- --------------------------------------------------------------------------------------- 
DELIMITER $$
CREATE PROCEDURE spu_ubigeos_buscar(IN _valorbuscado VARCHAR(30))
BEGIN
 SELECT * FROM vs_ubigeo_full 
	WHERE vs_ubigeo_full.text LIKE CONCAT('%', _valorbuscado, '%');
END $$


-- --------------------------------------------------------------------------------------- 
--  USUARIOS 
-- --------------------------------------------------------------------------------------- 
DELIMITER $$
CREATE PROCEDURE spu_login_user(IN _usuario VARCHAR(30))
BEGIN
	SELECT * FROM USUARIOS WHERE usuario = _usuario;
END $$


-- --------------------------------------------------------------------------------------- 
--  EMPRESAS 
-- --------------------------------------------------------------------------------------- 
DELIMITER $$
CREATE PROCEDURE spu_empresas_listar_paginacion(
	IN _offset INT,
	IN _limit  TINYINT 
)
BEGIN
	SELECT * FROM EMPRESAS ORDER BY idempresa DESC LIMIT _limit OFFSET _offset;
END $$


-- PENDIENTE
DELIMITER $$
CREATE PROCEDURE spu_empresas_listar_paginacion_buscar(
	IN _search VARCHAR(40),
	IN _offset INT,
	IN _limit  TINYINT 
)
BEGIN
	SELECT* FROM EMPRESAS
		WHERE nombres LIKE CONCAT('%', _search, '%') LIMIT _limit OFFSET _offset;
END $$

-- LISTAR
DELIMITER $$
CREATE PROCEDURE spu_empresas_listar()
BEGIN
	SELECT* FROM EMPRESAS WHERE estado = 1;
END $$

-- REGISTRAR
DELIMITER $$
CREATE PROCEDURE spu_empresas_registrar
(
	IN _empresa				VARCHAR(100),
	IN _razonsocial 	VARCHAR(100),
	IN _ruc 					CHAR(11),
	IN _correo 				VARCHAR(100),
	IN _direccion 		VARCHAR(100),
	IN _ubigeo 				CHAR(6),
	IN _acteconomica  TINYTEXT,
	IN _idusuariocre  INT 			
)
BEGIN
	INSERT INTO EMPRESAS (empresa, razonsocial, ruc, correo, direccion, ubigeo, acteconomica, idusuariocre)
		VALUES(_empresa, _razonsocial, _ruc, _correo, _direccion, _ubigeo, _acteconomica, _idusuariocre);
END $$

-- TIPO DE EXAMEN --
------------------------------------------------------------------------

-- LISTAR
DELIMITER $$
CREATE PROCEDURE spu_tipoexamenes_listar()
BEGIN
	SELECT * FROM TIPOEXAMENES WHERE estado = 1;
END $$

-- REGISTRAR
DELIMITER $$
CREATE PROCEDURE spu_tipoexamenes_registrar (IN _nomtipoexamen VARCHAR(50))
BEGIN
	INSERT INTO TIPOEXAMENES (nomtipoexamen) VALUES (_nomtipoexamen);
END $$

-- ELIMINAR
DELIMITER $$
CREATE PROCEDURE spu_tipoexamenes_eliminar (IN _idtipoexamen INT)
BEGIN
	UPDATE TIPOEXAMENES SET 
		estado = 0
		WHERE idtipoexamen = _idtipoexamen;
END $$

-- LISTAR POR ID
DELIMITER $$
CREATE PROCEDURE spu_tipoexamenes_onedata_listar(IN _idtipoexamen INT)
BEGIN
	SELECT * FROM TIPOEXAMENES 
		WHERE idtipoexamen = _idtipoexamen AND estado = 1;
END $$

-- MODIFICAR
DELIMITER $$
CREATE PROCEDURE spu_tipoexamenes_modificar 
(
	IN _idtipoexamen INT,
	IN _nomtipoexamen VARCHAR(50)
)
BEGIN
	UPDATE TIPOEXAMENES SET 
		nomtipoexamen = _nomtipoexamen
		WHERE idtipoexamen = _idtipoexamen;
END $$

-- TIPO DE AREA --
-- ----------------------------------------------------------------------

-- LISTAR
DELIMITER $$
CREATE PROCEDURE spu_areaslaboratorio_area_listar()
BEGIN
	SELECT * FROM AREASLABORATORIOS WHERE estado = 'A';
END $$

-- REGISTRAR
DELIMITER $$
CREATE PROCEDURE spu_areaslaboratorio_registrar 
(
	IN _tipo CHAR(2),
	IN _nombrearea VARCHAR(50),
	IN _idusuariocre INT
)
BEGIN
	INSERT INTO TIPOEXAMENES (tipo, nombrearea, idusuariocre) 
		VALUES (_tipo, _nombrearea, _idusuariocre);
END $$

-- ELIMINAR
DELIMITER $$
CREATE PROCEDURE spu_areaslaboratorio_eliminar (IN _idarealaboratorio INT)
BEGIN
	UPDATE AREASLABORATORIOS SET 
		estado = 'I'
		WHERE idarealaboratorio = _idarealaboratorio;
END $$

-- LISTAR POR ID
DELIMITER $$
CREATE PROCEDURE spu_areaslaboratorio_onedata_listar(IN _idarealaboratorio INT)
BEGIN
	SELECT * FROM AREASLABORATORIOS 
		WHERE idarealaboratorio = _idarealaboratorio AND estado = 'A';
END $$

-- MODIFICAR
DELIMITER $$
CREATE PROCEDURE spu_areaslaboratorio_modificar 
(
	IN _idarealaboratorio INT,
	IN _tipo CHAR(2),
	IN _nombrearea VARCHAR(50),
	IN _idusuariomod INT
)
BEGIN
	UPDATE AREASLABORATORIOS SET 
		tipo 					= _tipo,
		nombrearea 		= _nombrearea,
		idusuariomod 	= _idusuariomod,
		fechahoramod 	= NOW()
		WHERE idarealaboratorio = _idarealaboratorio;
END $$


-- FICHA MEDICA --
-- ----------------------------------------------------------------------

-- LISTAR
DELIMITER $$
CREATE PROCEDURE spu_fichasmedicas_listar()
BEGIN
	SELECT * FROM FICHASMEDICAS WHERE estado = 1;
END $$

-- REGISTRAR
DELIMITER $$
CREATE PROCEDURE spu_fichasmedicas_registrar 
(
	IN _nomfichamedica VARCHAR(70),
	IN _idusuariocre INT
)
BEGIN
	INSERT INTO FICHASMEDICAS (nomfichamedica, idusuariocre) 
		VALUES (_nomfichamedica, _idusuariocre);
END $$


-- LISTAR POR ID
DELIMITER $$
CREATE PROCEDURE spu_fichasmedicas_onedata_listar(IN _idfichamedica INT)
BEGIN
	SELECT * FROM FICHASMEDICAS 
		WHERE idfichamedica = _idfichamedica AND estado = 1;
END $$

-- MODIFICAR
DELIMITER $$
CREATE PROCEDURE spu_fichasmedicas_modificar 
(
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
END $$



-- SUBSERVICIO --
-- ----------------------------------------------------------------------

-- LISTAR
DELIMITER $$
CREATE PROCEDURE spu_subservicio_listar()
BEGIN
	SELECT * FROM SUBSERVICIOS WHERE estado = 1;
END $$

-- REGISTRAR
DELIMITER $$
CREATE PROCEDURE spu_subservicio_registrar 
(
	IN _idservicio				INT,
	IN _nomsubservicio 		VARCHAR(70),
	IN _tipo 							CHAR(2),
	IN _idespecialidad 		INT,
	IN _idarea						INT,
	IN _idmetodo					INT,
	IN _idmuestra					INT,
	IN _idfichamedica 		INT,
	IN _idusuariocre 			INT
	
)
BEGIN
	IF _idarea = '' THEN SET _idarea = NULL; END IF;
	IF _idmetodo = '' THEN SET _idmetodo = NULL; END IF;
	IF _idmuestra = '' THEN SET _idmuestra = NULL; END IF;
	IF _idfichamedica = '' THEN SET _idfichamedica = NULL; END IF;
	
	INSERT INTO SUBSERVICIOS (idservicio, nomsubservicio, tipo, idespecialidad, idarea, idmetodo, idmuestra, idfichamedica, idusuariocre) 
		VALUES (_idservicio, _nomsubservicio, _tipo, _idespecialidad, _idarea, _idmetodo, _idmuestra, _idfichamedica, _idusuariocre);
END $$


-- LISTAR POR ID
DELIMITER $$
CREATE PROCEDURE spu_subservicios_onedata_listar(IN _idsubservicio INT)
BEGIN
	SELECT * FROM SUBSERVICIOS 
		WHERE idsubservicio = _idsubservicio AND estado = 1;
END $$

-- MODIFICAR
DELIMITER $$
CREATE PROCEDURE spu_subservicio_modificar 
(
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
END $$


-- UNIDADES DE MEDIDAS --
-- ----------------------------------------------------------------------

DELIMITER $$
CREATE PROCEDURE spu_unidadmedida_listar()
BEGIN
	SELECT * FROM UNIDADMEDIDAS;
END $$

-- COMPONENTES --
-- ----------------------------------------------------------------------

-- LISTAR
DELIMITER $$
CREATE PROCEDURE spu_componentes_listar()
BEGIN
	SELECT * FROM COMPONENTES WHERE estado = 1;
END $$

-- REGISTRAR
DELIMITER $$
CREATE PROCEDURE spu_componentes_registrar 
(
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
END $$


-- LISTAR POR ID
DELIMITER $$
CREATE PROCEDURE spu_comando_onedata_listar(IN _idsubservicio INT)
BEGIN
	SELECT * FROM SUBSERVICIOS 
		WHERE idsubservicio = _idsubservicio AND estado = 1;
END $$

-- MODIFICAR
DELIMITER $$
CREATE PROCEDURE spu_subservicio_modificar 
(
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
END $$



-- PROTOCOLO --
-- ---------------------------------------------------------------------

-- LISTAR
DELIMITER $$
CREATE PROCEDURE spu_protocolos_listar()
BEGIN
	SELECT * FROM PROTOCOLOS WHERE estado = 1;
END $$

-- REGISTRAR
DELIMITER $$
CREATE PROCEDURE spu_protocolos_registrar 
(
	IN _idempresa				INT,
	IN _idtipoexamen 		INT,
	IN _protocolo 			VARCHAR(70),
	IN _consinformado 	CHAR(2),
	IN _consdrogas			CHAR(2),
	IN _idusuariocre 		INT
)
BEGIN
	IF _consinformado = '' THEN SET _consinformado = NULL; END IF;
	IF _consdrogas = '' THEN SET _consdrogas = NULL; END IF;

	
INSERT INTO PROTOCOLOS (idempresa, idtipoexamen, protocolo, consinformado, consdrogas, idusuariocre)
		VALUES (_idempresa, _idtipoexamen, _protocolo, _consinformado, _consdrogas, _idusuariocre);
END $$

-- LISTAR POR ID
DELIMITER $$
CREATE PROCEDURE spu_protocolo_onedata_listar(IN _idprotocolo INT)
BEGIN
	SELECT * FROM PROTOCOLOS 
		WHERE idprotocolo = _idprotocolo AND estado = 1;
END $$

-- MODIFICAR
DELIMITER $$
CREATE PROCEDURE spu_protocolos_modificar 
(
	IN _idprotocolo 		INT,
	IN _idempresa				INT,
	IN _idtipoexamen 		INT,
	IN _protocolo 			VARCHAR(70),
	IN _consinformado 	CHAR(2),
	IN _consdrogas			CHAR(2),
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
END $$

-- SERVICIO --
-- ----------------------------------------------------------------------

SELECT * FROM SERVICIOS WHERE estado = 1;

-- REGISTRAR
DELIMITER $$
CREATE PROCEDURE spu_servicios_registrar 
(
	IN _idsede 				INT,
	IN _tipoarea 			CHAR(2),
	IN _servicio 			VARCHAR(70),
	IN _idusuariocre 	INT
)
BEGIN
INSERT INTO SERVICIOS (idsede, tipoarea, servicio, idusuariocre)
		VALUES (_idsede, _tipoarea, _servicio, _idusuariocre);
		
SELECT LAST_INSERT_ID() AS 'idservicio';  
END $$


-- PRECIOS --
-- ----------------------------------------------------------------------

-- LISTAR
DELIMITER $$
CREATE PROCEDURE spu_precios_listar()
BEGIN
	SELECT SRV.idservicio, SRV.servicio, PRE.precio, SRV.idusuariocre,
					SRV.fechahoracre, SRV.idusuariomod, SRV.fechahoramod
	FROM PRECIOS PRE
	INNER JOIN SERVICIOS SRV ON SRV.idservicio = PRE.idservicio
	WHERE SRV.estado = 1;
END $$

-- REGISTRAR
DELIMITER $$
CREATE PROCEDURE spu_precios_registrar 
(
	IN _idservicio		INT,
	IN _precio 				CHAR(2),
	IN _idusuariocre 	INT
)
BEGIN
INSERT INTO PRECIOS (idservicio, precio, idusuariocre)
		VALUES (_idservicio, _precio, _idusuariocre);
END $$
 