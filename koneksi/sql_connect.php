<?php
function sql_connect($dbc) { //Fungsi membuat koneksi ke MySQL
	if ($dbc = mysql_connect ('localhost', 'root', '')) {
		if (!@mysql_select_db('db_hafiz'))
		{
			die();
//Jika pemilihan database gagal, skrip akan berhenti.
		}
	} else {
		die ();
//Jika server MySQL tidak bisa dihubungi, skrip akan berhenti
	}
}
?>