<!DOCTYPE html>

<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$search = $_GET['query'];
	if($search==NULL){
		include 'Rare Medicines.php';
	}else{

	$mysqli = new mysqli("localhost", "root", "", "medi24");
	$result = $mysqli->query("SELECT rare_medi.medi,rare_medi.place,medi_loc.map FROM rare_medi inner join medi_loc on rare_medi.map_id=medi_loc.ID  WHERE rare_medi.medi LIKE '%".$search."%'");	

	}

?>
<html>

    <head>
        <title>#Medi24 | Rare Medicines</title>
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
                                <li ><a href="blood.php">Blood Bank</a></li>
                                <li class="active"><a href="Rare Medicines.php">Rare Medicines</a></li>
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
                     
                     <h5>The most preferred Rare Medicine all over the country.</h5>
                 </div>
             </div>
         <br>
        
                    
				<div class="container" id="results">
		<div class="col-md-12">
			<?php if($result->num_rows) { ?>
			<?php while($a = $result->fetch_assoc()) { ?>
			<div class="result">
				<h4 class="title"><?= $a['medi']; ?></a></h4>		
				<p class="description"><a href="<?=$a['map'];?>"><?=$a['place'];?></a></p>
				
			</div>
			<?php } ?>
			<?php } else { ?>
			<p>Sorry, no results found.</p>
			<?php } ?>
			

		</div>
	</div>	
					
					
        <div class="container">
            <p align="center">&copy Semicolon 2017</p>
        </div>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src=js/bootstrap.min.js></script>
        </body>
        <!-- <div>coded by Talha Zubaer</div> -->