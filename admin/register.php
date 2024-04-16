<?php include('./../connections/config.php') ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Admin Register</title>
    <link rel="stylesheet" href="./../public/style.css">
</head>

<body>

    <?php
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm-password'];

        if ($name != "" && $email != "" && $password != "" && $confirm_password != "") {
            if ($password == $confirm_password) {
                $select_query = "SELECT * FROM register_admins WHERE email = '$email' ";
                $select_result = mysqli_query($conn, $select_query);
                $count = mysqli_num_rows($select_result);

                if ($count == 0) {
                    $password = md5($password);
                    $insert_query = "INSERT INTO register_admins(name, email, password) VALUES ('$name', '$email', '$password')";
                    $insert_result = mysqli_query($conn, $insert_query);

                    if ($insert_result) {
                        header('refresh:1, url = login.php');
    ?>
                        <div class="container mt-3 alert alert-success alert-dismissible fade show" role="alert">
                            You are registered successfully. Please login to continue.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="container mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                        This email exists already!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                }
            } else {

                ?>
                <div class="container my-3 alert alert-danger alert-dismissible fade show" role="alert">
                    Passwords do not match!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
        } else {
            ?>
            <div class="container alert alert-warning alert-dismissible fade show my-3" role="alert">
                All fields are required!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    <?php
        }
    }
    ?>
    <?php include('./../layouts/nav-bar.php') ?>

    <div class="container">
        <h2 class="text-center text-success my-2">Admin Registration:</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" name="confirm-password">
            </div>

            <button type="submit" class="btn btn-primary my-3" name="register">Register</button>
            <button class="btn btn-success"><a href="./login.php">Login</a></button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>