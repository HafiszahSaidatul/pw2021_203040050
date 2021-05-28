<?php
// Hafiszah Saidatul
// 203040050
// Shift Jumat 10.00 - 11.00
?><?php
    require 'php/functions.php';
    $lampu = query("SELECT * FROM lampu");
    // ketika tombol cari diklik
    if (isset($_POST['cari'])) {
        $lampu = cari($_POST['keyword']);
    }

    ?>

<html>

<head>
    <meta charset="utf-8">
    <title>Home Z LAMPS</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Cinzel&family=Ultra&family=Zen+Dots&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            color: #d9d9d9;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .content1 {
            position: relative;
            text-align: center;
            padding: 0 10px;
            background-color: #0e0d0d;
        }

        footer {
            /* position: fixed; */
            /* bottom: 0px; */
            width: 100%;
            background: #111;
        }

        .main-content {
            display: flex;
        }

        .main-content .box {
            flex-basis: 50%;
            padding: 10px 20px;
        }

        .box h2 {
            font-size: 1.125rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .box .content {
            margin: 20px 0 0 0;
            position: relative;
        }

        .box .content:before {
            position: absolute;
            content: '';
            top: -10px;
            height: 2px;
            width: 100%;
            background: #1a1a1a;
        }

        .box .content:after {
            position: absolute;
            content: '';
            height: 2px;
            width: 15%;
            background: #bc9651;
            top: -10px;
        }

        .left .content p {
            text-align: justify;
        }

        .left .content .social a span {
            height: 40px;
            width: 40px;
            background: #1a1a1a;
            line-height: 40px;
            text-align: center;
            font-size: 18px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .left .content .social a span:hover {
            background: #f12020;
        }

        .center .content .fas {
            font-size: 1.4375rem;
            background: #1a1a1a;
            height: 45px;
            width: 45px;
            line-height: 45px;
            text-align: center;
            border-radius: 50%;
            transition: 0.3s;
            cursor: pointer;
        }

        .center .content .fas:hover {
            background: #f12020;
        }

        .center .content .text {
            font-size: 1.0625rem;
            font-weight: 500;
            padding-left: 10px;
        }

        .center .content .phone {
            margin: 15px 0;
        }

        .right form .text {
            font-size: 1.0625rem;
            margin-bottom: 2px;
            color: #656565;
        }

        .right form .msg {
            margin-top: 10px;
        }

        .right form input,
        .right form textarea {
            width: 100%;
            font-size: 1.0625rem;
            background: #151515;
            padding-left: 10px;
            border: 1px solid #222222;
        }

        .right form input:focus,
        .right form textarea:focus {
            outline-color: #3498db;
        }

        .right form input {
            height: 35px;
        }

        .right form .btn {
            margin-top: 10px;
        }

        .right form .btn button {
            height: 40px;
            width: 100%;
            border: none;
            outline: none;
            background: #ba9e6f;
            font-size: 1.0625rem;
            font-weight: 500;
            cursor: pointer;
            transition: .3s;
        }

        .right form .btn button:hover {
            background: #000;
        }

        .bottom center {
            padding: 5px;
            font-size: 0.9375rem;
            background: #151515;
        }

        .bottom center span {
            color: #656565;
        }

        .bottom center a {
            color: #f12020;
            text-decoration: none;
        }

        .bottom center a:hover {
            text-decoration: underline;
        }

        @media screen and (max-width: 900px) {
            footer {
                position: relative;
                bottom: 0px;
            }

            .main-content {
                flex-wrap: wrap;
                flex-direction: column;
            }

            .main-content .box {
                margin: 5px 0;
            }
        }
    </style>
</head>


<body>
    <section class="slider">
        <div class="wrapper">
            <div class="slide-left">
                <!-- MENU -->
                <div class="menu">
                    <a href="#" class="logo"><i class="fab fa-bandcamp"></i>Z LAMPS</a>
                    <ul>
                        <li><a href="#slider">Home</a></li>
                        <li><a href="#product">Product</a></li>
                        <li><a href="#categories">Categories</a></li>
                    </ul>
                </div>
                <div class="text-container1 active-text-slide">
                    <div class="product-name">
                        <h1>Interior Lamps</h1>
                    </div>
                    <div class="footer">
                        <div class="footer-heading">
                            <h2>SIZE LAMP</h2>
                            <span>M</span>
                            <span>S</span>
                            <span>L</span>
                        </div>
                        <p style="color:#ba9e6f; font-weight:bold;">Hi! Guys</p>
                        <p>Welcome To InteriorLamps,Kami menjual berbagai InteriorLamps."Ayo beli produk kami karena yang lain belum tentu berkualitas.""</p>
                    </div>
                </div>
                <div class="social">
                    <i class="fab fa-accusoft"></i>
                    <i class="fas fa-hotel"></i>
                    <i class="fas fa-igloo"></i>
                </div>
            </div>
            <div class="slide-right">
                <div class="img-menu">
                    <a href="#" class="cart"><i class="fab fa-bandcamp"></i>
                        <a href="./php/login.php" class="login">LOGIN</a>
                </div>
                <div class="img-container1 active-img-slide">
                    <div class="product-img">
                        <img height="500px" src="images/L3.png">
                        <div class="cart-opt">
                            <p class="price">Rp.400.000</p>
                            <a href="./php/registrasi.php" class="add-btn">ADD TO CART</a>
                        </div>
                    </div>
                    <div class="button">

                    </div>
                </div>
            </div>
    </section>
    <!-- Categories -->
    <div id=product class="page-wrapper">
        <!-- slider -->
        <div class="post-slider">
            <h1 class="slider-title">PRODUCT LAMPS</h1>
            <div class="ui category search" style="text-align:center;" action="" method="POST">
                <i class="fas fa-chevron-left prev"></i>
                <i class="fas fa-chevron-right next"></i>
                <div class="ui icon input">
                    <input style="padding:15px;border-radius:90px; background-color: #e6d1a3; color:black;" type=" text" name="keyword" size="40" placeholder="Search" autocomplete="off" autofocus class="keyword" class="prompt" type="text" placeholder="Search animals...">
                    <i class="search icon"></i>
                    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
                </div>
            </div>

            <?php if (empty($lampu)) : ?>
                <p style="font-family: 'Cinzel', serif; color:yellowgreen;">Data Tidak Dikenal</p>
            <?php else : ?>

                <div class=" container">
                    <div class="post-wrapper">
                        <?php $i = 1; ?>
                        <?php foreach ($lampu as $lamps) : ?>
                            <div class="post">
                                <img src="assets/img/<?php echo $lamps["img"]; ?>" alt="" class="post-image">
                                <div style="text-align:center; font-family: 'Cinzel', serif; font-size:15px;" class="post-info">
                                    <h4 style="text-align:center; font-family: 'Cinzel', serif;font-size:20px;"><a href="php/detail.php?id=<?php echo $lamps['id']; ?>"><?php echo $lamps['room']; ?></a></h4>
                                    <i class="fas fa-tags"></i><?php echo $lamps['nama']; ?></i>
                                    &nbsp;
                                    <i class="fas fa-wave-square"><?php echo ($lamps['quantity']); ?></i>
                                </div>
                            </div>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>

        </div>
    </div>
<?php endif; ?>
</ul>
<section>
    <div id=categories class="page-wrapper">
        <div class="post-slider">
            <h1 class="slider-title">CATEGORIES LAMPS</h1>
            <div class="container">
                <div class="product">
                    <div class="product-card">
                        <h2 class="name">LIVING ROOM</h2>
                        <span class="price">Rp.990.000,-</span>
                        <a class="popup-btn">Explore Room</a>
                        <img src="./assets/img/lamp2.png" class="product-img" alt="">
                    </div>
                    <div class="popup-view">
                        <div class="popup-card">
                            <a><i class="fas fa-times close-btn"></i></a>
                            <div class="product-img">
                                <img src="./images/LV.jpg" width="250px" alt="">
                            </div>
                            <div class="info">
                                <h2>Living Room<br><span>Design Interior Lamps</span></h2>
                                <p>Pyramid memiliki enam liontin hitam-transparan dengan desain lingkaran, cocok untuk membuat pernyataan di ruang tamu.</p>
                                <span class="price">Rp.990.000,-</span>
                                <a href="./php/login.php" class="add-cart-btn">Add to Cart</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product-card">
                        <h2 class="name">BEDROOM</h2>
                        <span class="price">Rp.889.000,-</span>
                        <a class="popup-btn">Explore Room</a>
                        <img src="./assets/img/lamp7.png" class="product-img" alt="">
                    </div>
                    <div class="popup-view">
                        <div class="popup-card">
                            <a><i class="fas fa-times close-btn"></i></a>
                            <div class="product-img">
                                <img src="./images/BB.jpg" alt="">
                            </div>
                            <div class="info">
                                <h2>Streck wall lamp<br><span>Design Interior Lamps</span></h2>
                                <p>Lampu Dinding Kapal St Ives panas dicelupkan galvanis setelah pembuatan untuk hasil akhir yang kekal yang juga cocok untuk lokasi pantai</p>
                                <span class="price">Rp.889.000,-</span>
                                <a href="./php/login.php" class="add-cart-btn">Add to Cart</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product-card">
                        <h2 class="name">DINING ROOM</h2>
                        <span class="price">Rp.980.000,-</span>
                        <a class="popup-btn">Explore Room</a>
                        <img src="./assets/img/lamp1.png" class="product-img" alt="">
                    </div>
                    <div class="popup-view">
                        <div class="popup-card">
                            <a><i class="fas fa-times close-btn"></i></a>
                            <div class="product-img">
                                <img src="./images/DR.jpg" alt="">
                            </div>
                            <div class="info">
                                <h2>Xianol Lamp<br><span>Design Interior Lamp</span></h2>
                                <p>Liontin kaca ashill pada suspensi jalinan hitam dalam pilihan finishing asap, kuning pucat, atau tembaga. Cocok untuk digunakan dengan lampu LED saja</p>
                                <span class="price">Rp.980.000,-</span>
                                <a href="./php/login.php" class="add-cart-btn">Add to Cart</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

</section>

<div class="content1" class="page-wrapper">
</div>
<footer>
    <div class="main-content">
        <div class="left box">
            <h2>About us</h2>
            <div class="content">
                <div class="social-media">
                    <a href="https://www.instagram.com/" class="sm-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="sm-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="sm-link"><i class="fab fa-spotify"></i></a>
                </div>
                <p>Z LAMPS merupakan merk dari product lampu hias yang telah berdiri dari tahun 2021. Perusahaan kami menyediakan berbagia jenis lampu hias yang berkualitas seperti :
                    Lampu Gantung
                    Lampu Dinding
                    Lampu Plafon
                    Lampu Meja Makan
                    Lampu Taman
                    Lampu Pilar
                    Beberapa jenis lampu tersedia untuk ruangan indoor dan ruangan outdoor. Dan kami merupakan market leader di bidang usaha lampu hias di Indonesia. Kami mempunyai mitra bisnis di seluruh Indonesia mulai dari supermarket bahan bangunan, Departement Store, dan traditional market.
                    Lampu Hias kami sangat cocok untuk berbagai macam ruangan baik di rumah, apartement, restaurant, Café, Hotel.Kami berusaha berkomitmen mengedapankan design dan kualitas serta service yang baik kepada para pelanggan kami. </p>

            </div>
        </div>

        <div class="center box">
            <h2>Address</h2>
            <div class="content">
                <div class="place">
                    <span class="fas fa-map-marker-alt"></span>
                    <span class="text">Kepulauan Riau,Tanjung Balai Karimun</span>
                </div>
                <div class="phone">
                    <span class="fas fa-phone-alt"></span>
                    <span class="text">+0776 56789</span>
                </div>
                <div class="email">
                    <span class="fas fa-envelope"></span>
                    <span class="text">zlamps@mail.com</span>
                </div>
            </div>
        </div>

        <div class="right box">

            <h2>Contact us</h2>
            <div class="content">
                <form action="#">
                    <div class="email">
                        <div class="text">Email *</div>
                        <input type="email" required>
                    </div>
                    <div class="msg">
                        <div class="text">Message *</div>
                        <textarea rows="2" cols="25" required></textarea>
                    </div>
                    <div class="btn">
                        <button type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="bottom">
        <center>

            <span class="credit"><a href="https://www.instagram.com/">Z LAMPS Project.Hafiszah Saidatul</a> | </span>
            <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
        </center>

    </div>
    </div>

</footer>

<!-- Product -->
<script type="text/javascript">
    var popupViews = document.querySelectorAll('.popup-view');
    var popupBtns = document.querySelectorAll('.popup-btn');
    var closeBtns = document.querySelectorAll('.close-btn');

    //javascript for quick view button
    var popup = function(popupClick) {
        popupViews[popupClick].classList.add('active');
    }

    popupBtns.forEach((popupBtn, i) => {
        popupBtn.addEventListener("click", () => {
            popup(i);
        });
    });

    //javascript for close button
    closeBtns.forEach((closeBtn) => {
        closeBtn.addEventListener("click", () => {
            popupViews.forEach((popupView) => {
                popupView.classList.remove('active');
            });
        });
    });
</script>
<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Custom Script -->
<script src="./js/index.js"></script>
<script src="./js/ajax.js"></script>
</body>
<!-- 203040050 -->

</html>