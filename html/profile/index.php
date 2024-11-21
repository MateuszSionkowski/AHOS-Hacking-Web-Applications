
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
    $name = "Work Title";
    $message = removeCharacters($_POST['message']);
    $date = date('Y-m-d H:i:s');

    // Insert without sanitization, allowing potential XSS
    $stmt = $db->prepare("INSERT INTO comment (name, message, date) VALUES (:name, :message, :date)");
    $stmt->bindValue(':name', $name, SQLITE3_TEXT);
    $stmt->bindValue(':message', $message, SQLITE3_TEXT);
    $stmt->bindValue(':date', $date, SQLITE3_TEXT);
    $stmt->execute();
   }







load_header("Edit: Job Title");
?>

<h2 >Challenge: XSS with broken server-side validation</h2>
<h3  >Get your code to be permanently added to the website</h3>       
<h3  >The server automatically removes those tags:   &lt;video&gt;, &lt;/video&gt;, &lt;audio&gt;, &lt;/audio&gt;,   &lt;script&gt; and &lt;/script&gt;</h3> 
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
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    /* Header styling */
    .lab h1 {
        text-align: left;
        color: #1da1f2;
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    /* Profile section styling */
    .profile-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .profile-header img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-right: 15px;
        border: 2px solid #1da1f2;
    }

    .profile-header .name {
        font-size: 24px;
        font-weight: bold;
        color: #14171a;
    }

    .profile-header .job-title {
        font-size: 18px;
        color: #657786;
    }

    /* Status update styling */
    .status-update {
        background-color: #ffffff;
        border: 1px solid #e1e8ed;
        border-radius: 12px;
        padding: 15px;
        margin-bottom: 20px;
    }

    .status-update p {
        margin: 0;
        color: #14171a;
    }

    /* Form styling */
    form {
        margin-top: 25px;
        padding-top: 20px;
        border-top: 1px solid #e1e8ed;
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
</style>

<script>
    // Define a function to validate the message content
    function validateMessage() {
        const message = document.getElementById("message").value;
        const forbiddenCharacters = /[<>\/\\'";(){}&]/;

        if (forbiddenCharacters.test(message)) {
            document.getElementById("validate-message").style.display = "block";
            document.getElementById("message").value = "";
            return false; // Prevent form submission
        }
        return true; // Allow form submission
    }
</script>

<div class="lab">
    <h1>Edit: Job Title</h1>
    <div class="profile-header">
        <img src="photo1.png" alt="Attendant Photo">
        <div>
            <p class="name">Thomas Johnson</p>
            
            <?php
            // Connect to the SQLite database
            $db = new SQLite3('comment.db');
            $results = $db->query('SELECT * FROM comment ORDER BY date DESC LIMIT 1');

            while ($row = $results->fetchArray()) {
                echo '<p class="job-title">' . $row['message'] . '</p>';
            }
        ?>
        </div>
    </div>



    <!-- comment form -->
    <form action="" method="POST" onsubmit="return validateMessage() ">
        <textarea id="message" name="message" rows="4" placeholder="Update your job title" required></textarea>
        <input type="submit" value="Update Job Title">
    </form>
    <p id="validate-message" style="color: red; display: none;">Your job title contains forbidden characters: /[<>\'";(){}&] </p>
</div>


<?php
load_footer();
?>