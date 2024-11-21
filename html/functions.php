<?php

function load_header($page_title = "Page Title")
{
    echo <<<XXXXXX
            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>$page_title</title>
            <style>
                body {
                    font-family: 'Poppins', sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #101010; /* Deep black background */
                    color: #e0e0e0; /* Soft white text */
                }
                .divider {
                    height: 2px;
                    background: linear-gradient(to right, #ff00ff, #00ffff, #ff00ff);
                    border: none;
                    margin: 20px 0;
                    box-shadow: 0 0 8px #00ffff, 0 0 8px #ff00ff;
                }

                header {
                    background: linear-gradient(90deg, #0f0c29, #302b63, #24243e); /* Smooth cyberpunk gradient */
                    padding: 20px 30px;
                    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.7); /* Subtle shadow for depth */
                    border-bottom: 1px solid #2d2d2d; /* Crisp modern line */
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                }

                header h1 {
                    margin: 0;
                    font-size: 1.8rem;
                    color: #ff007c; /* Bright neon pink */
                    letter-spacing: 1.5px;
                    text-transform: uppercase;
                }

                header p.tagline {
                    margin: 5px 0 0 0;
                    font-size: 1rem;
                    color: #00f5ff; /* Neon blue */
                    font-weight: 400;
                    letter-spacing: 0.5px;
                }

                .header-left {
                    display: flex;
                    flex-direction: column;
                    text-align: left;
                }

                nav {
                    display: flex;
                    gap: 20px;
                }

                nav a {
                    color: #00f5ff; /* Neon blue */
                    text-decoration: none;
                    font-size: 1rem;
                    text-transform: uppercase;
                    transition: color 0.3s ease, transform 0.3s ease;
                }

                nav a:hover {
                    color: #ff007c; /* Neon pink on hover */
                    transform: scale(1.1); /* Slight zoom on hover */
                }

                main {
                    padding: 40px 30px;
                }

                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap'); /* Clean modern font */
                .footerftr{
                    text-align: center;
                    margin-top:200px;
                }
                .con a {
                color: #00f5ff;
                }
                .con a:visited {
                color: #ff007c;
                }
            </style>
            </head>
            <body>

            <header>
                <div class="header-left">
                    <h1>AHOS: Hacking Web Applications</h1>
                    <p class="tagline">All walkthroughs available at <a href="https://allhandsonsec.com" style="color: #ff007c; text-decoration: none;">AllHandsOnSec.com</a></p>
                </div>
                <nav>
                    <a href="/index.php">Home</a>
                    <a href="https://allhandsonsec.com">All Hands On Sec</a>
                    <a href="/about.php">About</a>
                    <a href="/logout.php">Log out</a>
                </nav>
            </header>


    <main>
    XXXXXX;
}

function load_footer()
{
    echo <<<XXXXXX
    </main>

    <footer>
        <p class="footerftr">&copy; 2025 AllHandsOnSec.com</p>
    </footer>

    </body>
    </html>
    XXXXXX;
}



?>