<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN PAGE</title>
</head>
<body>
   <div class="container"  style="max-width: 200px; margin: 0 auto;">
   <form action="authenticate.php" method="post">
    <h2 style="text-align: center;">LOGIN</h2>  

    <span style = "color: red; font-size: 14px; font-style: italic">
        <?php
            if(isset($_GET['incorrect']))
            {
                echo" Incorrect username or password!";
            }

        ?>
    </span>
        <input type="text" name="username" id="" placeholder="Enter Username:" required>
        <br><br>
        <input type="password" name="password" id="" placeholder="Enter Password" required>
        <br><br>
        <input type="submit" value="Login" name="login">
    </form>
    <a href="register.php">Create an Account</a>
   </div>
</body>
</html>