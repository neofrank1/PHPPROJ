<!DOCTYPE html>
<html>

<head>
    <!-------- BOOTSTRAP FRAMEWORK ------->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/style.css"/>
    <!-----------BOOTSTRAP JAVA SCRIPT---------------------->
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Pet Adoption System</title>
</head>

<body>
    <!---------------------------HEADER------------------------------------------>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 navigation">
        <div class="container-fluid">
            <a href="staff.php" class="navbar-brand">GoDoptMe!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu"
                aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="toggleMobileMenu">
                <form class="d-flex" method="POST" action="search.php">
                    <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search"
                        name="search">
                    <button class="btn btn-outline-light" type="search" name="submit-search">Search</button>
                </form>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white " href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="#">Add Dogs</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="#">Request</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="#">Profile</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="#">Notifications</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        var nav = document.querySelector('nav'); 

        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark', 'shadow');
            }
        });
    </script>
</body>

</html>