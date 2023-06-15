ALTER TABLE sipkan.tb_ts CHANGE potensi potensi1 double NOT NULL;
ALTER TABLE sipkan.tb_ts ADD potensi2 DOUBLE NULL;
ALTER TABLE tb_ts  MODIFY potensi2 double AFTER potensi1;
ALTER TABLE sipkan.tb_ts CHANGE uk_tambak uk_tambak1 double NOT NULL;
ALTER TABLE sipkan.tb_ts ADD uk_tambak2 DOUBLE NULL;
ALTER TABLE tb_ts  MODIFY uk_tambak2 double AFTER uk_tambak1;
ALTER TABLE sipkan.tb_ts CHANGE existing existing1 double NOT NULL;
ALTER TABLE sipkan.tb_ts ADD existing2 DOUBLE NULL;
ALTER TABLE tb_ts  MODIFY existing2 double AFTER existing1;