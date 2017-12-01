<!DOCTYPE html>
<html>

<?php include('hospital.php');
	  
	  	

?>
    <head>
        <title>#Medi24 | Hospitals</title>
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
        <!-- <div>coded by Talha Zubaer-ID->152-15-5705</div> -->

        <br>
        <br>
        <!-- 4 blocks -->
        <div class="container">
            <div class = "row">

                <div class = "col-lg-12">
                    <center><a href = "#" class = "img">
                        <img id="i5h" src = "img/b1.png" style="height: 180px;">
                    </a></center>

                </div>


            </div>
        </div>
        <div class="container">
            <div class="row">
                <h1><p align="center"><b>Find Hospitals</b></p></h1>
            </div>
        </div>
        <hr>


        <br>
        <br>
        <br>
        <!--list group -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ol class="list-group">
                        <li class="list-group-item active"><h4>Best Ones:</h4></li>
                        <li class="list-group-item"><a href="https://www.google.com/maps/place/Dhaka+Medical+College+Hospital/@23.7259711,90.3963877,636m/data=!3m1!1e3!4m17!1m11!4m10!1m3!2m2!1d90.399292!2d23.726055!1m5!1m1!1s0x3755b8e6474187cf:0xb3d3783755659522!2m2!1d90.398072!2d23.7257551!3m4!1s0x3755b8e6474187cf:0xb3d3783755659522!8m2!3d23.7257551!4d90.398072" target="_blank">
						<?php
$sql = "SELECT hospital_name FROM hospital where ID=1";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["hospital_name"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>&nbsp <span class="glyphicon glyphicon-map-marker"></span></a>
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-ambulance" style="color:red"></i></a>
		  <ul class="dropdown-menu"><a href="#">+888626812</a></ul>
        </a></li>
                        <li class="list-group-item"><a href="https://www.google.com/maps/dir/''/Bangladesh+Institute+of+Research+and+Rehabilitation+in+Diabetes+Endocrine+and+Metabolic+Disorders,+122,Kazi+Nazrul+Islam+Avenue,Shahbagh,Dhaka+1000,+Bangladesh/@23.7392998,90.3264612,21492m/data=!3m1!1e3!4m8!4m7!1m0!1m5!1m1!1s0x3755b8eb2cd9b849:0x7c213c924dd2d324!2m2!1d90.3965016!2d23.7393156" target="_blank">
						<?php
$sql = "SELECT hospital_name FROM hospital where ID=2";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["hospital_name"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>&nbsp <span class="glyphicon glyphicon-map-marker"></span>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-ambulance" style="color:red"></i></span></a>
		  <ul class="dropdown-menu"><a href="#">+889661551</a></ul>
</a></li>
                        <li class="list-group-item"><a href="https://www.google.com/maps/place/Bangabandhu+Sheikh+Mujib+Medical+University/@23.7390615,90.3953573,15z/data=!4m5!3m4!1s0x0:0x6585127bdddcded2!8m2!3d23.7390615!4d90.3953573" target="_blank">
						<?php
$sql = "SELECT hospital_name FROM hospital where ID=3";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["hospital_name"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>&nbsp <span class="glyphicon glyphicon-map-marker"></span>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-ambulance" style="color:red"></i></a>
		  <ul class="dropdown-menu"><a href="#">+888614001</a></ul>
</a></li>
                        <li class="list-group-item"><a href="https://www.google.com/maps/place/Kurmitola+General+Hospital/@23.8192815,90.4069693,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c6f9a1000001:0xb06b570c61f0d6b3!8m2!3d23.8192766!4d90.409158" target="_blank">
						<?php
$sql = "SELECT hospital_name FROM hospital where ID=4";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["hospital_name"]. "<br>";
    }
} else {
    echo "0 results";
}
	
?>&nbsp <span class="glyphicon glyphicon-map-marker"></span>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-ambulance" style="color:red"></i></a>
		  <ul class="dropdown-menu"><a href="#">+8801769010200</a></ul>
</a></li>
                        <li class="list-group-item"><a href="https://www.google.com/maps/place/Asgar+Ali+Hospital/@23.7079719,90.4215303,17z/data=!3m1!4b1!4m5!3m4!1s0x3755b9b1a2cf9cf1:0x40c9c38899727082!8m2!3d23.707967!4d90.423719" target="_blank">
						<?php
$sql = "SELECT hospital_name FROM hospital where ID=5";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["hospital_name"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>&nbsp <span class="glyphicon glyphicon-map-marker"></span>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-ambulance" style="color:red"></i></a>
		  <ul class="dropdown-menu"><a href="#">+8801787683333</a></ul>
		  </a></li>


                        <li class="list-group-item"><a href="https://www.google.com/maps/place/Apollo+Hospitals+Dhaka/@23.8099115,90.4288689,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c7caac66819b:0x92cd609525d76d64!8m2!3d23.8099066!4d90.4310576" target="_blank">
						<?php
$sql = "SELECT hospital_name FROM hospital where ID=6";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["hospital_name"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>&nbsp <span class="glyphicon glyphicon-map-marker"></span>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-ambulance" style="color:red"></i></a>
		  <ul class="dropdown-menu"><a href="#">+889896623</a></ul>
</a></li>
                        <li class="list-group-item"><a href="https://www.google.com/maps/place/Islami+Bank+Central+Hospital/@23.737599,90.4076418,17z/data=!4m5!3m4!1s0x3755b8f4de15d5eb:0x35df10409c6ffeef!8m2!3d23.7375941!4d90.4098305" target="_blank">
						<?php
$sql = "SELECT hospital_name FROM hospital where ID=7";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["hospital_name"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>&nbsp <span class="glyphicon glyphicon-map-marker"></span>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-ambulance" style="color:red"></i></a>
		  <ul class="dropdown-menu"><a href="#">+8801992346631</a></ul>
</a></li>
                        <li class="list-group-item"><a href="https://www.google.com/maps/place/Neurology+Foundation+Hospital/@23.7490169,90.3808505,17z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b04205347d:0x87e79c033e4530d8!8m2!3d23.749012!4d90.3830392" target="_blank">
						<?php
$sql = "SELECT hospital_name FROM hospital where ID=8";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["hospital_name"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>&nbsp <span class="glyphicon glyphicon-map-marker"></span>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-ambulance" style="color:red"></i></a>
		  <ul class="dropdown-menu"><a href="#">+88029137305</a></ul>
</a></li>
                        <li class="list-group-item"><a href="https://www.google.com/maps/place/Shaheed+Suhrawardy+Medical+College+and+Hospital/@23.7691664,90.3688216,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c0ac0ea174af:0x515136eca08d1278!8m2!3d23.7691615!4d90.3710103" target="_blank">
						<?php
$sql = "SELECT hospital_name FROM hospital where ID=9";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["hospital_name"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>&nbsp <span class="glyphicon glyphicon-map-marker"></span>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-ambulance" style="color:red"></i></a>
		  <ul class="dropdown-menu"><a href="#">+889130800</a></ul>
</a></li>
                        <li class="list-group-item"><a href="https://www.google.com/maps/place/Anwer+Khan+Modern+Medical+College+Hospital/@23.745205,90.3797455,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c70c36ad55b7:0x74c943ed5b87296f!8m2!3d23.7452001!4d90.3819342" target="_blank">
						<?php
$sql = "SELECT hospital_name FROM hospital where ID=10";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["hospital_name"]."<br>";
    }
} else {
    echo "0 results";
}
	
?>&nbsp <span class="glyphicon glyphicon-map-marker"></span>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-ambulance" style="color:red"></i></a>
		  <ul class="dropdown-menu"><a href="#">+88029670295</a></ul>
</a></li>

                    </ol>
                </div>

                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1826.3015224456124!2d90.3969857021538!3d23.725865582595684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e6474187cf%3A0xb3d3783755659522!2sDhaka+Medical+College+Hospital!5e0!3m2!1sen!2sbd!4v1500752364535" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src=js/bootstrap.min.js></script>
		</form>
    </body>
</html>