CREATE TABLE sipkan.tb_kelompok (
	id INT auto_increment NULL,
	nama_kelompok varchar(100) NULL,
	lokasi varchar(100) NULL,
	distrik varchar(100) NULL,
	kampung varchar(100) NULL,
	jenis_hasil_produksi INT NULL,
	keterangan varchar(255) NULL,
	CONSTRAINT tb_kelompok_PK PRIMARY KEY (id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;
