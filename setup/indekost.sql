-- Matikan cek foreign key dulu
SET FOREIGN_KEY_CHECKS = 0;

-- DROP semua tabel
DROP TABLE IF EXISTS payment;
DROP TABLE IF EXISTS kontrak;
DROP TABLE IF EXISTS penghuni;
DROP TABLE IF EXISTS kamar;
DROP TABLE IF EXISTS gedung;
DROP TABLE IF EXISTS kelasTarif;

-- Nyalakan cek foreign key lagi
SET FOREIGN_KEY_CHECKS = 1;

-- Buat tabel gedung
CREATE TABLE gedung (
    kodeGedung VARCHAR(4) NOT NULL PRIMARY KEY,
    namaGedung VARCHAR(40) NOT NULL,
    alamat TINYTEXT,
    telp VARCHAR(16),
    jmKamar INT UNSIGNED
) ENGINE=InnoDB;

-- Isi tabel gedung
INSERT INTO gedung VALUES
('RK-1','Pondok Duren', 'Jl. Duren No 9','021-1234567',8),
('RK-2','Pondok Salak', 'Jl. Salak No 8','021-1234577',12),
('RK-3','Pondok Jambu', 'Jl. Jambu No 7','021-1234587',14),
('RK-4','Pondok Nanas', 'Jl. Nanas No 6','021-1234597',20),
('RK-5','Pondok Kapas', 'Jl. Kapas No 5','021-1234607',6);

-- Buat tabel kelasTarif
CREATE TABLE kelasTarif (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    namaKelas VARCHAR(20),
    tarif INT(7) DEFAULT 0
) ENGINE=InnoDB;

-- Isi tabel kelasTarif
INSERT INTO kelasTarif (namaKelas, tarif) VALUES
('Apel',500000),
('Pear',750000),
('Kiwi',1000000),
('Duku',1500000);

-- Buat tabel kamar
CREATE TABLE kamar (
    kodeKamar VARCHAR(7) NOT NULL PRIMARY KEY,
    kodeGedung VARCHAR(4) NOT NULL,
    nomorKamar INT UNSIGNED,
    dayaTampung INT UNSIGNED,
    kelasTarif INT UNSIGNED,
    occupancy INT UNSIGNED DEFAULT 0,
    CONSTRAINT fk_kamar_gedung FOREIGN KEY (kodeGedung) REFERENCES gedung(kodeGedung)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    CONSTRAINT fk_kamar_kelasTarif FOREIGN KEY (kelasTarif) REFERENCES kelasTarif(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB;

-- Isi tabel kamar
INSERT INTO kamar VALUES
('RK-1001','RK-1',1,2,1,0),
('RK-1002','RK-1',2,2,1,0),
('RK-1003','RK-1',3,2,1,0),
('RK-1004','RK-1',4,2,1,0),
('RK-1005','RK-1',5,2,1,0),
('RK-1006','RK-1',6,2,1,0),
('RK-1007','RK-1',7,2,1,0),
('RK-1008','RK-1',8,2,1,0),
('RK-2001','RK-2',1,2,1,0),
('RK-2002','RK-2',2,2,1,0),
('RK-2003','RK-2',3,2,1,0),
('RK-2004','RK-2',4,2,1,0),
('RK-2005','RK-2',5,2,1,0),
('RK-2006','RK-2',6,2,1,0),
('RK-2007','RK-2',7,2,1,0),
('RK-2008','RK-2',8,2,1,0),
('RK-2009','RK-2',9,2,1,0),
('RK-2010','RK-2',10,2,1,0),
('RK-2011','RK-2',11,2,1,0),
('RK-2012','RK-2',12,2,1,0),
('RK-3001','RK-3',1,2,1,0),
('RK-3002','RK-3',2,2,1,0),
('RK-3003','RK-3',3,2,1,0),
('RK-3004','RK-3',4,2,1,0),
('RK-3005','RK-3',5,2,1,0),
('RK-3006','RK-3',6,2,1,0),
('RK-3007','RK-3',7,2,1,0),
('RK-3008','RK-3',8,2,1,0),
('RK-3009','RK-3',9,2,1,0),
('RK-3010','RK-3',10,2,1,0),
('RK-3011','RK-3',11,2,1,0),
('RK-3012','RK-3',12,2,1,0),
('RK-3013','RK-3',13,2,1,0),
('RK-3014','RK-3',14,2,1,0),
('RK-4001','RK-4',1,2,1,0),
('RK-4002','RK-4',2,2,1,0),
('RK-4003','RK-4',3,2,1,0),
('RK-4004','RK-4',4,2,1,0),
('RK-4005','RK-4',5,2,1,0),
('RK-4006','RK-4',6,2,1,0),
('RK-4007','RK-4',7,2,1,0),
('RK-4008','RK-4',8,2,1,0),
('RK-4009','RK-4',9,2,1,0),
('RK-4010','RK-4',10,2,1,0),
('RK-4011','RK-4',11,2,1,0),
('RK-4012','RK-4',12,2,1,0),
('RK-4013','RK-4',13,2,1,0),
('RK-4014','RK-4',14,2,1,0),
('RK-4015','RK-4',15,2,1,0),
('RK-4016','RK-4',16,2,1,0),
('RK-4017','RK-4',17,2,1,0),
('RK-4018','RK-4',18,2,1,0),
('RK-4019','RK-4',19,2,1,0),
('RK-4020','RK-4',20,2,1,0),
('RK-5001','RK-5',1,1,1,0),
('RK-5002','RK-5',2,1,1,0),
('RK-5003','RK-5',3,1,1,0),
('RK-5004','RK-5',4,1,1,0),
('RK-5005','RK-5',5,1,1,0),
('RK-5006','RK-5',6,1,1,0);

-- Buat tabel penghuni
CREATE TABLE penghuni (
    nomorKTP VARCHAR(16) PRIMARY KEY,
    namaPenghuni VARCHAR(40),
    jenisKelamin ENUM('Pria', 'Wanita') DEFAULT 'Pria',
    alamatAsal TINYTEXT,
    nomorHP VARCHAR(16)
) ENGINE=InnoDB;

-- Buat tabel kontrak
CREATE TABLE kontrak (
    idKontrak INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tgKontrak DATE,
    nomorKTP VARCHAR(16) NOT NULL,
    kodeKamar VARCHAR(7) NOT NULL,
    periodFrom DATE,
    periodTill DATE,
    tarif INT(7) DEFAULT 0,
    status ENUM('active','inactive') DEFAULT 'active',
    CONSTRAINT fk_kontrak_penghuni FOREIGN KEY (nomorKTP) REFERENCES penghuni(nomorKTP)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    CONSTRAINT fk_kontrak_kamar FOREIGN KEY (kodeKamar) REFERENCES kamar(kodeKamar)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB;

-- Buat tabel payment
CREATE TABLE payment (
    idPayment INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    idKontrak INT(5) UNSIGNED,
    paymentDate DATE,
    nominal INT(7) DEFAULT 0,
    paymentPeriodFrom DATE,
    paymentPeriodTill DATE,
    CONSTRAINT fk_payment_kontrak FOREIGN KEY (idKontrak) REFERENCES kontrak(idKontrak)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB;

-- Buat view viewKamar
CREATE OR REPLACE VIEW viewKamar AS
SELECT 
    kamar.kodeKamar, 
    gedung.namaGedung, 
    kamar.nomorKamar, 
    kelasTarif.namaKelas, 
    kelasTarif.tarif, 
    kamar.dayaTampung
FROM 
    kamar
JOIN gedung ON gedung.kodeGedung = kamar.kodeGedung
JOIN kelasTarif ON kelasTarif.id = kamar.kelasTarif;

-- Buat view viewKontrak
CREATE OR REPLACE VIEW viewKontrak AS
SELECT 
    kontrak.*, 
    penghuni.namaPenghuni, 
    gedung.namaGedung, 
    kamar.nomorKamar
FROM 
    kontrak
JOIN penghuni ON penghuni.nomorKTP = kontrak.nomorKTP
JOIN kamar ON kamar.kodeKamar = kontrak.kodeKamar
JOIN gedung ON gedung.kodeGedung = kamar.kodeGedung;
