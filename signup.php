<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
    <link rel="stylesheet" href="CSS\signupStyle.css">
</head>
<body>
  <script>
    function check_pass() 
    {
      if (document.getElementById('password').value == document.getElementById('confirmPassword').value)
      {
        document.getElementById('submit').disabled = false;
      }
      else 
      {
        document.getElementById('submit').disabled = true;
      }
    }
  </script>
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
              <a href="login.php" class="nav-link">LOGIN</a>
            </li>
            <li class="nav-item">
              <a href="contact.html" class="nav-link">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
        <section class="container">
            <div class="row align-items-center justify-content-center no-gutter pt-5">
                <div class="col-6 padding-0">
                    <div class="panel">
                        <form action="" method="POST">
                          <legend>    
                          <fieldset>  
                            <div class="form-group text-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                  </svg>
                                  <h1 class="display-4 text-center">Sign Up</h1>
                            </div>   
                            <div class="form-row">
                              <div class="col-8">
                                <div class="form-group mb-3">
                                  <label class="mb-2" for="empName">Name</label>
                                  <input type="input" class="form-control" id="empName" name="empName" placeholder="Name" required>
                                </div>   
                              </div>
                              <div class="col-4">
                                <div class="form-group mb-3">
                                  <label class="mb-2" for="empID">Employee ID</label>
                                  <input type="input" class="form-control" id="empID" name="empID" placeholder="12345" maxlength="5" minlength="5" required>
                                </div>
                              </div>
                          </div> 
                          <div class="form-row">                    
                              <div class="form-group mb-3 col-6">
                                  <label class="mb-2" for="emailID">Email Address</label>
                                  <input type="email" class="form-control" id="emailID" name="emailID" placeholder="name@example.com" required>
                              </div>
                              <div class="form-group mb-3 col-6">
                                <label class="mb-2" for="role">Role</label>
                                <div>
                                  <select id="role" name="role" class="custom-select" aria-label="Default select example">
                                    <option value="" disabled selected>Select Your Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Manager</option>
                                    <option value="3">Developer</option>
                                    <option value="4">Tester</option>
                                    <option value="5">Guest</option>
                                  </select>
                                </div>
                              </div>
                          </div>    
                              <div class="form-group mb-3">
                                <div class="form-row">
                                  <div class="col-6">
                                    <label class="mb-2" for="password">Password</label>
                                    <input type="password" class="form-control mb-2" id="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onchange='check_pass();' required>   
                                  </div>
                                  <div class="col-6">                            
                                    <label class="mb-2" for="confirmPassword">Confirm Password</label>
                                    <input type="password" class="form-control mb-2" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" onchange='check_pass();' required>
                                  </div> 
                                </div>
                                  <div id="passwordHelpBlock" class="form-text">
                                    Your password must contain at least one number, one uppercase letter, one lowercase letter, and at least 8 characters.
                                  </div>                                
                              </div>
                            <div class="form-group text-center">
                                <button type="button submit" id="submit" name="submit" class="btn btn-primary px-4 py-2">Submit</button>
                            </div>
                          </fieldset>    
                        </legend>   
                        </form>
                    </div>
                </div>
                <div class="col-6 padding-0">
                  <div class="panel padding-slider">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="carousel-caption">
                            <h3 class="display-5">This software is absolutely free, and helped me and my team to organize our works.</h3>
                            <p>-MARK (Student at NYU)</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="carousel-caption">
                            <h3 class="display-5">It has new features which is extremely helpful for management of projects</h3>
                            <p>-KEVIN (Manager at Kashish and co)</p>
                          </div>
                        </div>                        
                        <div class="carousel-item">
                          <div class="carousel-caption">
                            <h3 class="display-5">Our team were able to communicate in a faster and efficient way using this website</h3>
                            <p>-JOHN (Manager at AB Tech)</p>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </section>

        <?php include('PHP\addUser.php') ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

