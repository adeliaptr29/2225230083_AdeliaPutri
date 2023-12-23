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
            margin-bottom: 20px;
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

        input[type="text"],
        input[type="password"],
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

        a {
            color: #8B4513;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #a0522d;
        }

        h1 {
            color: #8B4513;
            text-align: center;
        }

        p {
            color: red;
            font-style: italic;
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
    <title>Registrasi</title>
</head>

<body>
    <marquee direction="right" behavior="scroll" scrolldelay="10">BURUAN REGISTRASI UNTUK MELAKUKAN LOGIN!!!</marquee>
</body>

<body>

    <h1>Registrasi</h1>

    <form action="/register" method="post">
        @csrf
        <ul>
            <li>
                <label for="name">Nama Lengkap :</label>
                <input type="text" class="@error('name') is-invalid @enderror" name="name" id="name" required
                    value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </li>
            <li>
                <label for="username">Username :</label>
                <input type="text" class="@error('username') is-invalid @enderror" name="username" id="username"
                    required value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="email" class="@error('email') is-invalid @enderror" name="email" id="email"
                    required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" class="@error('password') is-invalid @enderror" name="password" id="password"
                    required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </li>
            <li>
                <button type="submit">Register!</button>
            </li>
        </ul>

    </form>

    <a href="/login">Sudah punya akun? Login sekarang</a>

    <div class="credit">
        2225230083 - Adelia Putri - 1A
    </div>

</body>

</html>
