<?php
//Functions file where all the functions will be placed
//Made 31 - 5 - 2021
// Ramon van Veghel
//IC20SDA

//Function to connect to the database
function DbConnect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rpm";
    
    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection//
    if ($conn->connect_error) 
        {
        die("Connection failed: " . $conn->connect_error);
        }
        // return db object
        return $conn;
    
}

