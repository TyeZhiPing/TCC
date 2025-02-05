-- Select the database
USE TCCDB;

-- Create the table with a column named 'name'
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Optional: adds a unique ID column
    name VARCHAR(255) NOT NULL         -- 'name' column to store item names
);

-- Dummy Data
INSERT INTO products (name) VALUES ('Apple');
INSERT INTO products (name) VALUES ('Banana');
INSERT INTO products (name) VALUES ('Capybara');
