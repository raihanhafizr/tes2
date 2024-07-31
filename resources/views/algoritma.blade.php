<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background: #5cb85c;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #4cae4c;
        }
        .result {
            background: #e9ecef;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Algoritma</h1>

        <form method="POST" action="/balik-huruf">
            @csrf
            <label for="kata">Masukkan kata untuk dibalik hurufnya:</label>
            <input type="text" id="kata" name="kata" required>
            <button type="submit">Balik Huruf</button>
        </form>
        @if(isset($balikHurufHasil))
        <div class="result">
            <strong>Hasil:</strong> {{ $balikHurufHasil }}
        </div>
        @endif

        <form method="POST" action="/kata-terpanjang">
            @csrf
            <label for="kalimat">Masukkan kalimat untuk mencari kata terpanjang:</label>
            <input type="text" id="kalimat" name="kalimat" required>
            <button type="submit">Cari Kata Terpanjang</button>
        </form>
        @if(isset($kataTerpanjang))
        <div class="result">
            <strong>Kata terpanjang:</strong> {{ $kataTerpanjang }} ({{ $kataPanjang }} karakter)
        </div>
        @endif

        <form method="POST" action="/hitung-kemunculan">
            @csrf
            <label for="input">Masukkan input (pisahkan dengan koma):</label>
            <input type="text" id="input" name="input" required>
            <label for="query">Masukkan query (pisahkan dengan koma):</label>
            <input type="text" id="query" name="query" required>
            <button type="submit">Hitung Kemunculan</button>
        </form>
        @if(isset($hitungKemunculan))
        <div class="result">
            <strong>Output:</strong> {{ implode(', ', $hitungKemunculan) }}
        </div>
        @endif

        <form method="POST" action="/selisih-diagonal">
            @csrf
            <label for="matriks">Masukkan matriks (dalam format JSON):</label>
            <textarea id="matriks" name="matriks" required></textarea>
            <button type="submit">Hitung Selisih Diagonal</button>
        </form>
        @if(isset($selisihDiagonal))
        <div class="result">
            <strong>Selisih Diagonal:</strong> {{ $selisihDiagonal }}
        </div>
        @endif
    </div>
</body>

</html>
