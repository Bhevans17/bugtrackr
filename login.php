<?php include './includes/header.php'; ?>

<div id="login-wrapper" class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h1>Login</h1>
            <form id="login-form" action="">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email" class="form-control" type="email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input id="password" class="form-control" type="password">
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include './includes/footer.php'; ?>