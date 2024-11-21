<?php
require __DIR__ . '/../functions.php';




$unauthenticated_page = <<< XXXXXX


    <h2>Abusing Known Vulnerabilities (Drupal: Drupalgeddon2)</h2>
    <h3>Exploit a Drupal instance with a known vulnerability</h3>    
    <h3>Use Metasploit module: exploit/unix/webapp/drupal_drupalgeddon2</h3>
    <hr class="divider">

    <div class="lab">
    <p>
        Your target lab is available here: <a target="_blank" href="http://127.0.0.1:8000">http://127.0.0.1:8000</a>
    </p>
    </div>


XXXXXX;




    load_header("Drupal");
    echo($unauthenticated_page);
    load_footer();






?>
