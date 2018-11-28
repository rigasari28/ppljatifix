<?php  
session_start();
$conn = mysqli_connect("localhost","root","","jatiindah"); 


function query ($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}
function tambahpm ($data){
	global $conn;
	$namapm = htmlspecialchars($data["namapm"]);
	$namauser = htmlspecialchars($data["namauser"]);
	$passpm = htmlspecialchars($data["passpm"]);
	$emailpm = htmlspecialchars($data["emailpm"]);
	$alamatpm = htmlspecialchars($data["alamatpm"]);
	$norekpm = htmlspecialchars($data["norekpm"]);
	$nopm = htmlspecialchars($data["nopm"]);

	$result = mysqli_query($conn, "SELECT namauser FROM user WHERE 
						namauser = '$namauser'");
	if(mysqli_fetch_assoc($result)){
		echo "<script>
			alert('username sudah terdaftar');
			</script>";
			return false;
	}
	
		$query ="INSERT INTO user
			VALUES 
			('','2','$namapm', '$namauser', '$passpm','$emailpm', '','','$alamatpm', '$norekpm','$nopm','')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function tambahpk ($data){
	global $conn;
	$namapk = htmlspecialchars($data["namapk"]);
	$namauser = htmlspecialchars($data["namauser"]);
	$passpk = htmlspecialchars($data["passpk"]);
	$emailpk = htmlspecialchars($data["emailpk"]);
	$alamatpk = htmlspecialchars($data["alamatpk"]);
	$naper = htmlspecialchars($data["naper"]);
	$noper = htmlspecialchars($data["noper"]);
	$norekpk = htmlspecialchars($data["norekpk"]);
	$nopk = htmlspecialchars($data["nopk"]);

	$result = mysqli_query($conn, "SELECT namauser FROM user WHERE 
						namauser = '$namauser'");
	if(mysqli_fetch_assoc($result)){
		echo "<script>
			alert('username sudah terdaftar');
			</script>";
			return false;
	}
	

	$noper = uploadbukti();
	if(! $noper){
		return false;
	}
		$query ="INSERT INTO user
			VALUES 
			('','3','$namapk', '$namauser', '$passpk','$emailpk','$naper','$noper','$alamatpk', '$norekpk','$nopk','belum diverivikasi')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function tambahrequest ($data){
	global $conn;
	$id = $_SESSION['id'];
	$namarequest = htmlspecialchars($data["namarequest"]);
	$referensi = htmlspecialchars($data["referensi"]);
	$budget = htmlspecialchars($data["budget"]);
	$waktu = htmlspecialchars($data["waktu"]);
	$waktu = htmlspecialchars($data["waktu"]);

	$referensi = uploadreferensi();
	if(! $referensi){
		return false;
	}
		$query ="INSERT INTO request
			VALUES 
			('','$id','$namarequest','$referensi','$budget', '$waktu','gambar.png','menunggu konfirmasi')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function uploadreferensi(){

	$namaFile = $_FILES['referensi']['name'];
	$ukuranFile = $_FILES['referensi']['size'];
	$error =$_FILES['referensi']['error'];
	$tmpName = $_FILES['referensi']['tmp_name'];

	//cek upload ada apa nggak
	if ($error === 4){
		echo "<script>
		alert('pilih gambar terlebih dahulu');
		</script>";
		return false;
	}
	//hanya gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar =strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){

		echo "<script>
		alert('yang anda upload bukan gambar!');
		</script>";
		return false;
	}

	//cek jika ukurannya terlalu besar
	if ($ukuranFile > 1000000){

		echo "<script>
		alert('ukuran gambar terlalu besar');
		</script>";
		return false;
	}

	//jika lolos gambar berhasil di upload
	// generate nama baru

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmpName, 'gambarrequest/'. $namaFileBaru);
	return $namaFileBaru;
}
function uploadbukti(){

	$namaFile = $_FILES['noper']['name'];
	$ukuranFile = $_FILES['noper']['size'];
	$error =$_FILES['noper']['error'];
	$tmpName = $_FILES['noper']['tmp_name'];

	//cek upload ada apa nggak
	if ($error === 4){
		echo "<script>
		alert('pilih gambar terlebih dahulu');
		</script>";
		return false;
	}
	//hanya gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar =strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){

		echo "<script>
		alert('yang anda upload bukan gambar!');
		</script>";
		return false;
	}

	//cek jika ukurannya terlalu besar
	if ($ukuranFile > 1000000){

		echo "<script>
		alert('ukuran gambar terlalu besar');
		</script>";
		return false;
	}

	//jika lolos gambar berhasil di upload
	// generate nama baru

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmpName, 'gambarbukti/'. $namaFileBaru);
	return $namaFileBaru;
}



function tambah($data){
	global $conn;
	$namaproduk = htmlspecialchars($data["namaproduk"]);
	$hargaproduk = htmlspecialchars($data["hargaproduk"]);
	$stok = htmlspecialchars($data["stok"]);
	
	// upload gambar
	$gambarproduk = upload();
	if(! $gambarproduk){
		return false;
	}
	$query ="INSERT INTO produk
			VALUES 
			('','$namaproduk', '$hargaproduk', '$stok', '$gambarproduk')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function upload(){

	$namaFile = $_FILES['gambarproduk']['name'];
	$ukuranFile = $_FILES['gambarproduk']['size'];
	$error =$_FILES['gambarproduk']['error'];
	$tmpName = $_FILES['gambarproduk']['tmp_name'];

	//cek upload ada apa nggak
	if ($error === 4){
		echo "<script>
		alert('pilih gambar terlebih dahulu');
		</script>";
		return false;
	}
	//hanya gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar =strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){

		echo "<script>
		alert('yang anda upload bukan gambar!');
		</script>";
		return false;
	}

	//cek jika ukurannya terlalu besar
	if ($ukuranFile > 1000000){

		echo "<script>
		alert('ukuran gambar terlalu besar');
		</script>";
		return false;
	}

	//jika lolos gambar berhasil di upload
	// generate nama baru

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmpName, 'gambarproduk/'. $namaFileBaru);
	return $namaFileBaru;
}
function ubah($data){

	global $conn;
	$idproduk = $data["idproduk"];
	$namaproduk = htmlspecialchars($data["namaproduk"]);
	$hargaproduk = htmlspecialchars($data["hargaproduk"]);
	$stok = htmlspecialchars($data["stok"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);
// cek apakah pilih gambar lama atau tidak
	if($_FILES['gambarproduk']['error'] === 4){
		$gambarproduk=$gambarLama;
	}else{
	$gambarproduk = upload();
	}
	$query ="UPDATE produk SET 
			 namaproduk = '$namaproduk',
			 hargaproduk = '$hargaproduk',
			 stok = '$stok',
			 gambarproduk = '$gambarproduk'
			 WHERE idproduk = $idproduk
			 ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}
// function ubahprofilcus($data){

// 	global $conn;
// 	//$id = $data["id"];
// 	$id = $_SESSION["id"];
// 	// $nama = htmlspecialchars($data["nama"]);
// 	// $namauser = htmlspecialchars($data["namauser"]);
// 	// $password = htmlspecialchars($data["password"]);
// 	// $email = htmlspecialchars($data["email"]);
// 	// $alamat = htmlspecialchars($data["alamat"]);
// 	// $no_rek = htmlspecialchars($data["no_rek"]);
// 	// $no_hp = htmlspecialchars($data["no_hp"]);

// 	$nama = ($data["nama"]);
// 	$namauser = htmlspecialchars($data["namauser"]);
// 	$password = htmlspecialchars($data["password"]);
// 	$email = htmlspecialchars($data["email"]);
// 	$alamat = htmlspecialchars($data["alamat"]);
// 	$no_rek = htmlspecialchars($data["no_rek"]);
// 	$no_hp = htmlspecialchars($data["no_hp"]);

// 	$query ="UPDATE user SET 
// 			 nama = '$nama',
// 			 namauser = '$namauser',
// 			 password = '$password',
// 			 email = '$email'
// 			 alamat = '$alamat'
// 			 no_rek = '$no_rek'
// 			 no_hp = '$no_hp'
// 			 WHERE id = $id
// 			 ";



// 	mysqli_query($conn, $query);

// 	return mysqli_affected_rows($conn);

// }
function tambahky($data){
	global $conn;
	$id = $_SESSION['id'];
	$identitas = htmlspecialchars($data["identitas"]);
	$diameter = htmlspecialchars($data["diameter"]);
	$panjang = htmlspecialchars($data["panjang"]);
	$hargakayu = htmlspecialchars($data["hargakayu"]);
	$stokkayu = htmlspecialchars($data["stokkayu"]);
	
	// upload gambar
	$gambarkayu = uploadkayu();
	if(! $gambarkayu){
		return false;
	}
	$query ="INSERT INTO kayu
			VALUES 
			('','$id','$identitas','$diameter','$panjang', '$hargakayu', '$stokkayu', '$gambarkayu')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function pesankayu($data){
	global $conn;
	$idkayu = htmlspecialchars($data["idkayu"]);
	$jumlah = htmlspecialchars($data["jumlah"]);

	$query ="INSERT INTO transaksi_kayu
			VALUES 
			('','$idkayu','$jumlah','menunggu konfirmasi pemasok')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function uploadkayu(){

	$namaFile = $_FILES['gambarkayu']['name'];
	$ukuranFile = $_FILES['gambarkayu']['size'];
	$error =$_FILES['gambarkayu']['error'];
	$tmpName = $_FILES['gambarkayu']['tmp_name'];

	//cek upload ada apa nggak
	if ($error === 4){
		echo "<script>
		alert('pilih gambar terlebih dahulu');
		</script>";
		return false;
	}
	//hanya gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar =strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){

		echo "<script>
		alert('yang anda upload bukan gambar!');
		</script>";
		return false;
	}

	//cek jika ukurannya terlalu besar
	if ($ukuranFile > 1000000){

		echo "<script>
		alert('ukuran gambar terlalu besar');
		</script>";
		return false;
	}

	//jika lolos gambar berhasil di upload
	// generate nama baru

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmpName, 'gambarkayu/'. $namaFileBaru);
	return $namaFileBaru;
}
function ubahkayu($data){


	global $conn;
	$idkayu = $data["idkayu"];
	$identitas = htmlspecialchars($data["identitas"]);
	$diameter = htmlspecialchars($data["diameter"]);
	$panjang = htmlspecialchars($data["panjang"]);
	$hargakayu = htmlspecialchars($data["hargakayu"]);
	$stokkayu = htmlspecialchars($data["stokkayu"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);
// cek apakah pilih gambar lama atau tidak
	if($_FILES['gambarkayu']['error'] === 4){
		$gambarkayu=$gambarLama;
	}else{
	$gambarkayu = uploadkayu();
	}
	$query ="UPDATE kayu SET 
			 identitas = '$identitas',
			 diameter = '$diameter',
			 panjang = '$panjang',
			 hargakayu = '$hargakayu',
			 stokkayu = '$stokkayu',
			 gambarkayu = '$gambarkayu'
			 WHERE idkayu = $idkayu
			 ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}
function verif ($id){
	global $conn;
	mysqli_query($conn,"UPDATE  user SET status = 'verifikasi berhasil' WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function verifrequest ($id_request){
	global $conn;
	mysqli_query($conn,"UPDATE  request SET status = 'request diterima, menunggu pembayaran' WHERE id_request = $id_request");
	return mysqli_affected_rows($conn);
}

function verifrequestpem ($id_request){
	global $conn;
	mysqli_query($conn,"UPDATE  request SET status = 'proses pembayaran berhasil, menunggu proses pengiriman' WHERE id_request = $id_request");
	return mysqli_affected_rows($conn);
}
function verifrequestkirim ($id_request){
	global $conn;
	mysqli_query($conn,"UPDATE  request SET status = 'proses pengiriman berlangsung' WHERE id_request = $id_request");
	return mysqli_affected_rows($conn);
}
function verifrequestselesai ($id_request){
	global $conn;
	mysqli_query($conn,"UPDATE  request SET status = 'selesai' WHERE id_request = $id_request");
	return mysqli_affected_rows($conn);
}


function tolak($id){
	global $conn;
	mysqli_query($conn,"UPDATE  user SET status = 'verifikasi ditolak' WHERE id = $id");
	return mysqli_affected_rows($conn);
}
function tolakrequest($id_request){
	global $conn;
	mysqli_query($conn,"UPDATE  request SET status = 'verifikasi ditolak' WHERE id_request = $id_request");
	return mysqli_affected_rows($conn);
}
function tolakrequestpem($id_request){
	global $conn;
	mysqli_query($conn,"UPDATE  request SET status = 'verifikasi pembayaran ditolak, mohon upload bukti pembayaran dengan jelas dan benar' WHERE id_request = $id_request");
	return mysqli_affected_rows($conn);
}
function tambahinfo ($data){
	global $conn;
	
	$info = htmlspecialchars($data["info"]);
	
		$query ="INSERT INTO informasi
			VALUES 
			('','20','$info')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}
function ubahinfo($data){

	global $conn;
	$id_info = $data["id_info"];
	$info = htmlspecialchars($data["info"]);

	$query ="UPDATE informasi SET 
			 info = '$info'
			 WHERE id_info = $id_info
			 ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}
function pembayaranr_pm ($data){

	global $conn;
	$id = $_SESSION['id'];
	$id_request = $data["id_request"];
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	
	// $pembayaran = uploadpembayaranre();
	// if(! $pembayaran){
	// 	return true;
	// }

	if($_FILES['pembayaran']['error'] === 4){
		$pembayaran=$gambarLama;
	}else{
	$pembayaran = uploadpembayaranre();
	}
	

	$query ="UPDATE request SET 
			 pembayaran = '$pembayaran',
			 status = 'menunggu konfirmasi pembayaran dari meubel'
			 WHERE id_request = $id_request
			 ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function uploadpembayaranre(){

	$namaFile = $_FILES['pembayaran']['name'];
	$ukuranFile = $_FILES['pembayaran']['size'];
	$error =$_FILES['pembayaran']['error'];
	$tmpName = $_FILES['pembayaran']['tmp_name'];

	//cek upload ada apa nggak
	if ($error === 4){
		echo "<script>
		alert('pilih gambar terlebih dahulu');
		</script>";
		return false;
	}
	//hanya gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar =strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){

		echo "<script>
		alert('yang anda upload bukan gambar!');
		</script>";
		return false;
	}

	//cek jika ukurannya terlalu besar
	if ($ukuranFile > 1000000){

		echo "<script>
		alert('ukuran gambar terlalu besar');
		</script>";
		return false;
	}

	//jika lolos gambar berhasil di upload
	// generate nama baru

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmpName, 'gambarpembayaranrequest/'. $namaFileBaru);
	return $namaFileBaru;
}


?>