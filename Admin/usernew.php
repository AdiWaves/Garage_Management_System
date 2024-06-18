<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
    <h2>list of users</h2>
    <a href="createuser.php">New User</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>City</th>
                <th>address</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "store";

            $connection = new mysqli($servername, $username, $password, $database);

            if($connection->connect_error){
                die("Connection failed: ".$connection->connect_error);
            }

            $sql="SELECT * FROM users";
            $result = $connection->query($sql);

            if(!$result){
                die("invalid query:". $connection->error);
            }

            while($row = $result->fetch_assoc()){
                echo"
                <tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td>$row[contact]</td>
                <td>$row[city]</td>
                <td>$row[address]</td>
                <td>
                <a class='btn btn-primary btn-sm' href='edituser.php?id=$row[id]'>Edit</a>
                <a class='btn btn-danger btn-sm' href='deleteuser.php?id=$row[id]'>Delete</a>
            </td>
            </tr>
                ";
            }
            ?>
            <tr>
                <td>9</td>
                <td>Nazamuddin Shaikh</td>
                <td>shaikh1@mail.com</td>
                <td>7894652136</td>
                <td>Pune</td>
                <td>Peth road</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="edituser.php">Edit</a>
                    <a class="btn btn-danger btn-sm" href="deleteuser.php">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
        </div>
</body>
</html>