INSERT INTO PERSONAS (apepaterno, apematerno, nombres, fechanac, sexo, estcivil, tipodoc, numdoc, celular, correo, direccion, ubigeodirec, ubigeonac)
	VALUES 	("Vazques", "Fuentes", "Manuel Guillermo", "01/05/2003", "M", "ST", "DNI", "72754737", "987654321", "manuelitotuterror@gmail.com", "Av. 28 de julio", "100201", "100205"),
					("Clinton", "Canchari", "Brick Cueva", "25/01/2000", "M", "ST", "DNI", "75614226", "987654123", "Cuevaclintonmasnaiki@gmail.com", "Av. 29 de julio", "100301", "100206"),
					("Yataco", "Herrera", "Julio Smith", "16/11/2001", "M", "ST", "DNI", "75613162", "987654321", "julioyatacoherrera@gmail.com", "Av. 30 de julio", "100201", "100205");

SELECT * FROM PERSONAS;

-- --------------------------------------------------------------------------------------- 
--  EMPRESAS 
-- --------------------------------------------------------------------------------------- 
INSERT INTO EMPRESAS (empresa, razonsocial, ruc, correo, direccion, ubigeo)
	VALUES 	("Transportes", "Transportes Lino S.A.C", "20145789632", "software@gmail.com", "Av. 28 de julio #397", "100205"),
					("IOT", "IOT", "20236902851", "jfranciaIOT@gmail.com", "Av.Progreso #202", "100204");
					
					
SELECT * FROM EMPRESAS;


-- --------------------------------------------------------------------------------------- 
--  PUESTOS DE TRABAJO 
-- --------------------------------------------------------------------------------------- 
INSERT INTO PUESTOS (puesto)
	VALUES 	("Conductor"),
					("Programador"),
					("Administrador"),
					("Obrero"),
					("Limpieza"),
					("Tecnico electricista");

SELECT * FROM PUESTOS;

-- --------------------------------------------------------------------------------------- 
--  USUARIOS 
-- --------------------------------------------------------------------------------------- 
INSERT INTO USUARIOS (idpersona, tipousuario, usuario, clave) VALUES 
 (2, 'AD', 'Admin', '$2y$10$MPK0MMZdHAt/CInSiGBSq.WuTyL5YQW8UKs90mXvU9Bt4ye0FV.dS');
 
 
SELECT * FROM USUARIOS;






DELIMITER $$
CREATE PROCEDURE spu_registrar_persona
(
	IN _apellidos VARCHAR(35),
	IN _nombres VARCHAR(35)
)
BEGIN 
	INSERT INTO personas (apellidos, nombres) VALUES 
		(_apellidos, _nombres);
		
		
		$persona[0]['id'];
		
		
	SELECT LAST_INSERT_ID() AS id;
END $$



