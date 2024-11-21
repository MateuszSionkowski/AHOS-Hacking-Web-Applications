<?php
require __DIR__ . '/../functions.php';

function authenticate($username, $password)
{
    if ((($username=="michael")&&($password=="iloveyou")))
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
    $error_message = "<h2 class='error-message'> Something went wrong, please try again.</h2>";
}




$unauthenticated_page = <<< XXXXXX


    <h2 >Challenge: Dictionary attack on username+password</h2>
    <h3 >Log in to the education platform by hacking both the username and the password</h3>    
    <h3 >Use a dictionary attack on both fields</h3>


   <hr class="divider">
        <title>Edu Platform - Your Learning Journey Starts Here</title>
        <style>
            /* Reset and global styles */
            .lab {
                margin: 0;
                padding: 0;
                font-family: 'Arial', sans-serif;
                color: #f4f4f4;
                overflow-x: hidden;
            }
            
            /* Fullscreen background with overlay */
            .hero {
                background: url('https://source.unsplash.com/1600x900/?learning') no-repeat center center/cover;
                height: 100vh;
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                color: #fff;
            }
    
            .hero-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.6); /* Semi-transparent overlay */
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 20px;
            }
    
            .hero h1 {
                font-size: 50px;
                margin-bottom: 10px;
                color: #ffe600;
                letter-spacing: 2px;
            }
    
            .hero p {
                font-size: 18px;
                max-width: 600px;
                margin-bottom: 20px;
            }
    
            /* Login form */
            .login-form {
                background-color: rgba(255, 255, 255, 0.1);
                padding: 20px 30px;
                border-radius: 8px;
                backdrop-filter: blur(10px);
                width: 100%;
                max-width: 300px;
            }
    
            .login-form h2 {
                color: #ffe600;
                font-size: 22px;
                margin-bottom: 15px;
            }
    
            .login-form input {
                width: 100%;
                padding: 10px ;
                margin: 8px 0;
                border-radius: 5px;
                border: none;
                background: rgba(255, 255, 255, 0.2);
                color: #fff;
                font-size: 16px;
                box-sizing: border-box;
            }
    
            .login-form button {
                width: 100%;
                padding: 12px;
                border: none;
                background-color: #ff4500;
                color: white;
                font-size: 16px;
                font-weight: bold;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }
    
            .login-form button:hover {
                background-color: #ff5700;
            }
    
            /* Courses section */
            .courses {
                padding: 60px 20px;
                background-color: #222;
                color: #fff;
                text-align: center;
            }
    
            .courses h2 {
                font-size: 32px;
                color: #ffe600;
                margin-bottom: 20px;
            }
    
            .course-cards {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 20px;
            }
    
            .course-card {
                background-color: #333;
                width: 300px;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s;
                color: #ffe600;
            }
    
            .course-card:hover {
                transform: scale(1.05);
                background-color: #444;
            }
    
            .course-card h3 {
                font-size: 20px;
                margin-bottom: 10px;
            }
    
            .course-card p {
                color: #bbb;
                font-size: 14px;
            }
        </style>
 
    <div class="lab">
    <!-- Hero Section with Login Form Overlay -->
    <div class="hero">
        <div class="hero-overlay">
            <h1>Welcome to Edu Platform</h1>
            <p>Unlock your potential with courses designed to fit your journey.</p>
            
            <!-- Login Form -->
            <div class="login-form">
                <h2>Login</h2>
                <form action="index.php" method="POST">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
                $error_message
            </div>
        </div>
    </div>
    
    <!-- Courses Section -->
    <div class="courses" style="visibility: hidden">
        <h2>Explore Our Top Courses</h2>
        <div class="course-cards">
            <div class="course-card">
                <h3>Advanced Python Programming</h3>
                <p>Master the art of coding with advanced Python techniques.</p>
            </div>
            <div class="course-card">
                <h3>Creative Writing Mastery</h3>
                <p>Hone your storytelling and writing skills for any medium.</p>
            </div>
            <div class="course-card">
                <h3>Business Analytics</h3>
                <p>Learn data-driven decision-making for the modern business world.</p>
            </div>
            <div class="course-card">
                <h3>Digital Illustration</h3>
                <p>Get creative with advanced digital art techniques and tools.</p>
            </div>
        </div>
    </div>
    </div>
 
    




XXXXXX;



$authenticated_page = <<< XXXXXX

<h2 >Challenge: Dictionary attack on username+password</h2>
<h3  >Log in to the education platform by hacking both the username and the password</h3>    
<h3 >Use a dictionary attack on both fields</h3>
<hr class="divider">


    <style>
        /* Reset and global styles */
        .lab {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            color: #f4f4f4;
            overflow-x: hidden;
        }
        
        /* Fullscreen background with overlay */
        .hero {
            background: url('https://source.unsplash.com/1600x900/?learning') no-repeat center center/cover;
            height: 50vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Semi-transparent overlay */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .hero h1 {
            font-size: 50px;
            margin-bottom: 10px;
            color: #ffe600;
            letter-spacing: 2px;
        }

        .hero p {
            font-size: 18px;
            max-width: 600px;
            margin-bottom: 20px;
        }

        /* Login form */
        .login-form {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px 30px;
            border-radius: 8px;
            backdrop-filter: blur(10px);
            width: 100%;
            max-width: 300px;
        }

        .login-form h2 {
            color: #ffe600;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border: none;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 16px;
        }

        .login-form button {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #ff4500;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-form button:hover {
            background-color: #ff5700;
        }

        /* Courses section */
        .courses {
            padding: 60px 20px;
            background-color: #222;
            color: #fff;
            text-align: center;
        }

        .courses h2 {
            font-size: 32px;
            color: #ffe600;
            margin-bottom: 20px;
        }

        .course-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .course-card {
            background-color: #333;
            width: 300px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
            color: #ffe600;
        }

        .course-card:hover {
            transform: scale(1.05);
            background-color: #444;
        }

        .course-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .course-card p {
            color: #bbb;
            font-size: 14px;
        }
    </style>
<div class="lab">
<!-- Hero Section with Login Form Overlay -->
<div class="hero">
    <div class="hero-overlay">
        <h1>Thank you for signing in</h1>
        <p>Unlock your potential with courses designed to fit your journey.</p>
        
        <!-- Login Form -->
        <div class="login-form" style="display:none">

        </div>
    </div>
</div>

<!-- Courses Section -->
<div class="courses" >
    <h2>Explore Our Top Courses</h2>
    <div class="course-cards">
        <div class="course-card">
            <h3>Advanced Python Programming</h3>
            <p>Master the art of coding with advanced Python techniques.</p>
        </div>
        <div class="course-card">
            <h3>Creative Writing Mastery</h3>
            <p>Hone your storytelling and writing skills for any medium.</p>
        </div>
        <div class="course-card">
            <h3>Business Analytics</h3>
            <p>Learn data-driven decision-making for the modern business world.</p>
        </div>
        <div class="course-card">
            <h3>Digital Illustration</h3>
            <p>Get creative with advanced digital art techniques and tools.</p>
        </div>
    </div>
</div>
</div>

XXXXXX;




if ((($_SERVER['REQUEST_METHOD'] === 'POST') && (authenticate($username, $password))) )
{
    load_header("Edu Platform");
    echo($authenticated_page);
    load_footer();
}
else
{
    load_header("Edu Platform");
    echo($unauthenticated_page);
    load_footer();

}




?>
