<?php
require __DIR__ . '/../functions.php';

$contents="";
$found=false;
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $style=" style='display: block'";

}




$page = <<< XXXXXX



<h2 >Challenge: Basic Reflected XSS</h2>
<h3  >Get your code to run in the browser window. Achieve an alert(document.domain) execution.</h3>       
<hr class="divider">




    <style>
        .lab {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa; /* Light cyan */
            color: #003366; /* Dark blue */
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .lab h1 {
            color: #0066cc; /* Blue */
            margin-bottom: 20px;
        }
        .search-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #b3e0ff; /* Light blue */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            width: 300px;
        }
        .search-container input[type="text"] {
            width: 80%;
            padding: 10px;
            border: 2px solid #0066cc; /* Blue */
            border-radius: 5px;
            margin-bottom: 10px;
            outline: none;
            font-size: 16px;
        }
        .search-container input[type="submit"] {
            background-color: #0066cc; /* Blue */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .search-container input[type="submit"]:hover {
            background-color: #005bb5; /* Darker blue */
        }
        .error-message {
            margin-top: 20px;
            color: #d32f2f; /* Red */
            font-size: 18px;
            display: none; /* Initially hidden */
        }
    </style>

<div class="lab">
<h1>RepairsOnCall Employee Search</h1>

<div class="search-container">
    <form id="searchForm" method="GET" action="">
        <input type="text" name="search" id="search" placeholder="Search for an employee..." required>
        <input type="submit" value="Search">
    </form>
    <div class="error-message" $style id="errorMessage">No employees found for your query: <b>$search</b> </div>
</div>


</div>


XXXXXX;




    load_header("Repair Service Staff");
    echo($page);
    load_footer();





?>
