<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Payslip</title>
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
                <form action="payslip link.php" method="post">
                    <h1 align="center" >Payslip</h1>
                    <hr style="border-top: dotted 1px;border-width: 1.5px" />
                    <div class="form-group">
                        <label for="fname">Pan Number<a class="text-danger"><sup>*</sup></a></label>
                        <input type="text" id="pan" name="pan" placeholder="Pan Number" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label> Gross Total Income</label>
                        <input type="number" id="gti" name="gti" placeholder="Gross Total Income" class="form-control">
                    </div>
                    <div class="form-group">    
                        <label>Total Deduction Under Chapter VI-A</label>
                        <input type="number" id="td" name="td" placeholder="Total Deduction Under Chapter VI-A" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deemed Total Income</label>
                        <input type="number" id="dti" name="dti" placeholder="Deemed Total Income" class="form-control">
                    </div>
                    <div class="form-group">    
                        <label>Net Tax Payable</label>
                        <input type="number" id="ntp" name="ntp" placeholder="Net Tax Payable" class="form-control">
                    </div>
                    <div class="form-group">    
                        <label>Total tax, interest and Fee payable</label>
                        <input type="number" id="tt" name="tt" placeholder="Total tax, interest and Fee payable" class="form-control">
                    </div>
                    <div class="form-group">    
                        <label>Taxes Paid</label>
                        <input type="number" id="tp" name="tp" placeholder="Taxes Paid" class="form-control">
                    </div>
                    <div class="form-group">    
                        <label>Refund</label>
                        <input type="number" id="refund" name="refund" placeholder="Refund" class="form-control">
                    </div>
                    <div class="form-group">    
                        <label>Tax Payable</label>
                        <input type="number" id="tpy" name="tpy" placeholder="Tax Payable" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"">Submit</button>
                    </div>
                </form>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" onclick="deemed();nettax();final();">Calculate</button>
                </div>
            </div>
            <div class="col-sm-3 bg-light"></div>
        </div>
    </div>
     <script>
        function deemed(){
            var val1=parseInt(document.getElementById("gti").value);
            var val2=parseInt(document.getElementById("td").value);
            var val3=val1-val2;
            document.getElementById('dti').value=val3;
        }
        function nettax(){
            var val1=parseInt(document.getElementById("dti").value);
            var val2=0;
            if(val1<250000){
                document.getElementById("tt").value=val2;
                document.getElementById("ntp").value=val2;
            }
            else if(val1>250001 && val1<500000){
                val2=(0.05*(val1-250000))+125;
                document.getElementById("tt").value=val2;
                document.getElementById("ntp").value=val2;
            }
            else if(val1>500001 && val1<1000000){
                val2=13625+(0.2*(val1-500000));
                document.getElementById("tt").value=val2;
                document.getElementById("ntp").value=val2;
            }
            else{
                val2=115125+(0.3*(val1-1000000));
                document.getElementById("tt").value=val2;
                document.getElementById("ntp").value=val2;
            }
        }
        function final(){
            var val1=parseInt(document.getElementById("tp").value);
            var val2=parseInt(document.getElementById("tt").value);
            var val3=0;
            var val4=0;
            if(val1>val2){
                val3=val1-val2;
                document.getElementById("refund").value=val3;
                document.getElementById("tpy").value=val4;
            }
            else{
                val3=val2-val1;
                document.getElementById("refund").value=val4;
                document.getElementById("tpy").value=val3;
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>