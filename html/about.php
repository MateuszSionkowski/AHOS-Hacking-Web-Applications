<?php
require __DIR__ . '/functions.php';



    $page = <<< XXXXXX
    <h1> About the labs </h1>
    <div class="con">
    <p>Labs have been designed for being a safe place to train ethical hacking skills. Are meant for educational purpose only and do not represent any real life website or company.</p>
    <p>The Labs are open source (can be shared when adhering to <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/">CC BY-NC-ND 4.0</a> license).</p>
    <p>All walkthroughs of the labs are published in the Web Application Ethical Hacking course at <a href="https://allhandsonsec.com">AllHandsOnSec.com</a>.</p>
    
    <p><br></p>
    <p>Happy hacking!</p>
    <p><i>Matt Sionkowski</i></p>
    </div>
    XXXXXX;



    load_header("Labs");
    echo($page);
    load_footer();





?>
