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
                <button class="dropbtn"><img src="img/user.png"></button>
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
        <li class="link-item"><a href="index.php" class="link">home</a></li>
        <li class="link-item">
            <div class="dropdown">
                <button class="dropbtn">Play Station</button>
                <div class="dropdown-content">
                    <a href="ps3.php">Play Station 3</a>
                    <a href="ps4.php">Play Station 4</a>
                    <a href="ps5.php">Play Station 5</a>
                    <a href="psvita.php">Play Station Vita</a>
                </div>
            </div>
        </li>
        <li class="link-item"><div class="dropdown">
                <button class="dropbtn">X Box</button>
            <div class="dropdown-content">
                <a href="xboxss.php">Xbox Series S</a>
                <a href="xboxssb.php">Xbox Series S Bundle</a>
                <a href="xboxx.php">Xbox Series X</a>
            </div>
        </div></li>
        <li class="link-item"><div class="dropdown">
                <button class="dropbtn">Nintendo</button>
            <div class="dropdown-content">
                <a href="nds.php">Nintendo DS</a>
                <a href="n3ds.php">Nintendo 3DS</a>
                <a href="wii.php">Wii</a>
            </div>
        </div></li>
        <li class="link-item"><div class="dropdown">
                <button class="dropbtn">PC</button>
            <div class="dropdown-content">
                <a href="pcgames.php">Games</a>
            </div>
        </div></li>
        
</ul>

        
    `;
}

createNav();