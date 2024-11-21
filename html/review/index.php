
<?php
require __DIR__ . '/../functions.php';

load_header("Leave a review");
?>

<h2 >XSS with input validation on the client side</h2>
<h3  >Get your code to be permanently added to the website</h3>       
<h3  >Find a way around the cliend-side validation</h3> 
<hr class="divider">

<style>
    /* Main container styling */
    .lab {
        font-family: Arial, sans-serif;
        background-color: #ffffff;
        color: #111;
        margin: 0 auto;
        justify-content: center;
        padding: 20px;
        width: 80%;
        max-width: 650px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Header styling */
    .lab h1 {
        text-align: left;
        color: #111;
        font-size: 24px;
        font-weight: 700;
        border-bottom: 2px solid #e7e9ec;
        padding-bottom: 10px;
    }

    /* Comment entry styling */
    .comment-entry {
        display: flex;
        flex-direction: column;
        gap: 5px;
        padding: 15px;
        margin-bottom: 15px;
        background-color: #f7f8fa;
        border: 1px solid #e7e9ec;
        border-radius: 4px;
    }

    .comment-entry p {
        margin: 3px 0;
        font-size: 14px;
        color: #333;
    }

    .comment-entry .name {
        font-weight: bold;
        color: #007185; /* Amazon's blue color */
    }

    .comment-entry .date {
        font-size: 12px;
        color: #555;
    }

    /* Form styling */
    form {
        margin-top: 20px;
        padding-top: 15px;
        border-top: 1px solid #e7e9ec;
    }

    label {
        display: block;
        margin-top: 10px;
        font-weight: 600;
        color: #111;
    }

    input[type="text"], textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #d9d9d9;
        border-radius: 4px;
        font-size: 14px;
        background-color: #f7f8fa;
        box-sizing: border-box;
    }

    /* Submit button styled like Amazon's buttons */
    input[type="submit"] {
        width: 100%;
        padding: 12px;
        background-color: #f0c14b;
        color: #111;
        font-weight: bold;
        border: 1px solid #a88734;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #e7b73b;
    }


    .lab img
    {
        width: 640px;
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
    <h1>Leave a review for <b>Pancake 2000</b></h1>
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

        <input type="submit" value="Post Review">
    </form>
    <p id="validate-message" style="color: red; display: none;" >Your message contains forbidden characters: /[<>\'";(){}&] </p>
</div>

<?php
load_footer();
?>