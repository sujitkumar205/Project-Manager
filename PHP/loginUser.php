
<?php 
  ini_set('display_errors',0);
  if(isset($_POST["submit"])){    
  if(!empty($_POST['emailID']) && !empty($_POST['password'])) {                 
      $emailID=$_POST['emailID'];  
      $password=$_POST['password'];
      $con=mysqli_connect('localhost','root','') or die(mysql_error());    
      mysqli_select_db($con,'userdata') or die("cannot select DB");    
      
      $query=mysqli_query($con,"SELECT * FROM userdata WHERE emailID='".$emailID."'");    
      $numrows=mysqli_num_rows($query);    
      if($numrows==0)    
      {
        $message = "User Not Found";
        echo "<script type='text/javascript'>alert('$message');</script>"; 
      }    
      else{
        $sql="SELECT * FROM userdata WHERE emailID='$emailID' AND password='$password'"; 
        $result=mysqli_query($con,$sql);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $emailID;
            $sqlrole="SELECT role FROM userdata WHERE emailID='$emailID' AND password='$password'"; 
            $resultRole=mysqli_query($con,$sqlrole);
            while ($row = $resultRole->fetch_assoc()){
              $_SESSION['role'] = $row['role'];
            }
            $message = "Successfully Logged In";
            echo "<script type='text/javascript'>alert('$message');
                  window.location.href='http://localhost/ProjectManager/myTask.php';      
                  </script>"; 
          }
        else{
            $message = "Email ID or Password is Incorrect";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
      }
      
  } else {    
    $message = "Enter all fields correctly";
    echo "<script type='text/javascript'>alert('$message');</script>";   
  }    
  }    
?>