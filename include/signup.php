<?php

if(isset($_POST['submit'])){

 include_once 'data.php';

 $Roll_No = mysqli_real_escape_string($conn, $_POST['Roll_No']);
 $Name = mysqli_real_escape_string($conn, $_POST['Name']);
 $Email = mysqli_real_escape_string($conn, $_POST['Email']);
 $Pwd = mysqli_real_escape_string($conn, $_POST['Pwd']);
  $DOB = mysqli_real_escape_string($conn, $_POST['DOB']);
 $Branch = mysqli_real_escape_string($conn, $_POST['Branch']);
 $Hosteller = mysqli_real_escape_string($conn, $_POST['Hosteller']);
 $Courses = mysqli_real_escape_string($conn, $_POST['Courses']);

//check for empty feild

if (empty($Roll_No) ||empty($Name) || empty($Email) || empty($Pwd) || empty($DOB) || empty($Branch) || empty($Hosteller) || empty($Courses)) {
      header("Location: ../index.php?index=empty");
      exit();
  }
  else {
       //check for valid input characters
     if(!preg_match("/^[a-zA-Z]*$/",$Name)){
     	 header("Location: ../index.php?index=Invalid");
      exit();
  }
      else{
      	//check if email is valid
      	if (!filter_var($Email, FILTER_VALIDATE_EMAIL)){
      		 header("Location: ../index.php?index=EMAIL");
      exit();
  }
      else {
      	$sql = "SELECT * FROM user WHERE Roll_No='$Roll_No'";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
        	 header("Location: ../index.php?index=usertaken");
      exit();
   }
      else {
      	//hashing the password
      	$hashedPwd = password_hash($Pwd,PASSWORD_DEFAULT);
      	//INSERT THE USER INTO THE DATABASE
      	$sql = "INSERT INTO user (Roll_No,Name,Email,Pwd,DOB,Branch,Hosteller,Courses) VALUES ('$Roll_No','$Name','$Email','$Pwd','$DOB','$Branch','$Hosteller','$Courses');";
      	mysqli_query($conn, $sql);
      		 header("Location: ../index.php?index=sucess");
      exit();
      }
        }
      }
      	}
  }  else{
    header("Location: ../index.php");
	exit();
} 
?>













