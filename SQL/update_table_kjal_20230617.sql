ALTER TABLE sipkan.tb_kjal CHANGE potensi potensi1 double NOT NULL;
ALTER TABLE sipkan.tb_kjal ADD potensi2 DOUBLE NULL;
ALTER TABLE tb_kjal  MODIFY potensi2 double AFTER potensi1;
ALTER TABLE sipkan.tb_kjal CHANGE existing existing1 double NOT NULL;
ALTER TABLE sipkan.tb_kjal ADD existing2 DOUBLE NULL;
ALTER TABLE tb_kjal  MODIFY existing2 double AFTER existing1;