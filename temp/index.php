  <?php
          //connect to database
         $conn = mysqli_connect('localhost', 'root', '');
         mysqli_select_db($conn, "medicine") or die (mysqli_error($con));//"Could not find the database");
    $output = "";
          if(isset($_REQUEST['btnbutton'])){
              $search = $_REQUEST['txtsearch'];
              if ($search !=""){
                  $query = mysqli_query($conn, "SELECT * FROM medicines WHERE TEN LIKE '%$search%' OR CHIDINH LIKE '%$search%'")
                          or die ("Could not search");
                  $result = mysqli_num_rows($query);
                  if($result == 0){
                      //ket qua tim kiem = 0
                      $output .= "<span style ='color:red;'>No result with keywords '$search'</span>";
                  }else{
                      //Ket qua tim kiem > 0
                      $output .= "<span style ='color:blue;'><br>All result with keywords '$search': $result</span>"
                              . "<br><hr style='width: 200px; float: left;'><br>";
                      while($row = mysqli_fetch_array($query)){
                          //Khai bao bien va gan gia tri, cac truong duoc lay tu database
                         
                          $TEN = $row['TEN'];
                          $CONGTHUC = $row['CONGTHUC'];
                          $CHIDINH = $row['CHIDINH'];
                          $CHONGCHIDINH = $row['CHONGCHIDINH'];
                        
                          $output .= "<br><div>$TEN<br>"
                                  . "$CONGTHUC<div><br><hr style='width: 200px; float: left;'><br><div>"
                                  . "$CHIDINH<div><br><hr style='width: 200px; float: left;'><br><div> "
                                  . "$CHONGCHIDINH<div><br><hr style='width: 200px; float: left;'><br><div> "  ;
                      }
                  }
              }else{
                  //khong co ky tu duoc nhap
                  $output .= "<span style='color: blue ;'>Please enter your keywords</span>";        
              }
          }
            
  ?>
  <html>
  <head>
          <meta charset="UTF-8">
          <title>Search</title>          
  </head>
          <link rel="stylesheet" href="newcss.css">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          
        <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
        body, html {
            height: 100%;
            color: #777;
            line-height: 1.8;
        }

        /* Create a Parallax Effect */
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* First image (Logo, full height) */
        .bgimg-1 {
            background-image: url('demacia-hallvalor.jpg');
            min-height: 100%;
        }

        /* Second image (Portfolio) */
        .bgimg-2 {
            background-image: url('freljord-gatewayhowling.jpg');
            min-height: 400px;
        }

        /* Third image (Contact) */
        .bgimg-3 {
            background-image: url('ionia-placidiumnavori.jpg');
            min-height: 400px;
        }

        .w3-wide {letter-spacing: 10px;}
        .w3-hover-opacity {cursor: pointer;}

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1024px) {
            .bgimg-1, .bgimg-2, .bgimg-3 {
                background-attachment: scroll;
            }
        }
        </style>
<body>
       <!-- <div id="jdi"><img width="100%" height="100%" src="img/freljord-gatewayhowling.jpg" /></div> 
        <div style="font-family: Helvetica Neue ; font-size: 16px; color: yellow;">
            <form action="#" method="REQUEST">
                <input action="process.php" class="search" autocomplete="off" type="text" data-modulenumber="1" name="txtsearch" maxlength="2048" placeholder="  Enter your keywords"/>
                <input type="submit" class="button" name="btnbutton" value="Search"/>
                
            </form>
                   /echophp
        </div>  -->
<!-- Navigation bar-->
   <!--  <div class="w3-top">
        <div class="w3-bar" id = "navbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" onclick="toggleFunction()"
        title="Toggle Navigation Menu">
        <i class = "fa fa-bars"></i>
        </a>
        <a href="#home" class = "w3-bar-item w3-button">HOME</a>
        <a href="#about" class = "w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
        <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
        <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
        </a>
        </div>
<! Navigation bar smartphone-->
<!-- IMG1 & LOGO 
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space: nowrap;">
    <span clas="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"> TESSERACT</span>
    </div>
</div>
<! Container 
<div class="w3-content w3-container w3-padding-64" id ="about">
    <h3 class="w3-center">ABOUT OUR PROJECT</h3>
    <p> Content will be add later</p>
</div>
<! Portfoli 
<! IMG2
<div class="bgimg-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
    </div>
</div>
<! Section 
    <div class="w3-content w3-container w3-padding-64" id ="portfolio">
        <h3 class="w3-center"> OUR TEAM</h3>
        <p class = "w3-center"><em>Content will be add later</em></p>  
<! IMG3  
<div class="  w3-display-container w3-opacity-min">
    <div class="w3-display-middle">    
        <span class="w3-xxlarge w3-text-white w3-wide"> CONTACT</span>
    </div>   
</div>
<div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Dormitory B, Vietnam National University<br>
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> University of Information Technology - Vietnam National University<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +84 947 4021 64<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: tonguyenduyw3@gmail.com<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Study: 14520809@gm.uit.edu.vn<br>
      </div>
      <form action="#">
        <div class="w3-row-padding" style="margin: 0 -16px 8px -16px">
            <div class="w3-half">
                <input class="w3-input w3-border" type="text" name="name" placeholder="What should I call you?"></div>
            <div class="w3-half">
                <input class="w3-input w3-border" type="text" name="email" placeholder="Your Email">
            </div>
        </div>
        <input class="w3-input w3-border" type="text" name="mess" placeholder="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE</button>
            </form>
            </div>
        </div>
    </div>
<!Footer 
    <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
      <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
      <div class="w3-xlarge w3-section">
        <span><i class="fa fa-facebook-official w3-hover-opacity"></i></span>
        <span><i class="fa fa-instagram w3-hover-opacity"></i></span>
        <span><i class="fa fa-pinterest-p w3-hover-opacity"></i></span>
        <span><i class="fa fa-twitter w3-hover-opacity"></i></span>
        <span><i class="fa fa-linkedin w3-hover-opacity"></i></span>
      </div>
      <p>Design by <a href="https://www.facebook.com/lambor.w3" title="duyw3" class="w3-hover-text-green">Duy Tan</a></p>
    </footer> -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-center w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">T E S S E R A C T</span>
    <input class="searchbox" type="text" placeholder="Search" name="search">
    <button action="#" class="sb-buton w3-button w3-black" type="submit">SEARCH
    <?php echo $output;?>
    </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT OUR PROJECT</h3>
  <p class="w3-center"><em>TESSERACT</em></p>
  <p class="w3-center">The content will be add later</p>

    <!-- Hide this text on small devices -->
    
  </div>
  
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">ABOUT OUR TEAM</h3>
  <p class="w3-center"><em>The content will be add later<br> Photo will be add later</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  </div>
<!-- Modal for full size images on click-->

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">Contact me at</h3>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Dormitory B, Vietnam National University<br>
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> University of Information Technology - Vietnam National University<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +84 947 4021 64<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: tonguyenduytan@gmail.com<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Study: 14520809@gm.uit.edu.vn<br>
      </div>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="What should I call you" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Your Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-black"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Design by <a href="https://www.facebook.com/lambor.tan" title="W3.CSS" target="_blank" class="w3-hover-text-green">Duy Tan</a></p>
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

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
</body>
</html>