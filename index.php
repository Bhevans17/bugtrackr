<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="./css/index.css" type="text/css" rel="stylesheet">
    <title>BugTrackr | Homepage</title>
</head>

<body>
    <!-- Navigation -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="" class="navbar-brand"><i class="fas fa-spider"></i>&nbsp;BugTrackr</a>
                    <button class="navbar-toggler" data-target="#navbarSupportedContent" aria-label="Toggle navigation" type="button" aria-expanded="false" data-toggle="collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="signup.php" class="nav-link">
                                    Sign Up
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="login.php" class="nav-link">
                                    Login
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Main -->
    <main>
        <div class="container mt-5 mt-md-0">
            <div class="row d-flex flex-row">
                <div class="col-md-6 order-md-1">
                    <h1>Bugtrackr</h1>
                    <p class="text-secondary">A custom bug tracking application built for developers from a fellow developer.</p>
                    <a href="signup.php" type="button" class="btn btn-primary">Sign Up</a>
                    <a href="login.php" class="btn btn-outline-primary">Login</a>
                </div>
                <div class="col-md-6  mt-5 mt-md-0 order-md-2">
                    <img src="./img/about.svg" class="img-fluid mx-auto d-block w-100" alt="">
                </div>
            </div>
        </div>
    </main>
    <!-- Cards -->
    <section id="cards">
        <div class="container mt-5 md-mt-0">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center h-100">
                        <img src="./img/plan.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Plan Projects</h5>
                            <p class="card-text text-secondary">See what needs to be done.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center h-100">
                        <img src="./img/track-progress.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Track Progress</h5>
                            <p class="card-text text-secondary">See how it's coming together.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center h-100">
                        <img src="./img/workdone.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Get Work Done</h5>
                            <p class="card-text text-secondary">Finish everything on time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About -->
    <section id="about">
        <div class="container mt-5">
            <div class="row d-flex flex-row align-items-center">
                <div class="col-md-6 mt-5 mt-md-0 order-md-2 d-flex flex-column justify-content-center">
                    <h2>About</h2>
                    <p>Self taught developer who loves tech. I built this app for fun hopefully you can get some use out
                        of it too!</p>
                </div>
                <div class="col-md-6 mt-5 mt-md-0 order-md-1">
                    <img src="./img/img1.svg" class="img-fluid mx-auto d-block w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-arrow-circle-up"></i> Back To Top</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/b836e57116.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>