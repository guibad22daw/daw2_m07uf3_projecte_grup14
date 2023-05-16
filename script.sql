USE mysql;
CREATE USER 'administrador'@'localhost' IDENTIFIED BY "FjeClot23#";
CREATE DATABASE hotel;
USE hotel;
GRANT ALL PRIVILEGES ON hotel.* to 'administrador'@'localhost';