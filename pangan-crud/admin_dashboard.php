<?php
//Start session
session_start();
if(!isset($_SESSION['username']) || $_SESSION['role'] !='admin')
{
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLIENT DASHBOARD</title>
</head>
<body>
    <?php
    echo "Welcome Admin ".$_SESSION['username']; 
    ?>
    <br><br><a href="create_admin.php">Create an admin account</a>
    <br><br><a href="logout.php">LOGOUT</a>
</body>
</html>