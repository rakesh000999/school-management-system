<?php include('./../connections/config.php') ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Create Tasks</title>
    <link rel="stylesheet" href="./../public/style.css">

    
</head>

<body>

    <?php
    // include('./../layouts/nav-bar.php') ;
    ?>

    <?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email != "" && $password != "") {
            $password = md5($password);
            $select_query = "SELECT * FROM register_admins WHERE email = '$email' AND password = '$password'";
            $select_result = mysqli_query($conn, $select_query);
            $user = mysqli_fetch_assoc($select_result);

            if ($user) {
                session_start();
                $_SESSION['email'] = $user['email'];
                echo header('Location:index.php');
            }
        } else {
    ?>
            <div class="container my-3 alert alert-warning alert-dismissible fade show" role="alert">
                Please fill all the fields.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    <?php
        }
    }
    ?>

    <div class="container mt-4">
        <h1 class="text-center text-success">Login</h1>
        <form action="#" method="post">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" class="form-control" name="email">

            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" class="form-control" name="password">

            <button class="btn btn-success mt-3" name="submit">Login</button>
            <button class="btn btn-primary mt-3" name="submit"><a href="./register.php">Register</a></button>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>