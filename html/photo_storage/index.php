<?php
require __DIR__ . '/../functions.php';

function authenticate($username, $password)
{
    if ((($username=="jessica")&&($password=="panther")))
    {
        return TRUE;
    }
    else return FALSE;

}

$error_message="";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    } 
    $error_message = "<h2 class='error-message'> Wrong credentials.</h2>";
}




$unauthenticated_page = <<< XXXXXX


    <h2>Dictionary attack on username+password</h2>
    <h3>Log in to the photo storage by hacking both the username and the password</h3>    
    <h3>Use a dictionary attack on both fields</h3>
    <hr class="divider">


  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Personal Photo Storage</title>
    <style>
        /* Basic reset and font styling */
        .lab {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f6fa;
            color: #333;
                display: flex;
            flex-direction: row;
        }

        .error-message {
            color: #b20000; /* Dark red text color */
            background-color: #ffe6e6; /* Light red background */
            border: 1px solid #b20000; /* Dark red border */
            padding: 10px;
            border-radius: 4px;
            margin-top: 15px;
            text-align: center;
            font-weight: bold;
            font-size: 14px;
        }
        
        /* Sidebar styling */
        .sidebar {
            width: 300px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            padding: 30px 20px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.2);
          
        }
        
        .sidebar h1 {
            font-size: 26px;
            margin-bottom: 20px;
            color: #fff;
        }
        
        /* Login form styling */
        .login-form {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            width: 100%;
            gap: 15px;
        }
        
        .login-form input[type="text"],
        .login-form input[type="password"] {
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        
        .login-form button {
            padding: 12px;
            background-color: #ff8c42;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
        
        .login-form button:hover {
            background-color: #e67e22;
        }
        
        /* Main content styling */
        .main-content {
            margin-left: 320px;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .main-content h2 {
            color: #2575fc;
            font-size: 32px;
            margin-bottom: 20px;
        }
        
        .main-content p {
            color: #666;
            font-size: 16px;
            text-align: center;
            margin-bottom: 40px;
            max-width: 600px;
        }
        
        /* Gallery styling */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 1000px;
        }
        
        .photo {
            background-color: #ffde59;
            height: 200px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .photo:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }
    </style>

<div class='lab'>
<!-- Sidebar with title and login form -->
<div class="sidebar">
    <h1>Photo Storage</h1>
    <p>Your secure and colorful photo storage.</p>
    <form class="login-form" action="index.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

$error_message
</div>

<!-- Main content container -->
<div class="main-content">
    <h2>Welcome to Photo Storage</h2>
    <p>Sign in to browse your photos!</p>

    <!-- Gallery section -->
    <div class="gallery" style="visibility: hidden">
        <div class="photo">Photo 1</div>
        <div class="photo">Photo 2</div>
        <div class="photo">Photo 3</div>
        <div class="photo">Photo 4</div>
        <div class="photo">Photo 5</div>
        <div class="photo">Photo 6</div>
        <!-- Add more photos as needed -->
    </div>
</div>
</div>






XXXXXX;



$authenticated_page = <<< XXXXXX


<h2>Dictionary attack on username+password</h2>
<h3>Log in to the photo storage by hacking both the username and the password</h3>    
<h3>Use a dictionary attack on both fields</h3>
<hr class='divider'>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Personal Photo Storage</title>

    <style>
      
        .lab{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f6fa;
            color: #333;
                display: flex;
            flex-direction: row;
        }

        .error-message {
            color: #b20000; /* Dark red text color */
            background-color: #ffe6e6; /* Light red background */
            border: 1px solid #b20000; /* Dark red border */
            padding: 10px;
            border-radius: 4px;
            margin-top: 15px;
            text-align: center;
            font-weight: bold;
            font-size: 14px;
        }
        
        /* Sidebar styling */
        .sidebar {
            width: 300px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            padding: 30px 20px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.2);
          
        }
        
        .sidebar h1 {
            font-size: 26px;
            margin-bottom: 20px;
            color: #fff;
        }
        
        /* Login form styling */
        .login-form {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            width: 100%;
            gap: 15px;
        }
        
        .login-form input[type="text"],
        .login-form input[type="password"] {
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        
        .login-form button {
            padding: 12px;
            background-color: #ff8c42;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
        
        .login-form button:hover {
            background-color: #e67e22;
        }
        
        /* Main content styling */
        .main-content {
            margin-left: 320px;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .main-content h2 {
            color: #2575fc;
            font-size: 32px;
            margin-bottom: 20px;
        }
        
        .main-content p {
            color: #666;
            font-size: 16px;
            text-align: center;
            margin-bottom: 40px;
            max-width: 600px;
        }
        
        /* Gallery styling */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 1000px;
        }
        
.photo {
    background-color: #ffde59;
    height: 200px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    font-weight: bold;
    color: #333;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden; /* Ensure the image doesn't overflow */
}
        
        .photo:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }
            .photo img {
    width: 100%; /* Make the image fill the width of the container */
    height: 100%; /* Make the image fill the height of the container */
    object-fit: cover; /* Crop the image to fit the container if necessary */
    }
    </style>

<div class="lab">
<!-- Sidebar with title and login form -->
<div class="sidebar">
<h1>Photo Storage</h1>
<p>Your secure and colorful photo storage.</p>
<form class="login-form" action="index.php" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
</div>

<!-- Main content container -->
<div class="main-content">
<h2>Welcome to Photo Storage</h2>
<p>Securely store and manage your favorite photos with our modern and user-friendly platform. Explore your galleries below!!</p>

<!-- Gallery section -->
<div class="gallery">
    <div class="photo"><img src="hike1.png" alt="Hike Photo 1" /></div>
    <div class="photo"><img src="hike2.png" alt="Hike Photo 2" /></div>
    <div class="photo"><img src="hike3.png" alt="Hike Photo 3" /></div>
    <div class="photo"><img src="hike4.png" alt="Hike Photo 4" /></div>
    <div class="photo"><img src="hike5.png" alt="Hike Photo 5" /></div>
    <div class="photo"><img src="hike6.png" alt="Hike Photo 6" /></div>
  
    <!-- Add more photos as needed -->
</div>
</div>
</div>
XXXXXX;




if ((($_SERVER['REQUEST_METHOD'] === 'POST') && (authenticate($username, $password))) )
{
    load_header("Photo Storage");
    echo($authenticated_page);
    load_footer();
}
else
{
    load_header("Photo Storage");
    echo($unauthenticated_page);
    load_footer();

}




?>
