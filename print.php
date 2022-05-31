<?php

 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $jk = $_POST['jk'];
 $agama = $_POST['agama'];

$nameimage = $_FILES['image']['name'];
$errorimage = $_FILES['image']['error'];
$tmpname = $_FILES['image']['tmp_name'];


 
 if ($nama && $alamat && $jk && $agama && $nameimage) {
 } else {
    echo "<script>
      alert('Field tidak lengkap');
     window.location.href='form.php';
       </script>";
 }



if ($errorimage == 0) {
     move_uploaded_file($tmpname,'img/gambar.jpg');
 }

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
        </script>
<style>
.flex-container {
  display: flex;
  background-color: DodgerBlue;
  width: 35%;
  align-items: center;
  gap: 30px;
  border-radius: 10px;
  overflow: hidden;
  padding: 10px;
}

.flex-container.card-detail {
  margin: 10px;
  padding: 20px;
  font-size: 12px;
  color: white;
}

.flex-container.card-detail p {
  color: white;
}

.card-photo {
  width: 150px;    
  height: 150px;
  border-radius: 10px;
}

</style>
</head>
<body>
<form action="form.php" method="post">
  <br>
<a href="form.php" class="btn btn-primary">kembali</a>
<h1>Kartu Member</h1>

<div class="flex-container">
	<img src='img/gambar.jpg' class='card-photo'>
    <div class='card-detail'>
    	<p>Nama: <?=$nama; ?> </p>
        <p>Alamat: <?=$alamat; ?> </p>
    	<p>Jenis: <?=$jk; ?> </p>
    	<p>Agama: <?=$agama;?> </p>

    <div>
</div>
<h1></h1>
</body>
</html>


