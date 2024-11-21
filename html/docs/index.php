<?php
require __DIR__ . '/../functions.php';

function authenticate($username, $password)
{
    if ((($password=="CEO")))
    {
        return TRUE;
    }
    else return FALSE;

}

$error_message="";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ( !empty($_POST['password'])) {

        $password = $_POST['password'];
    } 
    $error_message = "Password is incorrect.";
}




$unauthenticated_page = <<< XXXXXX



<h2 >Brute force attack on password</h2>
<h3  >Break the password with brute force</h3>    
<hr class="divider">

    
    <style>
        .lab{
            font-family: Arial, sans-serif;
            justify-content: center;
            align-items: center;
            height: 60vh;
            margin: 0 auto;
            background-color: #f2f2f5;
            color: #333;
            padding: 50px;
        }

        .container {
            justify-content: center;
            align-items: center;
            max-width: 400px;
            width: 100%;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
            margin: 0 auto;
            padding: 30px;
        }

        h1 .container {
            font-size: 24px;
            margin-bottom: 10px;
            color: #004085;
        }

        p .container {
            font-size: 16px;
            color: #555;
        }

        .password-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 15px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .password-form button {
            width: 100%;
            padding: 10px;
            background-color: #004085;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        .password-form button:hover {
            background-color: #0056b3;
        }

        .message {
            color: #d9534f;
            margin-top: 10px;
            font-size: 14px;
        }

        .document-content {
            text-align: left;
            color: #333;
        }

        .document-content h2 {
            color: #004085;
        }

        .document-content p {
            font-size: 14px;
            color: #555;
        }
    </style>

<div class="lab">
<div class="container">

        <!-- Document Content (Shown Only if Password is Correct) -->
        <div class="document-content">
            <h2>Confidential Corporate Document</h2>
            <p>This document contains proprietary information for corporate use only.</p>

        </div>

        <!-- Password Form -->
        <h1>Protected Document</h1>
        <p>Please enter the password to view the document:</p>

        <form class="password-form" method="POST" action="">
            <input type="password" name="password" placeholder="Enter password" required>
            <button type="submit">Submit</button>
        </form>

        <!-- Error Message if Password is Incorrect -->
        
            <p class="message"> $error_message </p>
        
    
</div>
</div>


XXXXXX;



$authenticated_page = <<< XXXXXX


<h2 >Brute force attack on password</h2>
<h3  >Break the password with brute force</h3>    
<hr class="divider">



    <style>

                .lab{
            font-family: Arial, sans-serif;
            justify-content: center;
            align-items: center;
            
            margin: 0 auto;
            background-color: #f2f2f5;
            color: #333;
            padding: 50px;
        }
        .table-container {
            margin: 0 auto;
            width: 90%;
            max-width: 800px;
            border-collapse: collapse;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        
        h1 .header {
            text-align: center;
            color: #004085;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }
        
        th {
            background-color: #004085;
            color: white;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        tr:hover {
            background-color: #e0f7fa;
        }
        
        /* Responsive for small screens */
        @media (max-width: 600px) {
            table, th, td {
                font-size: 12px;
            }
        }
    </style>

<div class="lab">
<div class="table-container">
    <h1 style="text-align: center; color: #004085;  margin-bottom: 20px;" class="header">Employee List</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Department</th>
                <th>Rank</th>
                <th>Position</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td>Smith</td>
                <td>Sales</td>
                <td>3</td>
                <td>Sales Associate</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Emily</td>
                <td>Johnson</td>
                <td>Human Resources</td>
                <td>5</td>
                <td>HR Manager</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Michael</td>
                <td>Brown</td>
                <td>Marketing</td>
                <td>2</td>
                <td>Marketing Specialist</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Sarah</td>
                <td>Williams</td>
                <td>IT</td>
                <td>6</td>
                <td>IT Administrator</td>
            </tr>
            <tr>
                <td>5</td>
                <td>David</td>
                <td>Jones</td>
                <td>Finance</td>
                <td>4</td>
                <td>Accountant</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Laura</td>
                <td>Miller</td>
                <td>Operations</td>
                <td>7</td>
                <td>Operations Director</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Robert</td>
                <td>Garcia</td>
                <td>Legal</td>
                <td>8</td>
                <td>Chief Legal Officer</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Jessica</td>
                <td>Martinez</td>
                <td>Product</td>
                <td>3</td>
                <td>Product Designer</td>
            </tr>
            <tr>
                <td>9</td>
                <td>James</td>
                <td>Rodriguez</td>
                <td>Customer Support</td>
                <td>1</td>
                <td>Support Agent</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Linda</td>
                <td>Wilson</td>
                <td>Finance</td>
                <td>5</td>
                <td>Financial Analyst</td>
            </tr>
        </tbody>
    </table>
</div>
</div>


XXXXXX;




if ((($_SERVER['REQUEST_METHOD'] === 'POST') && (authenticate($username, $password))) )
{
    load_header("Docs");
    echo($authenticated_page);
    load_footer();
}
else
{
    load_header("Docs");
    echo($unauthenticated_page);
    load_footer();

}




?>
