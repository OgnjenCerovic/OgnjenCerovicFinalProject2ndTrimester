<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/mainpagestyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Fabbrica</title>
</head> -->

<?php require ('partials/head.view.php') ?>

<body>

    <div class="nav">
        <div class="flag"><img src="../assets/images/flag.png"></div>
        <div class="nav-items">
            <a href="/home">HOME</a>
            <a href="/menu">MENU</a>
            <a href="/about">ABOUT</a>
            <a href="/contact">CONTACT</a>
            <a href="/order">ORDER</a>
        </div>
        <div class="work-time">
            <p>+0 123 242</p>
            <p>8:00 am - 11:30 pm</p>
        </div>
    </div>
    <div class="main">
        <?php require ('partials/greeting.view.php') ?>
        <div class="logo-section">
            <div class="pizza-img">

                <img src="../assets/images/Pizzamain2.png">

            </div>

            <div class="logo-text">
                <div class="logo">
                    <img src="../assets/images/logo.png" alt="">
                </div>
                <p>Making people happy...</p>
            </div>


            <div class="pizza-img">

                <img src="../assets/images/Pizzamain1.png">

            </div>


        </div>

        <div class="container2">

            <div class="pizza-img">

                <img src="../assets/images/Pizzamain3.png">

            </div>

        </div>

        <div class="info-section">

            <div class="card">
                <img src="../assets/images/icon_1.png" alt="quality-foods">
                <h1>QUALITY FOODS</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi repudiandae accusamus voluptates
                    excepturi officia! Aspernatur.</p>
            </div>

            <div class="card fast-del">
                <img src="../assets/images/icon_2.png" alt="quality-foods">
                <h1>FASTEST DELIVERY</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi repudiandae accusamus voluptates
                    excepturi officia! Aspernatur.</p>
            </div>

            <div class="card">
                <img src="../assets/images/icon_3.png" alt="quality-foods">
                <h1>HOT RECIPES</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi repudiandae accusamus voluptates
                    excepturi officia! Aspernatur.</p>
            </div>

        </div>

        <div class="block-image">
        </div>

        <h1>MEET OUR PIZZAIOLOS</h1>

        <div class="pizzaiolo">

            <div class="chefs">
                <img src="../assets/images/pizzaiolo1.jpg" alt="">
                <h2>Giorgio</h2>
                <p>"Margharita is more then just a pizza, it's life..."</p>
            </div>

            <div class="chefs">
                <img src="../assets/images/pizzaiolo2.jpg" alt="">
                <h2>Franco</h2>
                <p>“You can’t make everyone happy. You’re not pizza.”</p>
            </div>

            <div class="chefs">
                <img src="../assets/images/pizzaiolo3.jpg" alt="">
                <h2>Giuseppe</h2>
                <p>“The only bad pizza is the one you didn’t eat.”</p>
            </div>

        </div>

        <?php require ('partials/arrowToUp.php') ?>
    </div>
    <div class="footer">
        <div class="nav">
            <div class="flag"><img src="../assets/images/flag.png"></div>
            <div class="nav-items">
                <a href="/home">HOME</a>
                <a href="/menu">MENU</a>
                <a href="/about">ABOUT</a>
                <a href="/contact">CONTACT</a>
                <a href="/order">ORDER</a>
            </div>
            <div class="work-time">
                <p>+0 123 242</p>
                <p>8:00 am - 11:30 pm</p>
                <a href="/logout">Logout</a>
            </div>
        </div>

        <div class="footer-info">
            <div class="logo-footer-section">
                <div class="logo-text">
                    <div class="logo">
                        <img src="../assets/images/logo.png" alt="">
                    </div>
                    <h3>Copyright &copy; 2023 La Fabbrica. All Rights Reserved.</h3>
                </div>
            </div>
            <div class="footer-icon-section">
                <img class="footer-photo" src="../assets/images/cikicanovi.png" alt="">
            </div>
        </div>

    </div>






    <script src="/js/script.js"></script>
</body>

</html>