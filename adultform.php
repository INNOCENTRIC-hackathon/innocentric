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
    <meta name="viewport" content="width=  , initial-scale=1.0">
    <title>FORM FOR ADULT</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body id="adultbg">
    <header><h1 id="head"> ENTER YOUR DETAILS</h1>
        <div class="main">
            <ul>
                <li><a href="index.html">Home</a></li></ul>
    </header>
    <form action="adultform.php" method="POST"> 
        <div>Name : <input type="text" name="name" id="name" placeholder="ENTER YOUR NAME"></div> 
    <div> Occupation : <input type="text" name="Occupation" id="occupation" placeholder="ENTER YOUR OCCUPATION"> </div>   
    <div>Category : <input type="text" name="category" id="category" placeholder="ENTER YOUR CATEGORY"></div> 
    <div> Age :<input type="number" name="age" id="age" placeholder="ENTER YOUR AGE"></div>
    <div> Annual Income :<input type="number" name="income" id="income" placeholder="ENTER YOUR INCOME"></div>
    
   <!-- <div>Goverment Employee :<input type="checkbox" id="gov"></div>-->
    <div>Gender :<input type="text" name="gender" id="gender" placeholder="MALE/FEMALE"></div>
<!-- same namespace=gender for all radio elements so only one box can be selected  -->
<div> Other Details :<br> <textarea name="other" id="other" cols="50" rows="10"></textarea></div>
<div> <input type="submit" value="Submit"> </div>
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


   if($Income <= 100000){
      if($gender = "female"){ ?>
         <div class= "container">
  <center><font size= 10> CLICK HERE: <a href="try2.php"><font color="red"><B>GOVERNMENT SCHEMES AND POLICIES AVAILABLE FOR YOU AND YOUR FAMILY
     </B></font></a>
   </center></font></div>
   <?php 
      }
      else{ ?>
      <a href="ty3.php">click here</a>
     <?php }
      }
   else{
      if($gender= "female"){ ?>
    <a href= "try5.php">here</a>
     <?php }
     else{ ?>
     <a href="try6.php">please</a>
     <?php }
    }
    
    
   
   $con->close();
}

   ?>
</body>
</html>