<html>
<!--Start Header-->
<head>
    <title><?php echo"Personal Details"; ?></title>
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

<!--End Header-->

<!--Accepting get variable and displaying single row-->
<?php
$servername = "localhost";
$username = "root";
 $password = "";   
 $id=$_GET['id'] ;




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


try{

    $result=$conn->query("SELECT * FROM round_trip WHERE id = '$id'"); 
          
 
?>

         <h1>YOUR FLIGHT</h1>
    <table class="table table-bordered table-striped" > 
     <tr>
         <th bgcolor="#5D7B9D"><font color="black">Departing City</font></th>
         <th bgcolor="#5D7B9D"><font color="black">Arriving City</font></th>
         <th bgcolor="#5D7B9D"><font color="black">Price Per Individual</font></th>
         <th bgcolor="#5D7B9D"><font color="black">Class</font></th>
    </tr>
        
    
        <!--output of each row-->
  <?php $row = $result->fetch(PDO::FETCH_ASSOC)  ?>
    
     <tr>
      <td bgcolor="#5D7B9D"><font color="red"><?php echo $row['departure']; ?></font></td> 
        <td bgcolor="#5D7B9D"><font color="red"><?php echo $row['arrival']; ?></font></td> 
        <td bgcolor="#5D7B9D"><font color="red"><?php echo $row['price']; ?></font></td>
        <td bgcolor="#5D7B9D"><font color="red"><?php echo $row['class']; ?></font></td> 
     </tr>  
     </table>                                                
  <?php
                                                       
      } catch(Exception $e){

    echo "unable to retrieve";
              exit;
                           }                                                                          
 ?>   























<!--Start Personal Details Form-->





      <div class="row">
             <div class="col-lg-2"></div>
             <div class="col-lg-8"><center><h1>Personal details Form</h1></center></div>
             <div class="col-lg-2"></div>
      </div>
        <div class="row">
          <div class="col-lg-2"></div>
    <div class="col-lg-8">
    <!--Start form-->    
<form  method="post" action="insert_values.php" >
 
 
 

        <h1>Please fill in all detail fields inorder for us to facilitate your payment </h1>
    <div class="row">
        <div class="col-lg-3">
  
                     <label for="title">Title:</br></label>
         </div>
                      
        <div class="col-lg-3">
                           <select id="title" name="title" >
                                    <option>Mr</option>
                                    <option>Mrs</option> 
                                    <option>Miss</option> 
                           <select/>
          </div> 
               
          <div class="col-lg-3">
          <label for="first_name">First Name:</br></label>
          </div> 
                      

          <div class="col-lg-3">
              <input type="text" id="first_name" name="first_name" required/>
         </div> 
    </div></br>
        <!--end row-->  
        <!--start row--> 
    <div class="row">           

        <div class="col-lg-3" >
        <label for="first_name">Last Name:</br></label>
        </div>
        
        <div class="col-lg-3" >
        <input type="text" id="last_name" name="last_name" required/>
        </div>

        <div class="col-lg-3"> 
         <label for="dateofbirth">Date of Birth:</label>
         </div>
        
        <div class="col-lg-3" >
        <input type="date" id="dateofbirth" name="dateofbirth" required/>
        </div>
   </div></br>
 <!--end row-->
 
 <!--Start row-->
 <div class="row">
  
        <div class="col-lg-3">
        <label for="gender">Gender:</label>
        </div>
                              
        <div class="col-lg-3">
        <input type="radio" name="gender" value="male" checked required/> Male
        </div>

        <div class="col-lg-3">
        <input type="radio" name="gender" value="female" required/> Female
        </div>

        <div class="col-lg-3">
        
        </div>

</div></br>
<!--end row-->           
            
<h1> Travel Preferences </h1>
 <!--Start row-->
 <div class="row">

           <div class="col-lg-3">
               <label for="meal">Meal Preferences:</br></label>
           </div>
             
          <div class="col-lg-3">                              
               <select id="meal" name="meal">
                              <option>Vegan</option>
                              <option>Non-Vegan</option> 
               <select/>
          </div>

          <div class="col-lg-3" >
           <label for="special">Special Request:</br></label>
          </div>

          <div class="col-lg-3">
              <select id="special" name="special" required>
                <option disabled selected value> -- select an option -- </option>
                <option>Non</option> 
                <option>Blind Passenger</option>
                <option>Deaf Passenger</option> 
                <option>Medical Case</option>
                
              <select/>
          </div>
</div> </br>
<!--end row-->  

    
    <h1>Travel Documentation Information:</h1>
      <!--Start row--> 
    
    <div class="row"> 
        <div class="col-lg-3">
        <label for="document">Type of Document</br></label>
        </div>
       
        <div class="col-lg-3">
             <select id="document" name="document">
                      <option>Passport</option>
                      <option>ETD</option> 
             <select/>
        </div> 

        <div class="col-lg-3">
        <label for="nationality">Nationality</br></label>
        </div>
          
        <div class="col-lg-3" >                          
         <select id="nationality" name="nationality">
                  <option>African</option>
                  <option>American</option> 
                  <option>Asian</option> 
                  <option>Australian</option>
                  <option>European</option>
         <select/>
        </div>
   </div>  </br>
     <!--end row--> 
<!--Start row--> 
<div class="row">

          <div class="col-lg-3">
          <label for="documentnumber">Document Number:</br></label>
          </div>

          <div class="col-lg-3">
          <input type="number" id="documentnumber" name="documentnumber" required/>
          </div> 

          <div class="col-lg-3">
          
          </div> 

          <div class="col-lg-3">
          
          </div> 
 </div>  </br>                                 
                                                         
<!--End Adult Section-->


<!--Contact Information Section-->
    
<h1>Contact Information:Please make sure you fill in the phone number correctly</h1>
<div class="row" >

       <div class="col-lg-3" >
       <label for="phonenumber">Phone Number:</label>
       </div>
        
        <div class="col-lg-3">
        <input type="tel" id="phonenumber" name="phonenumber" required/>
        </div>

        <div class="col-lg-3" >
        <label for="email">Email:</label>
        </div>
        
        <div class="col-lg-3">
        <input type="email" name="email" required/>
        </div>
      
</div> </br>

<h1> Payment:</h1>
 <div class="row">

 <div class="col-lg-4">
  <input type="radio" name="pay" value="Master Card"  required/> Card (Mastercard)     
</div>

<div class="col-lg-4"> 
      <input type="radio" name="pay" value="Mobile Money"  required/> Mobile Money Transfer
</div>


<div class="col-lg-4"> 
  <input type="radio" name="pay" value="Male" required/> Pay At Agent 
</div>

 </div>
                       
          <input name="personal" class="btn btn-primary btn-lg btn-block" type="submit" value="BOOK">
         

</form>

 </div><div class="col-lg-2"></div></div>
 
<?php include("inc/footer.php") ; ?>