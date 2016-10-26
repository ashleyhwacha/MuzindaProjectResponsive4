<?php
if(isset($_POST["personal"])){

$title=$_POST["title"] ;
$first_name=$_POST["first_name"] ;
$last_name=$_POST["last_name"] ;
$dateofbirth=$_POST["dateofbirth"] ;
$gender=$_POST["gender"] ;
$meal=$_POST["meal"] ;
$special=$_POST["special"] ;
$document=$_POST["document"] ;
$nationality=$_POST["nationality"] ;
$documentnumber=$_POST["documentnumber"] ;
$phonenumber=$_POST["phonenumber"] ;
$email=$_POST["email"] ;
$pay=$_POST["pay"] ;



/*inserting values into database*/


 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newbird_airline";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "successful connection" ;

   $sql = "INSERT INTO `personal_details` (
                                  Title,First_Name, Last_Name,Date_Of_Birth,Gender,Meal,
                                 Special,Document,Nationality,Document_Number,Phone_Number,Email,
                                 Payment_Type
                                        )
    VALUES (
    '$title', '$first_name', '$last_name','$dateofbirth','$gender','$meal','$special',
    '$document','$nationality','$documentnumber','$phonenumber','$email','$pay'
           )";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    echo "You can Proceed to payment";
    }



catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

header("Location:Thanks.php") ;

                              }
?> 