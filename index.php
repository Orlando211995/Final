<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href=" ./css/main.css">
    <title>Fitness Gym</title>
</head>
<body>
    <!-- MENU -->
    <div class="contenedor-header">
        <header>
            <h1>FITNESS <span class="txtRojo">GYM</span></h1>
            <nav id="nav">
            <a href="#inicio">inicio</a>
                      <a href="#nosotros">Nosotros</a>
                      <a href="#servicios">Servicios</a>
                      <a href="#comodidades">Comodidades</a>
                      <a href="#galeria">Galería</a>
                      <a href="#equipo">Equipo</a>
                      <a href="#contacto">Contacto</a>
            </nav>
            <div class="redes">
            <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
            </div>

            <!-- Icono del menu responsive -->
            <div class="hamburger" id="hamburger-icon" onclick="mostrarOcultarMenu()">
                 <span></span>
                <span></span>
                <span></span>
              </div>             
        </header>
    </div>

    <div id="accordion-container" class="accordion-container">
    <div id="accordion-content" class="accordion-content"></div>
</div>

    <!-- SECCION INICIO -->
    <section class="inicio">
        <div class="contenido-seccion">
            <div class="info">
                <h2>HAZ QUE <span class="txtRojo">OCURRA</span></h2>
                <p>Triunfar es más facil de lo que piensas!</p>
                <a href="#nosotros" class="btn-mas">
                    <i class="fa-solid fa-circle-chevron-down"></i>
                </a>
            </div>
            <div class="opciones">
                <div class="opcion">
                    01.FITNESS
                </div>
                <div class="opcion">
                    02.CROSSFIT
                </div>
                <div class="opcion">
                    03.BOXING
                </div>
                <div class="opcion">
                    04.ENDURANCE
                </div>
                <div class="opcion">
                    05.CARDIO
                </div>
                <div class="opcion">
                    06.DEFENSA 
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION NOSOTROS -->
    <section  class="nosotros">
        <div class="fila">
            <div class="col">
                <img src="img/nosotros.png" alt="">
            </div>
            <div class="col">
                <div class="contenedor-titulo">
                    <div class="numero">
                        01
                    </div>
                    <div class="info">
                        <span class="frase">LA MEJOR EXPERIENCIA</span>
                        <h2>NOSOTROS</h2>
                    </div>
                </div>
                <p>En FITNESS GYM nos apasiona el fitness y el bienestar. Desde nuestra fundación, nos hemos dedicado a proporcionar un ambiente motivador y profesional para que nuestros socios puedan superarse día a día.</p>
            </div>
        </div>
        <hr>
        <div class="fila-nosotros">
            <div class="col1">
                <span class="frase">
                    <span class="txtRojo">ENTRENA</span> DIFERENTE
                </span>
                <h2>ENTRENA <span class="txtRojo">GRATIS</span> HOY!</h2>
            </div>
            <div class="col2">
                <button>PASE LIBRE</button>
            </div>
        </div>
    </section>

    <!-- SECCION SERVICIOS -->
    <section class="servicios" >
        <div class="contenido-seccion">
            <div class="fila">
                <div class="col">
                    <div class="contenedor-titulo">
                        <div class="numero">
                            02
                        </div>
                        <div class="info">
                            <span class="frase">LA MEJOR EXPERIENCIA</span>
                            <h2>SERVICIOS</h2>
                        </div>
                    </div>          
                    <p>Ofrecemos una amplia variedad de servicios, incluyendo entrenamientos personalizados, clases grupales de alta intensidad, yoga, pilates, asesoramiento nutricional y programas especializados según tus necesidades.</p>
                </div>
                <div class="col">
                    <img src="img/servicios.png" alt="">
                </div>
            </div>
        </div>
        <div class="info-servicios">
            <table>
                <tr>
                    <td>
                        <i class="fa-solid fa-person-walking"></i>
                        <h3><span class="txtRojo">Clases </span> de Fitness</h3>
                        <p>Enfocadas en mejorar la condición física general a través de ejercicios funcionales, entrenamiento de resistencia y flexibilidad. Ideales para quienes buscan tonificar su cuerpo y aumentar su energía.</p>
                    </td>
                    <td>
                        <i class="fa-solid fa-dumbbell"></i>
                        <h3><span class="txtRojo">Clases </span> de Crossfit</h3>
                        <p>Entrenamiento de alta intensidad basado en movimientos funcionales y variados. Desarrolla fuerza, resistencia y agilidad combinando levantamiento de pesas, cardio y gimnasia.</p>
                    </td>
                    <td>
                        <i class="fa-solid fa-mitten"></i>
                        <h3><span class="txtRojo">Clases </span> de Boxeo</h3>
                        <p>Mejora tu resistencia, fuerza y velocidad con entrenamientos inspirados en el boxeo. Incluyen ejercicios de golpeo al saco, técnicas de defensa y trabajo cardiovascular. Apto para todos los niveles.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fa-solid fa-clock"></i>
                        <h3><span class="txtRojo">Clases </span> de Enduro</h3>
                        <p>Sesiones de larga duración que combinan resistencia física y mental. Perfectas para quienes desean mejorar su rendimiento en deportes de resistencia como maratones y triatlones.</p>
                    </td>
                    <td>
                        <i class="fa-solid fa-heart-circle-bolt"></i>
                        <h3><span class="txtRojo">Clases </span> de Cardio</h3>
                        <p>Rutinas dinámicas diseñadas para quemar calorías y mejorar la salud cardiovascular. Se incluyen ejercicios como HIIT, aeróbicos y circuitos de alta intensidad.</p>
                    </td>
                    <td>
                        <i class="fa-solid fa-hand-fist"></i>
                        <h3><span class="txtRojo">Clases </span> de Defensa Personal</h3>
                        <p>Aprende técnicas efectivas para protegerte en situaciones de riesgo. Entrenamiento basado en artes marciales, tácticas de evasión y control de oponentes. Ideal para cualquier persona que quiera sentirse más segura.</p>
                    </td>
                </tr>
            </table>
        </div>
    </section>

    <!-- SECCION COMODIDADES -->
    <section class="comodidades">
        <div class="fila">
            <div class="col">
                <img src="img/nosotros.png" alt="">
            </div>
            <div class="col">
                <div class="contenedor-titulo">
                    <div class="numero">
                        03
                    </div>
                    <div class="info">
                        <span class="frase">LA MEJOR EXPERIENCIA</span>
                        <h2>COMODIDADES</h2>
                    </div>
                </div>
                <p class="p-especial">Nuestras instalaciones están equipadas con vestidores modernos, sauna, duchas, lockers y una zona de relajación para que disfrutes de la mejor experiencia después de tu entrenamiento.</p>
                <ul>
                    <li><span>PISCINA</span> - Nuestra piscina semiolímpica cuenta con agua climatizada y un sistema de filtrado avanzado para garantizar una experiencia segura e higiénica. Ofrecemos clases de natación para todas las edades, así como sesiones de aquagym y entrenamiento libre.</li>
                    <li><span>WIFI GRATIS</span> - Mantente conectado en todo momento con nuestra red de WiFi de alta velocidad, disponible en todas las áreas del establecimiento. Perfecto para revisar correos, escuchar música o ver contenido en streaming sin interrupciones.</li>
                    <li><span>ESTACIONAMIENTO GRATIS</span> - Contamos con un estacionamiento privado y seguro, con cámaras de vigilancia 24/7 y acceso exclusivo para nuestros socios. Además, disponemos de espacios reservados para personas con movilidad reducida.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- SECCION GALERIA -->
<section class="galeria">
    <div class="contenido-seccion">
        <div class="contenedor-titulo">
            <div class="numero">04</div>
            <div class="info">
                <span class="frase">LA MEJOR EXPERIENCIA</span>
                <h2>GALERIA</h2>
            </div>
        </div>

        <div class="carousel-wrapper">
            <button class="carousel-btn left">&lt;</button>

            <div class="carousel-container">
                <div class="col"><img src="img/f1.jpg" alt=""></div>
                <div class="col"><img src="img/f2.jpg" alt=""></div>
                <div class="col"><img src="img/f3.jpg" alt=""></div>
                <div class="col"><img src="img/f4.jpg" alt=""></div>
                <div class="col"><img src="img/f5.jpg" alt=""></div>
                <div class="col"><img src="img/f6.jpg" alt=""></div>
                <div class="col"><img src="img/f7.jpg" alt=""></div>            
                <div class="col"><img src="img/f8.jpg" alt=""></div>  
                <div class="col"><img src="img/f13.jpg" alt=""></div>                            
                <div class="col"><img src="img/f11.jpg" alt=""></div>
                <div class="col"><img src="img/f12.jpg" alt=""></div>
                <div class="col"><img src="img/f9.jpg" alt=""></div> 
                <div class="col"><img src="img/f10.jpg" alt=""></div>

            </div>

            <button class="carousel-btn right">&gt;</button>
        </div>
    </div>
</section>
    
    <!-- SECCION EQUIPO -->
    <section class="cards">
    <div class="equipo">
        <div class="contenido-seccion">
        <div class="contenedor-titulo">
            <div class="numero">05</div>
            <div class="info">
                <span class="frase">LA MEJOR EXPERIENCIA</span>
                <h2>EQUIPO</h2>
            </div>
        </div>
        <div class="fila" id="equipo-cards">
            <!-- Aquí se insertarán los cards desde JavaScript -->
          </div>
       </div>
    </div>
</section>

    <!-- SECCION CONTACTO -->
    <section class="contacto" >
        <div class="contenido-seccion">
            <div class="contenedor-titulo">
                <div class="numero">
                    06
                </div>
                <div class="info">
                    <span class="frase">LA MEJOR EXPERIENCIA</span>
                    <h2>CONTACTO</h2>
                    <p class="p-especial">¿Listo para empezar? Contáctanos en info@FITNESSGYM.com o visítanos en nuestra sede principal.</p>
                </div>
            </div>
            <div class="fila">
                <div class="col">
                    <input type="text" placeholder="Ingrese Email">
                </div>
                <div class="col">
                    <input type="text" placeholder="Ingrese Nombre">
                </div>
            </div>
            <div class="mensaje">
                <textarea name="" id="" cols="30" rows="10" placeholder="Ingresa el Mensaje"></textarea>
                <button>Enviar Mensaje</button>
            </div>
            <div class="fila-datos">
                <div class="col">
                    <i class="fa-solid fa-location-dot"></i>
                    Frente calzado Lazo
                </div>
                <div class="col">
                    <i class="fa-solid fa-phone"></i>
                    2664 - 456788
                </div>
                <div class="col">
                    <i class="fa-regular fa-clock"></i>
              Lunes a Viernes, 5:30am - 21:00pm
              Sabados, 9:00am - 3:00pm
                </div>
            </div>
        </div>

    </section>

    <footer>
        <div class="info">
            <p>2025 - <span class="txtRojo">FITNESS GYM</span> Todos los derechos reservados</p>
            <div class="redes">
            <a href="https://www.facebook.com" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com" target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.youtube.com" target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>
    </footer>
    
    <script src="./script/hambuger-icon.js"></script>
    <script src="./script/accordion.js"></script>
    <script src="./script/cards.js"></script>
    <script src="./script/carousel.js"></script>
</body>
</html>