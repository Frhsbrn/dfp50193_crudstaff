<?php
$host = 'localhost';
$user = 'root';
$pswd = ''; #Sepasang single quotes
$dbname = 'contoh_login';

$conn = new mysqli($host, $user, $pswd, $dbname);
session_start();