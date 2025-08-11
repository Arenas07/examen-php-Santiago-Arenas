-- Active: 1754048044478@@127.0.0.1@3306@garden
CREATE DATABASE IF NOT EXISTS `garden`;

USE `garden`;

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`)
);

INSERT INTO
    `users` (`name`, `email`, `password`)
VALUES (
        'adrian',
        'adrian@gmail.com',
        SHA2('h3ll0.', 512)
    );

INSERT INTO
    `users` (`name`, `email`, `password`)
VALUES (
        'ana',
        'ana@gmail.com',
        SHA2('h3ll0.', 512)
    );


CREATE TABLE plantas (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    categoria ENUM("cactus", "ornamental", "frutal"),
    familia ENUM("Asphodelaceae", "Lamiaceae", "Rosaceae", "Asparagaceae", "Cactaceae", "Solanaceae", "Orchidaceae", "Moraceae"),
    proximo_riego DATE NULL
);

CREATE TABLE historial_riego (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    planta INT NOT NULL,
    fecha DATE NOT NULL,
    FOREIGN KEY(planta) REFERENCES plantas(id)
);

INSERT INTO plantas (nombre, categoria, familia, proximo_riego) VALUES
("Aloe Vera", "cactus", "Asphodelaceae", "2025-08-21"),
("Lavanda", "ornamental", "Lamiaceae", "2025-08-14"),
("Fresa", "frutal", "Rosaceae", "2025-08-16"),
("Lengua de suegra", "ornamental", "Asparagaceae", "2025-08-14"),
("Nopal", "cactus", "Cactaceae", "2025-08-21"),
("Tomatera", "frutal", "Solanaceae", "2025-08-16"),
("Orquídea", "ornamental", "Orchidaceae", "2025-08-14"),
("Higuera", "frutal", "Moraceae", "2025-08-16"),
("Sansevieria", "ornamental", "Asparagaceae", "2025-08-21"),
("Pitahaya", "cactus", "Cactaceae", "2025-08-21");


