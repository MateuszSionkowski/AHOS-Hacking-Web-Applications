<?php
setcookie("past", "", time() - 3600, "/");
header("Location: index.php");
?>