<?php
	$num = $_GET['num'];
	
	$folder = "../../uploads";
	if (!file_exists($folder)) {
		mkdir($folder);
	}

	$filename = "foto_".$num.".jpg";

	$target_file = $folder."/".$filename;
	$upload_ok = 1;
	$file_type = pathinfo(basename($_FILES['userfile']['name']),PATHINFO_EXTENSION);
				
	// Check file size if you not use hidden input 'MAX_FILE_SIZE'
	if ($_FILES['userfile']['size'] > 204800) {
		echo "<script>window.alert('Sorry, your file is too large.');</script>";
		$upload_ok = 0;
	}

	// Allow certain file formats
	$allowed_type = array("jpg","png");
	if(!in_array($file_type, $allowed_type)) {
		echo "<script>window.alert('Sorry, we only accept JPG and PNG type.');</script>";
		$upload_ok = 0;
	}

	// Put the file where we'd like it
	if ($upload_ok != 0){
		if (is_uploaded_file($_FILES['userfile']['tmp_name'])){
			if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $target_file)){
				echo 'Problem: Could not move file to destination directory';
				echo '<br/><a href="../data_event/">Kembali</a>';
			}else{
				$upload = true;
				echo "<script>window.alert('Foto Berhasil Ditambah!');
				window.location='../data_event/detil_event.php?num=$num'</script>";
			}
		} else{
			echo 'Problem: Possible file upload attack. Filename: ';
			echo $_FILES['userfile']['name'];
			echo '<br/><a href="../data_event/">Kembali</a>';
		}
	}
?>