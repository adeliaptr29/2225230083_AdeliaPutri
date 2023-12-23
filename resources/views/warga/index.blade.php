<!DOCTYPE html>
<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<title>Halaman Pengisian Data</title>
		<style>
			.loader {
				width: 100px;
				position: absolute;
				top: 118px;
				left: 210px;
				z-index: -1;
				display: none;
			}

			body {
			text-align: center;
			background-color: #f5f5dc;
			font-family: 'Courier New', Courier, monospace;
			}

			table {
				margin-left: auto;
				margin-right: auto;
				border-collapse: collapse;
				width: 80%;
			}

			table, th, td {
				border: 1px solid #8B4513;
				padding: 8px;
				text-align: center;
				color: #8B4513;
			}

			th {
				background-color: #D2B48C;
				color: white;
			}

			tr:nth-child(even) {
				background-color: #f0e68c;
			}

			img {
				height: 50px;
				width: auto;
			}

			form {
				margin-bottom: 20px;
			}

			a {
				color: #8B4513;
			}

			h1 {
				color: #8B4513;
			}
		</style>
		<script src="js/script.js"></script>
	</head>
	<body>
		<a href="logout">Logout</a>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
		<h1>Daftar Data</h1>
		<a href="/warga/tambah">Tambah data orang</a>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="container">
				<table border="1" cellpadding="10" cellspacing="0">
	
					<tr>
						<th>No.</th>
						<th>Nama Lengkap</th>
						<th>Gambar</th>
						<th>Email</th>
						<th>Instagram</th>
						<th>Tiktok</th>
						<th>Aksi</th>
					</tr>
	
					@foreach($warga as $w)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$w->Nama}}</td>
							<td>{{$w->Gambar}}</td>
							<td>{{$w->Email}}</td>
							<td>{{$w->Instagram}}</td>
							<td>{{$w->Tiktok}}</td>
							<td>
								<a href="/warga/{{ $w->id }}/ubah">Edit</a>
								<form action="/warga/{{ $w->id }}" method="POST">
									@csrf
									@method('delete')
									<input type="submit" value="Delete">
								</form>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
		</form>
	</body>
</html>