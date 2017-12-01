<!DOCTYPE html>
<html>

<?php include('hospital.php');
	  
	  	

?>
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
                                <li><a href="blood.php">Blood Bank</a></li>
                                <li class="active" ><a href="Rare Medicines.php">Rare Medicines</a></li>
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
        <!-- <div>coded by Talha Zubaer-ID->152-15-5705</div> -->

        <br>
        <br>
        <!-- 4 blocks -->
        <div class="container">
            <div class = "row">

                <div class = "col-sm-12">
                    <center><a href = "#" class = "img">
                        <img id="i2r" src = "img/b4.png" style="height: 180px;">
                    </a></center>

                </div>


            </div>
        </div>
        <div class="container">
            <div class="row">
                <h1><p align="center"><b>Rare Medicines</b></p></h1>
            </div>
        </div>

        <hr>

        <br>
        <br>
        <br>
		
		<div class="container">
            <div class="row" >
                <!-- <div class="col-lg-12" style="border:1px solid#000;height: 35px;"> -->
                    <div class="col-lg-3"><h3 id="ser"><i>Search Your Medicine</i></h3></div>
                    <div class="col-lg-3">
					<form action="src.php" method="get" class="navbar-form">
                     <div class="form-group">
					<div class="input-group">
						<input type="search" name="query" placeholder="search here.." class="form-control">
						<span class="input-group-btn">
							<button class="btn btn-secondary" type="submit"><span class="glyphicon glyphicon-search"></span></button>	
						</span>
					</div>
                     </div>
					 </form>
                    </div>
                    
                    <div class="col-lg-6"></div>
                </div>
            <!-- </div> -->
        </div>
        <!--list group -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ol class="list-group">
                        <li class="list-group-item active"><h4>Rarest Ones:</h4></li>
						
						<li class="list-group-item"><?php
$sql = "SELECT medi FROM rare_medi where ID=6 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["medi"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>- <i id="k"><a href="<?php
$sql = "SELECT map FROM medi_loc where id=4 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["map"];
    }
} else {
echo "0 results";} ?> "
} target="_blank"></i><?php
$sql = "SELECT place FROM rare_medi where ID=6 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

						
                        <li class="list-group-item"><?php
$sql = "SELECT medi FROM rare_medi where ID=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["medi"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>- <i id="k"><a href="<?php
$sql = "SELECT map FROM medi_loc where ID=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["map"];
    }
} else {
echo "0 results";} ?> "
} target="_blank"></i><?php
$sql = "SELECT place FROM rare_medi where ID=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

<li class="list-group-item"><?php
$sql = "SELECT medi FROM rare_medi where ID=5 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["medi"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>- <i id="k"><a href="<?php
$sql = "SELECT map FROM medi_loc where id=3 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["map"];
    }
} else {
echo "0 results";} ?> "
} target="_blank"></i><?php
$sql = "SELECT place FROM rare_medi where ID=5 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

<li class="list-group-item"><?php
$sql = "SELECT medi FROM rare_medi where ID=10 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["medi"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>- <i id="k"><a href="<?php
$sql = "SELECT map FROM medi_loc where id=3 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["map"];
    }
} else {
echo "0 results";} 
?> "
} target="_blank"></i><?php
$sql = "SELECT place FROM rare_medi where ID=10 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

<li class="list-group-item"><?php
$sql = "SELECT medi FROM rare_medi where ID=9 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["medi"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>- <i id="k"><a href="<?php
$sql = "SELECT map FROM medi_loc where id=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["map"];
    }
} else {
echo "0 results";} ?> "
} target="_blank"></i><?php
$sql = "SELECT place FROM rare_medi where ID=9 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>


<li class="list-group-item"><?php
$sql = "SELECT medi FROM rare_medi where ID=4 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["medi"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>- <i id="k"><a href="<?php
$sql = "SELECT map FROM medi_loc where id=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["map"];
    }
} else {
echo "0 results";} ?> "
} target="_blank"></i><?php
$sql = "SELECT place FROM rare_medi where ID=4 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

                        <li class="list-group-item"><?php
$sql = "SELECT medi FROM rare_medi where ID=3 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["medi"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>- <i id="k"><a href="<?php
$sql = "SELECT map FROM medi_loc where id=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["map"];
    }
} else {
echo "0 results";} ?> "
} target="_blank"></i><?php
$sql = "SELECT place FROM rare_medi where ID=3 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>
                        
  <li class="list-group-item"><?php
$sql = "SELECT medi FROM rare_medi where ID=2 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["medi"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>- <i id="k"><a href="<?php
$sql = "SELECT map FROM medi_loc where ID=2 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["map"];
    }
} else {
echo "0 results";} ?> "
} target="_blank"></i><?php
$sql = "SELECT place FROM rare_medi where ID=2 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>
                      
                                                <li class="list-group-item"><?php
$sql = "SELECT medi FROM rare_medi where ID=7 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["medi"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>- <i id="k"><a href="<?php
$sql = "SELECT map FROM medi_loc where id=2 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["map"];
    }
} else {
echo "0 results";} ?> "
} target="_blank"></i><?php
$sql = "SELECT place FROM rare_medi where ID=7 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

                        <li class="list-group-item"><?php
$sql = "SELECT medi FROM rare_medi where ID=8 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["medi"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>- <i id="k"><a href="<?php
$sql = "SELECT map FROM medi_loc where id=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["map"];
    }
} else {
echo "0 results";} ?> "
} target="_blank"></i><?php
$sql = "SELECT place FROM rare_medi where ID=8 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"]."<br>";
    }
} else {
    echo "0 results";
}
	
?></a></li>

                        

                        

                    </ol>
                </div>

                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d889.9301501738611!2d90.44980259129042!3d23.69768879877139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b76206c8bacb%3A0xf4a2242da3b07a75!2sBaitur+Rahomat+Masjid!5e1!3m2!1sbn!2sbd!4v1476975231949" width="600" height="430" frameborder="0" style="border:0" allowfullscreen ></iframe>
                
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

        <script src="js/jquery-3.2.1.min.js">
            function myFunction() {
    var x = document.getElementById('myDIV');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
        </script>
        <script src=js/bootstrap.min.js></script>
    </body>
</html>