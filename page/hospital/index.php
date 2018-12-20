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
<body>
<!-- Header -->
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
    <body class="hosp-body">
        
<!-- section for part -->
<section>
	<div class="container">
		<div class="row">
			<!-- Add new usser -->
			<div class="col-md-4">
				<a href="adduser.php">
				<div class="panel panel-default">
					<div class="panel-heading">

                    <i class="fas fa-user-plus"></i>

					</div>
					<div class="panel-body">
						<h4>Add new user</h4>
					</div>
				</div>
				</a>
			</div>
             <!-- Users -->
			<div class="col-md-4">
				<a href="users.php">
				<div class="panel panel-default">
					<div class="panel-heading">

                    <i class="fas fa-users"></i>

					</div>
					<div class="panel-body">
						<h4>Users</h4>
					</div>
				</div>
				</a>
			</div>
             <!--static-->
			<div class="col-md-4">
				<a href="#">
				<div class="panel panel-default">
					<div class="panel-heading">

                   <i class="fas fa-file-signature"></i>

					</div>
					<div class="panel-body">
						<h4>Statistcs</h4>
					</div>
				</div>
				</a>
			</div>

			<div class="col-md-4">
				<a href="patient.php">
				<div class="panel panel-default">
					<div class="panel-heading">

                    <i class="fas fa-hospital-symbol"></i>

					</div>
					<div class="panel-body">
						<h4>Patient</h4>
					</div>
				</div>
				</a>
			</div>



		</div>
	</div>
</section>


<!--footer -->
<footer>
	
</footer>


<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.js"></script>
</body>
    </body>
</html>