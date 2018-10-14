<?php
	class operasiBilangan{
		//properties dari class
		private $bilangan1;
		private $bilangan2;
		
		//construct
		function __construct($bil1,$bil2){
			$this->bilangan1 = $bil1;
			$this->bilangan2 = $bil2;
		}
		//method untuk membaca properti bilangan 1 dan 2
		function getBilangan1(){
			return $this->bilangan1;
		}
		function getBilangan2(){
			return $this->bilangan2;
		}
		//method untuk menjumlahkan bilangan 1 dan 2
		function tambah(){
			$jumlah = $this->bilangan1 + $this->bilangan2;
			return $jumlah;
		}
		//method untuk mengkalikan bil1 dan 2
		function kali(){
			$jumlah = $this->bilangan1 * $this->bilangan2;
			return $jumlah;
		}
		//method untuk mengurang bil1 dan 2 (soal no 1)
		function kurang(){
			$jumlah = $this->bilangan1 - $this->bilangan2;
			return $jumlah;
		}
		//method untuk mensisa bagi bil1 dan 2 (soal no 1)
		function sisaBagi(){
			$jumlah = $this->bilangan1 % $this->bilangan2;
			return $jumlah;
		}
		//method untuk memangkatkan bil1 dan 2 (soal no 1)
		function pangkat(){
			$jumlah = pow($this->bilangan1,$this->bilangan2);
			return $jumlah;
		}
	}
	
	//instansi dan setting properties
	$operasi = new operasiBilangan(4,5);
	//menampilkan hasil penjumlahan
	echo '<p>Hasil penjumlahan '.$operasi->getBilangan1(). ' + '.$operasi->getBilangan2().' = '.$operasi->tambah();
	//menampilkan hasil kali
	echo '<p>Hasil penjumlahan '.$operasi->getBilangan1(). ' x '.$operasi->getBilangan2().' = '.$operasi->kali();
	//menampilkan hasil kurang
	echo '<p>Hasil penjumlahan '.$operasi->getBilangan1(). ' - '.$operasi->getBilangan2().' = '.$operasi->kurang();
	//menampilkan hasil sisa bagi (modulus)
	echo '<p>Hasil penjumlahan '.$operasi->getBilangan1(). ' % '.$operasi->getBilangan2().' = '.$operasi->sisaBagi();
	//menampilkan hasil pangkat
	echo '<p>Hasil penjumlahan '.$operasi->getBilangan1(). ' ^ '.$operasi->getBilangan2().' = '.$operasi->pangkat();
	