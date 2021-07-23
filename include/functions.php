<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "spkanalisispenjualan");

//query
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[]=$row;
	}
	return $rows;
}
 
function registrasi($data){
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$nama = mysqli_real_escape_string($conn, $data["nama"]);
	$alamat = mysqli_real_escape_string($conn, $data["alamat"]);
	$nomorhp = mysqli_real_escape_string($conn, $data["nomorhp"]);
	$level = mysqli_real_escape_string($conn, $data["level"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)){
		echo "<script>
				alert('username yang sama sudah terdaftar');
			   </script>";
		return false;
	}

	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert('konfirmasi password tidak sesuai');
			   </script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);


	//tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('$username','$password','$nama','$alamat','$nomorhp','$level')"); 

	return mysqli_affected_rows($conn);
	header("Location:user.php");
}

function tambahData($query, $success, $failed){
	global $conn;
	$result = mysqli_query($conn, $query);
	if ($result) {
		echo "<script>window.location='".$success."'</script>";
	}else{
		echo "<script>window.location='".$gagal."'</script>";
	}
}

function hapusData($query, $success, $failed){
	global $conn;
	$result = mysqli_query($conn, $query);
	if ($result) {
		echo "<script>window.location='".$success."'</script>";
	}else{
		echo "<script>window.location='".$gagal."'</script>";
	}
}

function editData($query, $success, $failed){
	global $conn;
	$result = mysqli_query($conn, $query);
	if ($result) {
		echo "<script>window.location='".$success."'</script>";
	}else{
		echo "<script>window.location='".$gagal."'</script>";
	}
}

function getID($sql, $huruf){
	global $conn;
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_array($result);
	$kode = $data['maxKode'];

	$noUrut = (int) substr($kode, 4, 3);

	$noUrut++;
	$kode = $huruf . sprintf("%03s", $noUrut);
	return ($kode);
}





 ?>
