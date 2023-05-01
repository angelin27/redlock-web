CREATE DATABASE redlock;
USE redlock;

CREATE TABLE users
(
    USERID INT PRIMARY KEY,
    NAMA VARCHAR(50) NOT NULL,
    ALAMAT VARCHAR(50) NOT NULL,
    JABATAN VARCHAR (50) NOT NULL
);

INSERT INTO users
VALUES
    (10, 'Angelin Margareta', 'Kemanggisan', 'CEO'),
    (11, 'Yona Debora', 'Tangerang', 'Direktur Utama'),
    (12, 'Amanda', 'Bandung', 'General Manager'),
    (13, 'Pratama', 'Bekasi', 'Karyawan');