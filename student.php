<?php
           include ('database.php');

    if (isset($_SESSION['user_id'])==false) {
    header('location:index.php');

}//user can not access unless login to the system 


if ($_SESSION['authenticated'] !== true) {
    header('Location: login.php');//redirect back to login page if user is not authenticated 

}
if (  $_SESSION['role'] !== "admin"  ) {
    echo'Access to this page is not allowed';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
  <script src="javascript.js"></script>
</head>

<body>
     
    <style>
        form {
			background-color: #938d8d;
			padding: 20px;
			margin: 0 auto;
			max-width: 600px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
		}
        label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
        input, select {
          width: 100%;
          padding: 10px;
          margin: 8px 0;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
     
        </style>
    <div class="container" style="width: '25vw'; flex-direction: column; display: flex; margin-top: 5%; padding: 20px;">
    <form method="post" action="student_output.php" onsubmit="validate()" style="display: flex; flex-direction: column; align-items: center;">
        <h1 style="text-align: center;">Student Details </h1>

            <label for="First Name" > Name</label>
            <input type="text" placeholder="Name" name="Name"   required>

            <label for="MatricNo">Matric Number</label>
            <input type="number" placeholder="Matric Number" name="MatricNo"   required>
            <br>
            <label for="address">Address</label>
            <textarea  id="Address" name="Address"rows="5" cols="50" required></textarea>        
            <br>
            <label for="homeaddress">Home Address</label>
            <textarea  id="homeAddress" name="homeAddress" rows="5" cols="50" required></textarea>        
           <br>
            <label for="Email">Email</label>
            <input type="email" placeholder="Email" name="email"  required >
        
            <label for="Phone">Phone No</label>
            <input type="number" placeholder="Phone Number" name="PhoneNo" required>

            <br>
            <label for="Phone">Home Phone No</label>
            <input type="number" placeholder="home Number" name="homeNo"  required >

                   
                    <input type="submit" value="Submit"  style=" background-color: #45a049;"></div>

        </form>
        </div>

</body>
</html>