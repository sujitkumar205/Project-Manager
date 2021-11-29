<?php 
  ini_set('display_errors',0);
  if(isset($_POST["submit"]))
  {    
    if(!empty($_POST['id'])) 
    {    
        $id=$_POST['id'];   
        $type=$_POST['type'];    
        $user=$username;
        $con=mysqli_connect('localhost','root','') or die(mysql_error());    
        mysqli_select_db($con,'userdata') or die("cannot select DB");    
            
        $sql="UPDATE $type SET status = 'DONE' WHERE id = $id";       
        mysqli_query($con,$sql);    

        $sql = "SELECT * FROM userdata WHERE emailID=\"$user\"";
        $result = mysqli_query($con,$sql);
        if($result)
        { 
            while ($row = $result->fetch_assoc()){
            $score = $row['score'];
            $score = $score + 1;
            $sql = "UPDATE userdata SET score=$score WHERE emailID = \"$user\"";
            mysqli_query($con,$sql); 
            }  
            $message = "Succesfully Completed Task";
            echo "<script type='text/javascript'>alert('$message');</script>"; 
        }        
        echo "<meta http-equiv='refresh' content='0'>";     
    } 
    else 
    {    
        $message = "Enter all fields correctly";
        echo "<script type='text/javascript'>alert('$message');</script>";   
    }    
  }    
?> 