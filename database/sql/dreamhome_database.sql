-- =========================================
-- DREAMHOME DATABASE FOR XAMPP / phpMyAdmin
-- =========================================

CREATE DATABASE IF NOT EXISTS dreamhome_db;

USE dreamhome_db;

-- =========================================
-- DROP TABLES
-- =========================================

DROP TABLE IF EXISTS advertisement;
DROP TABLE IF EXISTS inspection;
DROP TABLE IF EXISTS payment;
DROP TABLE IF EXISTS lease;
DROP TABLE IF EXISTS application;
DROP TABLE IF EXISTS viewing;
DROP TABLE IF EXISTS renter;
DROP TABLE IF EXISTS property;
DROP TABLE IF EXISTS next_of_kin;
DROP TABLE IF EXISTS staff;
DROP TABLE IF EXISTS owner;
DROP TABLE IF EXISTS branch;

-- =========================================
-- BRANCH TABLE
-- =========================================

CREATE TABLE branch (
    branch_no VARCHAR(10) PRIMARY KEY,
    street VARCHAR(100),
    area VARCHAR(100),
    city VARCHAR(100),
    postcode VARCHAR(20),
    telephone VARCHAR(30),
    fax VARCHAR(30)
);

-- =========================================
-- OWNER TABLE
-- =========================================

CREATE TABLE owner (
    owner_no VARCHAR(10) PRIMARY KEY,
    fname VARCHAR(50),
    lname VARCHAR(50),
    address VARCHAR(255),
    telephone VARCHAR(30)
);

-- =========================================
-- STAFF TABLE
-- =========================================

CREATE TABLE staff (
    staff_no VARCHAR(10) PRIMARY KEY,
    fname VARCHAR(50),
    lname VARCHAR(50),
    address VARCHAR(255),
    telephone VARCHAR(30),
    sex VARCHAR(10),
    dob DATE,
    nin VARCHAR(50) UNIQUE,
    position VARCHAR(50),
    salary DECIMAL(10,2),
    branch_no VARCHAR(10),
    date_joined DATE,

    FOREIGN KEY (branch_no)
    REFERENCES branch(branch_no)
);

-- =========================================
-- NEXT OF KIN TABLE
-- =========================================

CREATE TABLE next_of_kin (
    staff_no VARCHAR(10) PRIMARY KEY,
    name VARCHAR(100),
    relationship VARCHAR(50),
    address VARCHAR(255),
    telephone VARCHAR(30),

    FOREIGN KEY (staff_no)
    REFERENCES staff(staff_no)
    ON DELETE CASCADE
);

-- =========================================
-- PROPERTY TABLE
-- =========================================

CREATE TABLE property (
    property_no VARCHAR(10) PRIMARY KEY,
    street VARCHAR(100),
    area VARCHAR(100),
    city VARCHAR(100),
    postcode VARCHAR(20),
    type VARCHAR(50),
    rooms INT,
    rent DECIMAL(10,2),

    branch_no VARCHAR(10),
    staff_no VARCHAR(10),
    owner_no VARCHAR(10),

    FOREIGN KEY (branch_no)
    REFERENCES branch(branch_no),

    FOREIGN KEY (staff_no)
    REFERENCES staff(staff_no),

    FOREIGN KEY (owner_no)
    REFERENCES owner(owner_no)
);

-- =========================================
-- RENTER TABLE
-- =========================================

CREATE TABLE renter (
    renter_no VARCHAR(10) PRIMARY KEY,
    fname VARCHAR(50),
    lname VARCHAR(50),
    address VARCHAR(255),
    telephone VARCHAR(30),
    preferred_type VARCHAR(50),
    max_rent DECIMAL(10,2)
);

-- =========================================
-- VIEWING TABLE
-- =========================================

CREATE TABLE viewing (
    viewing_id INT AUTO_INCREMENT PRIMARY KEY,

    renter_no VARCHAR(10),
    property_no VARCHAR(10),

    view_date DATE,
    comments TEXT,

    FOREIGN KEY (renter_no)
    REFERENCES renter(renter_no)
    ON DELETE CASCADE,

    FOREIGN KEY (property_no)
    REFERENCES property(property_no)
    ON DELETE CASCADE
);

-- =========================================
-- APPLICATION TABLE
-- =========================================

CREATE TABLE application (
    application_id INT AUTO_INCREMENT PRIMARY KEY,

    renter_no VARCHAR(10),
    property_no VARCHAR(10),

    application_date DATE,
    status VARCHAR(50),

    FOREIGN KEY (renter_no)
    REFERENCES renter(renter_no),

    FOREIGN KEY (property_no)
    REFERENCES property(property_no)
);

-- =========================================
-- LEASE TABLE
-- =========================================

CREATE TABLE lease (
    lease_no VARCHAR(10) PRIMARY KEY,

    property_no VARCHAR(10),
    renter_no VARCHAR(10),
    staff_no VARCHAR(10),

    rent DECIMAL(10,2),
    deposit DECIMAL(10,2),
    payment_method VARCHAR(50),

    start_date DATE,
    end_date DATE,

    FOREIGN KEY (property_no)
    REFERENCES property(property_no),

    FOREIGN KEY (renter_no)
    REFERENCES renter(renter_no),

    FOREIGN KEY (staff_no)
    REFERENCES staff(staff_no)
);

-- =========================================
-- PAYMENT TABLE
-- =========================================

CREATE TABLE payment (

    payment_id INT AUTO_INCREMENT PRIMARY KEY,

    lease_no VARCHAR(10) NOT NULL,

    payment_date DATE NOT NULL,

    amount DECIMAL(10,2) NOT NULL,

    payment_method VARCHAR(50),

    payment_status VARCHAR(30),

    FOREIGN KEY (lease_no)
    REFERENCES lease(lease_no)
    ON DELETE CASCADE

);

-- =========================================
-- INSPECTION TABLE
-- =========================================

CREATE TABLE inspection (
    inspection_id INT AUTO_INCREMENT PRIMARY KEY,

    property_no VARCHAR(10),
    staff_no VARCHAR(10),

    inspection_date DATE,
    comments TEXT,

    FOREIGN KEY (property_no)
    REFERENCES property(property_no),

    FOREIGN KEY (staff_no)
    REFERENCES staff(staff_no)
);

-- =========================================
-- ADVERTISEMENT TABLE
-- =========================================

CREATE TABLE advertisement (
    ad_id INT AUTO_INCREMENT PRIMARY KEY,

    property_no VARCHAR(10),
    platform VARCHAR(100),
    ad_date DATE,

    FOREIGN KEY (property_no)
    REFERENCES property(property_no)
);