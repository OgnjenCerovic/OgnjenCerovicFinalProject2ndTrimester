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
        <!-- <div class="shopping-section">
            <div class="items-buyed-info">
                <span><b>9.55 $</b></span>
                <p>item</p>
            </div>
            <div class="shopping-cart-image">
                <div>
                    <img src="../assets/images/shopping-cart.png" alt="">
                </div>
            </div>
        </div> -->
        <h1 id="pizza-menu">
            PIZZA'S
        </h1>
        <div class="pizzas">
            <?php foreach ($pizzas as $pizza): ?>
                <div class="menu-pizza">
                        <div class="menu-pizza-img">
                            <div class="menu-pizza-img">
                                <img src="<?php echo htmlspecialchars($pizza['Picture']); ?>">
                            </div>
                        </div>
                    <h2><?php echo htmlspecialchars($pizza['PizzaName']); ?></h2>
                    <p>
                        <?php echo htmlspecialchars($pizza['Description']); ?>
                    </p>
                    <h3>
                        Get now for <?php echo htmlspecialchars($pizza['Price']) ?> $
                    </h3>
                </div>
            <?php endforeach; ?>
        </div>
        <h1 id="drink-menu">DRINKS</h1>
        <div class="pizzas">
            <div class="menu-pizza">
                <div class="menu-pizza-img">
                    <div class="menu-pizza-img">
                        <img src="../assets/images/Drink1.png" alt="">
                    </div>
                </div>
                <h2>WINE</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti veniam id pariatur amet, nam
                    voluptatibus distinctio molestias quo optio adipisci?</p>
            </div>
            <div class="menu-pizza">
                <div class="menu-pizza-img">
                    <div class="menu-pizza-img">
                        <img src="../assets/images/Drink2.png" alt="">
                    </div>
                </div>
                <h2>ALE</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti veniam id pariatur amet, nam
                    voluptatibus distinctio molestias quo optio adipisci?</p>

            </div>

            <div class="menu-pizza">
                <div class="menu-pizza-img">
                    <div class="menu-pizza-img">
                        <img src="../assets/images/Drink3.png" alt="">
                    </div>
                </div>
                <h2>FRULATTO</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti veniam id pariatur amet, nam
                    voluptatibus distinctio molestias quo optio adipisci?</p>

            </div>
            <div class="menu-pizza">
                <div class="menu-pizza-img">
                    <div class="menu-pizza-img">
                        <img src="../assets/images/Drink4.png" alt="">
                    </div>
                </div>
                <h2>BRASILENA</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti veniam id pariatur amet, nam
                    voluptatibus distinctio molestias quo optio adipisci?</p>

            </div>
            <div class="menu-pizza">
                <div class="menu-pizza-img">
                    <div class="menu-pizza-img">
                        <img src="../assets/images/Drink5.png" alt="">
                    </div>
                </div>
                <h2>BEER</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti veniam id pariatur amet, nam
                    voluptatibus distinctio molestias quo optio adipisci?</p>

            </div>
            <div class="menu-pizza">
                <div class="menu-pizza-img">
                    <div class="menu-pizza-img">
                        <img src="../assets/images/Drink6.png" alt="">
                    </div>
                </div>
                <h2>MARTINI</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti veniam id pariatur amet, nam
                    voluptatibus distinctio molestias quo optio adipisci?</p>

            </div>
            <div class="menu-pizza">
                <div class="menu-pizza-img">
                    <div class="menu-pizza-img">
                        <img src="../assets/images/Drink7.png" alt="">
                    </div>
                </div>
                <h2>BLUE FROG</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti veniam id pariatur amet, nam
                    voluptatibus distinctio molestias quo optio adipisci?</p>

            </div>
            <div class="menu-pizza">
                <div class="menu-pizza-img">
                    <div class="menu-pizza-img">
                        <img src="../assets/images/Drink8.png" alt="">
                    </div>
                </div>
                <h2>GRAPE ISLAND</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti veniam id pariatur amet, nam
                    voluptatibus distinctio molestias quo optio adipisci?</p>
            </div>
        </div>


        <div class="info-section">

            <div class="card">
                <img src="../assets/images/icon_1.png" alt="quality-foods">
                <h1>QUALITY FOODS</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi repudiandae accusamus voluptates
                    excepturi officia! Aspernatur.</p>
            </div>

            <div class="card">
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
                <a href="/logout">LOGOUT</a>
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
    <script src="../js/script.js"></script>
</body>

</html>