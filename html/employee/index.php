<?php
require __DIR__ . '/../functions.php';






    


    load_header("User Search");
    ?>

    <h2>Challenge: Extracting Data with Union-Based SQL Injection</h2>
    <h3>Get hidden information about employees by Union based SQL Injection</h3> 
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
    #echo "SELECT employeeID FROM employees WHERE employeeID LIKE '%$search%'";
    $query = "SELECT employeeID FROM employees WHERE employeeID LIKE '%$search%'";
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
            $rows[] = $row['employeeID'];
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
        font-family: 'Helvetica Neue', Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9; /* Subtle off-white background */
        color: #333; /* Dark text for readability */
        line-height: 1.6;
    }

    .header {
        background-color: #004080; /* Deep corporate blue */
        color: white;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .header h1 {
        margin: 0;
        font-size: 28px;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .container {
        margin: 40px auto;
        padding: 30px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 700px;
        transition: transform 0.2s ease;
    }

    .container:hover {
        transform: translateY(-3px); /* Subtle hover effect */
    }

    .lab h2 {
        color: #004080;
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    form {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 8px;
        color: #555;
    }

    input[type="text"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
        box-sizing: border-box;
        background-color: #fafafa;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    input[type="text"]:focus {
        border-color: #0073e6; /* Highlight on focus */
        box-shadow: 0 0 5px rgba(0, 115, 230, 0.5);
        outline: none;
    }

    button {
        background-color: #0073e6; /* Corporate blue */
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button:hover {
        background-color: #005bb5;
        transform: translateY(-2px); /* Lift button slightly on hover */
    }

    button:active {
        background-color: #004080;
        transform: translateY(1px); /* Push down on click */
    }

    .message {
        padding: 15px;
        border-radius: 6px;
        font-size: 16px;
        margin-top: 20px;
        text-align: center;
        font-weight: bold;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .error {
        background-color: #d9534f; /* Corporate red for errors */
        color: white;
    }

    .success {
        background-color: #5cb85c; /* Corporate green for success */
        color: white;
    }

    .footer {
        margin-top: 30px;
        text-align: center;
        font-size: 14px;
        color: #777;
    }

    .footer a {
        color: #004080;
        text-decoration: none;
        font-weight: bold;
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
        <h2>Employee Database</h2>
        <p>Find out "who is who" in our organization:</p>
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
##xxxxxxxx' UNION SELECT sql FROM sqlite_master WHERE tbl_name like 'employees
##xxxxxxxx' UNION SELECT concat(employeeID, ' ', firstname, ' ', lastname, ' ', position, ' ' , department,' ', password, ' ', email)  from employees where employeeID like '



?>
