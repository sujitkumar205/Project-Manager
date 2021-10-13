
<?php 
  ini_set('display_errors',0);
  if(isset($_POST["submit"]))
  {    
    if(!empty($_POST['description']) && !empty($_POST['severity']) && !empty($_POST['raise'])) 
    {    
        $description=$_POST['description'];    
        $severity=$_POST['severity'];                
        $raiseTo=$_POST['raise'];  
        $raiseBy=$username;
        $con=mysqli_connect('localhost','root','') or die(mysql_error());    
        mysqli_select_db($con,'userdata') or die("cannot select DB");    
            
        $sql="INSERT INTO raise(description,severity,raiseTo,raiseBy) VALUES('$description','$severity','$raiseTo','$raiseBy')";    
        
        $result=mysqli_query($con,$sql);    
        if($result)
        {     
        $message = "Succesfully Raised Issue";
        echo "<script type='text/javascript'>alert('$message');</script>";  
        } 
        else 
        {    
        $message = "Unsuccessful! Please Try Again.";
        echo "<script type='text/javascript'>alert('$message');</script>";    
        }    
    } 
    else 
    {    
        $message = "Enter all fields correctly";
        echo "<script type='text/javascript'>alert('$message');</script>";   
    }    
  }    
?> 