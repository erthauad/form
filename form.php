<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$error = false;

	if (empty($_POST['nama'])) {
		echo "- Nama tidak boleh kosong!\n";
		$error = true;
	}

	if (empty($_POST['email'])) {
		echo "- Email tidak boleh kosong\n";
		$error = true;
	}

	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		echo "- Email Anda tidak valid!\n";	
		$error = true;
	}

	if (!isset($_POST['kelamin'])) {
		echo "- Jenis kelamin tidak boleh kosong!\n";
		$error = true;
	}

	if (empty($_POST['suka'])) {
		echo "- Kesukaan tidak boleh kosong!\n";
		$error = true;
	}

	if (empty($_POST['agama'])) {
		echo "- Agama tidak boleh kosong!\n";
		$error = true;
	}

	if (empty(trim($_POST['hobi']))) {
		echo "- Hobi tidak boleh kosong!\n";
		$error = true;
	}

	echo "\n";
	if(true == $error) echo '<a href="form.html">Kembali</a>';

	$data = "";
	foreach ($_POST as $value) {
		$data .= $value . "|";
	}
	$data = trim($data, "|");

	if (false == $error) {
		$file = __DIR__ . '/file.txt'; 

		$open = fopen($file, "a+");
		@fwrite($open, $data . "\r\n");
		@fclose($open);

		header("location:table.php");
	}
	
}