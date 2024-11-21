<?php
require __DIR__ . '/functions.php';



    $page = <<< XXXXXX
    <div class="con">

    <h1> Labs </h1>
    <ol start="2">
        <li>Hacking Passwords
            <ol>
              <li><a href="fishing_forum/index.php">Challenge: Dictionary attack on password</a></li>
              <li><a href="photo_storage/index.php">Dictionary attack on username+password</a></li>
              <li><a href="education/index.php">Challenge: Dictionary attack on username+password</a></li>
              <li><a href="docs/index.php">Brute force attack on password</a></li>
              <li><a href="members/index.php">Challenge: Brute force attack on password</a></li>
              <li><a href="checkout/index.php">Hybrid attack on password</a></li>
              <li><a href="chat/index.php">Challenge: Hybrid attack on password</a></li>
            </ol>
        </li>
        
        <li>Insecure Direct Object References (IDOR)
            <ol>
              <li><a href="poker_room/index.php?user=LuckyWolf">Basic IDOR Exploitation</a></li>
              <li><a href="school/index.php?student=s32501">Challenge: Basic IDOR Exploitation</a></li>
              <li><a href="bank/index.php">Hidden Parameter IDOR</a></li> 
              <li><a href="secret_santa/index.php">Challenge: Hidden Parameter IDOR</a></li>
              <li><a href="clinic/index.php?visit=49">Sequential IDOR Exploitation</a></li>
              <li><a href="order/index.php?order=32">Challenge: Sequential IDOR Exploitation</a></li>
              <li><a href="invoice/index.php">Path Traversal</a></li>
              <li><a href="galery/index.php">Challenge: Path Traversal</a></li>
            </ol>
        </li>
        
        <li>Cross Site Scripting (XSS)
        <ol>
          <li><a href="glam/index.php?search=hot chicks">Basic Reflected XSS</a></li>
          <li><a href="repair_employees/index.php">Challenge: Basic Reflected XSS</a></li>
          <li><a href="guestbook/index.php">Stored XSS</a></li> 
          <li><a href="comment/index.php">Challenge:  Stored XSS</a></li>
          <li><a href="review/index.php">XSS with input validation on the client side</a></li>
          <li><a href="community/index.php">Challenge: XSS with input validation on the client side</a></li>
          <li><a href="status/index.php">XSS with broken server-side validation</a></li>
          <li><a href="profile/index.php">Challenge: XSS with broken server-side validation</a></li>
        </ol>
        <li>SQL Injection
        <ol>
          <li><a href="user/index.php">Authentication Bypass</a></li>
          <li><a href="authentication/index.php">Challenge: Authentication Bypass</a></li>
          <li><a href="search/index.php">Extracting Data with Union-Based SQL Injection</a></li>
          <li><a href="employee/index.php">Challenge: Extracting Data with Union-Based SQL Injection</a></li>
          <li><a href="fleet/index.php">Blind SQL Injection</a></li>
          <li><a href="registration/index.php">Blind SQL Injection 2</a></li>

        </ol>
        </li>
       
        <li>Known Vulnerabilities
        <ol>
          <li><a href="drupal/index.php">Abusing Known Vulnerabilities (Drupal: Drupalgeddon2)</a></li>
          <li><a href="thinkphp/index.php">Challenge: Abusing Known Vulnerabilities (ThinkPHP: ThinkPHP RCE)</a></li>
        </ol>
        </li>

    </li>

    </ol>
    </div>

    XXXXXX;



    load_header("Labs");
    echo($page);
    load_footer();





?>
