<?php
require __DIR__ . '/../functions.php';

$contents="";
$found=false;
if (isset($_GET['search'])) {
    $search = $_GET['search'];

}


if (isset($_POST['imageId'])) {
    $imageId = $_POST['imageId'];

    $expiration_time = time() + 900;
    setcookie($imageId, $imageId, $expiration_time, "/");

}
$displ=["","","","","","",""];
for ($i = 1; $i <= 4; $i++) {
    if (isset($_COOKIE[$i]) || ($imageId == $i))
    {
      $displ[$i] = " style='display: none;' "  ;
    }
}




$page = <<< XXXXXX



<h2 >Basic Reflected XSS</h2>
<h3  >Get your code to run in the browser window. Achieve an alert(document.domain) execution.</h3>       
<hr class="divider">




    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .lab {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .lab h1 {
            font-family: 'Lobster', cursive;
            color: #e91e63; /* Pink */
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }
        .search-container {
            margin-bottom: 20px;
            width: 100%;
            text-align: center;
        }
        .search-container input {
            width: 50%;
            padding: 10px;
            border: 2px solid #e91e63; /* Pink */
            border-radius: 25px;
            font-size: 1.2em;
            outline: none;
            transition: border-color 0.3s;
        }
        .search-container input:focus {
            border-color: #9c27b0; /* Purple */
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .gallery-item {
            position: relative;
            border: 5px solid #e91e63; /* Pink */
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        .gallery-item:hover {
            transform: scale(1.05);
        }
        .gallery-item img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            display: block;
        }
        .delete-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #e91e63; /* Pink */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
            font-size: 0.9em;
            transition: background-color 0.3s;
        }
        .delete-button:hover {
            background-color: #c2185b; /* Darker pink */
        }
        .no-photos {
            margin-top: 20px;
            font-size: 1.5em;
            color: #ff5722; /* Deep orange */
            
            text-align: center;
        }
    </style>
<div class="lab">

<h1>Glam Image Gallery</h1>

<div class="search-container">
<form id="searchForm" action="" method="GET">
    <input type="text" id="searchInput" class="search-input" placeholder="Search for photos..." name="search" required>
</form>
</div>
<div class="no-photos">No photos found for your query: <strong>$search</strong></div>





<div class="gallery">
    <div class="gallery-item" $displ[1] >
        <img src="images/photo1.png" alt="Image 1">
        <form action="" method="POST" class="delete-form">
            <input type="hidden" name="imageId" value="1">
            <button type="submit" class="delete-button">Delete</button>
        </form>
    </div>
    <div class="gallery-item" $displ[2] >
        <img src="images/photo2.png" alt="Image 2">
        <form action="" method="POST" class="delete-form">
            <input type="hidden" name="imageId" value="2">
            <button type="submit" class="delete-button">Delete</button>
        </form>
    </div>
    <div class="gallery-item" $displ[3] >
        <img src="images/photo3.png" alt="Image 3">
        <form action="" method="POST" class="delete-form">
            <input type="hidden" name="imageId" value="3">
            <button type="submit" class="delete-button">Delete</button>
        </form>
    </div>
    <div class="gallery-item" $displ[4] >
        <img src="images/photo4.png" alt="Image 4">
        <form action="" method="POST" class="delete-form">
            <input type="hidden" name="imageId" value="4">
            <button type="submit" class="delete-button">Delete</button>
        </form>
    </div>
</div>


</div>

<script>
// Function to handle form submission
document.getElementById('searchInput').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault(); // Prevent the default form submission
        const searchValue = this.value.trim(); // Get the search input value
        if (searchValue) {

            document.getElementById('searchForm').submit();
        }
    }
});
</script>


XXXXXX;




    load_header("photo");
    echo($page);
    load_footer();





?>
