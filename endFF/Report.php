<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
	  <script src="js/navscript.js" defer></script>
    <script src="js/adoptionjs.js" defer></script>
    <title>Fluffy Tails</title>
    <link rel="icon" href="image/icon_30px.png" type="image/x-icon" />

    <!------------ Script for clearing the form ------------>
    <script>
      window.onload = function() {
          // Clear the form fields
          document.getElementById("mail_form").reset();
          sessionStorage.clear(); // Optionally clear session storage
      };
   </script>
</head>
<body class="body_blue">
    <!----------------Navigation Bar--------------------->
    <div class="banner2">
      <!--The navigation bar Starts here-->
      <nav class="navbar">
        <div class="logo"><img src="image/icon_60px.png" alt="fluffy tails" height="45px" width="45px"> Fluffy Tails</div>
        <a href="#" class="hamburger">
          <span class="hamburger_line"></span>
          <span class="hamburger_line"></span>
          <span class="hamburger_line"></span>
        </a>
        <div class="nav_menu">
          <ul>
            <li class="nav_menu_link" ><a class="menu_blue_element"  href="index.html">Home</a></li>
            <li class="nav_menu_link"><a class="menu_blue_element" href="Adoption.html">Adoption </a></li>
            <li class="nav_menu_link"><a class="menu_blue_element" href="lost.html">Missing Bunnies</a></li>
            <li class="nav_menu_link"><a class="menu_blue_element" href="store.html">Store</a></li>
          </ul>
        </div>
      </nav>
        <div class="welcome">
          <h1 class="slide_left" style="font-size: 10vh; ">Thank 
            <span style="color: #FFC0CB;">You</span> For
            <span style="color: #8AC4D2;">Caring</span>  
          </h1>
          <h3 class="slide_left tp">
            Please fill out the form to initiate a rescue for the injured rabbit.<br>
            Your information will be sent directly to our dedicated rescue unit,<br> who will
            promptly assess the situation and begin the mission to help the<br> rabbit in need. 
            Thank you for your compassion and support!  
          </h3>
        </div>
      </div>
    <!----------------Navigation Bar End----------------->

    <!----------------Report A Rescue-------------------->
    <div class="report_container" >
        <form class="form_r" id="mail_form"  method="POST" action="include/send_email.php">
            <h3 class="form_title" style="justify-content: center;align-items: center; display:flex;">
              <img src="image/rabbit(1)_efb1.gif"  height="50px" width="50px"/>
              Report a Needed Rescue Mission 
              <img src="image/rabbit(1)_efb1.gif"  height="50px" width="50px"/></h3><br><br>
            <span class="form_group">
                <label class="form_label">Full Name:</label>
                <input class="form_input" type="text" id="name" name="name" required >
            </span>

            <span class="form_group">
                <label class="form_label" for="email">Email:</label> 
                <input class="form_input"  type="email" id="email" name="email"required >
            </span>

            <span class="form_group">
                <label class="form_label" for="photo">Upload Photo:</label> 
                <input  class="form_input" type="file" id="photo" name="photo" accept="image/*">
            </span>

            <span class="form_group">
                <label class="form_label" for="des">Details for the Rescue:</label> 
                <textarea class="form_input"  rows="7" cols="80" id="des" name="des" required></textarea>
            </span><br>
            <button type="submit" class="submit_button"  >Submit</button>
        </form>
        
        <div style="color:red">
						<?php include('include/send_email.php');?>
				</div>
        
    </div>
    <!----------------Report A Rescue Ends--------------->
    <img id="back-to-top" src="image/up.gif" alt="Scroll to Top" />
     <!---------------footer begin----------------------->
     <footer>
        <div class="copyright">
            <div class="socialMedia">
                <p>
                  <a class="location" href="https://maps.app.goo.gl/RCrNtVXJvejiAwBP8">
                    <img src="image/location.png" height="20px" width="20px">Our Location
                  </a>
                </p>
            </div>
            <p>© 2024 1-200-FLUFFY_TAILS.com, Inc. | Al Khobar, KSA</p> 
            <a href="mailto: fluffy.tails1@hotmail.com"style="text-decoration: none;"><img class="img_icon" src="image/mail.png" alt="email" width="20" height="20"></a>
            <a href="https://www.twitter.com"style="text-decoration: none;"><img class="img_icon" src="image/twitter.png" alt="twitter" width="20" height="20"></a>
            <a href="https://www.facebook.com/"style="text-decoration: none;"><img class="img_icon" src="image/facebook.png" alt="facebook" width="20" height="20"> </a>
            <a href="https://www.instagram.com" style="text-decoration: none;"><img class="img_icon" src="image/instagram.png" alt="instagram" width="20" height="20"></a>
        </div>
        <img  src="image/ears.gif" height="100px" width="80px">
    </footer>
    <!---------------footer ends------------------------>
</body>
</html>
