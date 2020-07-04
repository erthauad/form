<!DOCTYPE html>
<html>

<head>
    <title>Tabel</title>
    <style type="text/css">
    	*{
    		box-sizing: border-box;
    	}
    	body{
    		font-family: "Calibri", sans-serif;
    		font-size: 11pt;
    	}
    	table{
    		width: 100%;
    		border-collapse: collapse;
    	}
    	table thead tr th{
    		font-weight: bold;
    		text-align: center;
    		padding: 10px;
    		border: 1px solid #222;
    		background-color: orange;
    		color: #ffffff;
    	}
    	table tbody tr td{
    		padding: 8px;
    		border: 1px solid #222;
    	}
    	.text-center{
    		text-align: center;
    	}
    </style>
</head>
<body>
    <h1>Tabel Penduduk</h1>
    <a href="form.html">Tambah Data</a><br/><br/>
    <table>
        <thead>
            <tr>
            	<th style="width: 3%">No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Kesukaan</th>
                <th>Hobi</th>
            </tr>
        </thead>
        <tbody>
            <?php
			$file = __DIR__ . '/file.txt';
			$lines = file($file); 
			$size = sizeof($lines); 
	  		$data = [];
	  		for($i = 0; $i < $size; $i++):
	  			$pecah = (explode("|", $lines[$i]));
			?>
			<tr>
				<td class="text-center"><?= ($i+1); ?></td>
				<td><?= $pecah[0]; ?></td>
				<td><?= $pecah[1]; ?></td>
				<td><?= $pecah[2]; ?></td>
				<td><?= $pecah[3]; ?></td>
				<td><?= $pecah[4]; ?></td>
				<td><?= $pecah[5]; ?></td>
            </tr>
			<?php
			endfor;
			?>
            
        </tbody>
    </table>
</body>

</html>