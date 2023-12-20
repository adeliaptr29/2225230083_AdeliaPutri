<?php
session_start();

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah');
				document.location.href = '/warga/index';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'warga/index';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
<style>
    body {
		text-align: center;
        background-color: #f5f5dc;
        font-family: 'Courier New', Courier, monospace;
    }

    form {
		margin-left: auto;
		margin-right: auto;
        background-color: #D2B48C;
        padding: 20px;
        border-radius: 8px;
        width: 300px;
        box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.1);
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"], input[type="email"], button {
        width: 90%;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #8B4513;
    }

    button {
        background-color: #8B4513;
        color: white;
        cursor: pointer;
    }

    button:hover {
        background-color: #a0522d;
    }

    h1 {
        color: #8B4513;
        text-align: center;
    }
</style>
	<title>Edit Data</title>
</head>
<body>
	<h1>Edit Data</h1>

	<form action="/warga/{{ $warga->id }}" method="post">
        @method('put')
		@csrf
		<ul>
			<li>
				<label for="name">Nama : </label>
				<input type="text" name="Name" id="name" class="@error('name') is-invalid @enderror" required value="{{$warga->Nama}}">
				@error('name')
				<div class="invalid-feedback">
				  {{ $message }}
				</div>
				@enderror
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="email" name="Email" id="email" class="@error('email') is-invalid @enderror" required value="{{$warga->Email}}">
				@error('email')
				<div class="invalid-feedback">
				  {{ $message }}
				</div>
				@enderror
			</li>
			<li>
				<label for="instagram">Instagram : </label>
				<input type="text" name="Instagram" id="instagram" required class="@error('instagram') is-invalid @enderror" required value="{{$warga->Instagram}}">
				@error('instagram')
				<div class="invalid-feedback">
				  {{ $message }}
				</div>
				@enderror
			</li>
			<li>
				<label for="tiktok">Tiktok :</label>
				<input type="text" name="Tiktok" id="tiktok" class="@error('tiktok') is-invalid @enderror" required value="{{$warga->Tiktok}}">
				@error('tiktok')
				<div class="invalid-feedback">
				  {{ $message }}
				</div>
				@enderror
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="Gambar" id="gambar" class="@error('gambar') is-invalid @enderror" required value="{{$warga->Gambar}}">
				@error('gambar')
				<div class="invalid-feedback">
				  {{ $message }}
				</div>
				@enderror
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>