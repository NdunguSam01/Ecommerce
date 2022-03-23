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
                <a href="Info">My Account</a>
                <a href="Orders">My orders</a>
                <a href="LogOut" onclick="return confirm('Are you sure you want to log out?');">Log out</a>
            </div>
        </div>
                <a href="Cart"><img src="img/cart.png" alt=""></a>
            </div>
        </div>

<ul class="links-container">
        <li class="link-item"><a href="../Ecommerce" class="link">home</a></li>
        <li class="link-item">
            <div class="dropdown">
                <button class="dropbtn">Play Station</button>
                <div class="dropdown-content">
                    <a href="PS3">Play Station 3</a>
                    <a href="PS4">Play Station 4</a>
                    <a href="PS5">Play Station 5</a>
                </div>
            </div>
        </li>
        <li class="link-item"><div class="dropdown">
                <button class="dropbtn">X Box</button>
            <div class="dropdown-content">
                <a href="XBoxSS">Xbox Series S</a>
                <a href="XBoxSSB">Xbox Series S Bundle</a>
                <a href="XBoxX">Xbox Series X</a>
            </div>
        </div></li>
        <li class="link-item"><div class="dropdown">
                <button class="dropbtn">Nintendo</button>
            <div class="dropdown-content">
                <a href="NDS">Nintendo DS</a>
                <a href="N3DS">Nintendo 3DS</a>
                <a href="Wii">Wii</a>
            </div>
        </div></li>
        <li class="link-item"><div class="dropdown">
                <button class="dropbtn">PC</button>
            <div class="dropdown-content">
                <a href="PcGames">Games</a>
            </div>
        </div></li>
    <li class="link-item"><a href="Admin/Login" class="link">Items</a></li>
</ul>

        
    `;
}

createNav();