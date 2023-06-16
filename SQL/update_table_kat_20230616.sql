ALTER TABLE sipkan.tb_kat CHANGE potensi potensi1 double NOT NULL;
ALTER TABLE sipkan.tb_kat  ADD potensi2 DOUBLE NULL;
ALTER TABLE tb_kat MODIFY potensi2 double AFTER potensi1;
ALTER TABLE sipkan.tb_kat CHANGE uk_kolam uk_kolam1 double NOT NULL;
ALTER TABLE sipkan.tb_kat ADD uk_kolam2 DOUBLE NULL;
ALTER TABLE tb_kat  MODIFY uk_kolam2 double AFTER uk_kolam1;
ALTER TABLE sipkan.tb_kat CHANGE existing existing1 double NOT NULL;
ALTER TABLE sipkan.tb_kat ADD existing2 DOUBLE NULL;
ALTER TABLE tb_kat  MODIFY existing2 double AFTER existing1;