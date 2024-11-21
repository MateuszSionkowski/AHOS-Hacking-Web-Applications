<?php
require __DIR__ . '/../functions.php';




$unauthenticated_page = <<< XXXXXX


    <h2>Challenge: Abusing Known Vulnerabilities (ThinkPHP: ThinkPHP RCE)</h2>
    <h3>Exploit a ThinkPHP instance with a known vulnerability</h3>    
    <h3>Use Metasploit module: exploit/unix/webapp/thinkphp_rce</h3>
    <hr class="divider">

    <div class="lab">
    <p>
        Your target lab is available here: <a target="_blank" href="http://127.0.0.1:9000">http://127.0.0.1:9000</a>
    </p>
    </div>


XXXXXX;




    load_header("ThinkPHP");
    echo($unauthenticated_page);
    load_footer();






?>
