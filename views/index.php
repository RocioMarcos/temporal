<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/index.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Livvic:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">

    <title>Atajo Creativo</title>
</head>

<body>

    <?php 
        include_once 'views/partials/gnav.php';
    ?>

    <div class="all">

        <div class="welcome">
            <div class="capa-violeta">
                <div class="texto-atajo">
                    <img src="public/img/lema.webp" alt="Lema Atajo Creativo">
                    <h1>
                        Trabajamos para volver tus sueños realidad
                    </h1>
                </div>
    
                <div class="logo-atajo">
                    <img src="public/img/logo-atajo.webp" alt="" class="logo">
                </div>
            </div>
           
            <div class="videobg">

                <video id="bgvideo" autoplay loop muted playsinline>
                    <source src="public/video/welcomebgl.mp4" type="video/mp4">
                    Tu navegador no soporta videos HTML5.
                </video>
            </div>
        </div>

        
        <div class="offer">
            <br id="servicios">
            <h3>
                Impulsamos tu marca con estrategias únicas
            </h3>
            <h3>Somos especialistas en marketing digital, llevamos tu negocio al</h3>
            <h2>Siguiente Nivel</h2>
        </div>
    
        <div class="calling">
            <div class="texto">
                <h2>¡Animate a un cambio positivo!</h2>
                <p>Contactá con nosotros hoy mismo, y descubrí cómo podemos transformar tu marca con creatividad, estrategia y pasión. ¡Es momento de brillar!</p>
                <button href="#" class="btn-start-now"> 
                    <h5>
                        Comenzá hoy 
                    </h5> 
                </button>
            </div>
            <img src="public/img/mkt.webp" alt="Marketing Digital" class="mkt">
        </div>


        <br style="display: hidden; background: transparent;" id="clientes">
        
        <div class="clients">
            <h2>Clientes satisfechos</h2>
            <h4>Que ya confiaron en nosotros:</h4>

            <ul class="marquesina">
                <li><img class="logo-cli fanwich" src="public/img/marcas/fanwich-logo.webp" alt="Fanwich" loading="lazy"></li>
                <li><img class="logo-cli gustazo" src="public/img/marcas/gustazo-logo.webp" alt="Gustazo" loading="lazy"></li>
                <li><img class="logo-cli leos" src="public/img/marcas/leos-logo.webp" alt="Leos" loading="lazy"></li>
                <li><img class="logo-cli mardelgin" src="public/img/marcas/mardelgin-logo.webp" alt="MardelGin" loading="lazy"></li>
                <li><img class="logo-cli maridaje" src="public/img/marcas/maridaje-logo.webp" alt="Maridaje" loading="lazy"></li>
                <li><img class="logo-cli ovejeroferreira" src="public/img/marcas/ovejeroferreira-logo.webp" alt="Ovejero Ferreira" loading="lazy"></li>
                <li><img class="logo-cli oxigenar" src="public/img/marcas/oxigenar-logo.webp" alt="Oxigenar" loading="lazy"></li>
                <li><img class="logo-cli tamarindo" src="public/img/marcas/tamarindo-logo.webp" alt="Tamarindo" loading="lazy"></li>
                <li><img class="logo-cli tecnomas" src="public/img/marcas/tecnomas-logo.webp" alt="Tecnomas" loading="lazy"></li>
                <li><img class="logo-cli tiiip" src="public/img/marcas/tiiip-logo.webp" alt="Tiiip" loading="lazy"></li>
            </ul>
        </div>

    
        <div class="comments">
            <h2>Testimonios</h2>
            <div class="texto">
                <div class="left">
                    <h4>"Quería felicitarlos, la verdad que el trabajo que están haciendo, es casualmente lo que yo quería con mi negocio. <br>
                    La verdad que me parece que la emboque con ustedes" </h4> 
                    <p>- Leo Ramos, Dueño de Leo's</p>
                </div>

                <br>
    
                <div class="right">
                    <h4>"De verdad Gracias, gracias por todo, son geniales en su trabajo indiscutiblemente."</h4> 
                    <p>- Abbi, Dietética Mandorla</p>

                    <br>
            
                    <h4>"Simplemente bello!!!! Excelente trabajo." </h4> 
                    <p>- Carlos, Aromas Oxigenar</p>
                </div>
            </div>
            <img src="public/img/colores.webp" alt="Esferas" class="bolitas">
        </div>
    
        <div class="we">
            <h2>¿Quiénes somos?</h2>
            <br>
            <p>En Atajo Creativo, creemos que cada proyecto es una oportunidad para conectar
                <br>
            Somos de la provincia de Córdoba (Argentina), nuestra agencia se ha formado sobre valores, que para nosotros son fundamentales: </p>
            <p class="enfasis">La empatía, la innovación, y el compromiso con nuestros clientes.</p>
            <br>
            <p>Comenzamos con un sueño, y hoy en día nos convertimos en una agencia versátil y dinámica, preparada para colaborar en la <b><u>realización de tus sueños</u></b>. Cubriendo necesidades para empresas de todos los tamaños y sectores, siempre priorizando la conexión humana, empática y soluciones estratégicas que marquen la diferencia
            </p>
        </div>

        <br style="display: hidden; background: transparent;" id="nosotros">
    
        <div class="us">
            <h2>Conocenos</h2>
            <br>
            <ul>
                <li>
                    <div class="general agua">
                        <div class="texto">
                            <h3>Camila Carreras</h3>
                            <h5>Diseñadora gráfica / Community Manager</h5>
                        </div>
                        <div class="foto agua">
                            <div class="cami"></div>
                        </div>
                    </div>
                    <div class="descripcion">
                        Soy Cami, Lic. en Diseño Gráfico, Diplomada en CM y especialista en RRSS.
                        Me apasiona el arte y aplicar el diseño en todas las aristas de mi vida y la vida de los demás.
                        “La vida con colores es mucho más divertida”
                        Hacer ejercicio y bailar es de lo que más disfruto en mi tiempo libre.
                    </div>
                </li>
                <hr>
                <li class="odd">
                    <div class="general verde">
                        <div class="texto">
                            <h3>Emiliano Córdoba</h3>
                            <h5>Social Media Manager / Community Manager</h5>
                        </div>
                        <div class="foto verde">
                            <div class="emi"></div>
                        </div>
                    </div>
                    <div class="descripcion">
                        Soy Emi, Social Media Manager, CM y Analista de Marketing. Me apasiona ayudar a las
                        empresas a transformar sus ideas en estrategias creativas que generan resultados.
                        Me gusta leer, aprender y profundizar sobre temas relacionados al mundo digital.
                        En mi tiempo libre, disfruto de ir al gimnasio y juntarme con amigos a tomar un buen vino.
                    </div>
                </li>
                <hr>
                <li>
                    <div class="general gris">
                        <div class="texto">
                            <h3>Valentina Gori</h3>
                            <h5>Diseñadora Gráfica</h5>
                        </div>
                        <div class="foto gris">
                            <div class="vale"></div>
                        </div>
                    </div>
                    <div class="descripcion">
                        Soy Vale, Técnica en Comunicación Visual y actualmente ocupo el puesto de Diseñadora
                        Junior. Me caracterizo por ser detallista, creativa y perseverante, me apasiona el arte y las
                        acrobacias aéreas.
                    </div>
                </li>
                
                <hr>
                <li class="odd">
                    <div class="general naranja">
                        <div class="texto">
                            <h3>Federico Baigorrí</h3>
                            <h5>Editor de videos</h5>
                        </div>
                        <div class="foto naranja">
                            <div class="fede"></div>
                        </div>
                    </div>
                    <div class="descripcion">
                        Soy Fede, técnico en diseño gráfico. Especializado en Motion Graphics. Ocupo el puesto de editor de videos. Mi trabajo no tiene inspiración sin la música, sobre todo de Coldplay. <br>
                        Me gustan los autos, los deportes y sacar fotos en mi tiempo libre.
                    </div>
                </li>
            </ul>

            <br>

            <img src="public/img/colores.webp" alt="Esferas" class="bolitas" loading="lazy">
        </div>

        <br style="display: hidden; background: transparent;" id="contactanos">
            
        <div class="lastcall">
            <div class="mano">
                <img class="animate__animated animate_bounce" src="public/img/mano.webp" alt="Apuntá a nosotros" loading="lazy">
            </div>
            <div class="texto">
                <h2>¿Estás Listo?</h2>
                <h4>¡Animate y crecé en el mundo digital junto a nosotros!</h4>

                <div class="btn">
                    <a href="" class="btn-start-now">Contactanos</a>
                </div>

                <p>O mandanos un mensaje por nuestras redes:</p>
            </div>
        </div>
        <ul class="contactos">
            <li class="instagram">
                <i class="bi-instagram"></i> @Atajocreativook
            </li>
            <li class="linkedin">
                <i class="bi-linkedin"></i> @atajocreativo
            </li>
            <li class="facebook">
                <i class="bi-facebook"></i> /atajocreativook
            </li>
            <li class="whatsapp">
                <i class="bi-whatsapp"></i> +54 351 574 8956 /<br class=""> +54 351 574 8956
            </li>
        </ul>
    </div>

    <script src="public/js/menu.js"></script>

    <?php 
        include_once 'views/partials/gfooter.php';
    ?>
</body>
</html>