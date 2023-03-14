<?php 

$pk_komputer = [['Motherboard', 'processor', 'Hardisk', 'PC Coller', 'VGA Card', 'SSD']];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perangkat Keras</title>
</head>
<body>
    <strong>Macam-macam perangkat keras komputer</strong>
    <?php foreach($pk_komputer as $pkk) { ?>
    <ol>
        <li><?= $pkk[0]; ?></li>
        <li><?= $pkk[1]; ?></li>
        <li><?= $pkk[2]; ?></li>
        <li><?= $pkk[3]; ?></li>
        <li><?= $pkk[4]; ?></li>
        <li><?= $pkk[5]; ?></li>
    </ol>
    <?php } ?>

    <strong>Macam-macam perangkat keras komputer baru</strong>
    <?php 
        $pkk_baru = ['Card Reader', 'Modem'];

        array_splice($pk_komputer[0], 0, 0, $pkk_baru);
    
    ?>
    <?php foreach($pk_komputer as $pkk) { ?>
  
    <ol>
        <li><?= $pkk[0]; ?></li>
        <li><?= $pkk[1]; ?></li>
        <li><?= $pkk[2]; ?></li>
        <li><?= $pkk[3]; ?></li>
        <li><?= $pkk[4]; ?></li>
        <li><?= $pkk[5]; ?></li>       
        <li><?= $pkk[6]; ?></li>
        <li><?= $pkk[7]; ?></li>
    </ol>

    
    <?php }  ?>
    
    
</body>
</html>