CREATE TABLE airports
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(255) NOT NULL,
    city        VARCHAR(100) NOT NULL,
    country     VARCHAR(100) NOT NULL,
    iata_code   CHAR(3)      NOT NULL UNIQUE,
#     latitude    DECIMAL(10, 7),
#     longitude   DECIMAL(10, 7),
#     links_count INT,
    created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_city_country (city, country)
);

CREATE TABLE flights
(
    id                   INT AUTO_INCREMENT PRIMARY KEY,
    flight_number        VARCHAR(50)                           NOT NULL,
    departure_airport_id INT                                   NOT NULL,
    arrival_airport_id   INT                                   NOT NULL,
    departure_time       DATETIME                              NOT NULL,
    arrival_time         DATETIME                              NOT NULL,
    cabin_class          ENUM ('economy', 'business', 'first') NOT NULL,
    price                DECIMAL(10, 2)                        NOT NULL,
    created_at           TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    -- Foreign Key Constraints
    FOREIGN KEY (departure_airport_id) REFERENCES airports (id) ON DELETE CASCADE,
    FOREIGN KEY (arrival_airport_id) REFERENCES airports (id) ON DELETE CASCADE,

    -- Indexes for Performance
    INDEX idx_flight_number (flight_number),
    INDEX idx_departure_time (departure_airport_id, departure_time)
);

CREATE TABLE users
(
    id             INT AUTO_INCREMENT PRIMARY KEY,
    name           VARCHAR(100) NOT NULL,
    email          VARCHAR(255) NOT NULL UNIQUE,
    password_hash  VARCHAR(255) NOT NULL,
    role           ENUM ('admin', 'customer') DEFAULT 'customer',
    loyalty_points INT                        DEFAULT 0,
    created_at     TIMESTAMP                  DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_loyalty_points (loyalty_points)
);

CREATE TABLE passengers
(
    id                    INT AUTO_INCREMENT PRIMARY KEY,
    first_name            VARCHAR(100)                     NOT NULL,
    last_name             VARCHAR(100)                     NOT NULL,
    gender                ENUM ('male', 'female', 'other') NOT NULL,
    date_of_birth         DATE                             NOT NULL,
    passport_number       VARCHAR(20)                      NOT NULL,
    frequent_flyer_number VARCHAR(30),
    user_id               INT,
    created_at            TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE SET NULL,
    INDEX idx_passenger_name (first_name, last_name),
    INDEX idx_frequent_flyer (frequent_flyer_number)
);

CREATE TABLE bookings
(
    id                INT AUTO_INCREMENT PRIMARY KEY,
    user_id           INT            NOT NULL,
    flight_id         INT            NOT NULL,
    booking_reference VARCHAR(50) UNIQUE,
    status            ENUM ('pending', 'confirmed', 'cancelled') DEFAULT 'pending',
    total_price       DECIMAL(10, 2) NOT NULL,
    booked_at         TIMESTAMP                                  DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users (id),
    FOREIGN KEY (flight_id) REFERENCES flights (id),
    INDEX idx_user_flight (user_id, flight_id),
    INDEX idx_status (status)
);

CREATE TABLE booking_passengers
(
    booking_id   INT NOT NULL,
    passenger_id INT NOT NULL,
    seat_number  VARCHAR(10),
    PRIMARY KEY (booking_id, passenger_id),
    FOREIGN KEY (booking_id) REFERENCES bookings (id) ON DELETE CASCADE,
    FOREIGN KEY (passenger_id) REFERENCES passengers (id) ON DELETE CASCADE,
    INDEX idx_booking_seat (booking_id, seat_number)
);

CREATE TABLE payments
(
    id             INT AUTO_INCREMENT PRIMARY KEY,
    booking_id     INT            NOT NULL,
    payment_status ENUM ('pending', 'completed', 'failed') DEFAULT 'pending',
    amount         DECIMAL(10, 2) NOT NULL,
    payment_date   TIMESTAMP                               DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (booking_id) REFERENCES bookings (id),
    INDEX idx_payment_status (payment_status)
);


CREATE TABLE seats
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    flight_id   INT                                   NOT NULL,
    seat_number VARCHAR(10)                           NOT NULL,
    cabin_class ENUM ('economy', 'business', 'first') NOT NULL,
    is_reserved BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (flight_id) REFERENCES flights (id) ON DELETE CASCADE,
    UNIQUE (flight_id, seat_number),
    INDEX idx_flight_reserved (flight_id, is_reserved)
);

CREATE TABLE frequent_flyers
(
    id                    INT AUTO_INCREMENT PRIMARY KEY,
    passenger_id          INT          NOT NULL,
    program_name          VARCHAR(100) NOT NULL,
    frequent_flyer_number VARCHAR(30)  NOT NULL UNIQUE,
    miles_earned          INT                                           DEFAULT 0,
    status                ENUM ('bronze', 'silver', 'gold', 'platinum') DEFAULT 'bronze',
    created_at            TIMESTAMP                                     DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (passenger_id) REFERENCES passengers (id) ON DELETE CASCADE,
    INDEX idx_miles_status (miles_earned, status)
);


CREATE TABLE loyalty_rewards
(
    id            INT AUTO_INCREMENT PRIMARY KEY,
    user_id       INT NOT NULL,
    points_earned INT NOT NULL,
    description   VARCHAR(255),
    earned_at     TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE,
    INDEX idx_user_points (user_id, points_earned)
);

CREATE TABLE ancillaries
(
    id           INT AUTO_INCREMENT PRIMARY KEY,
    booking_id   INT                                                      NOT NULL, -- Foreign key to bookings table
    service_type ENUM ('seat', 'baggage', 'meal', 'disabilityAssistance') NOT NULL,
    pax_id       INT                                                      NOT NULL, -- Passenger ID
    segment_id   INT                                                      NOT NULL, -- Segment ID for the service
    service_id   INT                                                      NOT NULL, -- Service ID from the GoKite API
    status       ENUM ('added', 'removed') DEFAULT 'added',
    created_at   TIMESTAMP                 DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (booking_id) REFERENCES bookings (id) ON DELETE CASCADE,
    FOREIGN KEY (pax_id) REFERENCES passengers (id) ON DELETE CASCADE,
    INDEX idx_booking_service (booking_id, service_type)
);

CREATE TABLE tickets
(
    id                  INT AUTO_INCREMENT PRIMARY KEY,
    booking_id          INT                                   NOT NULL, -- Foreign key to bookings table
    flight_number       VARCHAR(20)                           NOT NULL,
    departure_time      DATETIME                              NOT NULL,
    arrival_time        DATETIME                              NOT NULL,
    origin_airport      VARCHAR(10)                           NOT NULL, -- IATA code
    destination_airport VARCHAR(10)                           NOT NULL, -- IATA code
    cabin_class         ENUM ('Economy', 'Business', 'First') NOT NULL,
    price               DECIMAL(10, 2)                        NOT NULL,
    baggage_allowance   VARCHAR(100),                                   -- e.g., "1 checked bag up to 23kg"
    seat_assignment     VARCHAR(10),                                    -- e.g., "12A"
#     meal_preference     VARCHAR(50),                                    -- e.g., "Vegetarian"
    ancillaries         JSON,                                           -- Additional services as JSON
    status              ENUM ('Confirmed', 'Cancelled') DEFAULT 'Confirmed',
    created_at          TIMESTAMP                       DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (booking_id) REFERENCES bookings (id) ON DELETE CASCADE,
    INDEX idx_booking_flight (booking_id, flight_number)
);



