<!DOCTYPE html>
<html>

<?php include('hospital.php');
      
	  
	  	

?>
    <head>
        <title>#Medi24 | Blood Bank</title>
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
        <!-- <div>coded by Talha Zubaer</div> -->

        <div class="container">
            <div class="row">
                <h2><p align="center"><b>Availability Guranteed</b></p>
                </h2>
                <br>
            </div>
        </div>
        <br>
        <!-- 4 blocks -->
        <div class="container">
            <div class = "row">

                <div class = "col-lg-12">
                    <center><a href = "#" class = "img">
                        <img id="i1b" src = "img/b3.png" style="height: 180px;">
                    </a></center>
                </div>

            </div>
        </div>
        <br>







        <!-- banks -->

        <!-- public -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- private -->
                    <div>
                        <ol class="list-group">
                            <li class="list-group-item active"><h3 align="center">Available Bloods</h3></li>
                            <li class="list-group-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><p style="color: red;"><span class="glyphicon glyphicon-tint"></span> A+<span class="caret"></span></p></a>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="display1.php"
} target="_blank"><?php
$sql = "SELECT place,a_p FROM location where ID=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["a_p"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?> </a></li>
									<li><a href="display2.php"
} target="_blank"><?php
$sql = "SELECT place,a_p FROM location where ID=2 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["a_p"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

									<li><a href="display4.php"
} target="_blank"><?php
$sql = "SELECT place,a_p FROM location where ID=4 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["a_p"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>


                                    
                                </ul>
                            </li>
							
							<li class="list-group-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><p style="color: red;"><span class="glyphicon glyphicon-tint"></span> A-<span class="caret"></span></p></a>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="display1.php"
} target="_blank"><?php
$sql = "SELECT place,a_n FROM location where ID=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["a_n"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>
									
									<li><a href="display2.php"
} target="_blank"><?php
$sql = "SELECT place,a_n FROM location where ID=2 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["a_n"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

									<li><a href="display4.php"
} target="_blank"><?php
$sql = "SELECT place,a_n FROM location where ID=4 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["a_n"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>


                                    
                                </ul>
                            </li>
							
							<li class="list-group-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><p style="color: red;"><span class="glyphicon glyphicon-tint"></span> B+<span class="caret"></span></p></a>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="display1.php"
} target="_blank"><?php
$sql = "SELECT place,b_p FROM location where ID=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["b_p"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

									<li><a href="display2.php"
} target="_blank"><?php
$sql = "SELECT place,b_p FROM location where ID=2 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["b_p"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>


                                    
                                </ul>
                            </li>
							
							<li class="list-group-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><p style="color: red;"><span class="glyphicon glyphicon-tint"></span> B-<span class="caret"></span></p></a>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="display1.php"
} target="_blank"><?php
$sql = "SELECT place,b_n FROM location where ID=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["b_n"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

									<li><a href="display2.php"
} target="_blank"><?php
$sql = "SELECT place,b_n FROM location where ID=2 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["b_n"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

									<li><a href="display4.php"
} target="_blank"><?php
$sql = "SELECT place,b_n FROM location where ID=4 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["b_n"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>


                                   
                                </ul>
                            </li>


                            <li class="list-group-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><p style="color: red;"><span class="glyphicon glyphicon-tint"></span> O+<span class="caret"></span></p></a>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="display1.php"
} target="_blank"><?php
$sql = "SELECT place,o_p FROM location where ID=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["o_p"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

									<li><a href="display2.php"
} target="_blank"><?php
$sql = "SELECT place,o_p FROM location where ID=2 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["o_p"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>


                                    
                                </ul>
                            </li>
                            <li class="list-group-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><p style="color: red;"><span class="glyphicon glyphicon-tint"></span> O-<span class="caret"></span></p></a>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="display1.php"
} target="_blank"><?php
$sql = "SELECT place,o_n FROM location where ID=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["o_n"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

									<li><a href="display2.php"
} target="_blank"><?php
$sql = "SELECT place,o_n FROM location where ID=2 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["o_n"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

									<li><a href="display3.php"
} target="_blank"><?php
$sql = "SELECT place,o_n FROM location where ID=3 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["o_n"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

									<li><a href="display4.php"
} target="_blank"><?php
$sql = "SELECT place,o_n FROM location where ID=4 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["o_n"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

                                </ul>
                            </li>
                            <li class="list-group-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><p style="color: red;"><span class="glyphicon glyphicon-tint"></span> AB+<span class="caret"></span></p></a>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="display1.php"
} target="_blank"><?php
$sql = "SELECT place,ab_p FROM location where ID=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["ab_p"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

									<li><a href="display2.php"
} target="_blank"><?php
$sql = "SELECT place,ab_p FROM location where ID=2 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["ab_p"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

									<li><a href="display3.php"
} target="_blank"><?php
$sql = "SELECT place,ab_p FROM location where ID=3 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["ab_p"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

									<li><a href="display4.php"
} target="_blank"><?php
$sql = "SELECT place,ab_p FROM location where ID=4 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["ab_p"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>


                                    
                                </ul>
                            </li>
                            <li class="list-group-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><p style="color: red;"><span class="glyphicon glyphicon-tint"></span> AB-<span class="caret"></span></p></a>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="display1.php"
} target="_blank"><?php
$sql = "SELECT place,ab_n FROM location where ID=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["ab_n"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

									<li><a href="display2.php"
} target="_blank"><?php
$sql = "SELECT place,ab_n FROM location where ID=2 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["ab_n"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

									<li><a href="display3.php"
} target="_blank"><?php
$sql = "SELECT place,ab_n FROM location where ID=3 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]." (".$row["ab_n"].")"."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>


                                    
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>





        <!-- cautions -->
        <div class="container">
            <div class="row">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-3">Before Taking Blood:</h1>
                        <p class="lead">Always Make sure that the blood you are taking is completely safe and secure.Go through the tests suggested by doctor.This Website provides you the availibility of blood when you need it on an emergency.However it doesn't guarantees you the concerns related with the blood quality.&nbspHope this helps.<br> :) </p>
                    </div>
                </div>
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
                                Semicololn<br>
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