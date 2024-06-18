<?php 


/*require_once('config/db.php');
$query = "select * from users";
$result = mysqli_query($con,$query);
*/

require_once 'config/db.php';
require_once 'config/funusitem.php';

$result = dispaly_data();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <title>Order Data</title>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Order Data From Database</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td> ID </td>
                  <td> User ID </td>
                  <td> Item ID </td>
                  <td> Status </td>
                  <td> Date & time </td>
                </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['user_id']; ?></td>
                  <td><?php echo $row['item_id']; ?></td>
                  <td><?php echo $row['status']; ?></td>
                  <td><?php echo $row['date_time']; ?></td>
                  <td><a href="#" class="btn btn-primary">Edit</a></td>  
                  <td><a href="#" class="btn btn-danger">Delete</a></td>  
                </tr>
                <?php    
                  }
                
                ?>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>