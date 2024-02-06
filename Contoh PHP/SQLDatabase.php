<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        table {
            font-family: Arial, Helvetica, sans-serif;
            border: 1px solid black;
            width: 100%;
        }

        a {
            text-decoration: none;
            color: white;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 10px;
        }

        tr {
            background-color: #dddddd;
        }

        #delete {
            background: red;
            color: white;
            border: 0;
        }

        #update {
            background: green;
            color: white;
            border: 0;

        }

        button:hover {
            cursor: pointer;
        }

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

    </style>
</head>

<body>
    <form action="SQLProcess.php" method="post" id="formulir">
        <input type="text" name="nama" id="nama" placeholder="Nama" maxlength="20">
        <input type="text" name="kelas" id="kelas" placeholder="Kelas" maxlength="20">
        <input type="text" name="nisn" id="nisn" placeholder="NISN" maxlength="20">
        <br>
        <input type="submit" name="submit" id="submit">
    </form>

    <table>
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>NISN</th>
            <th>Waktu Terdaftar</th>
            <th>Aksi</th>
        </tr>


        <?php

        include "SQLDBConnection.php";

        if (!isset($_GET["pesan"]) == "") {
            echo $_GET["pesan"];
        }

        $sql = "SELECT * from siswa";
        $result = $conn->query($sql);
        $nomer = 0;
        if ($result->num_rows > 0) {
            // OUTPUT DATA SETIAP ROW
            while ($row = $result->fetch_assoc()) {
                $nomer++;
        ?>

                <tr>
                    <td><?php echo $nomer; ?></td>
                    <td><?php echo $row["nama"]; ?></td>
                    <td><?php echo $row["kelas"]; ?></td>
                    <td><?php echo $row["nisn"]; ?></td>
                    <td><?php echo $row["date"]; ?></td>
                    <td><button type="submit" name="delete" id="delete" onclick="return confirm('WARNING: DELETED DATA CANNOT BE UNDONE!')"><a href="SQLDelete.php?id=<?php echo $row["id"]; ?>">DELETE</a></button>
                        <button type="submit" name="update" id="update"><a href="SQLUpdate.php?id=<?php echo $row["id"]; ?>">UPDATE</a></button>
                    </td>
                </tr>



        <?php

            }
        }
        ?>
    </table>
</body>

</html>