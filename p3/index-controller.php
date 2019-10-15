<?php
session_start();
$showResults = false;  
$results = null; 
if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $showResults = true;
    $_SESSION['results'] = null;
}