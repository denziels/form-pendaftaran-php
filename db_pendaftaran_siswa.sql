CREATE TABLE `calon_siswa` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(64) NOT NULL,
  `alamat` TEXT NOT NULL,
  `jenis_kelamin` VARCHAR(16) NOT NULL,
  `agama` VARCHAR(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
