<?php
require __DIR__ . '/../functions.php';

function authenticate($username, $password)
{
    if ((($password=="Ivone27")))
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
    $error_message = "<i style='color: black;' >Wrong password.</i>";
}




$unauthenticated_page = <<< XXXXXX



<h2 >Challenge: Hybrid attack on password</h2>
<h3 >Find a password to the chatroom with a hybrid of dictionary+bruteforce attack</h3>    
<hr class="divider">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join the Chat</title>
    <style>
        /* General Styles */


        .container {
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            max-width: 400px;
            width: 90%;
            background-color: #ffebcd;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .lab h1 {
            font-size: 24px;
            color: #a78682;
            margin-bottom: 10px;
        }

        .lab p {
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Form Styling */
        .password-form input[type="password"] {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #a78682;
            border-radius: 5px;
            margin-bottom: 15px;
            background-color: #fff6e6;
        }

        .password-form button {
            width: 85%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background-color: #a78682;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .password-form button:hover {
            background-color: #d49b96;
        }
    </style>
<div class="lab">

<div class="container">
    <h1>Join the Chat</h1>
    <p>Please provide a password to join the chat</p>

    <!-- Password Form -->
    <form class="password-form" method="POST" action="">
        <input type="password" name="password" placeholder="Enter password" required>
        <button type="submit">Enter</button>
    </form>
    $error_message
</div>

</div>


XXXXXX;



$authenticated_page = <<< XXXXXX




<h2 >Challenge: Hybrid attack on password</h2>
<h3 >Find a password to the chatroom with a hybrid of dictionary+bruteforce attack</h3>    
<hr class="divider">



    <title>Simple Chatroom</title>
    <style>
        /* General Styles */
        
        /* Chat Container */
        .chat-container {
            margin: 0 auto;
            width: 400px;
            height: 600px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #ffebcd;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Chat Header */
        .chat-header {
            padding: 15px;
            background-color: #a78682;
            color: white;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            font-size: 20px;
            font-weight: bold;
        }

        /* Chat Window */
        .chat-window {
            flex: 1;
            padding: 15px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        /* Message Styles */
        .message {
            padding: 10px;
            border-radius: 8px;
            max-width: 70%;
            word-wrap: break-word;
            font-size: 15px;
        }

        .message.user {
            align-self: flex-end;
            background-color: #a78682;
            color: white;
        }

        .message.other {
            align-self: flex-start;
            background-color: #e0e0e0;
            color: #333;
        }

        /* Input Area */
        .chat-input {
            display: flex;
            padding: 10px;
            border-top: 1px solid #ccc;
        }

        .chat-input input[type="text"] {
            flex: 1;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            margin-right: 10px;
        }

        .chat-input button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            background-color: #a78682;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .chat-input button:hover {
            background-color: #524ba6;
        }
    </style>

<div class="lab">
<div class="chat-container">
    <div class="chat-header">
        Chatroom
    </div>
    <div class="chat-window" id="chatWindow">
        <div class="message other">Yo, cupcakes!</div>
        <div class="message other">Who's up for the party?</div>
        
        </div>
        
    <div class="chat-input" id="chat">
        <input type="text" id="chatInput" placeholder="Type your message here..." />
        <button onclick="sendMessage()">Send</button>
    </div>
</div>

<script>
        var first=true;

        function sendMessageWTF(tex) {
            // Get the message input element and its value
            const chatInput = document.getElementById("chatInput");
            const messageText = chatInput.value.trim();
    
            // Only proceed if there's a message
            if (true) {
                // Create a new message element
                const messageElement = document.createElement("div");
                messageElement.className = "message other";
                messageElement.textContent = tex;
    
                // Append the message to the chat window
                const chatWindow = document.getElementById("chatWindow");
                chatWindow.appendChild(messageElement);
    
                // Scroll to the bottom of the chat window
                chatWindow.scrollTop = chatWindow.scrollHeight;
    
                // Clear the input field
                chatInput.value = "";
            }
        }

    function delayedWTF() {
            setTimeout(function() {
                sendMessageWTF("Who the F are you?");
            }, 2000); // 2000 milliseconds = 2 seconds
            setTimeout(function() {
                sendMessageWTF("Get lost!");
                document.getElementById("chat").innerHTML="<p style='color: gray'><i>You have been removed from the chat room.</i></p>"
            }, 20000); 
        }



    function sendMessage() {
        // Get the message input element and its value
        const chatInput = document.getElementById("chatInput");
        const messageText = chatInput.value.trim();

        // Only proceed if there's a message
        if (messageText !== "") {
            // Create a new message element
            const messageElement = document.createElement("div");
            messageElement.className = "message user";
            messageElement.textContent = messageText;

            // Append the message to the chat window
            const chatWindow = document.getElementById("chatWindow");
            chatWindow.appendChild(messageElement);

            // Scroll to the bottom of the chat window
            chatWindow.scrollTop = chatWindow.scrollHeight;

            // Clear the input field
            chatInput.value = "";

            if (first)
            {
                first=false;
                delayedWTF();
                
            }

        }
    }



</script>

</div>

XXXXXX;




if ((($_SERVER['REQUEST_METHOD'] === 'POST') && (authenticate($username, $password))) )
{
    load_header("Corn Site");
    echo($authenticated_page);
    load_footer();
}
else
{
    load_header("Corn Site");
    echo($unauthenticated_page);
    load_footer();

}




?>
