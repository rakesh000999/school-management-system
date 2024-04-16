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
    </style>
</head>

<body>
    <?php include('./../layouts/nav-bar.php') ?>


    <div class="container mt-4">
        <form action="#" method="post">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" class="form-control" name="email">

            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" class="form-control" name="password">

            <button class="btn btn-primary mt-3" name="add">Login</button>

        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>