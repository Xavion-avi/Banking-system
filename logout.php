<?php
//logout code
session_start();
session_destroy();
header('location:index.php?loggedout=true');
?>