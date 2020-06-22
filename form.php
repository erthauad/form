<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if (empty($_POST['nama'])) {
		echo "- Nama tidak boleh kosong!\n";
	}

	if (empty($_POST['email'])) {
		echo "- Email tidak boleh kosong\n";
	}

	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		echo "- Email Anda tidak valid!\n";	
	}

	if (!isset($_POST['kelamin'])) {
		echo "- Jenis kelamin tidak boleh kosong!\n";
	}

	if (empty($_POST['suka'])) {
		echo "- Kesukaan tidak boleh kosong!\n";
	}

	if (empty($_POST['agama'])) {
		echo "- Agama tidak boleh kosong!\n";
	}

	if (empty(trim($_POST['hobi']))) {
		echo "- Hobi tidak boleh kosong!\n";
	}

	echo "\n";
	print_r($_POST);
}