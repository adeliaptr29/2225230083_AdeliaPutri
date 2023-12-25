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
    <title>Edit Data</title>
</head>

<body>
    <h1>Edit Data</h1>

    <form action="/warga/{{ $warga->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <ul>
            <li>
                <label for="name">Nama Lengkap : </label>
                <input type="text" name="Nama" id="name" class="@error('name') is-invalid @enderror" required
                    value="{{ $warga->Nama }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="email" name="Email" id="email" class="@error('email') is-invalid @enderror"
                    required value="{{ $warga->Email }}">
                @error('email')
                <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </li>
            <li>
                <label for="instagram">Instagram : </label>
                <input type="text" name="Instagram" id="instagram" required
                    class="@error('instagram') is-invalid @enderror" required value="{{ $warga->Instagram }}">
                    @error('instagram')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </li>
                <li>
                    <label for="tiktok">Tiktok :</label>
                    <input type="text" name="Tiktok" id="tiktok" class="@error('tiktok') is-invalid @enderror"
                    required value="{{ $warga->Tiktok }}">
                    @error('tiktok')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </li>
			<li>
				<label for="vote">Pilih Capres dan Cawapres:</label>
				<select name="vote" id="vote" class="@error('vote') is-invalid @enderror">
                <option value="PASLON 1">1 - Anies Baswedan dan Muhaimin Iskandar  </option>
                <option value="PASLON 2">2 - Prabowo Subianto dan Gibran Rakabuming</option>
                <option value="PASLON 3">3 - Ganjar Pranowo dan Mahfud MD</option>
				</select>
            <li>
            <li>
                <label for="gambar">Gambar :</label>
                <img src="{{ asset('image/'.$warga->Gambar) }}" alt="{{ $warga->Nama }}" width="50" height="50">
                <input type="file" name="Gambar" id="gambar" class="@error('gambar') is-invalid @enderror">
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

    <div class="credit">
        2225230083 - Adelia Putri - 1A
    </div>
</body>

</html>
