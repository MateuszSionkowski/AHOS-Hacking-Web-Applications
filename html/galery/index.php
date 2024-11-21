<?php
require __DIR__ . '/../functions.php';

$contents="";
$found=false;
if (isset($_GET['image'])) {
    $image = $_GET['image'];
    
    // This line is vulnerable to path traversal
    $filePath = "images/" . $image;

    // Check if file exists and is an image
    if (file_exists($filePath) ) {

        $found=true;
    } else {
        $contents= "<p class='error-message'>Image not found.</p>";
    }
}





$page = <<< XXXXXX



<h2 >Challenge: Path Traversal</h2>
<h3  >Find contents of files in the operating system, like /etc/passwd </h3>       
<hr class="divider">



    <style>
        .lab {
            font-family: Arial, sans-serif;
            background-color: #e3f2fd; /* Light blue background */
            color: #333;
            padding: 20px;
        }
        .lab h1 {
            color: #1976d2; /* Blue color for the heading */
            text-align: center;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
        .lab p {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        .gallery a {
            border: 5px solid #4caf50; /* Green border around images */
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.2s; /* Animation effect */
        }
        .gallery a:hover {
            transform: scale(1.05); /* Scale effect on hover */
        }
        .gallery img {
            width: 200px;
            height: 150px;
            border-radius: 10px;
        }
        .image-view {
            text-align: center;
            margin-top: 20px;
            background-color: #fff; /* White background for image view */
            border: 2px solid #1976d2; /* Blue border */
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
        }
        .image-view h2 {
            color: #4caf50; /* Green color for the viewed image title */
        }
        .error-message {
            color: red; /* Red color for error messages */
            font-weight: bold;
        }
    </style>
<div class="lab">
<h1>Welcome to the Colorful Image Gallery</h1>
<p>Select an image to view:</p>

<div class="gallery">
    <a href="?image=photo1.png"><img src="thumbnails/photo1.png" alt="Photo 1"></a>
    <a href="?image=photo2.png"><img src="thumbnails/photo2.png" alt="Photo 2"></a>
    <a href="?image=photo3.png"><img src="thumbnails/photo3.png" alt="Photo 3"></a>
</div>

<div class="image-view">
$contents
</div>
</div>




XXXXXX;



if ($found)
{   
    if (strpos($filePath, 'png') !== false)
    {
        header('Content-Type: image/png');
    }
    else 
    {
        header('Content-Type: text/plain');
    }

    readfile($filePath); // Read the image file and output it to the browser
    exit; // Stop further execution
}


else 
{
    load_header("photo");
    echo($page);
    load_footer();
}




?>
