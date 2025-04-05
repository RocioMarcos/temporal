<nav>
    <div class="right">
        <div class="logo">
            <a href="/">
                <img class="logo_nav" src="public/img/logo-atajo.webp" alt="">
            </a>
            <?php
            if ($_GET['url'] === 'blog') {
                echo '<h2 class="nav-text" style="font-weight: 100; font-style: italic; color:white">Blog</h2>';
            }
            ?>
        </div>
        <i class="bi bi-list" id="menu-icon"></i>
    </div>

    <div class="left" id="menu-list">
        <ul>
            <li>
                <a href="index#servicios">
                    Servicios
                </a>
            </li>

            <li>
                <a href="index#clientes">
                    Clientes
                </a>
            </li>


            <li>
            <a href="index#nosotros">
                    Nosotros
                </a>
            </li>
            
            <li>
                <a href="index#contactanos">
                    Contacto
                </a>
            </li>
            
            <li>
                <a href="blog">
                    Blog
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="block" id="menu-bg">
    
</div>