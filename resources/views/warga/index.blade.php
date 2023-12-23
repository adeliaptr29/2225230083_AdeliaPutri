<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            text-align: center;
            background-color: #f5f5dc;
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 0;
        }

        marquee {
            font-family: 'Courier New', Courier, monospace;
            font-size: 24px;
            color: #8B4513;
            background-color: #D2B48C;
            border: 1px solid #4a4a4a;
            padding: 10px;
            margin: 0 auto;
        }

        a {
            color: #8B4513;
            text-decoration: none;
        }

        h1 {
            color: #8B4513;
            margin-top: 20px;
        }

        form {
            margin: 20px 0;
        }

        select,
        input {
            margin-top: 10px;
            padding: 8px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th,
        td {
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

        .container {
            margin-top: 20px;
        }

        .credit {
            position: fixed;
            bottom: 0;
            right: 0;
            padding: 5px;
            background-color: #D2B48C;
            color: #8B4513;
            font-size: 12px;
        }

        .form-container {
            display: flex;
            justify-content: space-around;

        }

        .action {
            display: flex;
            justify-content: space-between;
            margin-left: 5px;
            margin-right: 5px;
        }

        .aksi{
            justify-content: space-around;
        }

        .tombol {
            display: inline-block;
            padding: 10px 20px;
            font-size: 15px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #04AA6D;
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px #999;
        }

        .tombol:hover {
            background-color: #aa0404
        }

        .tombol:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>
</head>

<body>
    <marquee direction="right" behavior="scroll" scrolldelay="10">PASTIKAN DATAMU ADA PADA TABEL DI BAWAH INI! AYOO SEGERA
        TAMBAHKAN DATAMU!!!</marquee>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

<div class="action">
    <a class="tombol" href="/warga/tambah">Tambah data</a>
    <a class="tombol" href="logout">Logout</a>
</div>

    <h1>Pengisian Data</h1>

    <div class="form-container">
        <form action="/warga/urut" method="get">
            <label for="urut">Urut berdasarkan :</label>
            <select name="urut" id="urut">
                <option value="">--Pilih Salah Satu--</option>
                <option value="Nama">Nama</option>
                <option value="Email">Email</option>
                <option value="Instagram">Instagram</option>
                <option value="Tiktok">Tiktok</option>
                <option value="vote">Capres dan Cawapres</option>
            </select>
            <button class="tombol" type="submit">Urutkan</button>
        </form>

        <form action="/warga/cari" method="get">
            <label for="cari">Cari :</label>
            <input type="text" name="cari" id="cari" placeholder="Masukkan nama atau email">
            <button class="tombol" type="submit">Cari</button>
        </form>
    </div>

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
                    <th>Capres dan Cawapres</th>
                    <th>Aksi</th>
                </tr>

                @if (count($warga) > 0)
                    @foreach ($warga as $w)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $w->Nama }}</td>
                            <td><img src="{{ asset('images/' . $w->Gambar) }}"></td>
                            <td>{{ $w->Email }}</td>
                            <td>{{ $w->Instagram }}</td>
                            <td>{{ $w->Tiktok }}</td>
                            <td>{{ $w->vote }}</td>
                            <td class="aksi">
                                <a class="tombol" href="/warga/{{ $w->id }}/ubah">Edit</a>
                                <form action="/warga/{{ $w->id }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('Delete')
                                    <button class="tombol" type="submit">Delete</button>
                                </form>
                            </td>                            
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="8">Data tidak ditemukan</td>
                    </tr>
                @endif
            </table>
        </div>
    </form>

    <a class="tombol" href="/warga/hasil">Lihat hasil pilihan</a>

    <div class="credit">
        2225230083 - Adelia Putri - 1A
    </div>
</body>

</html>
