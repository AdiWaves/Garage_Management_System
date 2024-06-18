<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Section | GMS</title>
    <link rel="stylesheet" href="adcss.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <img src=img/007.jpg alt="001" height="705px" width="1550px">
    <div class="left" ondrop="drop(event)" ondragover="allowDrop(event)">
        <div class="side_menu" ondragstart="dragStart(event)" draggable="true" id="dragtarget">
            <ul>
                <div class="side_menu_profile">
                    <div class="profile_image"> <img src=img/contact.png />
                        <p>GMS Admin Panel</p>
                    </div>
                </div>
                <li> <a href="usernew.php"><i class="fas fa-users">Users</i></a> </li>
                <li> <a href="adusit.php"><i class="fas fa-truck"></i>Scheduled Delivery</a> </li>
                <li> <a href="aditem.php"><i class="fas fa-cart-plus"></i> List Item</a> </li>
                <li> <a href="adquote.php"><i class="fas fa-file-invoice"></i>Query</a> </li>
                <li> <a href="adserv.php"><i class="fas fa-info"></i>Service Request</a> </li>
                <li> <a href="logout_script.php"><i class='fas fa-arrow-alt-circle-right' style='font-size:24px'></i>logOut</a> </li>
            </ul>
        </div>
    </div>
   
</body>

</html>