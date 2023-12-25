<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            text-align: center;
            background-color: #f5f5dc;
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 0;
        }

        form {
            margin-left: auto;
            margin-right: auto;
            background-color: #D2B48C;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.1);
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

		select[name="vote"] {
			text-align: center;
			width: 98%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #8B4513;
		}

        input[type="text"],
        input[type="email"],
        button {
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

        marquee {
            font-family: 'Courier New', Courier, monospace;
            font-size: 24px;
            color: #8B4513;
            background-color: #D2B48C;
            border: 1px solid #4a4a4a;
            padding: 10px;
            margin: 0 auto;
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
    </style>
    <title>Tambah Data</title>
</head>

<body>
    <marquee direction="right" behavior="scroll" scrolldelay="10">AYOO SEGERA TAMBAHKAN DATAMU!!!</marquee>
</body>

<body>
    <h1>Tambah Data</h1>
    <form action="/warga/store" method="post" enctype="multipart/form-data">
        @csrf
        <ul>
            <li>
                <label for="name">Nama Lengkap : </label>
                <input type="text" name="Nama" id="nama" class="@error('name') is-invalid @enderror" required
                    value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="email" name="Email" id="email" class="@error('email') is-invalid @enderror"
                    required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </li>
            <li>
                <label for="instagram">Instagram : </label>
                <input type="text" name="Instagram" id="instagram" required
                    class="@error('instagram') is-invalid @enderror" required value="{{ old('instagram') }}">
                @error('instagram')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </li>
            <li>
                    <label for="tiktok">Tiktok :</label>
                    <input type="text" name="Tiktok" id="tiktok" class="@error('tiktok') is-invalid @enderror"
                        required value="{{ old('tiktok') }}">
                    @error('tiktok')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
            </li>
			<li>
				<label for="vote">Pilih Capres dan Cawapres:</label>
				<select name="vote" id="vote" class="@error('vote') is-invalid @enderror" required>
					<option value="">--Pilih Salah Satu--</option>
					<option value="PASLON 1">1 - Anies Baswedan dan Muhaimin Iskandar  </option>
					<option value="PASLON 2">2 - Prabowo Subianto dan Gibran Rakabuming</option>
					<option value="PASLON 3">3 - Ganjar Pranowo dan Mahfud MD</option>
				</select>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="file" name="Gambar" id="gambar" class="@error('gambar') is-invalid @enderror"
                    required>
                @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </li>

            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>

    </form>
    <div class="credit">
        2225230083 - Adelia Putri - 1A
    </div>
</body>

</html>
