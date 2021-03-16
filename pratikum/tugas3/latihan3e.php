<?php
// Hafiszah Saidatul
// 203040050
// Shift Jumat 10.00 - 11.00
?>
<?php
$lampu = [
    [
        "nama" => "Melt pendant lamp",
        "designer" => "Melt",
        "harga" => "Rp.144.000,--",
        "variant" => "Smoke",
        "quantity" => "4 Pcs",
        "gambar" => "lamp1.jpg"
    ],
    [
        "nama" => "Bazar wall lamp",
        "designer" => "Tom Dixon",
        "harga" => "Rp.198.000,--",
        "variant" => "Black",
        "quantity" => "2 Pcs",
        "gambar" => "lamp2.jpg"
    ],
    [
        "nama" => "Hensi table lamp",
        "designer" => "By On",
        "harga" => "Rp.120.000,--",
        "variant" => "Dark grey",
        "quantity" => "3 Pcs",
        "gambar" => "lamp3.jpg"
    ],
    [
        "nama" => "FlowerPot pendant big VP2",
        "designer" => "Verner Panton",
        "harga" => "Rp.235.000,--",
        "variant" => "Dark green",
        "quantity" => "1 Pcs",
        "gambar" => "lamp4.jpg"
    ],
    [
        "nama" => "Streck wall lamp",
        "designer" => "Joel Karlsson",
        "harga" => "Rp.450.000,--",
        "variant" => "Black",
        "quantity" => "7 Pcs",
        "gambar" => "lamp5.jpg"
    ],
    [
        "nama" => "Bidar lamp shade",
        "designer" => "House Doctor",
        "harga" => "Rp.328.000,--",
        "variant" => "Sand",
        "quantity" => "1 Pcs",
        "gambar" => "lamp6.jpg"
    ],
    [
        "nama" => "Vienda table lamp",
        "designer" => "Hestral",
        "harga" => "Rp.560.000,--",
        "variant" => "Brass-white",
        "quantity" => "6 Pcs",
        "gambar" => "lamp7.jpg"
    ],
    [
        "nama" => "Cymbal pendant",
        "designer" => "Helena Svensson",
        "harga" => "Rp.360.000,--",
        "variant" => "Brass 32 cm",
        "quantity" => "2 Pcs",
        "gambar" => "lamp8.jpg"
    ],
    [
        "nama" => "Gatsby ceiling light",
        "designer" => "Patrick Hall",
        "harga" => "Rp.222.000,--",
        "variant" => " Brass",
        "quantity" => "5 Pcs",
        "gambar" => "lamp9.jpg"
    ],
    [
        "nama" => "Stone Table lamp",
        "designer" => "Norm Architects",
        "harga" => "Rp.980.000,--",
        "variant" => "Grey",
        "quantity" => "2 Pcs",
        "gambar" => "lamp10.jpg"
    ],
];
?>
<!DOCTYPE html>
<html lang>

<head>
    <title>Home Design Lights</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mb-3 mt-3">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Designer</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Variant</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($lampu as $lamps) : ?>
                <tr>
                    <td><b><?= $i ?> </b></td>
                    <td><img src="img/<?= $lamps["gambar"]; ?>"></td>
                    <td><b><?= $lamps["nama"]; ?></b></td>
                    <td><b><?= $lamps["designer"]; ?></b></td>
                    <td><b><?= $lamps["harga"]; ?></b></td>
                    <td><b><?= $lamps["variant"]; ?></b></td>
                    <td><b><?= $lamps["quantity"]; ?></b></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
            </tr>
        </table>
        <tbody>
    </div>
    <!-- 203040050 -->
</body>