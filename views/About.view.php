<?php require ('partials/head.view.php') ?>

<body>

    <?php require ('partials/nav.view.php') ?>

    <div class="main">
        <?php require ('partials/greeting.view.php') ?>
        <h1 class="about-h1">ABOUT OUR PIZZERIA</h1>
        <div class="pizzeria-photos">
            <div class="pizzeria-photo">
                <img src="../assets/images/PizzeriaPhoto1.webp" alt="">
            </div>
            <div class="pizzeria-photo">
                <img src="../assets/images/PizzeriaPhoto2.jpg" alt="">
            </div>
            <div class="pizzeria-photo">
                <img src="../assets/images/PizzeriaPhoto3.webp" alt="">
            </div>
        </div>

        <!-- Prazna dva diva koja uzmu po 50px -->
        <div class="placeholder-div"></div>
        <div class="placeholder-div"></div>


        <div class="about-section">
            <h1>WE ARE LA FABBRICA...</h1>

            <p class="first-p">WE DON’T JUST MAKE PIZZA. WE MAKE PEOPLE’S DAYS. LA FABBRICA PIZZERIA WAS BUILT ON THE
                BELIEF THAT PIZZA SHOULD BE SPECIAL, AND WE CARRY THAT BELIEF INTO EVERYTHING WE DO.</p>
            <div class="it-flag">
                <img src="../assets/images/itFLag.png" alt="">
            </div>

            <p class="second-p">With more than 50 years of experience under our belts, we understand how to best serve
                our customers through tried and true service principles. Instead of following trends, we set them. We
                create food we’re proud to serve and deliver it fast, with a smile. No matter where you find us, we’re
                making sure each meal our customers enjoy is delicious and one-of-a-kind.</p>
        </div>

        <div class="placeholder-div"></div>
        <div class="about-pictures">
            <div class="about-picture flex-item">
                <img src="../assets/images/Slika1.png" alt="">
            </div>
            <div class="card">
                <img src="../assets/images/icon_1.png" alt="quality-foods">
                <h1>QUALITY FOODS</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi repudiandae accusamus voluptates
                    excepturi officia! Aspernatur.</p>
            </div>
            <div class="about-picture flex-item">
                <img src="../assets/images/Slika2.jpg" alt="">
            </div>
            <div class="fizikalisanje1">
                <div class="card flex-item">
                    <img src="../assets/images/icon_2.png" alt="quality-foods">
                    <h1>FASTEST DELIVERY</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi repudiandae accusamus voluptates
                        excepturi officia! Aspernatur.</p>
                </div>
            </div>


            <div class="about-picture flex-item">
                <img src="../assets/images/Slika3.jpg" alt="">
            </div>
            <div class="fizikalisanje2">
                <div class="card flex-item">
                    <img src="../assets/images/icon_3.png" alt="quality-foods">
                    <h1>HOT RECIPES</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi repudiandae accusamus voluptates
                        excepturi officia! Aspernatur.</p>
                </div>
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
</body>

</html>