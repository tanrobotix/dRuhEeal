  <?php
      session_start();
      header('Content-Type: text/html; charset = UTF-8');
      include('libs/connect.php');
      //Process login
      
    $username = $_POST["txtUsername"];
    $passwords = $_POST["txtPasswords"];

        //Check data filled

    if(!$username || !$passwords ){
      echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Go Back</a>";
      exit;
    }
        //Decode passwords to MD5
    $passwords = md5($passwords);

        //Check if user_name has been created
    if (mysqli_num_rows(mysqli_query($conn, "SELECT username FROM user WHERE username='$username'")) > 0){
      echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
      exit;
    }

        //Get passwords from database
    $row = mysqli_fetch_array($query);

        //Compare with passwords filled in
    if($passwords != $row['passwords']){
      echo "Mật khẩu không đúng, vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
      exit;
    }
        //Keep username
    $_SESSION ['username'] = $username;
    echo "Xin chào " .$username. "Chúc mừng bạn đã đăng nhập thành công"; die();
?>
<!DOCTYPE html>
  <html>
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
    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
       display: block;
       float: none;
     }
     .cancelbtn {
       width: 100%;
     }
   }
 </style>

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
    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
      <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
      <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
      <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    </nav>


    <!-- Sign in section -->
    <h2>Login Form</h2>

    <form action="#" method="POST">
      <div class="imgcontainer">
      </div>

      <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="txtUsername" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="txtPasswords" required>

        <button type="submit">Login</button>
        <a href='signup.php' title='Đăng ký'>Đăng ký</a>
        <input type="checkbox" checked="checked"> Remember me
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
    

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
