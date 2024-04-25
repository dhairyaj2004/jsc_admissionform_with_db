<?php
$inserted=false;
if(isset($_POST['submit']));
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die ("Oops!!!connection failed");
}else{
    
}
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$marks=$_POST['marks'];
$sql="INSERT INTO `jsc`.`data` ( `name`, `email`, `age`, `pno`, `gender`, `address`, `marks`, `date`) VALUES ('$fullname', '$email', '$age', '$phone', '$gender', '$address', '$marks', current_timestamp())";
if($con->query($sql)==true){
    $inserted=true;
}else{
    echo "OOPS!!! You have to try again";
}
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B.Tech Admission Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1><img src="./image.png" alt="">JUNIOR SCIENCE COLLEGE, DABHOI</h1>
    <h2>11th and 12th Admission Form</h2>
    <form action="index.php" method="post">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="age">Age</label>
        <input type="age" id="age" name="age" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea>

        <label for="marks">Percentage in SSC Exam:</label>
        <input type="text" id="marks" name="marks" required>

        <input type="submit"  value="Submit">
        <?php
        if($inserted==true){
            echo "<h3>Data Inserted Successfully!!! Your response is recorded. Thankyou</h3>";
        }
        ?>
        
    </form>
    </div>
</body>
</html>