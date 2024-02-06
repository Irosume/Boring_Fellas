<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        #formulir {
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: row;
            border: solid 1px black;
            margin: 5px;
            padding: 15px;
            width: 50rem;
            height: 2rem;
        }

        #formulir input {
            width: 10rem;
            height: 1.5rem;
            margin: 5px;
        }

        #submit {
            margin: 10px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="SQLProcess.php" method="post" id="formulir">
        <input type="text" name="nama" id="nama" placeholder="Nama" maxlength="20">
        <input type="text" name="kelas" id="kelas" placeholder="Kelas" maxlength="20">
        <input type="text" name="buku" id="buku" placeholder="Buku" maxlength="20">
        <br>
        <input type="submit" name="submit" id="submit">
    </form>


</body>
</html>