<?php
    // // Start the session (if not already started)
    // session_start();

    // // Check if the user is logged in
    // if (!isset($_SESSION['user_id'])) {
    //     // User is not logged in, redirect to the login form
    //     header('Location: index.php');
    //     exit();
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PapperBuddy - Profile</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../static/images/favicon.ico">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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
        </div>
    </nav>

    <!-- Main Body -->
    <div class="container">
        <h1 class="display-5">Profile Settings</h1>
        <p>Change your profile and account settings</p>
    </div>

    <div class="container">
        
        <div class="main-body pb-4 pe-5 ps-5 pt-4 mb-2">

            <ul class="nav nav-underline" id="myTab" role="tablist">
                <li class="nav-item pe-2" role="presentation">
                    <button class="nav-link active" id="account-tab" data-bs-toggle="tab" data-bs-target="#account-tab-pane" type="button" role="tab" aria-controls="account-tab-pane" aria-selected="true">
                        <i class="bi bi-person-square"></i>  Account
                    </button>
                </li>
                <li class="nav-item pe-2" role="presentation">
                    <button class="nav-link" id="password-tab" data-bs-toggle="tab" data-bs-target="#password-tab-pane" type="button" role="tab" aria-controls="password-tab-pane" aria-selected="false">
                        <i class="bi bi-key-fill"></i>  Password
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="preference-tab" data-bs-toggle="tab" data-bs-target="#preference-tab-pane" type="button" role="tab" aria-controls="preference-tab-pane" aria-selected="false">
                        <i class="bi bi-sliders2-vertical"></i>  Preferences
                    </button>
                </li>
            </ul>

            <div class="tab-content pe-4 ps-4 pt-4" id="myTabContent">

                <div class="tab-pane fade show active" id="account-tab-pane" role="tabpanel" aria-labelledby="account-tab" tabindex="0">
                    
                    <h3><strong>General info</strong></h3>

                    <form class="row g-3" action="">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">First Name</label>
                            <input type="text" class="form-control p-2" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Last Name</label>
                            <input type="text" class="form-control p-2" id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Email</label>
                            <input type="email" class="form-control p-2" id="inputAddress" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress2" class="form-label">Gender</label>
                            <select class="form-select p-2" id="Gender" name="gender" aria-label="Select for type of gender" required>
                                    <option selected disabled value>Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="trans">Transgender</option>
                                    <option value="other">Other</option>
                                    <option value="none">Prefer not to say</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update Account</button>
                        </div>
                    </form>

                </div>

                <div class="tab-pane fade" id="password-tab-pane" role="tabpanel" aria-labelledby="password-tab" tabindex="0">
               
                     <h3><strong>Change your password</strong></h3>

                    <form class="row g-3" action="">
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Previous password</label>
                            <input type="password" class="form-control p-2" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">New Password</label>
                            <input type="text" class="form-control p-2" id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Confirm Password</label>
                            <input type="email" class="form-control p-2" id="inputAddress" placeholder="">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </form>

                </div>

                <div class="tab-pane fade" id="preference-tab-pane" role="tabpanel" aria-labelledby="preference-tab" tabindex="0">
                    
                    <h3><strong>Add / Remove topics of your choice</strong></h3>

                    <div class="row pt-2">

                        <div class="col-4">
                            
                            <form class="row g-3" action="">
                                <div class="col-12">
                                    <label for="inputEmail4" class="form-label">Enter keyword or topic</label>
                                    <input type="password" class="form-control p-2" id="inputEmail4">
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Add Subject Matter</button>
                                </div>
                            </form>

                        </div>

                        <div class="col-8 ps-4">
                            <table class="table table-dark table-striped table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Larry the Bird</td>
                                    <td>Thornton</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    
                </div>
            
            </div>
        </div>
    </div>

    <!-- Bootsrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- My JavaScript file -->
    <script src="../static/script.js"></script>
</body>
</html>