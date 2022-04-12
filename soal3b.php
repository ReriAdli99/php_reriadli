<!DOCTYPE html>
<html>
<head>
    <title>Soal 3 </title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>
    <h2>listing data</h2>
    <table>
        <thead>
            <tr>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Hobi</td>                
            </tr>
        </thead>
        <?php
        include "soal3a.php";
        if(isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $query = "SELECT * FROM person INNER JOIN hobi on person.id=hobi.person_id WHERE nama like '%".$cari."%'";
        }else{
            $query = "SELECT * FROM person INNER JOIN hobi on person.id=hobi.person_id";
        }
        $result = mysqli_query($kon, $query);
        if(!$result) {
            die("Query Error : ".mysqli_errno($kon)." - ".mysqli_error($kon));
        }
        while ($data = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['hobi'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <form action="soal3b.php" method="get">
        <label>Cari :</label>
        <input type="text" name="cari" value="<?php if(isset($_GET['cari'])) { echo $_GET['cari']; } ?>"  />
        <input type="submit" value="Search">
    </form>
</body>
</html>