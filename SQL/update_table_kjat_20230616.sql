ALTER TABLE sipkan.tb_kjat CHANGE potensi potensi1 double NOT NULL;
ALTER TABLE sipkan.tb_kjat  ADD potensi2 DOUBLE NULL;
ALTER TABLE tb_kjat MODIFY potensi2 double AFTER potensi1;
ALTER TABLE sipkan.tb_kjat CHANGE existing existing1 double NOT NULL;
ALTER TABLE sipkan.tb_kjat ADD existing2 DOUBLE NULL;
ALTER TABLE tb_kjat MODIFY existing2 double AFTER existing1;