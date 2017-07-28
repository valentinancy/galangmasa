<?php
	$num = $_GET['num'];

	$folder = "../../uploads";
	$filename = "foto_".$num.".jpg";
	
	if (file_exists($filename)){
		//Delete photo
		unlink($folder.'/'.$filename);

		echo "<script>window.alert('Foto Berhasil Dihapus!');
		window.location='../data_event/detil_event.php?num=$num'</script>";
	}
	else{
		echo "<script>window.alert('Tidak ada foto!');
		window.location='../data_event/detil_event.php?num=$num'</script>";
	}
?>