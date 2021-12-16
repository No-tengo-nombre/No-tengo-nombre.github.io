<?php
    include "config.php";
?>

<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/2000/svg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=devive-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">

    <script src="scripts/smoothScroll.js"></script>

    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/favicon.ico">

    <title>Cristóbal Allendes</title>
</head>

<body>
    <div class="main">
        <div id="top-nav-bar">
            <div class="icons">
                <a href="https://github.com/No-tengo-nombre">
                    <img src="img/github.svg" alt="Github" title="GitHub">
                </a>
                <a href="https://www.linkedin.com/in/cristobal-allendes-molina/">
                    <img src="img/linkedin.svg" alt="LinkedIn" title="LinkedIn">
                </a>
                <a href="mailto:callendes.molina@gmail.com">
                    <img src="img/email.svg" alt="Email" title="Email: callendes.molina@gmail.com">
                </a>
            </div>
            <ul id="nav-index" class="index">
                <li class="nav-item active" onclick="smoothScroll('description')">
                    <p data-key="nav-about-me">
                        Sobre mí
                    </p>
                </li>
                <li class="nav-item" onclick="smoothScroll('proyects'), setActive()">
                    <p data-key="nav-proyects">
                        Proyectos
                    </p>
                </li>
                <li class="nav-item" onclick="smoothScroll('education')">
                    <p data-key="nav-education">
                        Educación
                    </p>
                </li>
                <li class="nav-item">
                    <p>
                        Test
                    </p>
                </li>
                <li class="nav-item">
                    <p>
                        Test
                    </p>
                </li>
                <li class="nav-item">
                    <p>
                        Test
                    </p>
                </li>
            </ul>
        </div>


        <!-- Description -->
        <row id="description" class="description-row">
            <div class="description">
                <div class="introduction">
                    <h1 data-key="desc-title">
                        ¡Bienvenid@!
                    </h1>
                    <p data-key="desc-abstract">
                        Mi nombre es Cristóbal Allendes, y soy un estudiante de Ingeniería Civil Eléctrica en la Universidad de Chile. Estoy
                        interesado en las áreas de procesamiento de señales e imágenes, machine learning, robótica y electrónica, y me gusta el
                        trabajo tanto con software como hardware.
                    </p>
                </div>
                <div class="about-me">
                    <h3 data-key="desc-about-me-title">
                        Sobre mí
                    </h3>
                    <p data-key="desc-about-me-p1">
                        Mi mayor pasión es aprender de distintos temas, en especial cuando los puedo vincular de vuelta a la ingeniería eléctrica:
                        desde las matemáticas puras y aplicadas a la física y astronomía, pasando por áreas como la ingeniería mecánica y el
                        desarrollo de software.
                    </p>
                    <p data-key="desc-about-me-p2">
                        Mis hobbies son la programación, la música y los videojuegos, y me encanta cuando puedo relacionarlos con mi área de
                        estudio. Por esto me he interesado en proyectos como la creación de software de análisis de señales, que me permiten
                        vincular la programación con el procesamiento de señales, e incluso he podido involucrar a la música a través de la
                        implementación de sintetizadores con este software.
                    </p>
                </div>
            </div>
            <div class="side-banner"></div>
        </row>


        <!-- Proyects -->
        <row id="proyects" class="proyects-row">
            <div class="title">
                <h2 data-key="proy-title">
                    Proyectos
                </h2>
            </div>
            <div class="entries">
                <div class="proyect">
                    <div class="title">
                        <h3 data-key="proy-p1-title">
                            Test proyect 1 title
                        </h3>
                    </div>
                    <div class="description" data-key="proy-p1-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Feugiat in ante metus dictum at tempor commodo ullamcorper a. Est ante in nibh mauris cursus. Diam phasellus
                        vestibulum lorem sed risus ultricies tristique nulla aliquet. Maecenas accumsan lacus vel facilisis volutpat.
                    </div>
                    <div class="proyect-access" data-key="proy-p1-link">
                        Test proyect 1 link
                    </div>
                </div>
                <div class="proyect">
                    <div class="title">
                        <h3 data-key="proy-p2-title">
                            Test proyect 2 title
                        </h3>
                    </div>
                    <div class="description" data-key="proy-p2-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Feugiat in ante metus dictum at tempor commodo ullamcorper a. Est ante in nibh mauris cursus. Diam phasellus
                        vestibulum lorem sed risus ultricies tristique nulla aliquet. Maecenas accumsan lacus vel facilisis volutpat.
                    </div>
                    <div class="proyect-access" data-key="proy-p2-link">
                        Test proyect 2 link
                    </div>
                </div>
                <div class="proyect">
                    <div class="title">
                        <h3 data-key="proy-p3-title">
                            Small title
                        </h3>
                    </div>
                    <div class="description" data-key="proy-p3-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                    <div class="proyect-access" data-key="proy-p3-link">
                        Small link
                    </div>
                </div>
            </div>
        </row>


        <!-- Education -->
        <row id="education" class="education-row">
            <div class="title">
                <h2 data-key="ed-title">
                    Educación
                </h2>
            </div>
            <div class="entries">
                <div class="education-entry">
                    <div class="title">
                        <div class="name">
                            <h3 data-key="ed-e1-title">
                                Ingeniería Civil Eléctrica
                            </h3>
                        </div>
                        <div class="date" data-key="ed-e1-date">
                            Marzo 2019 - presente
                        </div>
                    </div>
                    <div class="description" data-key="ed-e1-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Feugiat in ante metus dictum at tempor commodo ullamcorper a. Est ante in nibh mauris cursus. Diam phasellus
                        vestibulum lorem sed risus ultricies tristique nulla aliquet. Maecenas accumsan lacus vel facilisis volutpat.
                    </div>
                </div>
                <div class="education-entry">
                    <div class="title">
                        <div class="name">
                            <h3 data-key="ed-e2-title">
                                Test education experience
                            </h3>
                        </div>
                        <div class="date" data-key="ed-e2-date">
                            Septiembre 2000 - Septiembre 2020
                        </div>
                    </div>
                    <div class="description" data-key="ed-e2-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Feugiat in ante metus dictum at tempor commodo ullamcorper a. Est ante in nibh mauris cursus. Diam phasellus
                        vestibulum lorem sed risus ultricies tristique nulla aliquet. Maecenas accumsan lacus vel facilisis volutpat.
                    </div>
                </div>
                <div class="education-entry">
                    <div class="title">
                        <div class="name">
                            <h3 data-key="ed-e3-title">
                                Longer test title to see whether it wraps around or not
                            </h3>
                        </div>
                        <div class="date" data-key="ed-e3-date">
                            Septiembre 2000 - Septiembre 2020
                        </div>
                    </div>
                    <div class="description" data-key="ed-e3-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                </div>
            </div>
        </row>


        <!-- Footer -->
        <footer id="footer">
            <div class="copyright">
                <p>
                    Copyright &copy; 2021-2021, Cristóbal Allendes
                </p>
            </div>
            <div class="language-select">
                <!-- https://flagicons.lipis.dev/ -->
                <img class="language" src="img/es.svg" alt="Español" title="Español">
                <img class="language" src="img/gb.svg" alt="English" title="English">
            </div>
        </footer>
    </div>
</body>

<script src="scripts/activeNavBarItem.js"></script>
<!-- <script src="scripts/langData.js"></script>
<script src="scripts/langSelect.js"></script> -->

</html>