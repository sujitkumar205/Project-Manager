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
    <title>My Tasks</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
    <link rel="stylesheet" href="CSS\scoreboard.css">


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

              <div class="col-12 justify-content-center align-items-center text-center">        
                    <div class="row justify-content-center align-items-center">
                            <div class="panel">
                            <div class="col-4 my-5 text-center">
                                <h2 class="boardTitle">EMP ID</h2>
                                <?php
                                $con=mysqli_connect('localhost','root','') or die(mysql_error());    
                                mysqli_select_db($con,'userdata') or die("cannot select DB");
                                $sql = mysqli_query($con, "SELECT * FROM userdata ORDER BY score DESC");                                
                                while ($row = $sql->fetch_assoc()){
                                echo "<label class = \"boardContent\">".$row['empID']."</label>";
                                echo "<br>";
                                echo "<br>";                                      
                                }
                                ?>
                            </div>
                            <div class="col-4 my-5 text-center">
                                <h2 class="boardTitle">NAME</h2>
                                <?php
                                $con=mysqli_connect('localhost','root','') or die(mysql_error());    
                                mysqli_select_db($con,'userdata') or die("cannot select DB");
                                $sql = mysqli_query($con, "SELECT * FROM userdata ORDER BY score DESC");                                
                                while ($row = $sql->fetch_assoc()){
                                echo "<label class = \"boardContent\">".$row['name']."</label>";
                                echo "<br>";
                                echo "<br>";                                      
                                }
                                ?>
                            </div>
                            <div class="col-4 my-5 text-center">
                                <h2 class="boardTitle">SCORE</h2>
                                <?php
                                $con=mysqli_connect('localhost','root','') or die(mysql_error());    
                                mysqli_select_db($con,'userdata') or die("cannot select DB");
                                $sql = mysqli_query($con, "SELECT * FROM userdata ORDER BY score DESC");                                
                                while ($row = $sql->fetch_assoc()){
                                echo "<label class = \"boardContent\">".$row['score']."</label>";
                                echo "<br>";
                                echo "<br>";                                      
                                }
                                ?>
                            </div>
                            </div>
                    </div>
            </div>
        </div>
    </section>
        !-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>