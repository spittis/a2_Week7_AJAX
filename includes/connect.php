<?php

$host = "localhost";
$user = "root";
$password = "root"; //leave this blank for windows users aka not me
$db = "cooperinfo";

$conn = mysqli_connect($host, $user, $password, $db); //this is to connect, then we are passing some arguments so it can go into the database
//we want to see if something didn't work
if (!$conn) {
    echo "something broke... connection isn't working";
    exit;
    //if connection breaks, nothing after this line will run
}

//echo "connected!"; //if it is correct, then you will get this success message and the echo will connect


// go and get ALL data from the database
//$myQuery = "SELECT * FROM mainmodel";
//$result = mysqli_query($conn, $myQuery);
//$rows = array(); //arrange all the data into an array
//fill the array with the result set and send it to the browser
//while($row = mysqli_fetch_assoc($result)) {
 //   $rows[] = $row;
//}

//get one item from the database
if (isset($_GET["modelNo"])) {
    $car = $_GET["modelNo"];
    //check and see if something is there
    $myQuery = "SELECT * FROM mainmodel WHERE model='$car'"; //find row back that matches..where model is equal to car

    //fill the array with the result set and send it to the browser
    while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
echo json_encode($rows);

}


//encode the result and send it back
//echo json_encode($rows);



?>