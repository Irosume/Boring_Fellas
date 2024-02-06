<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTERVERSE Local Library | SMKN 1 Bondowoso</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(45deg, purple, white);
        }

        .form-container {
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            background: white;
            width: 25rem;
            height: 30rem;
            padding: 10px;
        }

        #formulir {
            display: flex;
            flex-direction: column;
            height: 25rem;
            width: 15rem;
            padding: 5px;
            margin: 0;
            gap: 10px;
        }

        #formulir input {
            display: flex;
            justify-content: center;
            align-self: center;
            border-radius: 5px;
            width: 15rem;
            height: 2rem;
        }

        #formulir label {
            display: flex;
            align-items: flex-start;
        }
        #submit {
            margin: 15px;
            width: 5rem;
            align-self: center;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Daftar</h1>
        <form action="" id="formulir">
            <label for="nama">Nama</label>
            <input type="text" id="nama" placeholder="Nama">
            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" placeholder="Kelas">
            <label for="Umur">Umur</label>
            <input type="number" id="umur" placeholder="Umur">
            <label for="nisn">NISN</label>
            <input type="number" id="nisn" placeholder="NISN">
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" placeholder="Alamat">
            <button id="submit" type="submit">Daftar!</button>
        </form>
    </div>
</body>
</html>