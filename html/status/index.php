
<?php
require __DIR__ . '/../functions.php';



   // Insert the new comment entry
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Connect to the SQLite database
    $db = new SQLite3('comment.db');

    // Create the table if it doesn't exist
    $db->exec("CREATE TABLE IF NOT EXISTS comment (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT,
    message TEXT,
    date TEXT
    )");



    function removeCharacters($input) {
    // Use str_replace to remove specific characters
    $cleaned = str_replace(["<script>", "</script>"], "", $input);
    return $cleaned;
    }



    #$name = $_POST['name'];
    $name = "status";
    $message = removeCharacters($_POST['message']);
    $date = date('Y-m-d H:i:s');

    // Insert without sanitization, allowing potential XSS
    $stmt = $db->prepare("INSERT INTO comment (name, message, date) VALUES (:name, :message, :date)");
    $stmt->bindValue(':name', $name, SQLITE3_TEXT);
    $stmt->bindValue(':message', $message, SQLITE3_TEXT);
    $stmt->bindValue(':date', $date, SQLITE3_TEXT);
    $stmt->execute();
   }







load_header("Status");
?>

<h2 >XSS with broken server-side validation</h2>
<h3  >Get your code to be permanently added to the website</h3>       
<h3  >The server automatically removes those tags:   &lt;script&gt; and &lt;/script&gt;</h3> 
<hr class="divider">

<style>
    /* Main container styling */
    .lab {
        font-family: Arial, sans-serif;
        background-color: #f5f8fa;
        color: #14171a;
        margin: 0 auto;
        padding: 30px;
        width: 75%;
        max-width: 600px;
        border-radius: 8px;
    }

    /* Header styling */
    .lab h1 {
        text-align: left;
        color: #1da1f2;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    /* Comment entry styling */
    .comment-entry {
        display: flex;
        align-items: flex-start;
        padding: 15px;
        margin-bottom: 15px;
        background-color: #ffffff;
        border: 1px solid #e1e8ed;
        border-radius: 12px;
    }

    .comment-entry img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .comment-entry .content {
        flex: 1;
    }

    .comment-entry .name {
        font-weight: bold;
        color: #1da1f2;
        margin-bottom: 4px;
    }

    .comment-entry .message {
        font-size: 15px;
        color: #14171a;
        line-height: 1.4;
    }

    /* Form styling */
    form {
        margin-top: 25px;
        padding-top: 20px;
        border-top: 1px solid #e1e8ed;
    }

    label {
        display: block;
        font-weight: 600;
        color: #333;
    }

    textarea {
        width: 100%;
    
        margin: 8px 0;
        border: 1px solid #e1e8ed;
        border-radius: 12px;
        font-size: 15px;
        background-color: #ffffff;
        color: #14171a;
        resize: vertical;
    }

    /* Submit button styling */
    input[type="submit"] {
        width: 100%;
        padding: 12px;
        background-color: #1da1f2;
        color: #ffffff;
        font-weight: bold;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        font-size: 15px;
        transition: background-color 0.3s;
        text-transform: capitalize;
    }

    input[type="submit"]:hover {
        background-color: #1a91da;
    }

    /* Error message styling */
    #validate-message {
        color: #c0392b;
        display: none;
        font-size: 13px;
        margin-top: 10px;
    }
    .name {
        font-size: larger;
        padding-right: 15px;
    }
</style>



<script>
        // Define a function to validate the message content
        function validateMessage() {
            const message = document.getElementById("message").value;
            const forbiddenCharacters = /[<>\/\\'";(){}&]/;

            if (forbiddenCharacters.test(message)) {
                document.getElementById("validate-message").style.display="block";
                document.getElementById("message").value="";
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
</script>



<div class="lab">
    <h1>Update Your Status Message</h1>
    <div class="photo-wrapper">

    </div>
    <!-- Display comment entries -->
    <?php
        // Connect to the SQLite database
        $db = new SQLite3('comment.db');
        $results = $db->query('SELECT * FROM comment ORDER BY date DESC limit 1');
        
        while ($row = $results->fetchArray()) {
            echo '<div class="comment-entry">';
            echo '<p class="name">' . '&#127958 ' . '</p>';
            echo '<p class="message">' . $row['message'] . '</p>';

            echo '</div>';
        }
    ?>

    <!-- comment form -->
    <form action="" method="POST" onsubmit="return validateMessage() ">
        
        
        
        
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Update status">
    </form>
    <p id="validate-message" style="color: red; display: none;" >Your status contains forbidden characters: /[<>\'";(){}&] </p>
</div>

<?php
load_footer();
?>