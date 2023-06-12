<?php
    include "db_connection.php";

    //Retrieve the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the query
    $statement = mysqli_prepare($connection, "SELECT * FROM users WHERE email = ? LIMIT 1");
    mysqli_stmt_bind_param($statement, "s", $email);
    mysqli_stmt_execute($statement);

    $result = mysqli_stmt_get_result($statement);

    // Fetch the user record
    $user = mysqli_fetch_assoc($result);

    // Check if a user was found and the password is correct
    if ($user && password_verify($password, $user['password'])) {
        // Correct credentials, create session
        // $_SESSION['user_id'] = $user['userid'];
        // $_SESSION['username'] = $user[''];

        // Redirect to a protected page or display success message
        header('Location: ../template/profile.php');

    } else {
        die('Error' . mysqli_error($connection)); 
    }

    // Close the statement
    mysqli_stmt_close($statement);

    // Close the database connection
    mysqli_close($connection);
?>