<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>Dropzone Multiple File Upload in PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!--------- Dropzone JS and CSS file --------->
	<script src="./dropzone.js"></script>
	<link rel="stylesheet" href="./dropzone.css">

	<!----------- Custom CSS ------->
	<style>

		body{
			background-color: #054b4ebd;
		}

		.dropzone {
			border: 2px dashed rgb(65, 65, 149);
			max-height: 400px;	
			padding: 0px 20px !important;    
		}

		span {
			font-size: 25px;		
		}
		
		#icon {
			max-width: 150px;
		}
	</style>

</head>
<body>

<div class="container pt-5">
	<div class="row">
		<div class="col-md-8 m-auto">
			<form action="./upload.php" class="dropzone"></form>			
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

<!----------- Custom JS --------------->
<script>
	$(document).ready(function() {
		$("span").html("<h3>Drop files here <br/> Or </h3> <small> Click to Upload</small>");
		$("span").css('text-align', 'center');

		$("<div><img src='./upload-icon.png' class='img-rounded' id='icon'></div>").insertAfter("span");
	});
</script>