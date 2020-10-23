<?php
/*for ($i = 1; $i <= 10; $i++) {
    Echo 'Table de multiplication de '.$i.'<br>';
    for ($a = 1; $a <= 10; $a++) {
        echo $i.' x '.$a.' = '.$i*$a.'<br>';
    }
}*/
    if (isset($_GET["nb1"])) {
        $nb1 = $_GET["nb1"];

        $nb2 = $_GET["nb2"];
            if(isset($nb1, $nb2)) {
                $result = $nb1*$nb2;
            }
        } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="table_multiplication.php" method="get">
    <select name="nb1">
    <?php for ($i = 1; $i <= 10; $i++): ?>
      <option value="<?=$i?>"><?=$i?></option>
    <?php endfor; ?>
    </select>
    <p>X</p>
    <select name="nb2">
    <?php for ($a = 1; $a <= 10; $a++): ?>
      <option value="<?=$a?>"><?=$a?></option>
    <?php endfor; ?>
    </select>  
    <button type="submit"> = </button>
    <p><?= $result ?></p>
   

    
    </form>

</body>
</html>
