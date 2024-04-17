-----------------------------------------------------------------------
--------------------------- CREATE DATABASE ---------------------------
-----------------------------------------------------------------------

DROP DATABASE IF EXISTS plantsCollection;
CREATE DATABASE plantsCollection;
USE plantsCollection;
                                          
------------------------------------------------------------------------
----------------------------- CREATE TABLE -----------------------------
------------------------------------------------------------------------

CREATE TABLE statePlants (
    id TINYINT UNSIGNED AUTO_INCREMENT,
    name VARCHAR(255),

    CONSTRAINT pk_etatPlants PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE plants (
    id INT UNSIGNED AUTO_INCREMENT,
    latinName VARCHAR(255),
    vernacularName VARCHAR(255),
    nickname VARCHAR(255),
    statePlants TINYINT UNSIGNED,
    obtainedDate DATETIME,
    motherPlant INT UNSIGNED,
    fav boolean,

    CONSTRAINT pk_plants PRIMARY KEY (id),
    CONSTRAINT fk_state FOREIGN KEY (statePlants) REFERENCES statePlants(id),
    CONSTRAINT fk_motherPlant FOREIGN KEY (motherPlant) REFERENCES plants(id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE picture (
    idPlants INT UNSIGNED,
    pictureDate DATETIME,
    title VARCHAR(255),
    description TEXT,
    pictureLink VARCHAR(255),

    CONSTRAINT pk_picture PRIMARY KEY (idPlants, pictureDate),
    CONSTRAINT fk_picture FOREIGN KEY (idPlants) REFERENCES plants(id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE watering (
    idPlants INT UNSIGNED,
    wateringDate DATETIME,

    CONSTRAINT pk_watering PRIMARY KEY (idPlants, wateringDate),
    CONSTRAINT fk_watering FOREIGN KEY (idPlants) REFERENCES plants(id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE observationNote (
    id INT UNSIGNED AUTO_INCREMENT,
    idPlants INT UNSIGNED,
    observationDate DATETIME,
    observation TEXT,

    CONSTRAINT pk_observationNote PRIMARY KEY (id),
    CONSTRAINT fk_note FOREIGN KEY (idPlants) REFERENCES plants(id)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;


---------------------------------------------------------------------
--------------------------- ADD INIT DATA ---------------------------
---------------------------------------------------------------------

INSERT INTO statePlants (name) VALUES ("mother plant");
INSERT INTO statePlants (name) VALUES ("cutting");
INSERT INTO statePlants (name) VALUES ("dead");
INSERT INTO statePlants (name) VALUES ("given plant");