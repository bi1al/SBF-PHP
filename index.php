<?php
include_once('connection2.php');
if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
$phone= $_POST['phone'];
 $message = $_POST['message'];
if(empty($name)){
$msg = "name required";
}
else if(empty($email)){
$msg = "email required";
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
echo $msg = "invalid email";
}
else if (empty($phone)){
    echo $msg="field is empty";
}
else if (empty($message)){
echo $msg = "field is empty";
}
else{
		mysqli_query($con,"insert into peoples_messages(name,email,phone,message) values('$name','$email','$phone','$message')");
		
}
}
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>foundation</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style-sheet.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
</head>
<body >

<!-- nav bar section-->
<nav class="navbar navbg navbar-fixed-top">
 <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span class="fa fa-bars" style="color:white"></span>    </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li><a href="#home">HOME</a></li>
      <li ><a href="#about">ABOUT US</a></li>
      <li ><a href="#test">TESTIMONIALS</a></li>
      <li ><a href="#">LIST</a></li>
      <li ><a href="#contact">CONTACT</a></li>
    </ul>
    <ul class="nav navbar-right">
      <li>
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span class="glyphicon glyphicon-log-in"></span> &nbsp;LOGIN AS ADMIN</button>
        <div id="id01" class="modal">
          <form class="modal-content animate " action="/login.php">
            <div class="container-fluid">
              <p style="font-size: 2vw" class="text-center">ONLY ADMIN CAN LOGIN</p>
              <label for="uname"><b>Username</b></label>
              <input type="text"   placeholder="Enter Username" name="uname" required>
              <label for="psw"><b>Password</b></label>
              <input type="password"    placeholder="Enter Password" name="psw" required>
              <button class ="logbtn" type="submit">Login</button>
            </div>
            <div class="container" style="background-color:#1a1a1a;border-top:1px solid #CCCCCC; width:auto;">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
          </form>
        </div>
      </li>
    </ul>
  
  </div></div>
</nav>
<!-- main banner -->
<main class="  text-center"  id="home">
  <div class="row">
    <div class="col-sm-12">
      <h1>MRASTIAL LEKWAL</h1>
      <p>Litrary, cultural and social organization</p>
    </div>
  </div>
</main>
<!-- about section -->
<section>
	<div class="container text-center">
	<div class="row">
	<h1>ABOUT US</h1>
		<div class="col-sm-6">
 
		
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolores, explicabo molestiae pariatur. Repellat expedita quibusdam iusto quia ipsum quod, sed asperiores, tempora minus amet ab accusantium consequuntur id quam! 	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolores, explicabo molestiae pariatur. Repellat expedita quibusdam iusto quia ipsum quod, sed asperiores, tempora minus amet ab accusantium consequuntur id quam! 
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolores, explicabo molestiae pariatur. Repellat expedita quibusdam iusto quia ipsum quod, sed asperiores, tempora minus amet ab accusantium consequuntur id quam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolores, explicabo molestiae pariatur. Repellat expedita quibusdam iusto quia ipsum quod, sed asperiores, tempora minus amet ab accusantium consequuntur id quam! 
	 	 
		</p>
		<button class="btn btn-info">Read More</button>
	</div>
	<div class="col-sm-6"> 
	<img src="images/about.jpg" max-width="100%" height="auto" class="d-block mx-auto img-responsive" alt="">
	</div>
	</div>
	</div>
</section>
<!-- testimonials section starts here-->
<div class="container-fluid" id="test" style="margin:0;padding:0;">
 <h1>TESTIMONIALS</h1>
  <div id="myCarousel" class="carousel slide caoursol" data-ride="carousel"   >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <div class="container-fluid bg-4 text-center" >
        <div class="row">
          <div class="col-sm-12">
            <img src="images/testi-pro_03.png" alt="girl" class="img-responsive center-block  testimg">
            <h4>Graphic Designer</h4>
            <img src="images/comma2_03.png" class="img-responsive pull-left"><br>
            <p>Lorem ipsum dolor sit amet,  consectetur adipisicing elit. Omnis iste, hic sed est saepe officiis sint quisquam quaerat odit rem sapiente molestiae harum inventore exercitationem unde. Quam, voluptatem repellat ipsa.</p>
            <img src="images/comma1_06.png" class="img-responsive pull-right"> </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container-fluid bg-4 text-center" >
        <div class="row">
          <div class="col-sm-12">
            
            <img src="images/testi-pro_03.png" alt="girl" class="img-responsive center-block  testimg">
            <h4>Graphic Designer</h4>
            <img src="images/comma2_03.png" class="img-responsive pull-left"><br>
            <p>Lorem ipsum dolor sit amet,  consectetur adipisicing elit. Omnis iste, hic sed est saepe officiis sint quisquam quaerat odit rem sapiente molestiae harum inventore exercitationem unde. Quam, voluptatem repellat ipsa.</p>
            <img src="images/comma1_06.png" class="img-responsive pull-right"> </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container-fluid bg-4 text-center" >
        <div class="row">
          <div class="col-sm-12">
            
            <img src="images/testi-pro_03.png" alt="girl" class="img-responsive center-block  testimg">
            <h4>Graphic Designer</h4>
            <img src="images/comma2_03.png" class="img-responsive pull-left"><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis iste, hic sed est saepe officiis sint quisquam quaerat odit rem sapiente molestiae harum inventore exercitationem unde. Quam, voluptatem repellat ipsa.</p>
            <img src="images/comma1_06.png" class="img-responsive pull-right"> </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls --> 
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a> </div>
</div>
<!-- contact section -->
 <div class="container-fluid bg-8" id="contact">
  <div class="well text-center" style=" background:none; border:none;color:#CCCCCC;border-radius:none; " >
    <div class="portfolio">
      <h1 style="font-size:3vw"><strong>SEND US A MESSAGE</strong></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
    <form action="" method="POST">
      <div class="row">
        <div class="col-sm-4">
          <input type="text" class="form-control" placeholder="NAME" name="name">
        </div>
        <div class="col-sm-4">
          <input type="email" class="form-control" placeholder="EMAIL" id="email" name="email">
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" placeholder="PHONE" name="phone" >
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          <textarea type="text" class="form-control" placeholder="MESSAGE" name="message"></textarea>
        </div>
      </div>
      <br>
      <a href="#" class="btn btn-default btnsub" name="submit" >SUBMIT</a>
    </form>

    <div class="col-sm-12"><p style="font-size:3vw;"> 
      <?php if(isset($_POST['submit'])){
      echo "submitted,thankew for your feedback :)"; }?>
      </p></div>
  </div>
</div> 
 
<div class=" text-center" style="padding: 10px;" >
  <h6>Copyright By Softogenic inc.&reg; All Right reserve</h6>
</div>
 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
<script>
		// Get the modal
		var modal = document.getElementById('id01');
		
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		</script> 
<script>
			// Get the modal
			var modal = document.getElementById('id01');
			
			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
					if (event.target == modal) {
							modal.style.display = "none";
					}
			}
			</script> 

</body>
</html>