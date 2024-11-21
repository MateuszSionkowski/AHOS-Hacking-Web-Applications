<?php
require __DIR__ . '/../functions.php';

$contents="";
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $filePath = "documents/" . $file;

    if (file_exists($filePath)) {
        $contents=  "<h2>Contents of " . htmlspecialchars($file) . ":</h2>";
        $contents= $contents . "<pre>" . htmlspecialchars(file_get_contents($filePath)) . "</pre>";
    } else {
        $contents = "<p style='color: red;'>File not found.</p>";
    }
}




$page = <<< XXXXXX



<h2 >Path Traversal</h2>
<h3  >Find contents of files in the operating system, like /etc/passwd </h3>       
<hr class="divider">

    <style>
        .lab {
            font-family: Arial, sans-serif;
            background-color: #e0f2e9;
            color: #2d5d34;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            width: 80%;
            max-width: 600px;
            padding: 20px;
            background-color: #ffffff;
            border: 2px solid #38a169;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        .lab h1 {
            color: #2d5d34;
        }
        .file-list {
            text-align: left;
        }
        .lab a {
            color: #38a169;
            text-decoration: none;
        }
        .lab a:hover {
            text-decoration: underline;
        }
    </style>
<div class="lab">
<div class="container">
    <h1>Invoice Viewer</h1>
    <p>Select a document to view its contents:</p>

    <div class="file-list">
        <ul>
            <li><a href="?file=invoice1.txt">Invoice 1</a></li>
            <li><a href="?file=invoice2.txt">Invoice 2</a></li>
            <li><a href="?file=invoice3.txt">Invoice 3</a></li>
        </ul>
    </div>

    <div class="file-content">
        $contents
    </div>
</div>

</div>






XXXXXX;





if ((($_SERVER['REQUEST_METHOD'] === 'GET')))
{
    load_header("Invoice");
    echo($page);
    load_footer();
}




?>
