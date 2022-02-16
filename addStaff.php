<!DOCTYPE html>
<html>

<head>
    <!-------- BOOTSTRAP FRAMEWORK ------->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <style>
        body {
            font-family: "Open Sans", sans-serif;
        }
    </style>
    <!-----------BOOTSTRAP JAVA SCRIPT---------------------->
    <script src="js/bootstrap.bundle.js"></script>
    <title>Add Staff</title>
</head>

<body style="background-color: aquamarine;">
<?php include("headerAD.php");?>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form action="AdoProcess.php" method="POST" class="border shadow p-3 rounded bg-light">
            <div class="row justify-content-center">
                <h1 class="text-center p-3">Add Staff</h1>
                <div class="col mb-3"><label for="Username" class="form-label text-dark">Username</label><input
                        class="form-control" type="text" name="username" id="username" required></div>
            </div>
            <div class="row-justify-center">
                <div class="col mb-3"><label for="Username" class="form-label text-dark">Password</label><input
                        class="form-control" type="password" name="password" id="password" required></div>
            </div>
            <div class="row-justify-center">
                <div class="col mb-3"><label for="Username" class="form-label text-dark">Confirm Password</label><input
                        class="form-control" type="password" name="conpassword" id="confirmpassword" required></div>
            </div>
            <div class="row justify-content-center">
                <div class="col mb-3"><label for="Username" class="form-label text-dark">First Name</label><input
                        class="form-control" type="text" name="firstname" id="firstname" required></div>
                <div class="col mb-3"><label for="Username" class="form-label text-dark">Middle Name</label><input
                        class="form-control" type="text" name="middlename" id="middlename" required></div>
            </div>
            <div class="row justify-content-center">
                <div class="col mb-3"><label for="Username" class="form-label text-dark">Last name</label><input
                        class="form-control" type="text" name="lastname" id="lastname" required></div>
                <div class="col mb-3"><label for="Username" class="form-label text-dark">Age</label><input
                        class="form-control" type="number" name="age" id="age" required></div>
            </div>
            <div class="row justify-content-center">
                <div class="col mb-3"><label for="Username" class="form-label text-dark">Contact</label><input
                        class="form-control" type="text" name="contact" id="contact" required></div>
                <div class="col mb-3"><label for="Username" class="form-label text-dark">Sex</label><input
                        class="form-control" type="text" name="sex" id="sex" required></div>
            </div>
            <div class="row justify-content-center">
                <div class="col mb-3"><label for="Username" class="form-label text-dark">Email</label><input
                        class="form-control" type="email" name="email" id="email" required></div>
            </div>
            <div class="row justify-content-center">
                <div class="col mb-3"><label for="Username" class="form-label text-dark">Address</label><input
                        class="form-control" type="text" name="address" id="address" required></div>
                </div>           
                <div class="row justify-content-center">
                    <div class="col mb-3"><button class="btn btn-success" name="signup">Sign Up</button> 
                    <a href="login.php" id="cancel" class="btn btn-danger">Cancel</a></div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>