<!DOCTYPE html>
<html>
<body>

<form method="post" >
    <label for="name">Name:</label>
 <input type="text" name="fname" placeholder="Enter your name"><br>
<label for="email">E_mail:</label>
<input type="text" name="email" id="email" placeholder="name@example.com"><br>
<label for="gander">Male:</label>
<input type="radio" name="gn" id="gander" value="male">
<label for="gander">Female:</label>
<input type="radio" name="gn" id="gander" value="female"><br>
  <input type="submit">
</form>

<?php

    $name = $_POST['fname']?? null;
    if (empty($name)) {
        echo "Name is empty" . "<br>";
       
    } else {
        echo $name . "<br>";
    }
    $email = $_POST['email']?? null;
    if(empty($email)) {
        echo "E-Mail is required" . "<br>";
    } 
    else{
        echo $email . "<br>";
    }

    
    if(empty($_POST['gn'])) {
        echo "gander must be selected" . "<br>";
    }
    else{ 
        echo $_POST['gn'] . "<br>";
    }
   
?>

</body>
</html>