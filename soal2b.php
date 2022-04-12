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
    ?>
    
    <form method="post" action="soal2c.php">
        Umur Anda  : <input type="text" name="umur" />
        <input type="hidden" name="nama" value="<?php echo $nama; ?>" />
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>