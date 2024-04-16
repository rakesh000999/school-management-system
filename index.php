<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>School Management System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        button,
        input:focus {
            outline: none !important;
            box-shadow: none !important;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            color: white !important;
        }

        ul {
            list-style-type: none;
        }
    </style>
</head>

<body class="bg-success">

    <?php include('./layouts/nav-bar.php') ?>

    <div class="container py-3">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card m-2">
                    <img src="./images/teacher.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Teacher</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Teacher login here.</h6>
                        <button class="btn btn-primary"><a href="./teachers/teacher-login.php">Login</a></button>
                        <button class="btn btn-info"><a href="./teachers/register.php">Register</a></button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card m-2">
                    <img src="./images/student.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Students</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Students login here.</h6>
                        <button class="btn btn-primary"><a href="./students/student-login.php">Login</a></button>
                        <button class="btn btn-info"><a href="./students/register.php">Register</a></button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card m-2">
                    <img src="./images/parents.avif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Parent</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Parents login here.</h6>
                        <button class="btn btn-primary"><a href="./parents/parent-login.php">Login</a></button>
                        <button class="btn btn-info"><a href="./parents/register.php">Register</a></button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="bg-dark text-white p-3">
        <div class="container ">
            <div class="row d-flex justify-content-between">

                <div class="col-12 col-sm-6 col-md-3">
                    <h3>School <span class="text-success">Management</span>
                    </h3>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <h4>Hello</h4>
                    <ul class="list-group">
                        <li>asdfas asdfa adsfsdfasd af</li>
                        <li>asdfas</li>
                        <li>asdfas</li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <h4>Hi</h4>

                    <ul class="list-group">
                        <li>asdfas</li>
                        <li>asdfas</li>
                        <li>asdfas</li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <h4>Contact Developer</h4>

                    <ul class="list-group">
                        <li><a href="mailto:rakeshjoshi6078@gmail.com">Email: rakeshjoshi6078@gmail.com</a></li>
                        <li><a href="tel:5454545">Contact: 5454545</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center">
            &#169; <span id="year"></span> | All rights reserved.
        </div>
    </footer>

    <script>
        let date = new Date();
        let year = date.getFullYear();
        document.getElementById('year').innerText = year;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>