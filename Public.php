<?php

Class Anggota {
	public $list;
	public $idAnggota;
	public $detail;

	public function __construct() {
		$this->list[] = [
			'nama' => 'Nata Wikrama',
			'umur' => 17,
			'makananFav' => 'Combro',
			'jumlahSaldo' => 'Rp50.000.000'
		];
		$this->list[] = [
			'nama' => 'Sukmawinata',
			'umur' => 20,
			'makananFav' => 'Makanan buatan mamah',
			'jumlahSaldo' => 'Rp15.000.000'
		];
		$this->list[] = [
			'nama' => 'Prawira Negara',
			'umur' => 19,
			'makananFav' => 'Pizza',
			'jumlahSaldo' => 'Rp23.000.000'
		];
	}

	public function ambilDetail() {
		return $this->detail;
	}

	public function genTabel() {
		if($this->idAnggota == '2') {
			$this->detail = $this->list[0];
		} elseif ($this->idAnggota == '3') {
			$this->detail = $this->list[1];
		} elseif ($this->idAnggota == '4') {
			$this->detail = $this->list[2];
		}
		$h = "<p><b> Anggota{$this->idAnggota}:</b><br/>
			Nama: {$this->ambilDetail()['nama']}<br/>
			Umur : {$this->ambilDetail()['umur']}<br/>
			Saldo ATM : {$this->ambilDetail()['jumlahSaldo']}<br/>
			makananFav: {$this->ambilDetail()['makananFav']}</p>";
		echo $h;
	}

	public function tampilDetailAnggota($idAnggota) {
		$this->idAnggota = $idAnggota;
		echo $this->genTabel();
	}
}

$Anggota2 = new Anggota();
$Anggota2->tampilDetailAnggota('2');
$Anggota2->tampilDetailAnggota('3');
$Anggota2->tampilDetailAnggota('4');