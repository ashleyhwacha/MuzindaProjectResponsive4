<?php 
$from =$_POST["from"] ;
$to =$_POST["to"] ;


//*Connecting to database

$servername = "localhost";
$username = "root";
 $password = "";       




try {
    $conn = new PDO("mysql:host=$servername;dbname=newbird_airline", $username,$password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    exit;
    }
//End connecting to database-->

 ?>
 
<!--Start Page Header-->

<html>

<head>
    <title>Return Flights</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style-form.css" rel="stylesheet" type="text/css" media="all" />

   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
    

    <div class="header">
                <div class="head-bg">
                    <!-- container -->
                    <div class="container">
                        <div class="head-logo">
                            <a href="index.php"><img src="images/logo1.png" alt="" /></a>
                        </div>
                        <div class="top-nav">
                            <span class="menu"><img src="images/menu.png" alt=""></span>
                                <ul class="cl-effect-1">
                                    <li><a href="index.php">HOME</a></li>                                             
                                    <li><a href="about.php">ABOUT US</a></li>
                                    
                                    <li><a href="contact.php">CONTACT US</a></li>  
                                </ul>
                                <!-- script-for-menu -->
                                 <script>
                                   $( "span.menu" ).click(function() {
                                     $( "ul.cl-effect-1" ).slideToggle( 300, function() {
                                     // Animation complete.
                                      });
                                     });
                                </script>
                            <!-- /script-for-menu -->
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!-- //container -->
                </div>
</head></br></br>



<!--End Page Header-->










<?php


 
 
		try{

		$result=$conn->query("SELECT * FROM round_trip WHERE departure = '$from' AND arrival = '$to'"); 
          
 ?>

<div class="box-body table-responsive no-padding">
         <h1>ROUNDTRIP FLIGHTS</h1>
         <h3>CLICK ON YOUR FLIGHT OF PREFERENCE TO BOOK IT</h3>
     <table class="table table-bordered table-striped" >
        <tr>
              <th bgcolor="#5D7B9D"><font color="black">Departing City</font></th>
              <th bgcolor="#5D7B9D"><font color="black">Arriving City</font></th>
              <th bgcolor="#5D7B9D"><font color="black">Departing Date</font></th>
              <th bgcolor="#5D7B9D"><font color="black">Return Date</font></th>
              <th bgcolor="#5D7B9D"><font color="black">Class</font></th>
              <th bgcolor="#5D7B9D"><font color="black">Price</font></th>

              

        </tr>
       <a href="#" ></a> 
		
        <!--output of each row-->
	<?php	while ($row = $result->fetch(PDO::FETCH_ASSOC)){  ?>
		
     <tr>
	    <td bgcolor="#5D7B9D">
       
            <a href="personal_details_form.php?id=<?php echo $row['id'];?>">
             <font color="red">
                <?php echo $row['departure']; ?>
             </font>
            </a>  
     </td>

     <td bgcolor="#5D7B9D">
       
            <a href="personal_details_form.php?id=<?php echo $row['id'];?>">
             <font color="red">
                <?php echo $row['arrival']; ?>
             </font>
            </a>  
     </td>

     <td bgcolor="#5D7B9D">
       
            <a href="personal_details_form.php?id=<?php echo $row['id'];?>">
             <font color="red">
                <?php echo $row['departure date']; ?>
             </font>
            </a>  
     </td>
      
      <td bgcolor="#5D7B9D">
       
            <a href="personal_details_form.php?id=<?php echo $row['id'];?>">
             <font color="red">
                <?php echo $row['Return date']; ?>
             </font>
            </a>  
     </td>

     <td bgcolor="#5D7B9D">
       
            <a href="personal_details_form.php?id=<?php echo $row['id'];?>">
             <font color="red">
                <?php echo $row['class']; ?>
             </font>
            </a>  
     </td>

     <td bgcolor="#5D7B9D">
       
            <a href="personal_details_form.php?id=<?php echo $row['id'];?>">
             <font color="red">
                <?php echo $row['price']; ?>
             </font>
            </a>  
     </td>
     
        
     </tr>

                                                  
  <?php
		                                                   }
		  } catch(Exception $e){

		echo "unable to retrieve";
		          exit;
		                       }                                                                          
 ?>   
  </table>            
 




<div class="banner-grids">
      <!-- container -->
      <div class="container">
        <div class="banner-grid-info">
          <h3>DISCOUNT DESTINATIONS</h3>
          <p>The best airline always giving you the best deals.</p>
        </div>
        <div class="top-grids">
          <div class="top-grid">
            <img src="images/masvingo.jpg" alt="" />
            <div class="top-grid-info">
              <h3>Exotic Masvingo</h3>
              <p>Experience Zimbabwe from an exotic front.Masvingo Is Zimbabwes oldest town which harbours the Great Zimbabwe ruins  .</p>
            </div>
          </div>
          <div class="top-grid">
            <img src="images/jacaranda.jpg" alt="" />
            <div class="top-grid-info">
              <h3>Sunshine City Harare</h3>
              <p>Zimbabwe's capital and biggest city.Uniquely adorned by the dazzling jacaranda trees .</p>
            </div>
          </div>
          <div class="top-grid">
            <img src="images/pamushana.jpg" alt="" />
            <div class="top-grid-info">
              <h3>World Class Singita Pamushana Lodge</h3>
              <p>Set high in the hills amongst dramatic boulders, the organic-shaped buildings of Singita Pamushana Lodge are reminiscent of the ruins of Great Zimbabwe.</p>
            </div>
          </div>
          <div class="top-grid">
            <img src="images/bulawayo.jpg" alt="" />
            <div class="top-grid-info">
              <h3>City of Kings Bulawayo</h3>
              <p>The Second Largest City in Zimbabwe.Majestically set in the grand Matebeleland province ,oozing class in hospitality .</p>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
      <!-- //container -->
    </div>
    <!-- //banner-grids -->
   



<?php	    include("inc/footer.php") ; ?> 




               
                                        

                                 

   








