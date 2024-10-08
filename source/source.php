<?php
// Set header type konten.
header("Content-Type: application/json; charset=UTF-8");

// Deklarasi variable untuk koneksi ke database.
$host     = "localhost";    // Server database
$username = "root";         // Username database
$password = "";             // Password database
$database = "singmanfaat"; // Nama database

// Koneksi ke database.
$conn = new mysqli($host, $username, $password, $database);

// Deklarasi variable keyword judul.
$judul = $_GET["query"];

// Query ke database.
$query  = $conn->query("SELECT * FROM artikel WHERE judul LIKE '%$judul%' ORDER BY judul DESC");
$result = $query->fetch_all(MYSQLI_ASSOC);

// Format bentuk data untuk autocomplete.
foreach($result as $data) {
    $output['suggestions'][] = [
        'value' => $data['judul'],
        'judul'  => $data['judul']
    ];
}

if (! empty($output)) {
    // Encode ke format JSON.
    echo json_encode($output);
}
?>