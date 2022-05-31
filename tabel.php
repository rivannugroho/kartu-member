<!-- 

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CRUD Operation on JSON File using PHP</title>
    <style>
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
  height: 150px;
  border-radius: 10px;
}


    </style>
</head>

<body>
    <a href="form.php">Add</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <?php
            
            //membaca semua data yang ada di file tabel.json
            //kedalam bentuk string
            $getfile = file_get_contents('tabel.json');
            //menerjemahkan string JSON menjadi variable PHP
            $jsonfile = json_decode($getfile);
            ?>

            <?php
        $no=0; foreach($jsonfile->records as $index => $obj): $no++;
        ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $obj->nama; ?></td>
                <td><?php echo $obj->alamat; ?></td>
                <td><?php echo $obj->jk; ?></td>
                <td><?php echo $obj->agama; ?></td>
                <td>
                
                    <a href="delete.php?id=<?php echo $index; ?>" class="btn btn-primary"> Delete </a>
                </td>
                <?php endforeach; ?>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1>Kartu Member</h1>

<div class="flex-container">
	<img src='img/tetes.jpg' class='card-photo'>
    <div class='card-detail'>
    	<p>Nama: <?php if(!empty($obj->nama)){
                echo $obj->nama;
            }
            else {
                echo "-";
            };
        
         ?> </p>
        <p>Alamat: <?php if(!empty($obj->alamat)){
               echo $obj->alamat;
            }
            else {
                echo "-";
            };
        
         ?> </p>
    	<p>Jenis: <?php if(!empty($obj->jk)){
               echo $obj->jk;
            }
            else {
                echo "-";
            }; ?></p>
    	<p>Agama: <?php if(!empty($obj->agama)){
                echo $obj->agama;
            }
            else {
                echo "-";
            }; ?> </p>

    <div>
</div>
<h1></h1>
</body>

</html> -->