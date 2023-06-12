<?php
    include "db_connection.php";

    //Retrieve the form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);

    // Prepare the INSERT statement
    $statement = mysqli_prepare($connection, "INSERT INTO users (firstname,lastname,gender,email,password) VALUES (?, ?, ?, ?, ?)");
    
    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($statement, "sssss", $firstname, $lastname, $gender, $email, $password);

    // Execute the prepared statement
    mysqli_stmt_execute($statement);

    // Check if the insertion was successful and redirect to the profile page
    if (mysqli_stmt_affected_rows($statement) > 0) {
        header("Location: ../template/profile.php");
    } else {
        die('Error inserting data to database:' . mysqli_error($connection));
    }

    // Close the statement
    mysqli_stmt_close($statement);

    // Close the database connection
    mysqli_close($connection);
?>