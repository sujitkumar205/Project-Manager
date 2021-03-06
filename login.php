<?php 
session_start();
$_SESSION['username'] = "";
$_SESSION['role'] = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
    <link rel="stylesheet" href="CSS\loginStyle.css">
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
              <a href="signup.php" class="nav-link">SIGN UP</a>
            </li>
            <li class="nav-item">
              <a href="contact.html" class="nav-link">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
        <section class="container">
            <div class="row align-items-center justify-content-center pt-5">
                <div class="col-10 col-lg-6">
                    <div class="panel">
                        <form action="" method="POST">
                        <legend>    
                          <fieldset> 
                            <div class="form-group text-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="5em" height="5em" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                  </svg>
                                  <h1 class="display-4 text-center">Login</h1>
                            </div>                            
                            <div class="form-group mb-4">
                                <label class="mb-2" for="emailID">Email Address</label>
                                <input type="email" class="form-control" id="emailID" name="emailID" placeholder="name@example.com" required>
                            </div>

                            <div class="form-group mb-4">
                                <label class="mb-2" for="password">Password</label>
                                <input type="password" class="form-control mb-2" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                <div id="passwordHelpBlock" class="form-text">
                                    Your password must contain at least one number, one uppercase letter, one lowercase letter, and at least 8 characters.
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="button submit" name="submit" class="btn btn-primary px-4 py-2">Submit</button>
                            </div>
                            </fieldset>    
                        </legend>  
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <?php include('PHP\loginUser.php') ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>