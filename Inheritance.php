<?php

Class Kendaraan {
	protected $listKendaraan;

	function __construct() {
		$this->listKendaraan[] =   array(
			'merek' => 'Toyota Yaris',
			'jmlRoda' => 4,
			'harga' => '160.000.000',
			'warna' => 'Merah',
			'bhnBakar' => 'Pertamax'
		);
		$this->listKendaraan[] = array(
			'merek' => 'Honda Scoopy',
			'jmlRoda' => 2,
			'harga' => '13.000.000',
			'warna' => 'Putih',
			'bhnBakar' => 'Pertalite'
		);
		$this->listKendaraan[] = array(
			'merek' => 'Isuzu Panther',
			'jmlRoda' => 4,
			'harga' => '170.000.000',
			'warna' => 'Hitam',
			'bhnBakar' => 'Solar'
		);
	}
}

Class ObjKendaraan extends Kendaraan {

	private $noKendaraan;
	private $detailKendaraan;

	private function getDetailKendaraan() {
		return $this->detailKendaraan;
	}

	protected function generateTable() {
		if($this->noKendaraan == '1') {
			$this->detailKendaraan = $this->listKendaraan[0];
		} elseif ($this->noKendaraan == '2') {
			$this->detailKendaraan = $this->listKendaraan[1];
		} elseif ($this->noKendaraan == '3') {
			$this->detailKendaraan = $this->listKendaraan[2];
		}
		$h="<p>Kendaraan {$this->noKendaraan}:
<table border=\"1\">
	<thead>
		<tr>
			<th>Merek</th>
			<th>Jumlah Roda</th>
			<th>Harga</th>
			<th>Warna</th>
			<th>Bahan Bakar</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{$this->getDetailKendaraan()['merek']}</td>
			<td>{$this->getDetailKendaraan()['jmlRoda']}</td>
			<td>{$this->getDetailKendaraan()['harga']}</td>
			<td>{$this->getDetailKendaraan()['warna']}</td>
			<td>{$this->getDetailKendaraan()['bhnBakar']}</td>
		</tr>
	</tbody>
</table></p>" . PHP_EOL;
		echo $h;
	}

	public function showDetailKendaraan($noKendaraan) {
		$this->noKendaraan = $noKendaraan;
		echo $this->generateTable();
	}
}

$kendaraan2 = new ObjKendaraan();
$kendaraan2->showDetailKendaraan('1');

$kendaraan3 = new ObjKendaraan();
$kendaraan3->showDetailKendaraan('2');

$kendaraan4 = new ObjKendaraan();
$kendaraan4->showDetailKendaraan('3');
