<?php
if(isset($_POST["talk"])){

$tit=$_POST["tit"] ;
$first=$_POST["fist"] ;
$sur=$_POST["sur"] ;
$ema=$_POST["ema"] ;
$telnum=$_POST["telnum"] ;
$celnum=$_POST["celnum"] ;
$sub=$_POST["sub"] ;
$msg=$_POST["msg"] ;




/*inserting contact values into database*/


 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newbird_airline";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "successful connection" ;

   $sql = "INSERT INTO `contact` (
                                  Title,FirstName,Surname,Email,TelephoneNumber,CellNumber,
                                 Subject,Message
                                        )
           VALUES (
                   '$tit', '$first', '$sur','$ema','$telnum','$celnum','$sub',
                   '$msg'
           )";
    // use exec() because no results are returned
    $conn->query($sql);

    
   
    }



catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

header("Location:Thanks.php") ;

                              }
?> 