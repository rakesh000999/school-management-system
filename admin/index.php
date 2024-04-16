<?php require './../connections/config.php';
require './../process/secure.php'
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .side-bar {
            padding: 15px;
            float: left;
            width: 200px;
            height: 100vh;
            position: absolute;
            top: 0;
        }

        .dropdown {
            position: relative;
            display: inline-block;

        }

        .dropbtn {
            min-width: 160px;

            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            display: block;
            color: black;
            padding: 10px 16px;

        }

        .dropdown-content a:hover {
            background-color: #4CAF50;
            color: white;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #D4AF32;
        }

        .custom-bg {
            background-color: #394356;
        }
    </style>
</head>

<body>
    <h1 class="text-3xl text-black font-bold  text-center py-2 shadow-lg">
        School <span class="text-green-500">Management</span>
    </h1>

    <!-- <div class="side-bar container bg-blue-300 w-64 p-4">
        <h1>Welcome</h1>
        <select name="asdf" id="select" class="w-full my-4">
            <option value="">Name</option>
            <option value="">Name</option>
            <option value="">Name</option>
        </select>
        <select name="asdf" id="select" class="w-full my-2">
            <option value="">Name</option>
            <option value="">Name</option>
            <option value="">Name</option>
        </select>
        <select name="asdf" id="select" class="w-full my-2">
            <option value="">Name</option>
            <option value="">Name</option>
            <option value="">Name</option>
        </select>
        <select name="asdf" id="select" class="w-full my-2">
            <option value="">Name</option>
            <option value="">Name</option>
            <option value="">Name</option>
        </select>
        <select name="asdf" id="select" class="w-full my-2">
            <option value="">Name</option>
            <option value="">Name</option>
            <option value="">Name</option>
        </select>

    </div> -->


    <div class="side-bar custom-bg">
        <div class="dashboard bg-green-700 text-white p-5">
            <span>Dashboard</span>
        </div>

        <div class="dropdown mt-2 ">
            <button class="dropbtn bg-blue-700">Student</button>
            <div class="dropdown-content">
                <a href="#">Add</a>
                <a href="#">View</a>
                <a href="#">Add</a>
            </div>
        </div>
        <div class="dropdown mt-2">
            <button class="dropbtn bg-blue-700">Teacher</button>
            <div class="dropdown-content">
                <a href="#">Add</a>
                <a href="#">View</a>
                <a href="#">Add</a>
            </div>
        </div>
        <div class="dropdown mt-2">
            <button class="dropbtn bg-blue-700">Parents</button>
            <div class="dropdown-content">
                <a href="#">Add</a>
                <a href="#">View</a>
                <a href="#">Add</a>
            </div>
        </div>
    </div>


</body>

</html>