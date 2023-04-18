

<?php

           include ('database.php');

  if (isset($_POST['submit'])) {


    $username = $_POST['Username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password == $confirm_password){
        $password_hash = hash('sha256', $password);

        $sql = "INSERT INTO users (username,password) VALUES ('$username, '$password_hash)";
        $stmt = mysqli_prepare($conn, $sql)or die("Data not saved");
         mysqli_stmt_execute($stmt);
        echo'<p style="color:green;text-align:center;">Account successfully created</p>';

    }
    else{
        echo'<p style="color:red;text-align:center;">password does not match</p>';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .login{
        width: 382px;
        overflow: hidden;
        margin: auto;
        margin: 20 0 0 450px;
        padding: 80px;
        background: #9884f1;
        border-radius: 15px ;

}
    </style>
    <div class="login">
        <h2>Create Account</h2>
        <form id="login" method="post" action="login.php"  >
            <label><b>User Name
            </b>
            </label>
            <input type="email" name="Username"  placeholder="Username">
            <br><br>
            <label><b>Password
            </b>
            </label>
            <input type="Password" name="password"  placeholder="Password">
            <br><br>
            <label><b>Confirm password
            </b>
            </label>
            <input type="Password" name="confirm_password"  placeholder="Confirm Password">
            <br><br>
            <button type="submit" name="submit" style=" background-color: #3f5abc;">Signup</button> 
            </form>
            </div>
            
</body>
</html>