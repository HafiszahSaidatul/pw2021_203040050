<?php
/*
Hafiszah Saidatul
203040050
https://github.com/HafiszahSaidatul/pw2021_203040050
Pertemuan 3 - (18 februari 2021)
Mempelajari mengenai struktur kendali pada php yaitu pengulangan dan pengkondisian
*/
?>

<?php
// pengulangan

// for
for( $i = 0; $i < 5; $i++ ) {
    echo "Hello World! <br>";
}

// while
$i = 0;
while ( $i < 5 ) {
    echo "Hello HafizaSaidatll! <br>";
    $i++;
}

// do.. while
$i = 0;
do {
    echo "Hello Fiza! <br>";
    $i++;
} while( $i <5 );




// foreach : pengulangan khusus array

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1 html</title>
    <style>
      .warna-baris {
          background-color : yellow;

      }
    </style>
</head>
<body>


<table border="1" cellpadding="10" cellspacing="0">
<?php for( $i = 1; $i <= 5; $i++ ) : ?>
<?php if($i % 2== 1 ) : ?>

<tr class="warna-baris">
<?php else : ?>
<tr>
<?php endif; ?>
<?php for( $j = 1; $j <= 5; $j++ ) : ?>
<td><?= "$i, $j"; ?></td>
<?php endfor; ?>
</tr>
<?php endfor; ?>


</table>
</body>

</html>
