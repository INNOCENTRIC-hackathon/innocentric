<?php
if(isset($_POST['age'])){
   //connecting to db
   $server="localhost";
   $username="root";
   $password="";
   $dbname = "income";
    
   //creating a connection
   $con=mysqli_connect($server,$username,$password,$dbname);
   //die if connection is not successful
   if(!$con){
      die("connection to this database failed due ".mysqli_connect_error());
   }
   
   $name = $_POST['name'];
   $age = $_POST['age'];
   $class = $_POST['class'];
   $category = $_POST['category'];
   $gender = $_POST['gender'];
   $other = $_POST['other'];
    
   $sql="INSERT INTO `child` (`name`, `age`, `class`, `category`, `gender`, `other`) 
        VALUES ('$name', '$age', '$class', '$category', '$gender', '$other');";

if($con->query($sql) == true){
   $last_id = $con->insert_id;
}
}
  ?>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCOME RELATED </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

 <body ID="adultbg">
   <header><h1 id="head"> ENTER YOUR DETAILS</h1>
        <div class="main">
            <ul>
                <li><a href="index.html">Home</a></li></ul>
    </header>
 <form action="2.php" method="POST">
    <div> Name : <input type="text" name="name" id="name"> </div>  
    <div> Age :<input type="number" name="age" id="age"></div>
    <div> class : <input type="number" name="class" id="class"> </div>
    <div>category :<input type="text" name="category" id="category"></div>
   <div>Gender :<input type="text" name="gender" id="gender"></div>
    <div> Other Details :<br> <textarea name="other" cols="20" rows="20" id="other"></textarea></div>
    <div> <button class="btn">SUBMIT</button> </div>
    <div> <input type="reset" value="Reset"> </div>
</form> 
<?php
if(isset($_POST['age'])){
   //connecting to db
   $server="localhost";
   $username="root";
   $password="";
   $dbname = "income";
    
   //creating a connection
   $con=mysqli_connect($server,$username,$password,$dbname);
   //die if connection is not successful
   if(!$con){
      die("connection to this database failed due ".mysqli_connect_error());
   }
   
   $name = $_POST['name'];
   $age = $_POST['age'];
   $class = $_POST['class'];
   $category = $_POST['category'];
   $gender = $_POST['gender'];
   $other = $_POST['other'];
    
   $sql="INSERT INTO child (`name`, `age`,'class', `category`,  `gender`, `other`)
   VALUES ('$name', '$age', '$class', '$category', '$gender', '$other');";

if($age <= 10){ ?>
<font color="red"><b><a href ="page5.php">PLEASE CLICK HERE</a></b></font>
<?php
}
else{ ?>
<font color="red"><b><a href= "page6.php">PLEASE CLICK HERE</a></b></font>
<?php
}

$con->close();

}
   ?>
    
</body>
</html>