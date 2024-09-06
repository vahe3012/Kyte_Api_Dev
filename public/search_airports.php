<?php

// Establish a connection to your MySQL database
$host = '127.0.0.1';
$port = '3340'; // Replace 'your_custom_port' with the port specified in TablePlus
$dbname = 'kyteApi';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection errors
    die("Connection failed: " . $e->getMessage());
}

// Retrieve the search query from the GET parameters
$query = urlencode($_GET['query']) ?? '';



// Prepare and execute the SQL query to search for airports
//$sql = "SELECT name FROM airports WHERE name LIKE :query OR municipality LIKE :query GROUP BY municipality";
//$sql = "SELECT name, municipality FROM airports WHERE name LIKE :query OR municipality LIKE :query GROUP BY name, municipality";

$sql = "SELECT name FROM airports WHERE name LIKE :query OR municipality LIKE :query";

//$sql = "SELECT * FROM airports WHERE municipality LIKE :query GROUP BY municipality";


$stmt = $pdo->prepare('SELECT * FROM airports WHERE name LIKE :query OR municipality LIKE :query');
$stmt->execute(['query' => '%' . $query . '%']);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($results);die();

//$stmt = $pdo->prepare($sql);
//$searchQuery = '%' . $query . '%';
//$stmt->bindValue(':query', $searchQuery, PDO::PARAM_STR);
//$stmt->execute();
//$results = $stmt->fetchAll(PDO::FETCH_COLUMN);

//var_dump(json_encode($results));die();
// Return the results as JSON
header('Content-Type: application/json');
echo json_encode($results);
