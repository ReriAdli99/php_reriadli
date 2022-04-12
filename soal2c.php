<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
</head>
<body>
    <?php
        $nama= $_POST['nama'];
        $umur= $_POST['umur'];
    ?>
    
    <form method="post" action="soal2d.php">
        Hobi Anda  : <input type="text" name="hobi" />
        <input type="hidden" name="nama" value="<?php echo $nama; ?>" />
        <input type="hidden" name="umur" value="<?php echo $umur; ?>" />
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>