
<header >
        <nav class="menu">
            <ul>
                <li><a href="services-login.php">SERVICIOS</a></li>
                <li><a href="products-login.php">PRODUCTOS</a></li>
                <li id="login">
                    <a id="user"><?php echo $_SESSION['usuario']?></a>
                    <ul class="submenu">
                        <li><a href="validar-sistema.php">Mi sistema</a></li>
                        <li><a href="../logout.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>