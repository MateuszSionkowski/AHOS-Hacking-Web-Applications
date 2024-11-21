<?php
require __DIR__ . '/../functions.php';



$error_message="";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ( !empty($_GET['student'])) {

        $user = $_GET['student'];
    } 
    $error_message = "Oops! Wrong password. Try again!";
}

$table="";
$name="";
switch ($user)
{
    case "s32501": 
        $table=["A", "B+", "A", "C", "A-"];
        $name="Thomas";
        break;
    case "s32523":
        $table=["C", "C-", "F", "B", "C+"];
        $name="Sue";
        break;
    case "s32555": 
        $table=["D", "D-", "A+", "B-", "A"];
        $name="Greg";
        break;
    case "s32598":
        $table=["C+", "F", "F", "B+", "B+"];
        $name="Greg";
        break;
    case "s32599":
        $table=["B", "C-", "C+", "D", "B-"];
        $name="Jessica";
        break;




}




$page = <<< XXXXXX



<h2 >Challenge: Basic IDOR Exploitation</h2>
<h3 >Find out grades of other students</h3>       
<hr class="divider">

    <style>
        .$user {display: none;}
        .lab {
            font-family: 'Comic Sans MS', sans-serif;
            background-color: #e0f7fa;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .user {
            display: none;
        }
        .lab h1 {
            font-size: 2.8em;
            color: #FF8A65;
            margin-top: 20px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
            gap: 20px;
            padding: 0 20px;
        }
        .column {
            flex: 1;
            max-width: 400px;
            min-width: 250px;
        }
        .grades-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        .grade-card {
            background-color: #FFF176;
            width: 100%;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
        }
        .grade-card:hover {
            transform: scale(1.05);
        }
        .subject {
            font-size: 1.8em;
            color: #4CAF50;
        }
        .grade {
            font-size: 1.5em;
            color: #D32F2F;
            font-weight: bold;
        }
        .class-info, .classmates {
            margin-top: 20px;
        }
        .class-info p {
            font-size: 1.6em;
            color: #4CAF50;
            margin: 10px 0;
        }
        .classmates p {
            font-size: 1.4em;
            color: #FF8A65;
        }
        .classmate-list {
            list-style: none;
            padding: 0;
            font-size: 1.3em;
            color: #333;
        }
        .classmate-list li {
            margin: 5px 0;
        }
    </style>
<div class=lab>
    <h1>Welcome $name, here is your grade book:</h1>

    <div class="container">
        <!-- Left Column: Grades -->
        <div class="column">
            <div class="grades-container">
                <div class="grade-card">
                    <p class="subject">Grammar</p>
                    <p class="grade">Grade: $table[0]</p>
                </div>
                <div class="grade-card">
                    <p class="subject">Vocabulary</p>
                    <p class="grade">Grade: $table[1]</p>
                </div>
                <div class="grade-card">
                    <p class="subject">Reading</p>
                    <p class="grade">Grade: $table[2]</p>
                </div>
                <div class="grade-card">
                    <p class="subject">Listening</p>
                    <p class="grade">Grade: $table[3]</p>
                </div>
                <div class="grade-card">
                    <p class="subject">Speaking</p>
                    <p class="grade">Grade: $table[4]</p>
                </div>
            </div>
        </div>

        <!-- Right Column: Class Info and Classmates -->
        <div class="column">
            <div class="class-info">
                <p>Class Time: Tuesday at 14:00</p>
            </div>
            <div class="classmates">
                <p>My Classmates:</p>
                <ul class="classmate-list">
                    <li class="s32501" >Thomas (s32501)</li>
                    <li class="s32523" >Sue (s32523)</li>
                    <li class="s32555" >Greg (s32555)</li>
                    <li class="s32598" >Greg (s32598)</li>
                    <li class="s32599" >Jessica (s32599)</li>
                </ul>
            </div>
        </div>
    </div>
</div>

XXXXXX;


$error_page = <<< XXXXXX




<h2 >Challenge: Basic IDOR Exploitation</h2>
<h3 >Find out grades of other students</h3>       
<hr class="divider">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Area</title>
    <style>
        /* General Styles */
        .lab  {
            font-family: 'Comic Sans MS', sans-serif;
            background-color: lightgreen;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            
            margin: 0;
        }

        
        /* Style each cell to be 1px by 1px */
        table {
            border-collapse: collapse;
            width: 100%;
            height: 100%;
        }

        td {
            width: 341px;
            height: 256px;
            padding: 0;
            margin: 0;
        }

        .container {
            text-align: center;
            max-width: 1400px;
            
            padding: 20px;
            background-color: darkgreen;
            border: 2px dashed #ff69b4;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .lab h1 {
            font-size: 24px;
            color: gold;
        }

        .lab p {
            font-size: 16px;
            color: white;
        }

        /* Form Styling */
        .password-form {
            margin-top: 15px;
        }

        .password-form input[type="password"] {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ff69b4;
            border-radius: 5px;
            margin: 10px 0;
            background-color: #fff0f5;
        }

        .password-form button {
            width: 50%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background-color: #ff69b4;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .password-form button:hover {
            background-color: #ff4500;
        }

        /* Access denied message */
        .message {
            color: #dc143c;
            margin-top: 15px;
            font-weight: bold;
        }

        /* Fun decorative icons */
        .icon {
            font-size: 50px;
            color: #ff69b4;
            margin-bottom: 10px;
        }
        .table-container p {
            color: white;
            font-size: larger;
            font-weight: bolder;
          }
    </style>

<div class="lab">

<div class="container">
    <h1><h1>
    <h1>Something went wrong.</h1>
  



    <div class="table-container">
 
    </div>

    <!-- Message for incorrect password (example) -->
    <!-- Uncomment this line to display the error message -->
    <p class="message" style="color: #dc143c;"></p>
</div>

</div>



XXXXXX;




if ((($_SERVER['REQUEST_METHOD'] === 'GET') && (in_array($user, ["s32501","s32523","s32555","s32598","s32599"]))) )
{
    load_header("Language School");
    echo($page);
    load_footer();
}
else
{
    load_header("Language School");
    echo($error_page);
    load_footer();

}




?>
