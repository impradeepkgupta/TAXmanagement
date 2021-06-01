
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Employee front</title>
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
        <a class="nav-item nav-link disabled" href="#">Welcome </a>
    </nav>
    <nav class="navbar navbar-light bg-light">
        <ul class="nav nav-pills justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="employee front.php">Dashboard</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                <div class="dropdown-menu" aria-labelledby="menu">
                    <a class="dropdown-item" href="#">e_verify Return</a>
                    <a class="dropdown-item" href="#">Service Request</a>
                    <a class="dropdown-item" href="#">Generate EVC</a>
                    <a class="dropdown-item" href="#">tax Credit Mismatch</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile Settings</a>
                <div class="dropdown-menu" aria-labelledby="menu">
                    <a class="dropdown-item" href="#">My Profile</a>
                    <a class="dropdown-item" href="#">Register Digital Signature</a>
                    <a class="dropdown-item" href="#">Link Aadhar</a>
                    <a class="dropdown-item" href="#">Prevalidate Your Bank Account</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="employee logout.php">Logout</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="row align-self-stretch">
            <div class="col-sm-12 bg-light">
            	<h2 align="center">Manage Accounts</h2>
            	<div class="center-div">
            		<div class="table-responsive">
		            	<table class="table">
		            		<thead class="thead-dark">
		            			<th scope="col">Pan</th>
		            			<th scope="col">Gross Total Income</th>
                                <th scope="col">Total Deduction</th>
                                <th scope="col">Deeemd Total Income</th>
                                <th scope="col">Net Tax Payable</th>
                                <th scope="col">Total Tax</th>
                                <th scope="col">Taxes Paid</th>
                                <th scope="col">Refund</th>
                                <th scope="col">Tax Payable</th>
		            		</thead>
		            		<tbody>
		            		<?php

							include_once('connection.php');
							$selectquery= "select * from payslip";
							$query=mysqli_query($con, $selectquery);
							$nums=mysqli_num_rows($query);

							while($res=mysqli_fetch_array($query)){
							?>	
								<tr>
		            				<td><?php echo $res['pan']; ?></td>
		            				<td><?php echo $res['gross_total_income']; ?></td>
                                    <td><?php echo $res['total_deduction']; ?></td>
                                    <td><?php echo $res['deemed_total_income']; ?></td>
                                    <td><?php echo $res['net_tax_payable']; ?></td>
                                    <td><?php echo $res['total_tax']; ?></td>
                                    <td><?php echo $res['taxes_paid']; ?></td>
                                    <td><?php echo $res['refund']; ?></td>
                                    <td><?php echo $res['tax_payable']; ?></td>
		            			</tr>
							<?php
							}

							?>
		            			
		                	</tbody>
		                </table>
		            </div>
		        </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>