<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Payment</title>
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
                <h1 align="center" >Payment</h1>
                <hr style="border-top: dotted 1px;border-width: 1.5px" />
                <form method="post" action="payment link.php">
                    <label for="fname">Date<a class="text-danger"><sup>*</sup></a></label>
                    <input type="date" id="date" name="date" placeholder="Pan Number" class="form-control" >
                    <label for="fname">Acknowledge Number<a class="text-danger"><sup>*</sup></a></label>
                    <input type="number" id="akn" name="akn" placeholder="Acknowledge Nnmber" class="form-control" >
                    <label for="fname">Payment Amount<a class="text-danger"><sup>*</sup></a></label>
                    <input type="number" id="payamt" name="payamt" placeholder="Payment Amount" class="form-control" >
                    <button class="btn btn-primary" type="submit" ">Return</button>
                </form>
            </div>
            <div class="col-sm-3 bg-light"></div>
        </div>
    </div>
     <script>
        function getRndInteger(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        }
        function deemed(){
            val1=number(document.getElementById("gti").value);
            val2=number(document.getElementById("td").value);
            val3=val1+val2;
            document.getElementById("dti").innerHTML=val3;
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>