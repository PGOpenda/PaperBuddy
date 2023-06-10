<?php
    include "db_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaperBuddy</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../static/images/favicon.ico">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Google Font Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Google Font Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">

    <!-- My stylesheet -->
    <link rel="stylesheet" href="../static/styles.css">

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container-fluid p-4">
            <a class="navbar-brand ps-4" href="index.php">
                <img src="../static/images/logo.png" alt="Logo" class="d-inline-block align-text-top">
                PaperBuddy
            </a>
        <div class="d-flex flex-row pe-5">
            <a class="btn login-btn me-3 pe-4 ps-4 pt-2 pb-2" data-bs-toggle="modal" data-bs-target="#loginModal" role="button">Log—in</a> 
            <a class="btn signup-btn pe-4 ps-4 pt-2 pb-2" data-bs-toggle="modal" data-bs-target="#signupModal" role="button">Sign up</a>
        </div>
        </div>
    </nav>

    <!-- Main -->
    <div class="container">
        <div class="row">
            <div class="col-4 pt-4">
                <h1 class="display-5">Harnessing Automation for You</h1>
                <p class="pt-3 pb-3">
                    Introducing PaperBuddy, an automated research paper recommendation system.
                    Say goodbye to manual searching and let our smart algorithm fetch the latest research papers from renowned sources like IEEE and Springer. 
                    Stay ahead of the curve with weekly email updates tailored to your preferences. 
                </p>
                <a class="btn getstarted-btn me-1 pe-4 ps-4 pt-2 pb-2" data-bs-toggle="modal" data-bs-target="#signupModal" role="button">Get Started</a>
                <img src="../static/images/fire.png" alt="fire" class="img-fluid"> Completely free
            </div>
            <div class="col-8 text-end">
            <img src="../static/images/Editorial commision-pana.png" alt="analysis" class="img-fluid">
                <p class="footer">
                    Business / Criminal Justice / Artificial Intelligence / Biotechnology / History / Culture / Health / Education
                    <img src="../static/images/logo2.png" alt="logo" class="img-fluid ps-4">
                </p>
            </div>
        </div>
    </div>

    <!-- Login modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="p-3">
                        <img src="../static/images/logo3.png" alt="logo" class="img-fluid mx-auto d-block mb-4">
                        <h1 class="h3 mb-3 fw-normal text-center">LOG IN</h1>

                        <div class="mb-3">
                            <input type="email" class="form-control p-3 text-light" id="floatingInput" placeholder="Email address">
                        </div>
                        <div class="mb-1">
                            <input type="password" class="form-control p-3 text-light" id="floatingPassword" placeholder="Password">
                        </div>

                        <div class="form-check text-start my-3">
                            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                        <div class="form-sign">
                            <p>Don't have an account? <a data-bs-toggle="modal" data-bs-target="#signupModal" href="">Sign Up</a> </p>
                        </div>
                        <button class="btn w-100 py-2 bs-dark" type="submit">Log In</button>
                        <p class="mt-3 mb-1 text-center text-secondary-emphasis" style="color: #E7A4D4">© 2023</p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Signup modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="p-1">
                        <img src="../static/images/logo3.png" alt="logo" class="img-fluid mx-auto d-block mb-4">
                        <h1 class="h3 mb-3 fw-normal text-center">SIGN UP</h1>

                        <div class="row mb-3">
                            <div class="col">
                                <input type="email" class="form-control p-3 text-light" id="FirstName" placeholder="First Name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control p-3 text-light" id="LastName" placeholder="Last Name">
                            </div>    
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <select class="form-select p-3" id="Gender" aria-label="Select for type of gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="trans">Transgender</option>
                                    <option value="other">Other</option>
                                    <option value="none">Prefer not to say</option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="email" class="form-control p-3 text-light" id="Email" placeholder="Email address">
                            </div>   
                        </div>

                        <div class="row mb-3">
                        <div class="col">
                                <input type="password" class="form-control p-3 text-light" id="Password" placeholder="Password">
                            </div>
                            <div class="col">
                                <input type="password" class="form-control p-3 text-light" id="ConfirmPass" placeholder="Confirm Password">
                            </div>
                        </div>
                        
                        <div class="form-sign mb-2">
                            <p>Already have an account? <a data-bs-toggle="modal" data-bs-target="#loginModal" href="">Log In</a> </p>
                        </div>
                        <button class="btn w-100 py-2 bs-dark" type="submit">Sign Up</button>
                        <p class="mt-3 mb-1 text-center text-secondary-emphasis" style="color: #E7A4D4">© 2023</p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootsrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>