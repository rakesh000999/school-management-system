<?php include('./../connections/config.php') ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Create Tasks</title>
    <style>
        button,
        input {
            outline: none !important;
            box-shadow: none !important;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

    <?php include('./../layouts/nav-bar.php');

    $emailError = $passwordError = "";
    $isValid = true;

    if (isset($_POST['login'])) {
        if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            $emailError = "Email is required.";
            $isValid = false;
        }

        if (isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])) {
            $password = $_POST['password'];
        } else {
            $passwordError = "Password is required.";
            $isValid = false;
        }

        if ($isValid) {
            $password = md5($password);

            $fetchSql = "SELECT * FROM register_students WHERE email='$email' AND password = '$password'";

            $fetchResult = mysqli_query($conn, $fetchSql);

            $user = mysqli_fetch_assoc($fetchResult);

            if ($user) {
                session_start();
                $_SESSION['email'] = $user['email'];
                header('Location:index.php');
            }
        }
    }

    ?>

    <div class="container mt-4">
        <form action="" method="post">
            <label for="email" class="form-label">Email</label><span class="error"> *</span>
            <input type="email" id="email" class="form-control" name="email">
            <span class="error"><?php echo $emailError ?></span>
            <br>

            <label for="password" class="form-label">Password</label><span class="error"> *</span>
            <input type="password" id="password" class="form-control" name="password">
            <span class="error"><?php echo $passwordError ?></span>
            <br>

            <button type="submit" class="btn btn-primary mt-3" name="login">Login</button>

        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>