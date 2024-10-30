<?php
//// Database connection
//$host = '127.0.0.1';
//$port = '3000'; // Replace 'your_custom_port' with the port specified in TablePlus
//$dbname = 'Kyte_Api';
//$username = 'root';
//$password = '';            // Replace with your DB password
//
//try {
//    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, [
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//    ]);
//
//    // Read JSON file
//    $jsonData = file_get_contents('airports.json');
//    $airports = json_decode($jsonData, true);
//
//    // Prepare SQL statement for inserting data
//    $stmt = $pdo->prepare("
//        INSERT INTO airports (name, city, country, iata_code, latitude, longitude, links_count)
//        VALUES (:name, :city, :country, :iata_code, :latitude, :longitude, :links_count)
//    ");
//
//    // Loop through JSON data and execute inserts
//    foreach ($airports as $airport) {
//        $stmt->execute([
//            ':name' => $airport['name'],
//            ':city' => $airport['city'],
//            ':country' => $airport['country'],
//            ':iata_code' => $airport['iata_code'],
//            ':latitude' => $airport['_geoloc']['lat'],
//            ':longitude' => $airport['_geoloc']['lng'],
//            ':links_count' => $airport['links_count']
//        ]);
//    }
//
//    echo "Data imported successfully!";
//} catch (PDOException $e) {
//    die("Database error: " . $e->getMessage());
//}
//


//$host = '127.0.0.1';  // Or use 'localhost' if it works
//$port = 3304;          // Optional: Set the port explicitly
//$dbname = 'KyteApi';
//$username = 'root';
//$password = '';
//
//try {
//    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $username, $password, [
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//    ]);
//    echo "Database connected successfulldddddddddddy!";
//} catch (PDOException $e) {
//    die("Database connection failed: " . $e->getMessage());
//}


// File paths
$jsonFile = 'airports.json';
$csvFile = 'airports.csv';

// Step 1: Read the JSON file
$jsonData = file_get_contents($jsonFile);

// Step 2: Decode the JSON data into an array
$airports = json_decode($jsonData, true);

if ($airports === null) {
    die("Error decoding JSON: " . json_last_error_msg());
}

// Step 3: Open the CSV file for writing
$csv = fopen($csvFile, 'w');

if (!$csv) {
    die("Failed to open the CSV file for writing.");
}

// Step 4: Write the header row (including 'id')
$header = ['id', 'name', 'city', 'country', 'iata_code', 'lat', 'lng', 'links_count', 'objectID'];
fputcsv($csv, $header);

// Step 5: Write data rows with a generated 'id'
$id = 1; // Start the id from 1
foreach ($airports as $airport) {
    $row = [
        $id++, // Increment id for each row
        $airport['name'],
        $airport['city'],
        $airport['country'],
        $airport['iata_code'],
        $airport['_geoloc']['lat'],
        $airport['_geoloc']['lng'],
        $airport['links_count'],
        $airport['objectID']
    ];
    fputcsv($csv, $row);
}

// Step 6: Close the CSV file
fclose($csv);

echo "CSV file created successfully!";

