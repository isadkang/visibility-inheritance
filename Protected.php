<?php

Class Murid {
	protected $list;
    protected $absen;
	protected $detail;
	
	function __construct() {
		$this->list[] = [
			'nama' => 'Muhammad Irsyad Nataprawira',
			'nis' => '12209242',
			'rombel' => 'PPLG X-6',
			'rayon' => 'Cicurug 7'
		];
		$this->list[] = [
			'nama' => 'Nata Wikrama',
			'nis' => '12209243',
			'rombel' => 'PPLG X-3',
			'rayon' => 'Cicurug 8'
		];
		$this->list[] = [
			'nama' => 'Sukma Winata',
			'nis' => '12209244',
			'rombel' => 'Dkv X-3',
			'rayon' => 'Cicurug 4'
		];
		$this->list[] = [
			'nama' => 'Wida Kusuma',
			'nis' => '12209245',
			'rombel' => 'KLN XI-1',
			'rayon' => 'Cicurug 3'
		];
		$this->list[] = [
			'nama' => 'Arya Kusumadinata',
			'nis' => '12209246',
			'rombel' => 'PPLG X-1',
			'rayon' => 'Cicurug 7'
		];
	}

	protected function detailMurid() {
		return $this->detail;
	}

	protected function buatTabel() {
		if($this->absen == '1') {
			$this->detail = $this->list[0];
		} elseif ($this->absen == '2') {
			$this->detail = $this->list[1];
		} elseif ($this->absen == '3') {
			$this->detail = $this->list[2];
		} elseif ($this->absen == '4'){
			$this->detail = $this->list[3];
		} elseif ($this->absen == '5'){
			$this->detail = $this->list[4];
		}
		$table="<p>Murid {$this->absen}:
		<table>
			<tbody>
				<tr>
					<td>Nama Murid</td><td>:</td><td>{$this->detailMurid()['nama']}</td>
				</tr>
				<tr>
					<td>Nis Murid</td><td>:</td><td>{$this->detailMurid()['nis']}</td>
				</tr>
				<tr>
					<td>Rombel Murid</td><td>:</td><td>{$this->detailMurid()['rombel']}</td>
				</tr>
				<tr>
					<td>Rayon Murid</td><td>:</td><td>{$this->detailMurid()['rayon']}</td>
				</tr>
			</tbody>
		</table></p>";
		echo $table;
	}

	function tampilkanDetail($absen) {
		$this->absen = $absen;
		echo $this->buatTabel();
	}
}

$murid = new Murid();
$murid->tampilkanDetail('1');
$murid->tampilkanDetail('2');
$murid->tampilkanDetail('3');
$murid->tampilkanDetail('4');
$murid->tampilkanDetail('5');