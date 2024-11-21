<?php
// Create a new SQLite database or open the existing one
$db = new SQLite3('fleet.db');

// Create the 'fleet' table
$db->exec("CREATE TABLE IF NOT EXISTS cars (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    license_plate TEXT NOT NULL
)");

// Check if the table already has data
$count = $db->querySingle("SELECT COUNT(*) FROM fleet");
if ($count == 0) {
    // Insert 45 sample license plates into the 'fleet' table
    $db->exec("INSERT INTO cars (license_plate) VALUES 
        ('ABC123'),
        ('XYZ789'),
        ('CAR456'),
        ('TRUCK001'),
        ('BUS999'),
        ('VAN111'),
        ('CAR678'),
        ('BIKE888'),
        ('AUTO555'),
        ('TAXI333'),
        ('LIMO222'),
        ('TRAILER100'),
        ('SEDAN200'),
        ('SUV300'),
        ('CARGO400'),
        ('ROADSTER500'),
        ('SPORT600'),
        ('HYBRID700'),
        ('ELECTRIC800'),
        ('CLASSIC900'),
        ('MINIVAN123'),
        ('CONVERTIBLE456'),
        ('PICKUP789'),
        ('TOWTRUCK001'),
        ('CAMPER999'),
        ('MOTORCYCLE111'),
        ('SCOOTER222'),
        ('TRACTOR333'),
        ('FORKLIFT444'),
        ('AMBULANCE555'),
        ('FIRETRUCK666'),
        ('POLICE777'),
        ('TANKER888'),
        ('DUMPTRUCK999'),
        ('EXCAVATOR001'),
        ('GRADER002'),
        ('BULLDOZER003'),
        ('CRANE004'),
        ('JETSKI005'),
        ('BOAT006'),
        ('SHIP007'),
        ('PLANE008'),
        ('HELICOPTER009'),
        ('GLIDER010'),
        ('HOVERCRAFT011')
    ");
    echo "Database setup completed with 45 license plates!";
} else {
    echo "Database already populated with $count license plates.";
}
?>

