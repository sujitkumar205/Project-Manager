<?php
session_start();
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $role = $_SESSION['role'];
} else {
    die('$'."_SESSION['username'] isn't set because you had never been at file one");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Tasks</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
    <link rel="stylesheet" href="CSS\allTask.css">


</head>
<body>
    <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-md py-0 fixed-top">
        <a href="index.html" class="navbar-brand"><img class="img-fluid" src="Images\mainLogo.png" alt=""></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle Navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.html" class="nav-link">HOME</a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">LOGOUT</a>
            </li>
            <li class="nav-item">
              <a href="contact.html" class="nav-link">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>

      <section class="container-fluid p-0">
          <div class="row align-items-center no-gutter justify-content-center">

              <div id="sidenavbar" class="col-2 sidenav hidden-md-down">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="assign.php">Assign Task</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="raise.php">Raise Issue</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="myTask.php">My Tasks</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="allTask.php">All Tasks</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="scoreboard.php">Scoreboard</a>
                        </li>
                    </ul>
              </div>

              <div class="col-10">
                <div class="row align-items-center justify-content-center">
                  <div class="col-9">

                  <?php
                    $con=mysqli_connect('localhost','root','') or die(mysql_error());    
                    mysqli_select_db($con,'userdata') or die("cannot select DB");
                    $sql = mysqli_query($con, "SELECT * FROM assign");                                
                    while ($row = $sql->fetch_assoc()){
                      if($row['status'] != 'DONE')
                      {
                        echo "<div class=\"panel\">";
                        echo "<span class= \"display-4\"><span class = \"panTitle\">Description:</span>  ".$row['description']."</span>";
                        //echo "<p>".$row['description']."</p>";
                        echo "<span class= \"display-4\"><span class = \"panTitle\">Severity:</span>  ".$row['severity']."</span>";
                        //echo "<p>".$row['severity']."</p>";
                        echo "<span class= \"display-4\"><span class = \"panTitle\">Assigned By:</span>  ".$row['assignBy']."</span>";
                        echo "</div>";
                      }                                 
                    }

                    $sql = mysqli_query($con, "SELECT * FROM raise");                                
                    while ($row = $sql->fetch_assoc()){
                      if($row['status'] != 'DONE')
                      {
                        echo "<div class=\"panel\">";
                        echo "<span class= \"display-4\"><span class = \"panTitle\">Description:</span>  ".$row['description']."</span>";
                        //echo "<p>".$row['description']."</p>";
                        echo "<span class= \"display-4\"><span class = \"panTitle\">Severity:</span>  ".$row['severity']."</span>";
                        //echo "<p>".$row['severity']."</p>";
                        echo "<span class= \"display-4\"><span class = \"panTitle\">Raised By:</span>  ".$row['raiseBy']."</span>";
                        //echo "<p>".$row['raiseBy']."</p>";
                        echo "</div>";
                      }                                   
                    }
                  ?>
                  ?>                        
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </section>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>