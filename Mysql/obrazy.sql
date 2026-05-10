-- setup
DROP DATABASE IF EXISTS galeria;
CREATE DATABASE galeria;

USE galeria;
-- Z1
CREATE TABLE obrazy (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tytul VARCHAR(100),
    autor VARCHAR(100),
    data_powstania DATE
);

-- Z2
ALTER TABLE obrazy DROP COLUMN autor;

-- Z3
CREATE TABLE autorzy (
    id_autora INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(100),
    nazwisko VARCHAR(100),
    data_ur DATE
);

-- Z4
ALTER TABLE obrazy ADD COLUMN czy_wypozyczony BOOL;

-- Z5
INSERT INTO obrazy (tytul,data_powstania,czy_wypozyczony) VALUES 
    ('Dotyk jego makarowatości','1984.6.9',FALSE),
    ('The Creation of Mario','2010.6.18',TRUE);

INSERT INTO autorzy (imie,nazwisko,data_ur) VALUES
 ('Micheal','Angelo','1984.4.2'),
 ('Leonardo','Da Vinci','1984.2.4');


-- Z6
SELECT * FROM obrazy;
SELECT * FROM autorzy;