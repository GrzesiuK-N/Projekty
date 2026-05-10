--setup
DROP DATABASE IF EXISTS gig;
CREATE DATABASE gig;

USE gig;
-- tabelka GATUNKI
CREATE TABLE gatunki(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(100) UNIQUE,
    opis VARCHAR(255) NOT NULL,
    populacja INT,
    CHECK (populacja>=1)
);

INSERT INTO gatunki (nazwa, opis, populacja) VALUES ('draco volans', 'smok latający', 13000);
INSERT INTO gatunki (nazwa, opis, populacja) VALUES ('homo sapiens', 'student', 15);
INSERT INTO gatunki (nazwa, opis, populacja) VALUES ('drosophilia melanogaster', 'muszka owocowa', 2000000);

-- tabela geny
CREATE TABLE geny(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(100),
    sekwencja VARCHAR(100),
    nr_chromosomu INT,
    id_gat INT,
    FOREIGN KEY (id_gat) REFERENCES gatunki(id)
);

INSERT INTO geny (nazwa, sekwencja, nr_chromosomu, id_gat) VALUES ('gen X', 'ACTTGACTG', 12, 2);
INSERT INTO geny (nazwa, sekwencja, nr_chromosomu, id_gat) VALUES ('gen Z', 'CTTGCACTTGACTG', 8, 1);

SELECT * FROM gatunki;
SELECT * FROM geny;