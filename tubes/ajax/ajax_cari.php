
<?php
require '../php/functions.php';
$lampu = cari($_GET['keyword']);
?>
            <?php if (empty($lampu)) : ?>
                <h1>unreadable data</h1>
            <?php else : ?>

                <div class="container">
                    <div class="post-wrapper">
                        <?php $i = 1; ?>
                        <?php foreach ($lampu as $lamps) : ?>
                            <div class="post">
                                <img src="assets/foto/<?php echo $lamps["foto"]; ?>" alt="" class="post-image">
                                <div class="post-info">
                                    <h4><a href="php/detail.php?id=<?php echo $lamps['id']; ?>"><?php echo $lamps['room']; ?></a></h4>
                                    <i class="fas fa-tags"></i><?php echo $lamps['nama']; ?></i>
                                    &nbsp;
                                    <i class="fas fa-money-check-alt"><?php echo ($lamps['harga']); ?></i>
                                </div>
                            </div>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
        </div>
    </div>
    </div>
<?php endif; ?>