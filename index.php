<?php
// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
?>

<?php
$con = mysqli_connect("localhost", "root", "") or die("No Connection");
mysqli_select_db($con,"schools") or die("No Database");

$id = isset($_POST['id']) ? $_POST['id'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$school_location = isset($_POST['school_location']) ? $_POST['school_location'] : '';
$principal = isset($_POST['principal']) ? $_POST['principal'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$students = isset($_POST['students']) ? $_POST['students'] : '';
$messages = isset($_POST['messages']) ? $_POST['messages'] : '';



// $sql = "INSERT INTO eschool (id,name,school_location,principal,phone,email,students,messages) VALUES ('$id', '$name', '$school_location', '$principal', '$phone', '$email', '$messages')";
$sql = "INSERT INTO eschool (id, name, school_location, principal, phone, email, students, messages)
    VALUES ('".$_POST["id"]."','".$_POST["name"]."','".$_POST["school_location"]."','".$_POST["principal"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["students"]."','".$_POST["messages"]."')";
$sql = mysqli_query($con,$sql);


if (!$sql) {
  echo '<script type="text/javascript">alert("Sorry This name has already been taken by another school ");</script>';
}
else{
  echo '<script type="text/javascript">alert("Thank you, We will contact to you within 24hrs ");</script>';

}
?>


<html>
<title> Xpress </title>
<link rel="icon" href="images/hamujtech.jpg">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">

@import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);

html,
body {
  -moz-box-sizing: border-box;
       box-sizing: border-box;
  height: 100%;
  width: 100%; 
  background: whitesmoke;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
}



.formtwo {
  outline: 0;
  float: left;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  -webkit-border-radius: 4px;
  border-radius: 4px;
}

.formtwo > .textbox {
  outline: 0;
  height: 42px;
  width: 244px;
  line-height: 42px;
  padding: 0 16px;
  background-color: rgba(255, 255, 255, 0.8);
  color: #212121;
  border: 0;
  float: left;
  -webkit-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
}

.formtwo > .textbox:focus {
  outline: 0;
  background-color: #FFF;
}

.formtwo > .button {
  outline: 0;
  background: none;
  background-color: rgba(38, 50, 56, 0.8);
  float: left;
  height: 42px;
  width: 42px;
  text-align: center;
  line-height: 42px;
  border: 0;
  color: #FFF;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 16px;
  text-rendering: auto;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transition: background-color .4s ease;
  transition: background-color .4s ease;
  -webkit-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}

.formtwo > .button:hover {
  background-color: rgba(0, 150, 136, 0.8);
}


 
.wrapper {
  display: table;
  height: 100%;
  width: 100%;
}

.container-fostrap {
  display: table-cell;
  padding: 1em;
  text-align: center;
  vertical-align: middle;
}
.fostrap-logo {
  width: 100px;
  margin-bottom:15px
}
h1.heading {
  color: #fff;
  font-size: 1.15em;
  font-weight: 900;
  margin: 0 0 0.5em;
  color: #505050;
}
@media (min-width: 450px) {
  h1.heading {
    font-size: 3.55em;
  }
}
@media (min-width: 760px) {
  h1.heading {
    font-size: 3.05em;
  }
}
@media (min-width: 900px) {
  h1.heading {
    font-size: 3.25em;
    margin: 0 0 0.3em;
  }
} 
.card {
  display: block; 
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); 
    transition: box-shadow .25s; 
}
.card:hover {
  box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
.img-card {
  width: 100%;
  height:auto;
  border-top-left-radius:2px;
  border-top-right-radius:2px;
  display:block;
    overflow: hidden;
}
.img-card img{
  width: 100%;
  height: auto;
  object-fit:cover; 
  transition: all .25s ease;
} 
.card-content {
  padding:15px;
  text-align:left;
}
.card-title {
  margin-top:0px;
  font-weight: 700;
  font-size: 1.65em;
}
.card-title a {
  color: #000;
  text-decoration: none !important;
}
.card-read-more {
  border-top: 1px solid #D4D4D4;
}
.card-read-more a {
  text-decoration: none !important;
  padding:10px;
  font-weight:600;
  text-transform: uppercase
}

.modal-body{
    height: 250px;
    overflow-y: auto;
}

@media (min-height: 500px) {
    .modal-body { height: 400px; }
}

@media (min-height: 800px) {
    .modal-body { height: 600px; }
}




ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: #29587d;
  position: relative;
}
.footer-cta {
  border-bottom: 1px solid #373636;
}
.single-cta i {
  color: #ff5e14;
  font-size: 30px;
  float: left;
  margin-top: 8px;
}
.cta-text {
  padding-left: 15px;
  display: inline-block;
}
.cta-text h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}
.cta-text span {
  color: #757575;
  font-size: 15px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 200px;
}
.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
      color: #7e7e7e;
  line-height: 28px;
}
.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}
.footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
}
.facebook-bg{
  background: #3B5998;
}
.twitter-bg{
  background: #55ACEE;
}
.google-bg{
  background: #DD4B39;
}
.footer-widget-heading h3 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #ff5e14;
}
.footer-widget ul li {
  display: inline-block;
  float: left;
  width: 50%;
  margin-bottom: 12px;
}
.footer-widget ul li a:hover{
  color: #ff5e14;
}
.footer-widget ul li a {
  color: #878787;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #ff5e14;
    padding: 13px 20px;
    border: 1px solid #ff5e14;
    top: 0;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #202020;
  padding: 25px 0;
}
.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #878787;
}
.copyright-text p a{
  color: #ff5e14;
}
.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}
.footer-menu li:hover a{
  color: #ff5e14;
}
.footer-menu li a {
  font-size: 14px;
  color: #878787;
}



  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: 0;
}

input,
textarea,
button,
select, img, span,
a {
  -webkit-tap-highlight-color: rgba(0,0,0,0);
   outline: 0;
}

/*Fonts from external source*/
@font-face {
  src: url(C:\Users\Home\AppData\Local\Temp\atom-118019-14536-1ea9572.rtm9ozuxr\league-spartan.zip\LeagueSpartan-Bold.otf);
  font-family: League Spartan;
}
/*Fonts from external source*/



/*Navigation Bar*/
.logo {
  position: absolute;
 ??margin-top: 15px;
  font-size: 16px;
  margin-left: 13px;
}

.logo h1 {
   font-family: Segoe UI, Helvetica, calibri, serif;
   margin-top: 4px;
}

#menu {
  position: absolute;
  right: 20px;
  top: 17px;
  cursor: pointer;
  display: none;
}

#close {
   position: absolute;
   top: 17px;
   right: 20px;
   cursor: pointer;
   display: none;
}

nav ul {
  display: block;
  float: right;
  overflow: hidden;
  margin: 7px 0;
  margin-right: 10px;
}

nav ul li {
  list-style-type: none;
  float: left;
  text-align: center;
  padding: 10px;
  font-family: 'Roboto', Helvetica, sans-serif;
  font-size: 17px;
}

nav ul li a {
  text-decoration: none;
  color: black;
}

@media screen and (max-width: 617px) {
  .logo {
    margin-top: 7px;
    position: relative;
    overflow: hidden;
    display: block;
    font-size: 14px;
  }
   .logo h1 {
      position: relative;
      margin-bottom: 10px;
   }
  nav {
    width: 100vw;
    height: 100vh;
    display: none;
  }
  nav ul {
    padding-top: 20px;
    display: block;
    width: 100%;
    margin: auto;
  }
  .nav-expanded {
    display: block;
  }
  nav ul li {
    float: none;
    border-bottom: 2px solid #D8D8D8;
  }
  nav ul li:last-child {
    border-bottom: none;
  }
  #menu {
    display: block;
  }
}
/*Navigation Bar*/



/*Hero Image*/
header {
  width: 100vw;
  height: 95vh;
  background: linear-gradient(rgba(0, 0, 0, 0.10), rgba(0, 0, 0, 0.10)), url('images/bg2.jpg');
  background-size: cover;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-position: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.header-text {
  width: 500px;
  text-align: center;
}

header h1 {
  margin-bottom: 10px;
  font-family: League Spartan, sans-serif;
  font-weight: 500;
  font-size: 45px;
  color: white;
}

#photography {
  font-size: 60px;
  letter-spacing: 0.5px;
}

header p {
  margin-bottom: 20px;
  font-family: 'Open Sans', Helvetica, sans-serif;
  color: white;
  font-size: 18px;
}

header button {
  border: 2px solid white;
  color: white;
  font-family: 'Roboto', Segoe UI, calibri, Helvetica, serif;
  padding: 10px;
  font-size: 18px;
  width: 160px;
  border-radius: 500px;
  cursor: pointer;
  background-color: transparent;
  transition: all 0.2s ease-in-out;
}

header button:hover, button:active {
  background-color: white;
  color: black;
}

@media screen and (max-width: 676px) {
  .header-text {
    width: 95%;
    text-align: center;
  }
}

@media screen and (max-width: 601px) {
  #photography {
    font-size: 45px;
  }
  header h1 {
    font-size: 30px;
  }
  header p {
    font-size: 15px;
    width: 85%;
    display: block;
    margin: auto;
    margin-bottom: 20px;
  }
  header button {
    font-size: 16px;
    width: 140px;
  }
}

@media screen and (max-width: 460px) {
  #photography {
    font-size: 35px;
  }
  header h1 {
    font-size: 28px;
  }
}
/*Hero Image*/

@media only screen and (max-width: 300px) {
  #upspace {
    margin-top: 100px;
  }
}


@media only screen and (max-width: 600px) {
  iframe {
    width: 310px;
    height: 200px;
    margin-left: -260px;
  }
}
</style>
<body>
   
<!--Navigation Bar-->
  <div class="logo">
    <h3 style="color: #29587d; font-weight: bold;"> <form class="formtwo" method="post" style="margin-top: 10px;">
  <input type="text" class="textbox" placeholder="Search">
  <input title="Search" value="???" type="submit" class="button">
</form></h3>
  </div>
   <span id="close"> <img style="width: 25px;" src="http://www.pvhc.net/img5/onbbqnqzkjrtvirmiqnp.png" alt="CLOSE"> </img> </span>
  <span id="menu"> <img style="width: 25px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR11WXR-a18XfNZknL7S4lu0lLyC4aWZPY4sLd4wNHUNv9So2gd" alt="MENU"> </span>
  <nav>
    <ul>
      <!-- <li> <a href="#"> HOME </a> </li>
      <li> <a href="#"> SCHEDULE OF PAYMENT </a> </li>
      <li> <a href="requirements.pdf"> PROCESS REQUIREMENT </a> </li>
      <li> <a href="#"> FORMS </a> </li>
      <li> <a href="payments.pdf"> E-PAYMENT </a> </li> -->
      <li> <a href="https://www.schoolsnetwork.ng/about.php"> People </a> </li>
      <!-- <li> <a href="#"> BOOK NOW </a> </li> -->
      <li> <a href="http://hamujtechnology.com.ng/"> Government </a> </li>
      <li> <a href="http://hamujtechnology.com.ng/"> Schools </a> </li>
      <li> <a href="http://hamujtechnology.com.ng/"> Companies </a> </li>
    </ul>
  </nav>
<!--Navigation Bar-->


<!--Hero Image-->
  <header>
    <div class="header-text">
    <h1>   <br><span id="photography">  </span></h1>
    <!-- <p> Kano State Bureau for Land Management is vested with the authority of land administration in the state. It is an offshoot of Kano provisional land office which undergoes series of transformations. In 1964. </p> -->
    <button> Join Us!</button>
    </div>
  </header>
  <!--Hero Image-->

<section id="upspace" class="wrapper" style="margin-top: -100px;">
    <div class="container-fostrap">
        
        <div class="content">
            <div class="container">
                <div class="row">
                    
                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                            <img src="images/jafar1.jpg" style="width:50px;height:50px;margin-right:15px; float: left; text-align: justify; "><p style="text-align: justify; margin-left: 10px; margin-right: 10px; padding-top: 10px;">Xpress is the Voice of Nigeria in Nigeria Languages
Join Nigeri's Best minds that speak their mind on Xpress</p>

                            
                            <div class="card-read-more">
                                <div class="container">
 
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Join Us!
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center; font-weight: bold;">eSchool Registration Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

          <form action="index.php" method="post" style="text-align: left; font-weight: bold;">
          <label>Name of the School</label>
          <input name="name" id="name" type="text" class="form-control">
          <label>Location</label>
          <input name="school_location" id="school_location" type="text" class="form-control">
          <label>Name of the Principal</label>
          <input name="principal" id="principal" type="text" class="form-control">
          <label>Phone Number</label>
          <input name="phone" id="phone" type="number" class="form-control">
          <label>Email Address</label>
          <input name="email" id="email" type="email" class="form-control">
          <label>Total Number of the Students</label>
          <input name="students" id="students" type="number" class="form-control">
          <label>Message</label>
          <textarea name="messages" id="messages" class="form-control" placeholder="Any Message?"></textarea>
          <input type="submit" name="submit" class="btn btn-primary" style="margin-top: 10px;">
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
                            </div>
                        </div>
                    </div>
                   <div style="margin-left: 250px;">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/803tq_4mFLs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>







    



  <footer class="footer-section" style="border-top-right-radius: 0; border-top-left-radius: 0;">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4 style="color: #ffffff;">Find us</h4>
                                <span style="color: #ffffff;">N0 B1 Hamisu Abba Sumaila Plaza, Tarauni Market along Maiduguri Road, Kano State</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4 style="color: #ffffff;">Call us</h4>
                                <span style="color: #ffffff;">08039150071</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4 style="color: #ffffff;">Mail us</h4>
                                <span style="color: #ffffff;">eschool@schoolsnetwork.ng</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="images/hamujtech.jpg" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                              <h3 style="color: #fff;">Our Vision</h3>
                                <p style="color: #ffffff;">A state where every citizen has the opportunity to access and own land in a planned environment.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3 style="color: #ffffff;">Services</h3>
                            </div>
                            <ul style="color: #ffffff;">
                                <li><a style="color: #ffffff;" href="#">Application</a></li>
                                <li><a style="color: #ffffff;" href="#">Admission</a></li>
                                <li><a style="color: #ffffff;" href="#">Payment</a></li>
                                <li><a style="color: #ffffff;" href="#">Result</a></li>
                                <li><a style="color: #ffffff;" href="#">Attendance</a></li>
                                <li><a style="color: #ffffff;" href="#">E-Laerning</a></li>
                               <!--  <li><a href="#">SLTR</a></li>
                                <li><a href="#">Survey</a></li>
                                <li><a href="#">PRS</a></li>
                                <li><a href="#">Legal</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3 style="color: #ffffff;">Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p style="color: #ffffff;">Don???t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Design  by <a href="http://hamujtechnology.com.ng/">Hamuj Technology</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <!-- <ul>
                                <li><a href="#">Schedule of Payment</a></li>
                                <li><a href="requrements.pdf">Process Requirement</a></li>
                                <li><a href="#">Forms</a></li>
                                <li><a href="#">E-Payment</a></li> -->
                                <li><a href="http://hamujtechnology.com.ng/">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 ??
</body>
<script type="text/javascript">
  
</script>


<script type="text/javascript">
  jQuery(document).ready(function() {
  jQuery("#menu").click(function () {
    jQuery("nav").slideToggle(400, function () {
      jQuery(this).toggleClass("nav-expanded").css('display', '');
    });
  });
});

jQuery(document).ready(function() {
  jQuery("#close").click(function () {
    jQuery("nav").slideToggle(400, function () {
      jQuery(this).toggleClass("nav-expanded").css('display', '');
    });
  });
});

var menu = document.getElementById("menu");
var close = document.getElementById("close");

menu.addEventListener('click', showClose);

function showClose () {
   var menu = document.getElementById("menu");
   var close = document.getElementById("close");
   menu.style.display = "none";
   close.style.display = "block";
}


close.addEventListener('click', showMenu);

function showMenu () {
   var menu = document.getElementById("menu");
   var close = document.getElementById("close");
   menu.style.display = "block";
   close.style.display = "none";
}

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</html>
