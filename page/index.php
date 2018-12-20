<?php
require "connect/DB.php";
$r=false;
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$blod=$_POST['bol'];

	$db=new DB();
	$r=$db->addOwn($name,$phone,$blod);
	if($r){
		echo "<script>
          alert(تم الاضافة )
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

    <meta name="viewpower" content="width=device-width, initial-scale=1"><!-- thisi is very importent for responsive website -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-flipped.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<!-- Header -->
<header>
	<div class="row">
		<div class="col-md-12">
			
				<div class="img">
					<img src="logo.png" class="img-responsive" width="200px" height="200px"> 
				</div>
			
				<div class="col-md-12">
					<div class="text-logo">
					<h2>عطائك حياة </h2>
					<p><span class="h4">وَمَنْ أَحْيَاهَا فَكَأَنَّمَا أَحْيَا النَّاسَ جَمِيعاً</span></p>

					<a href="case.html" class="btn btn-default btn-header">عرض حالات التبرع</a>
					<a href="#doner" class="btn btn-default btn-header ">التسجيل كامتبرع</a>

				</div>
				</div>
			
		</div>
	</div>
</header>
 <!-- About project -->
 <section>
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="section-title">
 					<h2 >الفكرة</h2>
 				<div class="col-md-6 col-md-offset-3 pano">
 					<div class="panel panel-default">
 						<div class="panel-heading text-center">
 							<p>عطائك حياه هي مبادرة تطوعية لبنك الدم تهدف الى تسهيل عملية طلب المتبرعين من خلال رفع الاحتياج و الحالات من قبل المستشفى </p>
 						</div>
 					</div>
 				</div>
 				</div>
 			</div>
 			
 				
 			
 		</div>
 	</div> 
 </section>
 <!-- infromatiom -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">معلومات و احصائيات </h2>
			</div>
		</div>
	</div>
</section>
<!-- form -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2 id="doner" >التسجيل كامتبرع</h2>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<form class="form-horizontal" method="POST">
							<div class="form-group">
								<label class="col-md-3" id="name">الاسم </label>
								<div class="col-md-6">
									<input type="text" name="name" class="form-control" >
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-3" id="name">الجوال  </label>
								<div class="col-md-6">
									<input type="text" name="phone" class="form-control" >
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-3" id="name">فصيلة الدم </label>
								<div class="col-md-6">
									<input type="text" name="bol" class="form-control" >
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-3" id="name">الوحده </label>
								<div class="col-md-6">
									<input type="text" name="" class="form-control" >
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-3" > </label>
								<div class="col-md-6">
									<input type="submit" name="submit" class="btn btn-info btn-block" value="ارسال " >
								</div>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- footer -->

<footer>
	
</footer>

<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>

</body>
</html>