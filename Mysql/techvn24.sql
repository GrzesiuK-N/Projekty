DROP TABLE IF EXISTS artykul;

CREATE TABLE artykul (
    id INT PRIMARY KEY auto_increment,
    tytul VARCHAR(100),
    data_dodania DATETIME,
    autor VARCHAR(100),
    tresc TEXT,
    grafika VARCHAR(250),
)