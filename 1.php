<?php
if(isset($_POST['Income'])){
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
   $occupation = $_POST['occupation'];
   $category = $_POST['category'];
   $age = $_POST['age'];
   $Income = $_POST['Income'];
   $gender = $_POST['gender'];
   $other = $_POST['other'];
    
   $sql="INSERT INTO incomedb (`name`, `occupation`, `category`, `age`, `Income`, `gender`, `other`)
   VALUES ('$name', '$occupation', '$category', '$age', '$Income', '$gender', '$other');";

if($con->query($sql) == true){
   $last_id = $con->insert_id;
   ?>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCOME RELATED </title>
</head>
<style>
.container{
    max width: 10%;
    background-color: grey ; 
}
</style>
 <body>
 <div class= "container"> 
    <center><font color= biege><B> <?php echo "Total Users: <br>" . $last_id;
}
else{
   echo "ERROR:  $sql <br> $con->error";
}
?>
   </B></font></center></div>
</body>
</html>
<?php 
  
   $con->close();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCOME RELATED </title>
</head>
<style>
.container{
    max width: 40%;
    <background-color:grey> ; 
}
</style>
<link rel="stylesheet" type="text/css" href="css/style.css">
 <body  id="adultbg">
 <header><h1 id="head"> ENTER YOUR DETAILS</h1>
        <div class="main">
            <ul>
                <li><a href="index.html">Home</a></li></ul>
    </header>
 <form action="1.php" method="POST">
    <div> Name : <input type="text" name="name" id="name"> </div>  
    <div id="occupation"> occupation : <input type="text" name="occupation" id="occupation"> </div>
    <div>category :<input type="text" name="category" id="category"></div>
    <div> Age :<input type="number" name="age" id="age"></div>
    <div> Income :<input type="number" name=" Income" id=" Income"></div>
    <div>Gender :<input type="text" name="gender" id="gender"></div>
    <div> Other Details :<br> <textarea name="other" cols="20" rows="20" id="other"></textarea></div>
    <div> <button class="btn">SUBMIT</button> </div>
    <div> <input type="reset" value="Reset"> </div>
</form> 
<?php
if(isset($_POST['Income'])){
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
   $occupation = $_POST['occupation'];
   $category = $_POST['category'];
   $age = $_POST['age'];
   $Income = $_POST['Income'];
   $gender = $_POST['gender'];
   $other = $_POST['other'];
    
   $sql="INSERT INTO incomedb (`name`, `occupation`, `category`, `age`, `Income`, `gender`, `other`)
   VALUES ('$name', '$occupation', '$category', '$age', '$Income', '$gender', '$other');";

$page=0;
if($gender== "female")
{$page= ($Income <=100000) ? "2" : "4";
}else if ($gender ==  "male"){
   $page = ($Income <= 100000) ? "1" : "3";
}

echo "<script> location.href='page".$page.".php';</script>";
    
    
   
   $con->close();

}
   ?>
</body>
</html>



