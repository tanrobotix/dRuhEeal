<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign up</title>
  <link rel="icon" href="img/ind/tess.png">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="emulate/css/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/css2.css">
  <!-- Latest compiled and minified CSS -->

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    body, html {
      height: 100%;
      line-height: 1.8;
    }
    /* Full height image header */
    .w3-bar .w3-button {
      padding: 16px;
    }
  </style>
</head>
<body>
  <div class="w3-top">
    <div class="w3-bar w3-white w3-card-2" id="myNavbar">
      <a href="index.html" class="w3-bar-item w3-button w3-wide">TESSERACT</a>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
        <a href="about.html" class="w3-bar-item w3-button">ABOUT</a>
        <a href="me.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
        <a href="work.html" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
        <a href="contact.html" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>    </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>
    <!-- Sidebar on <small></small>l screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
      <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
      <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
      <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    </nav>


    <!-- Sign up section -->
    <div class="w3-container w3-light-grey" style="padding:128px 16px" id="signup">
      <h3 class="w3-center">SIGN UP</h3>
      <div class="w3-row-padding" style="margin-top:64px">
        <div class="w3-half">
          <form action="libs/signup_process.php" method="POST">
          <p><input class="w3-input w3-border" type="text" name="txtUser_id" placeholder="ID"></p>
            <p><input class="w3-input w3-border" type="text" name="txtFirstname" placeholder="First name"></p>
            <p><input class="w3-input w3-border" type="text" name="txtLastname" placeholder="Last name"></p>
            <p><input class="w3-input w3-border" type="text" name="txtUsername" placeholder="Username"></p>
            <p><input class="w3-input w3-border" type="text" name="txtPasswords" placeholder="Passwords"></p>

          <!-- <div class="clearfix">
            <button type="submit" class="cancelbtn">CALCEL</button>
          </div> -->
        </div>
        <div class="w3-half">

          <p><input class="w3-input w3-border" type="text" name="txtEmail" placeholder="Email"></p>
          <p><input class="w3-input w3-border" type="date" name="txtBirthday" placeholder="Birthday"></p>
          <select class="w3-select w3-border" name="txtSex">
            <option value=""></option>
            <option value="Nam">Nam</option>
            <option value="Nu">Nữ</option>
          </select>
          <p><input class="w3-input w3-border" type="text" name="txtLocation" placeholder="Location"></p>
          <!-- <p><input class="w3-input w3-border" type="text" placeholder="Postal Code"></p>  -->
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <div class="clearfix">
          <button class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-64">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
      <a href="https://www.facebook.com/lambor.tan" class="fa fa-facebook-official w3-hover-opacity" target="_blank"></a>
      <a href="https://www.instagram.com/duytannnn/?hl=en" class="fa fa-instagram w3-hover-opacity" target="_blank"></a>
      <a href="https://www.google.com" class="fa fa-snapchat w3-hover-opacity" target="_blank"></a>
      <a href="https://www.google.com" class="fa fa-pinterest-p w3-hover-opacity" target="_blank"></a>
      <a href="https://twitter.com/tonguyenduytan?lang=en" class="fa fa-twitter w3-hover-opacity" target="_blank"></a>
      <a href="https://www.linkedin.com/in/to-tan-16148ab9/" class="fa fa-linkedin w3-hover-opacity" target="_blank"></a>
    </div>
    <div>
      <p>Designed by <a href="https://www.facebook.com/lambor.tan" title="Duy Tan" target="_blank" class="w3-hover-text-green">Duy Tan</a>
        <ul style="padding-left: 0px;">
          <li style="display: inline;"><a href=""><span> &#169; 2017 Tesseract </span></a>  
            <li style="display: inline;">|<a href=""> Quyền riêng tư và Cookie </a></li>
            <li style="display: inline;">|<a href=""> Pháp lý </a></li>
            <li style="display: inline;">|<a href=""> Quảng cáo </a></li>
            <li style="display: inline;">|<a href=""> Phản hồi </a></li>
          </ul>
        </p>
      </div>
    </footer>

    <!-- Add Google Maps -->

    <script>


// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
}
</script>
</body>
</html>