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

<div id="create-project" class="container">
    <div class="row create-project-nav">
        <div class="col-md-12">
            <a href="#">Logout</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="#">
                <h1>Create A Project</h1>
                <div class="form-group">
                    <label for="project-name">Project Name</label>
                    <input id="project-name" class="form-control" type="text"></input>
                    <label for="project-name">Description</label>
                    <input id="project-name" class="form-control" type="text"></input>
                </div>
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php include "./includes/footer.php" ?>