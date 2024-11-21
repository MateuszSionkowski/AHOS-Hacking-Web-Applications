
<?php
require __DIR__ . '/../functions.php';

load_header("Guestbook");
?>

<h2 >Stored XSS</h2>
<h3  >Get your code to be permanently added to the website</h3>       
<hr class="divider">
    <style>

        .lab {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            color: #333;
            margin: 0 auto;
            justify-content: center;
            padding-top: 50px;
            width: 80%;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .lab h1 {
            text-align: center;
            color: #2a7ae2;
        }
        .guestbook-entry {
            margin-bottom: 20px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .guestbook-entry p {
            margin: 5px 0;
        }
        .guestbook-entry .name {
            font-weight: bold;
            color: #2a7ae2;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #2a7ae2;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #1a5bb8;
        }
    </style>
</head>
<body>

<div class="lab">
    <h1>Welcome to Hotel Royale Guest Book</h1>

    <!-- Display guestbook entries -->
    <?php
        // Connect to the SQLite database
        $db = new SQLite3('guestbook.db');
        $results = $db->query('SELECT * FROM guestbook ORDER BY date DESC');
        
        while ($row = $results->fetchArray()) {
            echo '<div class="guestbook-entry">';
            echo '<p class="name">' . $row['name'] . '</p>';
            echo '<p class="message">' . $row['message'] . '</p>';
            echo '<p class="date">' . $row['date'] . '</p>';
            echo '</div>';
        }
    ?>

    <!-- Guest book form -->
    <form action="guestbook.php" method="POST">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="message">Your Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Sign Guest Book">
    </form>
</div>

<?php
load_footer();
?>