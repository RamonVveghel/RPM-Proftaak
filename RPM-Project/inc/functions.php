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
// Get recipes from the database, from tables courses, courses_recipes and recipes
function GetLunch()
{
    //connect to the database 
    $conn = DbConnect();
    //define empty array 
    $lunch = [];
    //define sql

    $getLunchSQL= 
    "
    SELECT 
    *
    FROM 
    courses_recipes, recipes
    WHERE recipes.recipeId = courses_recipes.recipeId 
    AND 
    courses_recipes.courseId = 2
    ";
    //run / execute query
    //this will result in a result set or
    $result = $conn->query($getLunchSQL) or die($conn->error);
    //fetch the result to an associative array
    $lunch = $result->fetch_all(MYSQLI_ASSOC);
    //return the array
    return $lunch;
}
// function that shows contents of an array
function DisplayLunch()
{   
    $lunch = GetLunch();
    foreach($lunch as $lunches)
    {
        ?>
        <div class="recipe-container">
          <?php
               echo $lunches ["recipeName"] . $lunches["recipeDescription"] . $lunches["recipeTime"] . $lunches["recipeImage"];
         
           ?>
             </br>
                Een heerlijk ontbijtje
            </div>
          <?php
    }
}
function MyDump($lunch, $die = false)
{
    echo "<pre>";
    var_dump($lunch); 
    echo"</pre>";
    if($die == true)
    {
        die("DIED");
    }
a