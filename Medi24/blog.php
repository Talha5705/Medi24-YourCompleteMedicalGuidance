<!DOCTYPE html>
<html>
<?php include('hospital.php');
	  
	  	

?>
    <head>
        <title>#Medi24 | About us</title>
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
                                <li ><a href="home.php">Home</a></li>
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
                                <li class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Health News
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="active"><a href="blog.php">Specialist</a></li>
                                        
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

                <div class = "col-lg-12">
                    <center><a href = "#" class = "img" >
                        <img id="i6b"  src="img/gg.png" style="height: 180px; ">
                    </a></center>

                </div>


            </div>
        </div>
        <div class="container">
            <div class="row">
                <h1><p align="center"><b>'Know & Live Healthy'</b></p></h1>
            </div>
        </div>
        
        

        <br>
        <br>
        <br>
        <div class="container">
            <div class="row" >
                    <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  <strong><i class="fa fa-warning"></i> Latest News:</strong> <marquee><p style="font-family: Impact; font-size: 18pt"><?php
$sql = "SELECT news FROM news where id=1 ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["news"];
    }
} else {
echo "0 results";} ?></p></marquee>
</div>
            </div>
        </div>        
        <!-- Left media object -->
        <div class="container">
        <div class="row">
  <div class="media">
    <div class="media-left">
      <img src="img/b2.png" class="media-object" style="width:60px">
    </div>
    <div class="media-body">
    <h4 class="media-heading" style="color: #d942f4;">
    <?php
$sql = "SELECT sector from tips where ID=1";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["sector"];
    }
} else {
    echo "0 results";
}
	
?></h4>
<h5 class="media-heading" ><?php
$sql = "SELECT name from tips where ID=1";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["name"];
    }
} else {
    echo "0 results";
}
	
?></h5>
      <p><?php
$sql = "SELECT place from tips where ID=1";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"];
    }
} else {
    echo "0 results";
}
	
?> <br>
      <a href="<?php
$sql = "SELECT map from tips where ID=1";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["map"];
    }
} else {
    echo "0 results";
}
	
?>" target="_blank">Place</a>
      </p>
    </div>
  </div>
  </div>
  </div>

  <hr>
  
  <!-- Right media object -->
  <div class="container">
        <div class="row">
  <div class="media">
    <div class="media-body">
      <h4 class="media-heading" style="color: #d942f4;"><?php
$sql = "SELECT sector from tips where ID=2";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["sector"];
    }
} else {
    echo "0 results";
}
	
?></h4>
<h5 class="media-heading" ><?php
$sql = "SELECT name from tips where ID=2";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["name"];
    }
} else {
    echo "0 results";
}
	
?></h5>
      <p><?php
$sql = "SELECT place from tips where ID=2";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"];
    }
} else {
    echo "0 results";
}
	
?> <br>
      <a href="<?php
$sql = "SELECT map from tips where ID=2";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["map"];
    }
} else {
    echo "0 results";
}
	
?>" target="_blank">Place</a>
      </p>
    </div>
    <div class="media-right">
      <img src="img/b2.png" class="media-object" style="width:60px">
    </div>
  </div>
</div>
</div>
<hr>
<!-- Left media object -->
        <div class="container">
        <div class="row">
  <div class="media">
    <div class="media-left">
      <img src="img/b2.png" class="media-object" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading" style="color: #d942f4;"><?php
$sql = "SELECT sector from tips where ID=3";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["sector"];
    }
} else {
    echo "0 results";
}
	
?></h4>
<h5 class="media-heading" ><?php
$sql = "SELECT name from tips where ID=3";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["name"];
    }
} else {
    echo "0 results";
}
	
?></h5>
      <p><?php
$sql = "SELECT place from tips where ID=3";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"];
    }
} else {
    echo "0 results";
}
	
?> <br>
      <a href="<?php
$sql = "SELECT map from tips where ID=3";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["map"];
    }
} else {
    echo "0 results";
}
	
?>" target="_blank">Place</a>
      </p>
    </div>
  </div>
  </div>
  </div>

  <hr>

  <!-- Right media object -->
  <div class="container">
        <div class="row">
  <div class="media">
    <div class="media-body">
      <h4 class="media-heading" style="color: #d942f4;"><?php
$sql = "SELECT sector from tips where ID=4";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["sector"];
    }
} else {
    echo "0 results";
}
	
?></h4>
<h5 class="media-heading" style="color: #020305;"><?php
$sql = "SELECT name from tips where ID=4";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["name"];
    }
} else {
    echo "0 results";
}
	
?></h5>
      <p><?php
$sql = "SELECT place from tips where ID=4";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["place"];
    }
} else {
    echo "0 results";
}
	
?> <br>
      <a href="<?php
$sql = "SELECT map from tips where ID=4";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["map"];
    }
} else {
    echo "0 results";
}
	
?>" target="_blank">Place</a>
      </p>
    </div>
    <div class="media-right">
      <img src="img/b2.png" class="media-object" style="width:60px">
    </div>
  </div>
</div>
</div>
<hr>
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