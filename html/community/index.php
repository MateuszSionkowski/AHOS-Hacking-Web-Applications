
<?php
require __DIR__ . '/../functions.php';

load_header("Community");
?>

<h2 >Challenge: XSS with input validation on the client side</h2>
<h3  >Get your code to be permanently added to the website</h3>       
<h3  >Find a way around the cliend-side validation</h3> 
<hr class="divider">

<style>
    /* Main container styling */
    .lab {
        font-family: Arial, sans-serif;
        background-color: #f5f6f7;
        color: #333;
        margin: 0 auto;
        padding: 30px;
        width: 75%;
        max-width: 700px;
        border: 1px solid #d1d3d4;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.05);
    }

    /* Header styling */
    .lab h1 {
        text-align: left;
        color: #1a2a5d;
        font-size: 26px;
        font-weight: 700;
        border-bottom: 2px solid #1a2a5d;
        padding-bottom: 12px;
        margin-bottom: 20px;
    }

    /* Comment entry styling */
    .comment-entry {
        padding: 15px;
        margin-bottom: 20px;
        background-color: #ffffff;
        border-left: 4px solid #1a2a5d;
        border-top: 1px solid #d1d3d4;
        border-right: 1px solid #d1d3d4;
        border-bottom: 1px solid #d1d3d4;
    }

    .comment-entry p {
        margin: 5px 0;
        font-size: 15px;
        color: #333;
    }

    .comment-entry .name {
        font-weight: 600;
        color: #003366;
    }

    .comment-entry .message {
        font-size: 14px;
        color: #555;
    }

    /* Form styling */
    form {
        margin-top: 25px;
        padding-top: 20px;
        border-top: 1px solid #d1d3d4;
    }

    label {
        display: block;
        margin-top: 15px;
        font-weight: 600;
        color: #333;
    }

    input[type="text"], textarea {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border: 1px solid #ced4da;
        font-size: 15px;
        background-color: #ffffff;
        color: #333;
        box-sizing: border-box;
    }

    /* Submit button styling */
    input[type="submit"] {
        width: 100%;
        padding: 14px;
        background-color: #1a2a5d;
        color: #ffffff;
        font-weight: bold;
        border: none;
        cursor: pointer;
        font-size: 16px;
        text-transform: uppercase;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #16214b;
    }

    /* Image styling */
    .lab img {
        width: 100%;
        border: 1px solid #d1d3d4;
        margin-bottom: 15px;
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
                document.getElementById("validate-message").style.display="block";
                document.getElementById("message").value="";
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
</script>



<div class="lab">
    <h1>7th Street local community</h1>
    <div class="photo-wrapper">
    <img id="photo1" src="photo1.png">
    </div>
    <!-- Display comment entries -->
    <?php
        // Connect to the SQLite database
        $db = new SQLite3('comment.db');
        $results = $db->query('SELECT * FROM comment ORDER BY date DESC');
        
        while ($row = $results->fetchArray()) {
            echo '<div class="comment-entry">';
            echo '<p class="name">' . $row['name'] . '</p>';
            echo '<p class="message">' . $row['message'] . '</p>';

            echo '</div>';
        }
    ?>

    <!-- comment form -->
    <form action="comment.php" method="POST" onsubmit="return validateMessage() ">
        
        <input type="hidden" id="name" name="name" required value="Thomas">

        
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Add Post">
    </form>
    <p id="validate-message" style="color: red; display: none;" >Your message contains forbidden characters: /[<>\'";(){}&] </p>
</div>

<?php
load_footer();
?>