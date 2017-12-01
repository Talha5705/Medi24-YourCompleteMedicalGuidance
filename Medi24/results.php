<?php


	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	

	$search = $_GET['query'];
	if($search==NULL){
		include 'home.php';
		
	}else{
	

	$mysqli = new mysqli("localhost", "root", "", "medi24");
	$result = $mysqli->query("SELECT bld_gp.bag,bld_gp.s_group,location.place,location.Tamount,location.a_p,location.a_n,location.b_p,location.b_n,location.o_p,location.o_n,location.ab_p,location.ab_n FROM location inner join bld_gp on location.ID=bld_gp.l_id WHERE location.place LIKE '%".$search."%' or ( bld_gp.s_group LIKE '%".$search."%' or bld_gp.f_group LIKE '%".$search."%')");	
	$result2= $mysqli->query("SELECT tips.name,tips.sector,tips.place,tips.map from tips where tips.name LIKE '%".$search."%' or tips.sector LIKE '%".$search."%'");
	$result3 = $mysqli->query("SELECT rare_medi.medi,rare_medi.place,medi_loc.map FROM rare_medi inner join medi_loc on rare_medi.map_id=medi_loc.ID  WHERE rare_medi.medi LIKE '%".$search."%'");
	
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Results for <?php echo $search; ?></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="row">
		<div class="col-md-12">
			<div class="search-again">
				<div class="row">
					<form method="get">
						<div class="col-md-3 text-center">
							<h1><a  href="home.php"><i><i class="fa fa-stethoscope" ></i> Medi24.com</i></a></h1>
						</div>
						<div class="col-md-6">
							<input type="text" name="query" value="<?=$search;?>">
						</div>
						<div class="col-md-2">
							<button type="submit">Search</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container" id="results">
		<div class="col-md-12">
		
			<?php if($result->num_rows) { ?>
			<?php while($a = $result->fetch_assoc()) { ?>
			<div class="result">
				<h4 class="title"><a href="display.php"><?= $a['s_group']; ?></a></h4>		
				<p class="description"><?=$a['place'];?></p>
				<p class="description"><?=$a['bag'];?></p>
			</div>
			<?php } ?>
			<?php } else if($result2->num_rows) { ?>
			<?php while($a = $result2->fetch_assoc()) { ?>
			<div class="result">
				<h4 class="title"><?= $a['name']; ?></a></h4>		
				<p class="description"><?=$a['sector'];?></p>
				<p class="description"><?=$a['place'];?></p>
				<p class="description"><a href="<?=$a['map'];?>">Place Map</a></p>
				
			</div>
			<?php } ?>
			<?php } else if($result3->num_rows) { ?>
			<?php while($a = $result3->fetch_assoc()) { ?>
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
	
</body>
</html>
