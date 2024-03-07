<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Error Page | Muhammed Oğuz</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class='errorPageOne'>
        <h1><Strong>Bir hata bulunmakta !</Strong></h1>
        <?php
        // $no
        // $msg
        // $file
        // $line
        ?>
        <p><?= $no; ?> - <?= $msg; ?></p>
        <p><strong>Hatanın bulunduğu dosya :</strong><?= $file; ?></p>
        <p><strong>Hatalı Satır :</strong><?= $line; ?></p>

        <?php
        $openFile = fopen($file, 'r');
        $count = 0;

        while ($satir = fgets($openFile)) {

            if(++$count == $line){
                echo "<p><strong>Yaptığınız Hata :</strong>".$satir."</p>"; 
            }
        }
        ?>

    </div>
</body>

</html>
</html>