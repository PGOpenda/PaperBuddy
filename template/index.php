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
            <a class="btn login-btn me-3 pe-4 ps-4 pt-2 pb-2" href="#" role="button">Log—in</a> 
            <a class="btn signup-btn pe-4 ps-4 pt-2 pb-2" href="#" role="button">Sign up</a>
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
                <a class="btn getstarted-btn me-1 pe-4 ps-4 pt-2 pb-2" href="#" role="button">Get Started</a>
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

    <!-- Bootsrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>