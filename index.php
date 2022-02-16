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
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Pet Adoption System</title>
</head>

<body>
    <?php include('header.php');?>
    <div class="hero vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-4 text-white">Hello Pet lovers</h1>
                    <p class="text-white">Welcome to GoAdoptMe! we are the here to Serve you!</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    
    <section>
    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-4">
                <div class="card " style="width: 20rem;">
                    <img src="img/dog1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Adoption</b></h5>
                        <p class="card-text">Click the button if you want to adopt dogs. So that they can a new home with you.</p>
                        <a href="login.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card " style="width: 20rem;">
                    <img src="img/dog1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Discover More About Dogs</b></h5>
                        <p class="card-text">Click the button to know more the kind of breeds of a dog.</p>
                        <br>
                        <a href="#" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card " style="width: 20rem;">
                    <img src="img/dog1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>About Us</b></h5>
                        <p class="card-text">Click the button to find out more about us and the team that make this system for Dogs to have a new home.</p>
                        <a href="#" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <?php include("footer.php");?>
</body>

</html>