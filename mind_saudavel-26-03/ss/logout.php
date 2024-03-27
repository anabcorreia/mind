<?php 
session_start();
unset($_SESSION['usuarioEmail']);
header('Location: ../Login/login.php');
exit();