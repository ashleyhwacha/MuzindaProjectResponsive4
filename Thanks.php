<html>
<!--Start Header-->
<head>
    <title><?php echo "Thank you Page"; ?></title>
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
</head></br></br></br>
<div class="clearfix"> </div>

<body>
<center><h1>Thank you for Choosing us.We promise you a world class flying experience</h1></center>
<div class="row">

 <img src="images/thankyou.jpg" alt="" /> 

</div>
</body></br></br></br></br></br></br></br></br></br></br></br>


<?php include("inc/footer.php") ;?>