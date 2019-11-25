<?php include 'includes/header.php'; ?>



<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h1>Create Account</h1>
            <?php
            if($_POST){
            
                // include database connection
                include 'config/database.php';
            
                try{
                
                    // insert query
                    $query = "INSERT INTO user SET first_name=:firstname, last_name=:lastname, email=:email, password=:password, created=:created";
            
                    // prepare query for execution
                    $stmt = $con->prepare($query);
            
                    // posted values
                    $firstname=htmlspecialchars(strip_tags($_POST['firstname']));
                    $lastname=htmlspecialchars(strip_tags($_POST['lastname']));
                    $email=htmlspecialchars(strip_tags($_POST['email']));
                    $password=htmlspecialchars(strip_tags($_POST['password']));
            
                    // bind the parameters
                    $stmt->bindParam(':firstname', $firstname);
                    $stmt->bindParam(':lastname', $lastname);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':password', $password);
                    
                    // specify when this record was inserted to the database
                    $created=date('Y-m-d H:i:s');
                    $stmt->bindParam(':created', $created);
                    
                    // Execute the query
                    if($stmt->execute()){
                        echo "<div class='alert alert-success'>Account Created.</div>";
                    }else{
                        echo "<div class='alert alert-danger'>Unable To Create Account.</div>";
                    }
                    
                }
                
                // show error
                catch(PDOException $exception){
                    die('ERROR: ' . $exception->getMessage());
                }
            }
?>
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