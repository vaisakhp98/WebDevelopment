<!DOCTYPE html>
<html lang="en">
<body>

<form method="post" action = "#">
<h1>Form Validation</h1>
    <label>Name </label>
    <input type = "text" name="name" />
   
    <br>
    <br>

    <label>Phone </label>
    <input type = "number" name="phone" />
    
    <br>
    <br>

    <label>Email </label>
    <input type = "email" name="email" />
    <br>
    <br>

    <label>Username </label>
    <input type = "text" name="username" />
   
    <br>
    <br>

    <label>Password </label>
    <input type = "password" name="password" />
   

    <br>
    <br>
    <button type = "submit" name="submit"> Submit </button>
</form>
<?php 

    $con = Mysqli_Connect("localhost","root","YES");
   

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];      
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];   
    }

  
?>


</body>
</html>