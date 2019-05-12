<!DOCTYPE html>
<html>
<?php include('hospital.php');
	  
	  	

?>
    <head>
	
      
	
        <title>#Medi24 | Home</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="description" content="3D flip animations - css - orizzontal">
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
                                <li class="active"><a href="home.php">Home</a></li>
                                <li><a href="blood.php">Blood Bank</a></li>
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
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/ny.jpg" >
                    <div class="carousel-caption">
                        <h2 style="color: #eee">Medi24</h2>
                    </div>
                </div>

                <div class="item">
                    <img src="img/la.jpg" >
                    <div class="carousel-caption" >
                        <h3 >Medi24.com</h3>
                        <p>We're Here for your Health</p>
                    </div>
                </div>


                <div class="item">
                    <img src="img/chicago.jpg">
                    <div class="carousel-caption">
                        <!-- <h3>Med24.com</h3> -->
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container">
            <div class="row">
                <h2><p align="center"><b>Our Services</b></p>
                </h2>
                <br>
            </div>
        </div>
        <br>
        <!-- 4 blocks -->
        <div class="container">
            <div class = "row">

                <div class = "col-sm-6 col-md-3">
				
				
				
                    <a href ="Hospitals.php" class = "thumbnail">
                        <img src ="img/hh.png" style="height: 180px;"><p align="center">All Hospitals</p>
                    </a>
                </div>

                <div class = "col-sm-6 col-md-3">
                    <a href = "blood.php" class = "thumbnail">
                        <img src = "img/bb.png" style="height: 180px;"><p align="center">Blood Banks</p>
                    </a>
                </div>

                <div class = "col-sm-6 col-md-3">
                    <a href = "Rare Medicines.php" class = "thumbnail">
                        <img src = "img/mm.png" alt="use a good icon please" style="height: 180px;"><p align="center">Rare Medicines</p>
                    </a>
                </div>

                <div class = "col-sm-6 col-md-3" >
                    <a href = "blog.php" class = "thumbnail">
                        <img src = "img/bl.png"><p align="center" style="height: -10px;">Health News</p>
                    </a>
                </div>

            </div>
        </div>
        <br>

        <!-- why -->

        <div class="container">
            <div class="row">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-3">Why Medi24?</h1>
                        <p class="lead">Well, this is the place to look for if you are in need of medical guidance. Such as which hospital to go,or where to find medicines and much more. And,
                            we made it easy for you so you can find this website friendlier.</p>
                    </div>
                </div>
            </div>
        </div>




        <!-- quote -->
        <div class="container">
            <div class="row">
                <blockquote class="blockquote-reverse" ><h3><i class="fa fa-leanpub" style="color:black"></i> Daily Hadith</h3>
				</i>
                    <p><?php
$sql = "SELECT hadith FROM hadith";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["hadith"]."<br>";
    }
} else {
    echo "0 results";
}
	?>
</p>
                    <footer><?php
$sql = "SELECT written_in FROM hadith";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["written_in"]."<br>";
    }
} else {
    echo "0 results";
}
	?></footer>
                </blockquote>
            </div>
        </div>
        <!-- footer starts -->
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 tfoot">
                            <div class="col-lg-4 foot1"><p><h1><i class="fa fa-stethoscope" style="font-size:36px;color:white"> <i class="fa fa-medium" style="font-size:36px;color:red"></i></i>EDI24</h1></p>
                                <p id="p2">Your Complete Medical Guidance.</p>
                            </div>
                            <div class="col-lg-4 f3"></div>
                            <div class="col-lg-4 foot2">

                                <p id="p1">
                                <h4>Initiative of</h4>
                                Semicolon<br>
                                Department of CSE<br>
                                Daffodil International University.
                                </p>

                                <a href="https://www.youtube.com/channel/UCWURFcBMrH65jUylP5uIUlg" target=_blank ><i class="fa fa-youtube" style="font-size:36px;color:red"></i></a>

                                &nbsp
                                <a href="https://www.facebook.com/printfLlife" target=_blank ><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
                                &nbsp

                                <a href="https://www.linkedin.com/in/talha-zubaer-506298137/" target=_blank > <i class="fa fa-linkedin-square" style="font-size:36px;color:deepskyblue"></i></a>
                                &nbsp
                            </div>
                        </div>    
                    </div>
                </div>

            </div>
        </div>

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src=js/bootstrap.min.js></script>
    </body>
</html>
