<?php
include("connection.php");
if(isset($_POST["submit"]))
{
  header('Location: successnew.php');
}
?>

<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>

<!--instructs browser on how to control the page's dimensions and scaling-->
<meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of index page-->
        <title>Get Quote | GMS</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap-getq.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/stylee.css" rel="stylesheet">
        <link rel="stylesheet" href="css/getquotecs.css">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
   
    <style>
        img {
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: -1;
}
    </style>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript">
var citiesByState = {
Maruti_Suzuki: ["WagonR","Swift","Dzire","Baleno","Ertiga","Vitara Brezza","Grand Vitara","Alto K10","Alto 800","Ignis","Eeco","Celerio","XL6","Ciaz","S-Presso","Jimny","Fronx","S-Cross"],
Hyundai: ["Grand NIOS i10","i20","santro","Verna","Creta","Venue","Aura","Alcazar","Tucson","Casper"],
Mahindra: ["Scorpio N","XUV 700","XUV 300","Thar","Scorpio","Bolero","Bolero Neo","XUV 400","KUV 100","ALTURAS G4","Marazzo",],
Tata: ["Nexon","Punch","Harrier","Altroz","Safari","Tiago EV","Tigor","Nexon EV","Tiago","Harrier","Safari"],
Ford: ["EcoSport","Endeavour","Figo","Aspire","FreeStyle","Mustang","Fiesta","Ikon","Classic","Raptor"],
Honda: ["City","WR-V","Jazz","Amaze","Civic","CR-V","BR-V","Brio","Mobilio","Accord"],
Kia: ["Sonet","Carnival","Carens","Carnival","Seltos","Rio"],
Toyota: ["Innova Hycross","Fortuner","Urban Cruiser Hyryder","Glanza","Urban Crusier","Fortuner Legender","Land Cruiser","Vellfire","Camry","Hilux","Innova Crysta","Yaris","Etios","Etios Liva","Corolla Altis","Qualis"],
Renault: ["Triber","KWID","Kiger","Duster","Captur","Lodgy","Scala","Fluence","Pulse"],
MG: ["Hector","Hector Plus","Astor","Gloster","ZS-EV"],
Datsun: ["GO","GO+","Redi-GO"],
Skoda: ["Kushaq","Slavia","Superb","Octavia","Kodaiq","Rapid","Fabia","Laura","Yeti"],
Jeep: ["Compass","Wrangler","Grand Cherokee","Meridian"],
Nissan: ["Magnite","Kicks","X-Trail","GT-R","Terrano","Sunny","Evalia","Micra Active"],
BMW: ["X1","3 Series","Z4","3 Series Gran Limousine","5 Series","7 Series","X7","2 Series Gran Coupe","M340i","X5","X6","X3","X4","M8","XM","M5","M4 Competition","6 Series GT","i4","i7","iX","X5 M"],
Volkswagen: ["Virtus","Taigun","Tiguan","Vento","Polo","Ameo","Passat","Jetta","Beetle"],
Mercedes_Benz: ["G-Class","C-Class","GLA","GLS","MayBach S-Class","A-Class limousine","S-Class","E-Class","GLE","Maybach GLS","GLC","GLB","AMG GLC43 Coupe","AMG A35","GLC Coupe","EQS","AMG GLA35","AMG E53 Cabriolet","AMG GT 4-Door Coupe","EQB","AMG E63","AMG A45-S","AMG GLE Coupe","AMG E53","EQC","EQS","EQE","SLK","SLC","S-Class Cabriolet"],
Land_Rover: ["Range Rover","Range Rover Velar","Defender","Range Rover Evoque","Range Rover Sport","Discovery",],
Jaguar: ["XF","F-Pace","F-Type","I-Pace","E-Pace"]
}
function makeSubmenu(value) {
if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("citySelect").innerHTML = citiesOptions;
}
}
function displaySelected() { var country = document.getElementById("countrySelect").value;
var city = document.getElementById("citySelect").value;
alert(country+"\n"+city);
}
function resetSelection() {
document.getElementById("countrySelect").selectedIndex = 0;
document.getElementById("citySelect").selectedIndex = 0;
}
</script>



  </head>
  <body>
  <?php
   include 'header.php'; 
   ?>
    <!-- <header class="site-header"> 
     <div id="navbar">
      <div class="site-identity">
        
        <h1><a href="#">Garage MS</a></h1>
      </div>  
      <nav class="site-navigation">
          
        <ul class="nav">
          <li><a href="book.html" >Book A Service</a></li> 
          <li><a href="#" style="color: darksalmon;"><b>Get A Quote</b></a></li> 
          <li><a href="#">About Us</a></li> 
        </ul>
      </nav>
      <nav class="site-navigation2">
          <ul class="nav">
            <li><a href="login.php">Login</a></li> 
            <li><a href="#">Sign-up</a></li> 
          </ul>
        </nav>
      </div>
      </header>-->

    <section class="container">
      <header style="color:white">Quotation/Estimate</header>
      <form action="#" method="POST" class="form">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" name="fname" required >
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="email" required >
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" name="number" required >
          </div>
          
          <div class="input-box">
            <label>Chassis Number/VIN</label>
            <input type="text" placeholder="Enter chassis number" name="chassis_no" required >
          </div>
        </div>
       
          
        
        <div class="input-box address">
          <label>Description</label><br>
          <textarea name="textarea" rows="6" cols="70" placeholder=" Enter Description/Problem"  required ></textarea>
          <br>
          
        <b style="color:black">Select Car Make and Model:</b> <br>
<select id="countrySelect" size="1" onchange="makeSubmenu(this.value)" style="color:black" name="brand">
<option value="" disabled selected>Choose Make</option>
<option>Maruti_Suzuki</option>
<option>Hyundai</option>
<option>Mahindra</option>
<option>Tata</option>
<option>Ford</option>
<option>Honda</option>
<option>Kia</option>
<option>Toyota</option>
<option>Renault</option>
<option>MG</option>
<option>Datsun</option>
<option>Skoda</option>
<option>Jeep</option>
<option>Nissan</option>
<option>BMW</option>
<option>Volkswagen</option>
<option>Mercedes_Benz</option>
<option>Land_Rover</option>
<option>Jaguar</option>
</select>
<select id="citySelect" size="1" style="color:black" name="model">
<option value="" disabled selected >Choose Model</option>
<option></option>
</select><br><br>
<input type="submit" name="submit" class="submit" href="success.php">
      </form>
    </section>
    <img src="img/009.jpg" alt="P2" width="1519px" height="820px" >
<!--Footer-->

  </body>
</html>

<?php
error_reporting(0);
if($_POST['submit'])
{

  $fname = $_POST['fname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $chassis_no = $_POST['chassis_no'];
    $problem = $_POST['textarea'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];

    $query = "INSERT INTO quote values('$id','$fname','$email','$number','$chassis_no','$problem','$brand','$model')";
    $data = mysqli_query($conn,$query);

    if($data)
    {
       echo"data is inserted";
        header('location: success.php');
    }
    else
    {
        echo"failed";
    }
}
?>