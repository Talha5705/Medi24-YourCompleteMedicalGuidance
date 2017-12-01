<!DOCTYPE html>
<html>
    <head>
        <title>#Medi24 | Bloods</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="nav navbar-inverse">
                    <div class="col-lg-12">
                        <a href="home.php" class="navbar-brand"><i><i class="fa fa-stethoscope" ></i> Medi24.com</i></a>
                        <div class="navbar-header">
                            <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                        <div class="navbar-collapse collapse" id="mobile_menu">

                            <ul class="nav navbar-nav">
                                <li><a href="home.php">Home</a></li>
                                <li class="active" ><a href="blood.php">Blood Bank</a></li>
                                <li><a href="Rare Medicines.php">Rare Medicines</a></li>
                                <li><a href="cntct.php">About us</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <form action="results.php" method="get" class="navbar-form">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="search" name="query" placeholder="search here.." class="form-control">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-secondary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                                                    
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Health News
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.php">Specialist</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>
         <div class="container">
                 <div class="page-header">
                     <h1>DIU Blood Circle</h1>
                     <h5>The most preferred blood bank all over the country.</h5>
                 </div>
             </div>
         <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Bank Name</th>
                                    <th>Number of Bag(s)</th>
                                    <th>A+</th>
                                    <th>A-</th>
                                    <th>B+</th>

                                    <th>B-</th>
                                    <th>O+</th>
                                    <th>O-</th>
                                    <th>AB+</th>
                                    <th>AB-</th>
                                </tr>
                            </thead>
							<?php
include('hospital.php');
      
	  
$sql = "SELECT * FROM location where ID=1";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		
		  echo '<td>' . $row['place'] . '</td>';
		  echo '<td>' . $row['Tamount'] . '</td>';
		  echo '<td>' . $row['a_p'] . '</td>';
		  echo '<td>' . $row['a_n'] . '</td>';
		  echo '<td>' . $row['b_p'] . '</td>';
		  echo '<td>' . $row['b_n'] . '</td>';
		  echo '<td>' . $row['o_p'] . '</td>';
		  echo '<td>' . $row['o_n'] . '</td>';
		  echo '<td>' . $row['ab_p'] . '</td>';
		  echo '<td>' . $row['ab_n'] . '</td>';
		  echo "</tr>";

                            
	    }
} else {
echo "0 results";} ?>
                            
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <p align="center">&copy Semicolon 2017</p>
        </div>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src=js/bootstrap.min.js></script>
        </body>
        <!-- <div>coded by Talha Zubaer</div> -->