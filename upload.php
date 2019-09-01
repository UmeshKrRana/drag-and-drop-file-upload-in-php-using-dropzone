<?php
	
	// ----------------- Database connection ----------------
	$hostname 			=			"localhost";
	$username			=			"root";
	$password 			=			"root";
	$dbname 			=			"jquery_file_upload";

	$conn				=			mysqli_connect($hostname, $username, $password, $dbname) or die("Db connect error" .mysqli_connect_error());


	// ------------- Check if file is not empty ------------
	if(!empty($_FILES)) {

		$fileName 				=			$_FILES['file']['name'];

		$source_path 			=			$_FILES['file']['tmp_name'];

		$fileExtension			=			pathinfo($fileName, PATHINFO_EXTENSION);

		
		$targetFile				=			time()."-".time()."-".strtolower(str_replace(" ","-",$fileName));

		$target_path 			    =			"./uploads/".$targetFile;

		if(move_uploaded_file($source_path, $target_path)) {

			$sql 			=			"INSERT INTO img_upload (img) VALUES ('".$targetFile."')";

			$result 		=			mysqli_query($conn, $sql);
			if($result) {
				echo "File uploaded successfully";
			}
			
		}		
	}
?>