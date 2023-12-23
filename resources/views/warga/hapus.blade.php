<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: / ');
    exit();
}

$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'home';
		</script>
	";
} else {
    echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'home';
		</script>
	";
}

?>
