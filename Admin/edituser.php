<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "store";

$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$name = "";
$email = "";
$contact = "";
$city = "";
$address = "";
$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    if(!isset($_GET["id"])){
        header("location: usernew.php");
        exit;
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: usernew.php");
        exit;
    }


        $name = $row["name"];
        $email = $row["email"];
        $contact = $row["contact"];
        $city = $row["city"];
        $address =$row["address"];
}
else{
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $city =$_POST["city"] ;
    $address =$_POST["address"] ; 

    do{
        if( empty($name) || empty($email) || empty($contact) || empty($city) || empty($address)){
            $errorMessage = "All the fields are required";
            break;
        }

$sql = "UPDATE users " . 
        "SET name = '$name', email = '$email', contact = '$contact', city = '$city', address = '$address' " .
        "WHERE id = $id";
        $result = $connection->query($sql);

        if(!$result){
            $errorMessage = "invaild query: ".$connection->error;
            break;
        }
$successMessage = "User added successfully";
header("location: usernew.php");
exit;

        }while(false);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Edit user</h2>
<?php
if(!empty($errorMessage)){
    echo"
    <strong>$errorMessage</strong>
    ";
}
?>


        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
            </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
            </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Contact</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" name="contact" value="<?php echo $contact;?>">
            </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">City</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="city" value="<?php echo $city;?>">
            </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="address" value="<?php echo $address;?>">
            </div>
            </div>

<?php
if(!empty($successMessage)){
    echo"
    <strong>$successMessage</strong>
    ";
}
?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="usernew.php" role="button">Cancel</a>
                </div>
            </div>
</form>
</div>
</body>
</html>