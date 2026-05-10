-- setup
DROP DATABASE IF EXISTS mord;
CREATE DATABASE mord;

USE mord;

-- Z1
CREATE TABLE mordercy (
    id_morderca INT PRIMARY KEY AUTO_INCREMENT,
    imie VARCHAR(100),
    nazwisko VARCHAR(100),
    pesel BIGINT,
    data_urodzenia DATE,
    czy_skazany BOOL
);

-- Z2
CREATE TABLE wiezienie (
    id_wiezienia INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(100),
    opis TEXT,
    liczba_miejsc INT,
    miasto VARCHAR(200)
);

-- Z3
ALTER TABLE mordercy ADD COLUMN id_wiezienia INT;

-- Z4
ALTER TABLE mordercy ADD CONSTRAINT punique UNIQUE (pesel);
ALTER TABLE wiezienie ADD CHECK (liczba_miejsc > 0);

-- Z5
ALTER TABLE mordercy ADD CONSTRAINT wrel FOREIGN KEY (id_wiezienia) REFERENCES wiezienie(id_wiezienia) ;

-- Z6
INSERT INTO mordercy (imie,nazwisko,pesel,data_urodzenia,czy_skazany) VALUES
    ('Kamil','Kowalski','000000000','1.1.1',FALSE),
    ('Joachim','Kowalskii','000000001','0.1.2',FALSE),
    ('Ania','Kowalska','101000101','1966.9.6',TRUE);

INSERT INTO wiezienie (nazwa,opis,liczba_miejsc,miasto) VALUES 
    ('Alkatras','Najsilniej strzeżone więzienie',4242,'JakieśWStanach'),
    ('Gdański Zakład karny','Piękny z zewnątrz, lepiej nie wiedzieć jak jest w środku',100,'Gdańsk'),
    ('Polski Obóz Koncentracyjny w Sztutowie','Tu kończą się zbrodnie wojenne a rachunek na gaz rośnie',9999,'Sztutow w Polsce');

-- zanim skończe w sadzam jeszcze wiźnia do więzienia
UPDATE mordercy SET id_wiezienia = 1 WHERE ( (imie='Ania') AND (nazwisko='Kowalska') ) ;

-- Z7
SELECT * FROM mordercy;
SELECT * FROM wiezienie;