<?php include './includes/header.php' ?>

<!-- Main Content -->
<div id="main" class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <main>
                <h1>Track Your Bugs!</h1>
                <p>A custom bug tracking application built for developers from a fellow developer.</p>
                <a href="create_account.php" class="btn btn-primary">Create Account</a>
                <a href="login.php" class="btn btn-outline-primary">Login</a>
            </main>
        </div>
        <div class="col-md-6">
            <img class="img-fluid" src="./img/img2.svg" alt="Two people chatting">
        </div>
    </div>
</div>

<!-- About Us -->
<div data-aos="fade-up" data-aos-anchor-placement="top-center" id="about-us" class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img class="img-fluid" src="./img/about.svg" alt="A person chatting with a robot">
        </div>
        <div class="col-md-6">
            <h2>About Me</h2>
            <p>Self taught developer who loves tech. I built this app for fun hopefully you can get some use out of it too!</p>
        </div>
    </div>
</div>

<!-- Cards -->
<div data-aos="fade-up" data-aos-anchor-placement="top-center" id="card-wrapper" class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="./img/plan.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <i class="fas fa-cogs"></i>
                    <h5 class="card-title">Plan Projects</h5>
                    <p class="card-text">Lorem , dolor sit amet consectetur</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="./img/track-progress.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <i class="fas fa-desktop"></i>
                    <h5 class="card-title">Track Progress</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="./img/workdone.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <i class="far fa-keyboard"></i>
                    <h5 class="card-title">Get Work Done</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './includes/footer.php' ?>