ALTER TABLE sipkan.tb_mnp CHANGE potensi potensi1 double NOT NULL;
ALTER TABLE sipkan.tb_mnp ADD potensi2 DOUBLE NULL;
ALTER TABLE tb_mnp  MODIFY potensi2 double AFTER potensi1;
ALTER TABLE sipkan.tb_mnp CHANGE uk_kolam uk_kolam1 double NOT NULL;
ALTER TABLE sipkan.tb_mnp ADD uk_kolam2 DOUBLE NULL;
ALTER TABLE tb_mnp  MODIFY uk_kolam2 double AFTER uk_kolam1;
ALTER TABLE sipkan.tb_mnp CHANGE existing existing1 double NOT NULL;
ALTER TABLE sipkan.tb_mnp ADD existing2 DOUBLE NULL;
ALTER TABLE tb_mnp  MODIFY existing2 double AFTER existing1;