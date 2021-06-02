<?php

session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>New Employee</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="main1.php">
            <img src="logo.png" width="230" height="30" alt="" loading="lazy">
        </a>
        <ul class="nav nav-pills justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Accessibility Options</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
        </li>
        </ul>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    <div class="container">
        <div class="row align-self-stretch">
            <div class="col-sm-3 bg-light"></div>
            <div class="col-sm-6 bg-light">
                <h2 align="center">Registration</h2>
                <hr style="width:100%;border-width:1px;margin-left:0%;border-top:solid black">
                <h4 align="left">Personal details</h4>
                <hr style="width:70%;border-top: dotted 1px;border-width: 1.5px;margin-left:0%"; />
                <form action="new employee link.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputan">Application Number(8 digits)</label>
                            <input type="number" class="form-control" name="an" placeholder="Application Number">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputdob">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" placeholder="Date of birth">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="inputContact">Contact Number</label>
                            <input type="tel" class="form-control" name="contact" placeholder="Contact Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Address">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="venue">Venue<a class="text-danger"><sup>*</sup></a></label>
                            <input class="form-control" name="venue" type="text" placeholder="Venue">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="date">Date<a class="text-danger"><sup>*</sup></a></label>
                            <input class="form-control" name="date" type="date" placeholder="Date">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="time">Time<a class="text-danger"><sup>*</sup></a></label>
                            <input class="form-control" name="time" type="time" placeholder="Time">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            <div class="col-sm-3 bg-light"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>