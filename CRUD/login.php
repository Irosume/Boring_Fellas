<?php 

// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
require 'connection.php';

// menangkap data yang dikirim dari form login
if(isset($_POST["submit"])):
	$username = $_POST['name'];
	$pass = $_POST['pass'];
	


	
	// menyeleksi data user dengan username dan password yang sesuai
	$login = mysqli_query($conn ,"SELECT * FROM `data_admin` WHERE `nama_admin` = '$username' AND `pass` = '$pass'");
	// menghitung jumlah data yang ditemukan
	$check = mysqli_num_rows($login);
	
	// cek apakah username dan password di temukan pada database
	if($check > 0){
		
		$data = mysqli_fetch_assoc($login);
		
		// cek jika user login sebagai admin
		if($data['level']=="admin"){
			
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			// alihkan ke halaman dashboard admin
			header("location:read.php");
			
		// cek jika user login sebagai pegawai
	}else if($data['level']=="moderator"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "moderator";
		// alihkan ke halaman dashboard pegawai
		header("location:read_mod.php");
		
		// cek jika user login sebagai pengurus
	}else if($data['level']=="visitor"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "visitor";
		// alihkan ke halaman dashboard pengurus
		header("location:read_visitor.php");
		
	}else{
		
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

endif;
?>