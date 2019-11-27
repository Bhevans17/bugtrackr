<?php include 'includes/header.php'; ?>



<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h1>Create Account</h1>
            <form class="mt-5" id="create-account-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input id="firstname" class="form-control" type="text" required></input>
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input id="lastname" class="form-control" type="text" required></input>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email" class="form-control" type="email" required></input>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input id="password" class="form-control" type="password" required></input>
                </div>
                <div class="form-group">
                    <label for="repassword">Re-Enter Password:</label>
                    <input id="repassword" class="form-control" type="password"></input>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>