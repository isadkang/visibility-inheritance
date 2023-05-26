<?php

class Bangunan {
	public $list;
	public $nomor;
	public $detail;
	
	public function __construct() {
		$this->list[] = array(
			'nama' => 'Shopee',
			'alamat' => 'Jl. Shopee No. 1',
			'tahun' => 2023
		);
		$this->list[] = array(
			'nama' => 'Tokopedia',
			'alamat' => 'Jl.Tokopedia No.10',
			'tahun' => 2022
		); 
		$this->list[] = array(
			'nama' => 'Lazada',
			'alamat' => 'Jl. Lazada No. 4',
			'tahun' => 2022
		); 
	}

	public function getDetail() {
		return $this->detail;
	}

	public function getTabel() {
		if($this->nomor == '1') {
			$this->detail = $this->list[0];
		} elseif ($this->nomor == '2') {
			$this->detail = $this->list[1];
		} elseif ($this->nomor == '3') {
			$this->detail = $this->list[2];
		}
	}


	public function tampil($nomor) {
		$this->nomor = $nomor;
		echo $this->getTabel();
	}
}

$perusahaan1 = new Bangunan();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Studicase Pa Ahmad</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Nama Perusahaan</th>
			<td><?= $perusahaan1->tampil(1)['nama'] ?></td>
		</tr>
		<tr>
			<th>Alamat Perusahaan</th>
			<td><?= $perusahaan1->tampil(2)['alamat'] ?></td>
		</tr>
		<tr>
			<th>Tahun berdiri</th>
			<td><?= $perusahaan1->tampil(3)['tahun'] ?></td>
		</tr>
	</table>
</body>
</html>