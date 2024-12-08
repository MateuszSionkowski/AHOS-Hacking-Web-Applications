<?php
require __DIR__ . '/../functions.php';







$page = <<< XXXXXX

<h2 >Challenge: Hidden Parameter IDOR</h2>
<h3  >Find who is whose Secret Santa</h3>    
<hr class="divider">   




    <style>
        .lab {
            font-family: 'Comic Sans MS', sans-serif;
            background-color: #f0e68c;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 50px;
        }
        .lab h1 {
            font-size: 3em;
            color: #ff0000;
            margin-top: 20px;
            text-shadow: 2px 2px #008000;
        }
        .container {
            margin-top: 50px;
        }
        .santa-button {
            font-size: 1.5em;
            background-color: #ff4500;
            color: #fff;
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .santa-button:hover {
            background-color: #cc3700;
        }
        .result {
            margin-top: 20px;
            font-size: 1.8em;
            color: #006400;
            font-weight: bold;
        }
    </style>
<div class="lab">
    <h1>🎅 Secret Santa 🎁</h1>
    <div class="container">
        <button class="santa-button" onclick="revealGiftRecipient()">Click to Reveal Your Gift Recipient</button>
        <div class="result" id="recipientResult">Waiting for your gift recipient...</div>
    </div>
</div>


    <script>
    const jsondata = {
      name: 'Thomas'
    };
        async function revealGiftRecipient() {
            try {
                // Simulating an API call to get the Secret Santa recipient's name
                const response = await fetch('http://lab.local/secret_santa/who.php',  {method: 'POST',  headers: {        "Content-Type": "application/json" },  body: JSON.stringify(jsondata)}); //  API endpoint
                const data = await response.json();
                
                // Display the recipient's name
                document.getElementById('recipientResult').innerText = `You are giving a gift to: \${data.recipient}`;
            } catch (error) {
                document.getElementById('recipientResult').innerText = "Oops! Could not fetch your recipient. Try again later.";
            }
        }
    </script>



XXXXXX;





    load_header("Secret Santa");
    echo($page);
    load_footer();





?>
