const createNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
        <div class="nav">
            <img src="img/Logo.jpg" class="brand-logo" alt="">
            <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="search brand, product">
                    <button class="search-btn">search</button>
                </div>

        <div class="dropdown">
                <button class="dropbtn"><img src="img/user.png"><i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <!--<p><?php echo $_SESSION['user'];?></p>-->
                <a href="Info.php">My Account</a>
                <a href="Orders.php">My orders</a>
                <a href="LogOut.php" onclick="return confirm('Are you sure you want to log out?');">Log out</a>
            </div>
        </div>
                <a href="cart.php"><img src="img/cart.png" alt=""></a>
            </div>
        </div>

<ul class="links-container">
        <li class="link-item"><div class="dropdown">
                <button class="dropbtn">Play Station</button>
            <div class="dropdown-content">
                <a href="PS3.php">Play Station 3</a>
                <a href="PS4.php">Play Station 4</a>
                <a href="PS5.php">Play Station 5</a>
                <a href="PSVita.php">Play Station Vita</a>
            </div>
        </div></li>
        <li class="link-item"><div class="dropdown">
                <button class="dropbtn">X Box</button>
            <div class="dropdown-content">
                <a href="XboxSS.php">Xbox Series S</a>
                <a href="XboxsSSB.php">Xbox Series S Bundle</a>
                <a href="XboxX.php">Xbox Series X</a>
            </div>
        </div></li>
        <li class="link-item"><div class="dropdown">
                <button class="dropbtn">Nintendo</button>
            <div class="dropdown-content">
                <a href="NDS.php">Nintendo DS</a>
                <a href="N3DS.php">Nintendo 3DS</a>
                <a href="Wii.php">Wii</a>
            </div>
        </div></li>
        <li class="link-item"><div class="dropdown">
                <button class="dropbtn">PC Gaming</button>
            <div class="dropdown-content">
                <a href="PcGames.php">Games</a>
            </div>
        </div></li>
        
</ul>

        
    `;
}

createNav();