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
        }
        table {
            font-family: Arial, Helvetica, sans-serif;
            border: 1px solid black;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 10px;
        }

        tr {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <select>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "perpus";

    // Connect 
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check Connection
    if ($conn->connect_error) {
        die("Connection Failed:".$conn->connect_error);
    }

    $sql = "SELECT * from pengunjung";
    $result = $conn->query($sql);
    $nomer = 0;
    if ($result->num_rows > 0) {
        // OUTPUT DATA SETIAP ROW
        while($row = $result->fetch_array(MYSQLI_NUM)) {
            $nomer++;
    ?>

        <option value="<?php echo $row[0]; ?>"><?php echo $row[2]?></option>

    <?php
        }
    } else {
        echo "0 Results";
    }
    $conn->close();
    
    ?>
    </select>    
</body>
</html>