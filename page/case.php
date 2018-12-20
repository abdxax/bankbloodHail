<?php require "connect/DB.php";
$bold="";
if (isset($_POST['sub'])) {
	$bold=$_POST['bol'];
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
<section>
	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<div class="col-md-12">
					<div class="text-center">
					<center><h3>عرض حالات التبرع</h3></center>
                       
					</div>
				</div>
               
				<form class="form-inline" method="POST">
					
                    <label for="blood">فصيلة الدم</label>
					<select class="form-control" id="blood" name="bol">
						
                        <?php 
                        $db=new DB();
						$res=$db->getAllbload();
						foreach ($res as $key ) {
							# code...
							echo "
							<option value=".$key['id_blod'].">".$key['blod']."</option>
							";
						}
						?>
					</select>

					<input type="submit" name="sub" class="btn btn-info" value="بحث">
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Tabel for result-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<table class="table">
					<thead>
						<tr>
							<th></th>
							
							<th> المستشفى </th>
							<th>رقم الملف </th>
							<th>الكميه </th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$db=new DB();
						$res=$db->getPatio($bold);
						foreach ($res as $key ) {
							# code...
							echo "
							
                              <tr>
                              <td></td>
                                <td>".$key['file']."</td>
                               <td>".$key['name']."</td>
                               <td>".$key['nameh']."</td>
                              </tr>
							";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>

</body>
</html>