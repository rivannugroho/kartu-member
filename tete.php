<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <style>
        input[type=text],
        select {
            width: 85%;
            padding: 12px 20px;
            margin: 8px 22px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: lightblue;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 3px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        tr:nth-child(odd) {
            background-color: #94DAFF
        }

        th {
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>
                <center>Form Kartu Member</center>
            </h3>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" style="margin-left:73px;"><br>
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" style="margin-left:65px;"><br>
            <label for="jk" jenis kelamin>Jenis Kelamin:</label>
            <select name="jk" id="jk">
                <option value="-">-</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <br>
            <label for="agama" agama>Agama:</label>
            <select name="agama" id="agama" style="margin-left:65px;">
                <option value="-">-</option>
                <option value="Islam">islam</option>
                <option value="Kriten">Kristen</option>
                <option value="Budha">budha</option>
                <option value="Hindu">Hindu</option>
                <option value="Konghucu">Konghucu</option>
            </select>
            <br>
            <br>
            <!-- //<label for="image">Uplode foto</label>
            <input type="file" name="image" id="image"><br> -->
            <br>
            <button name="submit" class="btn btn-primary">submit</button>
            <button type="reset" value="Reset" class="btn btn-primary">Reset</button>
            <a href="logout.php" class="btn btn-link">Logout</a>
         
            <?php
     if (!empty($_POST)){
        $fname= $_POST['nama'];
        $lname= $_POST['alamat'];
        $age= $_POST['jk'];
        $gender= $_POST['agama'];

        $file = file_get_contents('tabel.json');
        $data = json_decode($file, true);

        unset($_POST['add']);

        $data['records'] = array_values($data['records']);
        array_push($data['records'], $_POST);
        file_put_contents("tabel.json", json_encode($data));

        header("Location:tabel.php");
    }
?>
        </form>
    </div>
</body>

</html>