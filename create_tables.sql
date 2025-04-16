-- SQL Query to Create NGOs Table
CREATE TABLE ngos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address TEXT NOT NULL,
    latitude DOUBLE NOT NULL,
    longitude DOUBLE NOT NULL,
    contact VARCHAR(15),
    email VARCHAR(255) NOT NULL
);

-- SQL Query to Create Donations Table
CREATE TABLE donations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    address TEXT NOT NULL,
    ngo_id INT NOT NULL,
    food_type VARCHAR(50) NOT NULL,
    quantity INT NOT NULL,
    fooddate DATETIME NOT NULL,
    note TEXT,
    FOREIGN KEY (ngo_id) REFERENCES ngos(id)
);
