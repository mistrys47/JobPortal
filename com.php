<?php

session_start();

//print_r($_SESSION);
$con=mysqli_connect("127.0.0.1","root","")or
    die("Could not connect: " . mysql_error());
	//Select Database
	mysqli_select_db($con,"customer_su")or
	die("Could not select db: " . mysql_error());
	$email=$_SESSION['email'];
	$result=mysqli_query($con,"SELECT * FROM com_su WHERE email='$email'");
	$n=mysqli_fetch_array($result);
	

?>


<!DOCTYPE html>

<html><head>


<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
  


<script>
  function preventBack(){window.history.forward();}
	  setTimeout("preventBack()", 0);
	  window.onunload=function (){null};
  }
  </script>
  </head>

<body>


<div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
	
	
	<header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="homepage.php" class="text-black h2 mb-0"><img src="jobplanet.png" height="70px"></img></a></h1>
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">
	
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="com.php" >Home</a></li>
				<li class="has-children">
                  <a >Search</a>
                  <ul class="dropdown">
                    <li><a href="com_next.php" target="target">Job Requirment</a></li>
					<li><a href="company_search.php" target="target">Applicants</a></li>
                    <li><a href="company_update.php" target="target">Requirment Update</a></li>                 
                  </ul>
                </li>
							
				<li><a href="aboutus.php" target="target">About</a></li>
				<li><a href="logout.php">Logout</a></li>
                <li><a href="com_home.php" target="target"><span class="rounded bg-primary py-2 px-3 text-white"><?php echo $n['username'];  ?></span></a></li>

				</ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
		  
		  

        </div>
      </div>
    </header>
	
   </div>





<div >
<iframe  style="border:none;" src="background.php" width="100%" height="900px"  name="target"></iframe>

</iframe>
</div>
</div>
</body>
</html>
