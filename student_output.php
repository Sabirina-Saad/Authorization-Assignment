

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["Name"]);
  $MatricNo = test_input($_POST["MatricNo"]);
  $Address = test_input($_POST["Address"]);
  $homeAddress = test_input($_POST["homeAddress"]);
  $email = test_input($_POST["email"]);
  $phoneno = test_input($_POST["PhoneNo"]);
  $homeNo = test_input($_POST["homeNo"]);
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
?>


<?php
echo "<h2>Student Details:</h2>";
echo "Name:$name";
echo "<br>";
echo "Matric Number:$MatricNo";
echo "<br>";
echo "Address:$Address";
echo "<br>";
echo "Home Address:$homeAddress";
echo "<br>";
echo "Email:$email";
echo "<br>";
echo "PhoneNo:$phoneno";
echo "<br>";
echo "HomeNo:$homeNo";
?>