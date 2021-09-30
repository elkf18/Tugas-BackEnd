<?php 
	include 'include/js.php';
	
	session_start();
	
	date_default_timezone_set("Asia/Jakarta");

	$host		= "localhost";
	$username	= "root";
	$password	= "";
	$database	= "kas";

	$conn 		= mysqli_connect($host, $username, $password, $database);
	if ($conn) {
		// echo "berhasil terkoneksi!";
	} else {
		echo "gagal terkoneksi!";
	}

// ======================================== FUNCTION ========================================
function setAlert($title='', $text='', $type='', $buttons='') {
	$_SESSION["alert"]["title"]		= $title;
	$_SESSION["alert"]["text"] 		= $text;
	$_SESSION["alert"]["type"] 		= $type;
	$_SESSION["alert"]["buttons"]	= $buttons; 
}

if (isset($_SESSION['alert'])) {
	$title 		= $_SESSION["alert"]["title"];
	$text 		= $_SESSION["alert"]["text"];
	$type 		= $_SESSION["alert"]["type"];
	$buttons	= $_SESSION["alert"]["buttons"];

	echo"
		<div id='msg' data-title='".$title."' data-type='".$type."' data-text='".$text."' data-buttons='".$buttons."'></div>
		<script>
			let title 		= $('#msg').data('title');
			let type 		= $('#msg').data('type');
			let text 		= $('#msg').data('text');
			let buttons		= $('#msg').data('buttons');

			if(text != '' && type != '' && title != '') {
				Swal.fire({
					title: title,
					text: text,
					icon: type,
				});
			}
		</script>
	";
	unset($_SESSION["alert"]);
}


function addSiswa($data) {
	global $conn;
	$nama_siswa = htmlspecialchars($data['nama_siswa']);
	$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
	$no_telepon = htmlspecialchars($data['no_telepon']);
	$email = htmlspecialchars($data['email']);
	$query = mysqli_query($conn, "INSERT INTO siswa VALUES ('', '$nama_siswa', '$jenis_kelamin', '$no_telepon', '$email')");
  	return mysqli_affected_rows($conn);
}

function deleteSiswa($id) {
	global $conn;
		$query = mysqli_query($conn, "DELETE FROM siswa WHERE id_siswa = '$id'");
	  	return mysqli_affected_rows($conn);
	
}

function editSiswa($data) {
	global $conn;
	$id_siswa = htmlspecialchars($data['id_siswa']);
	$nama_siswa = htmlspecialchars($data['nama_siswa']);
	$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
	$no_telepon = htmlspecialchars($data['no_telepon']);
	$email = htmlspecialchars($data['email']);
	$query = mysqli_query($conn, "UPDATE siswa SET nama_siswa = '$nama_siswa', jenis_kelamin = '$jenis_kelamin', no_telepon = '$no_telepon', email = '$email' WHERE id_siswa = '$id_siswa'");
  	return mysqli_affected_rows($conn);
}



