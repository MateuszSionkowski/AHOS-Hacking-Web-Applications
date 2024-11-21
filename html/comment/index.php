
<?php
require __DIR__ . '/../functions.php';

load_header("Comment Section");
?>

<h2 >Challenge: Stored XSS</h2>
<h3  >Get your code to be permanently added to the website</h3>   
<hr class="divider">    
<style>
    /* Container styling */
    .lab {
        font-family: 'Arial', sans-serif;
        background-color: #fafafa;
        color: #333;
        margin: 0 auto;
        width: 100%;
        max-width: 500px;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    /* Header styling */
    .lab h1 {
        text-align: center;
        color: #262626;
        font-size: 24px;
        margin-bottom: 20px;
    }

    /* Comment entry styling */
    .comment-entry {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 1px solid #e0e0e0;
    }

    /* Profile image placeholder */
    .comment-entry .profile-pic {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #d1d1d1;
    }

    /* Comment text area */
    .comment-entry .text-content {
        max-width: 100%;
    }

    .comment-entry p {
        margin: 4px 0;
        font-size: 14px;
    }

    .comment-entry .name {
        font-weight: 600;
        color: #262626;
    }

    .comment-entry .message {
        color: #333;
    }

    .comment-entry .date {
        color: #8e8e8e;
        font-size: 12px;
    }

    /* Form styling */
    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-top: 10px;
        font-weight: 500;
        color: #333;
    }

    input[type="text"], textarea {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border: 1px solid #dbdbdb;
        border-radius: 8px;
        background-color: #fafafa;
        font-size: 14px;
        box-sizing: border-box;
    }

    /* Submit button */
    input[type="submit"] {
        width: 100%;
        padding: 12px;
        background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
        color: #fff;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background: linear-gradient(45deg, #dc2743, #e6683c, #f09433);
    }
    .lab img
    {
        width: 490px;
    }
</style>

<div class="lab">
    <h1>Livin' #healthylife #workhardplayhard</h1>
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
    <form action="comment.php" method="POST">
        
        <input type="hidden" id="name" name="name" required value="Thomas">

        
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Add Comment">
    </form>
</div>

<?php
load_footer();
?>