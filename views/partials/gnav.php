<nav>
    <div class="right">
        <div class="logo">
            <a href="/atajoCreativo/">
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
            <a href="index#servicios">
                <li>
                    Servicios
                    <div class="bolita-blanca">

                    </div>
                </li>
            </a>
            <a href="index#clientes">
                <li>
                    Clientes
                </li>
            </a>
            <a href="index#nosotros">
                <li>
                    Nosotros
                </li>
            </a>
            <a href="index#contactanos">
                <li>
                    Contacto
                </li>
            </a>
            <a href="blog">
                <li>
                    Blog
                </li>
            </a>
        </ul>
    </nav>
</div>

<div class="block" id="menu-bg">
    
</div>