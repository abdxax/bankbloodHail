<?php
session_start();
require "../connect/DB.php";
$em=$_SESSION['email'];
//echo $em;

	$db=new DB();
	$arr=$db->getAllpatient($em)
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

    <meta name="viewpower" content="width=device-width, initial-scale=1"><!-- thisi is very importent for responsive website -->
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body class="users-body">
<!-- Header -->
<!--<section>
	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<div class="col-md-12">
					<div class="text-center">
						<h3>Search</h3>
					</div>
				</div>
				<form class="form-inline">
					<label for="city">cITY</label>
					<select class="form-control" id="city">
						<option>Hail</option>
					</select>
                    
				</form>
			</div>
		</div>
	</div>
</section>-->
<header>

	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Hello Mr. ....</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="#">logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>


<!-- Tabel for result-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<table class="table">
					<thead>
						<tr>
							<th></th>
							<th>Name </th>
							<th>File Number</th>
							<th>Blood type </th>
							<th></th>
							
						</tr>
					</thead>
					<tbody>
						<?php
                          if ($arr->rowCount()<=0) {
                          	echo "<h2>No User </h2>";
                          }
                          else{
                          	foreach ($arr as $key ) {
                          		echo '
                                 <tr>
                                 <td></td>
                                   <td>'.$key['name'].'</td>
                                    <td>'.$key['file'].'</td>
                                     <td>'.$key['blod'].'</td>
                                 </tr>
                          		';
                          	}
                          }
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.js"></script>
</body>
</html>