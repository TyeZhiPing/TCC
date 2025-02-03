-- Select the database
USE TCCDB;

-- Create the table with a column named 'name'
CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Optional: adds a unique ID column
    name VARCHAR(255) NOT NULL         -- 'name' column to store item names
);

-- Dummy Data
INSERT INTO items (name) VALUES ('Object 1');
INSERT INTO items (name) VALUES ('Object 2');
INSERT INTO items (name) VALUES ('Object 3');
