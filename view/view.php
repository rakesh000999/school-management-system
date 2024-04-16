<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>View</title>
    <style>
        button {
            outline: none !important;
            box-shadow: none !important;
        }
    </style>
</head>

<body>

    <div class="container">
        <table class="table table-white table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php  ?></th>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="btn btn-primary btn-sm">View</button>
                        <button class="btn btn-success btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>