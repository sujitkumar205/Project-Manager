
<?php 
  ini_set('display_errors',0);
  if(isset($_POST["submit"])){    
  if(!empty($_POST['emailID']) && !empty($_POST['password'])) {    
      $empName=$_POST['empName'];    
      $empID=$_POST['empID'];                
      $emailID=$_POST['emailID'];  
      $role=$_POST['role'];  
      $password=$_POST['password'];
      $con=mysqli_connect('localhost','root','') or die(mysql_error());    
      mysqli_select_db($con,'userdata') or die("cannot select DB");    
      
      $query=mysqli_query($con,"SELECT * FROM userdata WHERE emailID='".$emailID."'");    
      $numrows=mysqli_num_rows($query);    
      if($numrows==0)    
      {    
      $sql="INSERT INTO userdata(name,empID,role,emailID,password) VALUES('$empName','$empID','$role','$emailID','$password')";    
      
      $result=mysqli_query($con,$sql);    
          if($result){     
      $message = "Account Successfully Created";
      echo "<script type='text/javascript'>alert('$message');
            window.location.href='http://localhost/ProjectManager/login.php';      
            </script>";  
      } else {    
        $message = "Unsuccessful! Please Try Again.";
        echo "<script type='text/javascript'>alert('$message');</script>";    
      }    
      
      } else {    
        $message = "That Email ID already exists! Please try again with another.";
        echo "<script type='text/javascript'>alert('$message');</script>";    
      }    
      
  } else {    
    $message = "Enter all fields correctly";
    echo "<script type='text/javascript'>alert('$message');</script>";   
  }    
  }    
?> 