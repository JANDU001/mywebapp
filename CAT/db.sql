CREATE DATABASE IF NOT EXISTS authordb;

USE authordb;

CREATE TABLE IF NOT EXISTS authorstb (
    AuthorId INT AUTO_INCREMENT PRIMARY KEY,
    AuthorFullName VARCHAR(250) NOT NULL,
    AuthorEmail VARCHAR(250) NOT NULL,
    AuthorAddress VARCHAR(250),
    AuthorBiography TEXT,
    AuthorDateOfBirth DATE,
    AuthorSuspended BOOLEAN
);