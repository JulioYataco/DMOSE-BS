

-- --------------------------------------------------------------------------------------- 
--  UBIGEOS 
-- --------------------------------------------------------------------------------------- 
CREATE VIEW vs_ubigeo_full AS 
	SELECT ubigeo, CONCAT(dpto, ' ', prov, ' ', distrito) AS 'text'
		FROM ubigeos ORDER BY 2;
		
