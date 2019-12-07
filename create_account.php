<?php include './includes/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h1>Create Account</h1>
            <form id="create-account-form" method="post" action="authenticate.php">
                <?php include('errors.php'); ?>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input name="email" id="email" class="form-control" type="email" required></input>
                </div>
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input name="first_name" id="firstname" class="form-control" type="text" required></input>
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input name="last_name" id="lastname" class="form-control" type="text" required></input>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input name="password" id="password" class="form-control" type="password" required></input>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include './includes/footer.php'; ?>