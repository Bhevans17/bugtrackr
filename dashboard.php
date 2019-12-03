<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>BugTrackr | Built For Developers</title>
</head>

<div id="dashboard-nav" class="container">
    <div class="row">
        <div id="nav-icons" class="col-6">
            <i class="far fa-user"></i>
            <i class="fas fa-bell"></i>
            <i class="fas fa-users"></i>
        </div>
        <div id="nav-links" class=" col-6">
            <a href="#">Logout</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div id="project-title" class="col-md-4 offset-md-4">
            <h1>PROJECT NAME</h1>
            <a class="btn btn-primary" href="">ADD ISSUE</a>
        </div>
    </div>
</div>

<div id="table-wrapper" class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="table-options">
                <h2>My Issues</h2>
            </div>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Key</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Priority</th>
                        <th scope="col">Status</th>
                        <th scope="col">Due</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>Pir</td>
                        <td>Smith</td>
                        <td>50</td>
                        <td>Smith</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12 col-md-6">
            <h2>Recent Updates</h2>
            <ul>
                <li>
                    <h4>DEC 03 2019</h4>
                    <hr>
                    <i class="far fa-user mt-3 mr-3"></i>
                    <p>USER added a new COMMENT/ISSUE</p>
                    <p>PROJECT NAME</p>
                    <p>COMMENT NAME</p>
                </li>
            </ul>
        </div>

    </div>


    <?php include "./includes/footer.php"; ?>