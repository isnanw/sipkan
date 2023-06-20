CREATE TABLE sipkan.tb_anggota (
	id_anggota INT auto_increment NULL,
	nama_anggota varchar(100) NULL,
	jabatan_anggota varchar(100) NULL,
	id_kelompok INT NULL,
	CONSTRAINT tb_anggota_PK PRIMARY KEY (id_anggota)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;