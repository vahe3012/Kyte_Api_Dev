CREATE TABLE Passengers
(
    passenger_id          VARCHAR(10) PRIMARY KEY,
    passenger_type        ENUM ('adult', 'child', 'infant') DEFAULT 'adult',
    first_name            VARCHAR(255),
    middle_name           VARCHAR(255),
    last_name             VARCHAR(255),
    date_of_birth         DATE,
    gender                ENUM ('male', 'female', 'other', 'undisclosed', 'unspecified'),
    title                 ENUM ('mr', 'mrs', 'ms'),
    email                 VARCHAR(255),
    nationality           VARCHAR(10),
    country_of_residence  VARCHAR(10),
    travel_doc_type       ENUM ('passport', 'localId'),
    travel_doc_number     VARCHAR(50),
    travel_doc_issue_date DATE,
    travel_doc_expiry     DATE,
    address_lines         TEXT,
    city                  VARCHAR(255),
    postal_code           VARCHAR(20),
    country_code          VARCHAR(10)
);

CREATE TABLE FrequentFlyer
(
    id           INT AUTO_INCREMENT PRIMARY KEY,
    passenger_id VARCHAR(10),
    airline_code VARCHAR(10),
    number       VARCHAR(50),
    FOREIGN KEY (passenger_id) REFERENCES Passengers (passenger_id)
);

CREATE TABLE Phones
(
    id           INT AUTO_INCREMENT PRIMARY KEY,
    passenger_id VARCHAR(10),
    country_code VARCHAR(10),
    number       VARCHAR(50),
    type         ENUM ('Home', 'Mobile', 'Emergency'),
    FOREIGN KEY (passenger_id) REFERENCES Passengers (passenger_id)
);

CREATE TABLE PassengerAncillaries
(
    id              VARCHAR(10) PRIMARY KEY,
    passenger_id    VARCHAR(10),
    type            ENUM ('bag', 'sportsEquipment', 'meal', 'seat', 'service', 'bundle', 'disabilityAssistance'),
    name            VARCHAR(255),
    status          ENUM ('added', 'removed', 'confirmed', 'ticketed'),
    quantity        INT,
    flight_segments TEXT,
    FOREIGN KEY (passenger_id) REFERENCES Passengers (passenger_id)
);


CREATE TABLE BookFlightResponse
(
    id                VARCHAR(255) PRIMARY KEY,
    status            VARCHAR(20) NOT NULL,
    ticketStatus      VARCHAR(50) NOT NULL,
    totalCost         INT         NOT NULL,
    currentBalance    INT         NOT NULL,
    currency_code     VARCHAR(3)  NOT NULL,
    currency_decimals INT         NOT NULL,
    ticketTimeLimit   DATETIME,
    PRIMARY KEY (id),
    FOREIGN KEY (currency_code) REFERENCES Currency (code)
);

CREATE TABLE Booking
(
    booking_id   INT PRIMARY KEY,
    booking_type VARCHAR(50)    NOT NULL, -- Type of booking (e.g., flight, hotel, activity)
    total_cost   DECIMAL(10, 2) NOT NULL,
    status       VARCHAR(20)    NOT NULL,
    customer_id  INT            NOT NULL, -- Foreign key referencing the customer table
    booking_date DATETIME       NOT NULL,
    -- Add other relevant columns as needed
);

CREATE TABLE Payment
(
    payment_id   INT PRIMARY KEY,
    payment_type VARCHAR(50)    NOT NULL, -- Type of payment (e.g., credit card, cash)
    amount       DECIMAL(10, 2) NOT NULL,
    status       VARCHAR(20)    NOT NULL,
    payment_date DATETIME       NOT NULL,
    customer_id  INT            NOT NULL, -- Foreign key referencing the customer table
    -- Add other relevant columns as needed
);

CREATE TABLE Payment (
                         payment_id INT PRIMARY KEY,
                         booking_id INT NOT NULL, -- Foreign key referencing the booking table
                         payment_type VARCHAR(50)    NOT NULL, -- Type of payment (e.g., credit card, cash)
                         total_amount DECIMAL(10, 2) NOT NULL,
                         status       VARCHAR(20)    NOT NULL,
                         payment_date DATE NOT NULL,
                         payment_method VARCHAR(50) NOT NULL,
                         payment_method_detail VARCHAR(100),
                         authorization_number VARCHAR(100),
                         authorization_timestamp DATETIME,
                         CONSTRAINT fk_booking FOREIGN KEY (booking_id) REFERENCES Booking(booking_id)
);
