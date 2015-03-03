<?php
session_start ();

session_unset ();

session_destroy ();

// page d'accueil
header ('location: ../index.php');
?>