<html>
<head>
  <title>T E S S E R A C T</title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/css2.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src = "js/homeindex.js"></script>


<body>

  <div class=" tan-display-container tan-opacity-min" id="home">
    <div class=" tan-display-middle" style="white-space:nowrap;">
     <span class="tan-center tan-padding-large tan-black tan-wide tan-anima te-opacity">T E S S E R A C T</span>
     <form  action="#" method="REQUEST" style="display: inline-block;">
       <input class="searchbox" autocomplete="off" type="text" placeholder="Search" name="txtsearch" >
       <button  class="sb-buton tan-button tan-black" type="submit" name = "btnbutton">SEARCH</button>
     </form>
      </div>
  </div>
  
</div>

<!-- Sidebar/menu -->

<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="img/data/agi1.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>TEXT 1</b></h4>
    <p class="w3-text-grey">Side bar</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>TEXT 2</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>TEXT 3</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>TEXT 4</a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<?php
        //connect to database
       $conn = mysqli_connect('localhost', 'root');
       mysqli_select_db($conn, "medicine") or die (mysqli_error($conn));//"Could not find the database");
    $output = "";
        mysqli_set_charset($conn,"utf8");
        if(isset($_REQUEST['btnbutton'])){
            $search = $_REQUEST['txtsearch'];
            if ($search !=""){
                $query = mysqli_query($conn, "SELECT * FROM medicines WHERE TEN LIKE '%$search%' OR CHIDINH LIKE '%$search%'")
                        or die ("Could not search");
                $result = mysqli_num_rows($query);
                if($result == 0){
                    //ket qua tim kiem = 0
                    $output .= "No result with keywords '$search'";
                }else{
                    //Ket qua tim kiem > 0
                    //$output .= "All result with keywords '$search': $result";
                    while($row = mysqli_fetch_array($query)){
                        //Khai bao bien va gan gia tri, cac truong duoc lay tu database
                       
                        $TEN = $row['TEN'];
                        $CONGTHUC = $row['CONGTHUC'];
                        $CHIDINH = $row['CHIDINH'];
                        $CHONGCHIDINH = $row['CHONGCHIDINH'];
?>

                <div class="row2" style="margin-left: 290px">  
                  <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                      <img src="img/data/agi1.jpg" alt="be">
                      <div class="caption">
                        <h3>
<?php 
                            echo $TEN;  
?>
                        </h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                      </div>
                    </div>
                  </div>
                </div>            
<?php            
                    }
                }
            }else{
                //khong co ky tu duoc nhap
                $output .= "Please enter your keywords";        
            }
        }
          
?>
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
  <p>Designed by <a href="https://www.facebook.com/lambor.tan" title="Duy Tan" target="_blank" class="w3-hover-text-green">Duy Tan</a></p>
</footer>

</body>
</html>