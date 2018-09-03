<?php
session_start();//destroy entire session 
session_destroy(); 
header("location:index.php");
?>
