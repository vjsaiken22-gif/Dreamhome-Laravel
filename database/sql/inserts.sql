USE dreamhome_db;

-- =========================================
-- BRANCH DATA
-- =========================================

INSERT INTO branch VALUES
('B1', '12 Oxford St', 'Central', 'London', 'W1', '020-1111', NULL),
('B2', '45 King St', 'West', 'Manchester', 'M1', '0161-2222', NULL),
('B3', '163 Main St', 'Partick', 'Glasgow', 'G11 9QX', '0141-339-2178', NULL);

-- =========================================
-- OWNER DATA
-- =========================================

INSERT INTO owner VALUES
('CO46', 'Joe', 'Keogh', '2 Fergus Dr, Aberdeen', '01224-555111'),
('CO87', 'Carol', 'Farrel', '6 Achray Rd, Glasgow', '0141-339-2178'),
('CO40', 'Tina', 'Murphy', '63 South Rd, London', '020-7946-1234');

-- =========================================
-- STAFF DATA
-- =========================================

INSERT INTO staff VALUES
('SL21', 'John', 'White', '19 Taylor Street', '0171-884-5112', 'Male', '1945-10-01', 'WK442011B', 'Manager', 30000, 'B3', '1988-10-24'),

('SL22', 'Ann', 'Beech', '22 Green Rd', '0141-555-1234', 'Female', '1960-05-12', 'AB123456C', 'Supervisor', 20000, 'B3', '1990-06-10'),

('SL23', 'Susan', 'Brand', '5 Hill St', '0141-555-5678', 'Female', '1970-03-22', 'SB654321D', 'Supervisor', 21000, 'B3', '1992-07-15');

-- =========================================
-- NEXT OF KIN DATA
-- =========================================

INSERT INTO next_of_kin VALUES
('SL21', 'Mary White', 'Wife', '19 Taylor Street', '0171-884-5112'),
('SL22', 'Tom Beech', 'Husband', '22 Green Rd', '0141-555-1234'),
('SL23', 'Peter Brand', 'Brother', '5 Hill St', '0141-555-5678');

-- =========================================
-- PROPERTY DATA
-- =========================================

INSERT INTO property VALUES
('PG21', '18 Dale Road', 'Hyndland', 'Glasgow', 'G12', 'House', 5, 600, 'B3', 'SL21', 'CO46'),

('PG22', '6 Lawrence St', 'Partick', 'Glasgow', 'G11', 'Flat', 3, 350, 'B3', 'SL22', 'CO87'),

('PG23', '2 Manor Road', 'West', 'Glasgow', 'G32', 'Flat', 3, 375, 'B3', 'SL23', 'CO40');

-- =========================================
-- RENTER DATA
-- =========================================

INSERT INTO renter VALUES
('CR74', 'Mike', 'Ritchie', '18 Tain Street', '01475-392178', 'House', 750),

('CR75', 'Anna', 'Lee', '45 Park Ave', '01475-123456', 'Flat', 400);

-- =========================================
-- VIEWING DATA
-- =========================================

INSERT INTO viewing
(renter_no, property_no, view_date, comments)
VALUES
('CR74', 'PG21', '1995-02-20', 'Interested but wants lower rent'),

('CR75', 'PG22', '1995-05-15', 'Likes the location'),

('CR74', 'PG23', '1995-03-10', 'Too small');

-- =========================================
-- APPLICATION DATA
-- =========================================

INSERT INTO application
(renter_no, property_no, application_date, status)
VALUES
('CR74', 'PG21', '1995-02-25', 'Approved'),

('CR75', 'PG22', '1995-05-20', 'Pending');

-- =========================================
-- LEASE DATA
-- =========================================

INSERT INTO lease VALUES
('L100', 'PG21', 'CR74', 'SL21', 600, 100, 'Cash', '1995-03-01', '1996-03-01'),

('L101', 'PG22', 'CR75', 'SL22', 350, 80, 'Card', '1995-06-01', '1996-06-01');

-- =========================================
-- INSPECTION DATA
-- =========================================

INSERT INTO inspection
(property_no, staff_no, inspection_date, comments)
VALUES
('PG21', 'SL23', '1995-04-12', 'No problems'),

('PG21', 'SL23', '1995-09-30', 'Cracked ceiling'),

('PG22', 'SL22', '1995-07-01', 'Needs replacement');

-- =========================================
-- ADVERTISEMENT DATA
-- =========================================

INSERT INTO advertisement
(property_no, platform, ad_date)
VALUES
('PG21', 'Glasgow Times', '1995-02-01'),

('PG22', 'Website', '1995-05-01'),

('PG23', 'Facebook', '1995-06-10');