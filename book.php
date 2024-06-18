<?php
include("connection.php");
if(isset($_POST["submit"]))
{
  header('Location: successnew.php');
}
?>




<html>
<head>

        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of index page-->
        <title>Book service | GMS</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/new.css" rel="stylesheet">
       
        
        <script src="js/jquery.js"></script>
        
        <script src="js/bootstrap.min.js"></script>
    
    <style>
        img {
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: -1;
}

input[type=text] {
  width: 100%;
  padding: 5px 5px;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 4px;
}
    </style>
<title></title>
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
<body onload="resetSelection()">
<?php
        include 'includes/header.php';
        ?>

<form action="#" method="POST">
<!--NavBar Start
    <header class="site-header"> 
        <div id="navbar">
        <div class="site-identity">
          <a href="#"><img src="new.png" alt="Site Name" /></a>
          <h1><a href="#">Planet Garage</a></h1>
        </div>  
        <nav class="site-navigation">
            
          <ul class="nav">
            <li><a href="book.html" style="color: darksalmon;"><b>Book A Service</b></a></li> 
            <li><a href="getquote.html">Get A Quote</a></li> 
            <li><a href="#">About Us</a></li> 
          </ul>
        </nav>
        <nav class="site-navigation2">
            <ul class="nav">
              <li><a href="login.php">Login</a></li> 
              <li><a href="#">Sign-up</a></li> 
            </ul>
          </nav>
      </header>
</div>
NavBar End-->

<!--Book A service Body Start-->
    <h1 class="h1">Book an Service...</h1>
    <img src="img/P3.jpg" alt="P2" width="1536px" height="721px" >
    <div class="boxz">
    <fieldset>
   <b>First Name:</b> 
    <input type="text" name="fname" placeholder="Name">
    <b>Last Name:</b> 
    <input type="text" name="lname" placeholder="Surname"><br><br>
    <div class="date">
    <b>Select Date for Service :</b>
    <input type="date" class="datess" name="date"><br><br>
</div>
    <b>Fuel type :</b><br>
    <select class="fuel" name="fuel">
        <option>--Select Fuel type--</option>
    <option>Petrol</option>
    <option>Diesel</option>
    <option>CNG</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
<b>Select Package</b> <br>
<input type="radio" id="pack1" name="serv" value="basic">Basic
<input type="radio" value="Comprehensive" name="serv" id="pack2">Comprehensive<br>
<input type="radio" value="Premium" name="serv" id="pack3">Premium
<input type="radio" value="AC Servicing" name="serv" id="pack4">AC Servicing<br><br>
<b>Select Car Make and Model:</b> <br>
<select id="countrySelect" class="countrySelect" size="1" onchange="makeSubmenu(this.value)" name="brand">
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
<select id="citySelect" class="citySelect" size="1" name="model" >
<option value="" disabled selected>Choose Model</option>
<option></option>
</select><br><br>

<input type="submit" name="submit" class="submit" href="success.php">
<input type="reset" name="reset" class="reset">
</a>
</fieldset>
</div>
<!--Book A Service Body End-->
</form>
</body>
</html>

<?php
error_reporting(0);
if($_POST['submit'])
{

  $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $date = $_POST['date'];
    $fuel = $_POST['fuel'];
    $serv = $_POST['serv'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];

    $query = "INSERT INTO serv values('$id','$fname','$lname','$date','$fuel','$serv','$brand','$model')";
    $data = mysqli_query($conn,$query);

    if($data)
    {
       // echo"data is inserted";
        header('location: success.php');
    }
    else
    {
        echo"failed";
    }
}
?>
