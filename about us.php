<?php
include "conexion.php"; // Script de conexion a la base de datos
include "login.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <header class="container-lg mg-b-20">
        <!-- Encabezado del sitio web   -->
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top contenido-navBar">
            <div class="container-fluid mg-b-40">
                <a class="navbar-brand text-white logo" href="./login.php">FeedlotApp</a>
                <button class="navbar-toggler btn-navbar-maxMobile" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark opacity-75" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">FeedlotApp</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body d-flex justify-content-center">
                        
                        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                            <li class="nav-item text-center">
                                <a class="nav-link active text-white" aria-current="page" href="./dashboard.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white text-center" href="./arduino/index.php">Estadisticas Arduino</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white btn-logout text-center" href="./logout.php">Cerrar Sesion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white btn-login text-center" href="./dashboard.php">Iniciar Sesion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- FIN ENCABEZADO  -->

        <!-- Importación de Carousel Slides -->
        <div id="carouselExampleInterval" class="carousel slide cotenido-carrusel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/img-carrusel/carrusel_1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/img-carrusel/carrusel_2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/img-carrusel/carrusel_3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <main class="container mg-b-60">
        <h2 class="text-center mg-top-30 mg-top-50 mx-top">Sobre Nosotros</h2>
        <p class="sub-title">Enthusiastic technologists.</p>
        <p class="text-about_us">
            Un grupo de jóvenes autodidactas apasionados por la tecnología participó en las
            olimpiadas de programación organizadas por el INET y el Ministerio de Educación de la Republica Argentina. 
            Desafiados por una situación problemática relacionada con la
            administración y gestión de un Feedlot de ganado, pusieron a prueba sus
            habilidades y trabajaron juntos para encontrar una solución innovadora.
            A pesar de ser de diferentes instituciones, supieron colaborar en equipo y
            presentar una solución útil y eficaz que fue destacada por los
            evaluadores de la competencia. Este logro demostró su capacidad de
            enfrentar desafíos y su potencial como futuros líderes en el campo de la
            tecnología.
        </p>
        <p class="slogan text-center">
            ¡Nada es imposible cuando se tiene pasión, determinación y trabajo en
            equipo!
        </p>
    </main>
    <section class="container mg-b-60">
        <h2 class="text-center mg-b-40">Tecnologías Implementadas</h2>
        <div class="container text-center carrusel-desktop-technology">
            <div class="row">
                <div class="col">
                    <img src="img/img-technologys/icon-github.png" class="d-block w-auto h-75 img-fluid" alt="Icon-GitHub" />
                </div>
                <div class="col">
                    <img src="img/img-technologys/icon-git.png" class="d-block w-auto h-75 img-fluid" alt="Icon-Git" />
                </div>
                <div class="col">
                    <img src="img/img-technologys/icon-vscode.png" class="d-block w-auto h-75 img-fluid" alt="Icon-Visual Studio Code" />
                </div>
                <div class="col">
                    <img src="img/img-technologys/icon-html.png" class="d-block w-auto h-75 img-fluid" alt="Icon-HTML5" />
                </div>
                <div class="col">
                    <img src="img/img-technologys/icon-js.png" class="d-block w-auto h-75 img-fluid" alt="Icon-JavaScript" />
                </div>
                <div class="col">
                    <img src="img/img-technologys/icon-figma.png" class="d-block w-auto h-75 img-fluid" alt="Icon-Figma" />
                </div>
                <div class="col">
                    <img src="img/img-technologys/icon-css.png" class="d-block w-auto h-75 img-fluid" alt="Icon-CCS3" />
                </div>
                <div class="col">
                    <img src="img/img-technologys/icon-mysql.png" class="d-block w-auto h-75 img-fluid" alt="Icon-Mysql Workbench" />
                </div>
                <div class="col">
                    <img src="img/img-technologys/icon-bootstrap.png"
                        class="icon-bootstrap d-block w-auto h-75 img-fluid" alt="Icon-Bootstrap5" />
                </div>
                <div class="col">
                    <img src="img/img-technologys/icon-php.png" class="d-block w-auto h-75 img-fluid" alt="Icon-PHP" />
                </div>
                <div class="col">
                    <img src="img/img-technologys/icon-sql.png" class="d-block w-auto h-75 img-fluid" alt="Icon-SQL" />
                </div>
            </div>
        </div>
    </section>

    <section class="container mg-b-60 text-center carrusel-mobile-technology">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"
                    aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7"
                    aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8"
                    aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9"
                    aria-label="Slide 1"></button>
            </div>
            <div class="carousel-inner contenido-tech">
                <div class="carousel-item contenido-tech-item d-md-block active">
                    <img src="img/img-technologys/icon-github.png" class="d-block w-auto h-75" alt="Icon-GitHub" />
                    <div class="carousel-caption description-item-tech d-md-block">
                        <h5 class="d-md-block d-lg-none">GitHub</h5>
                    </div>
                </div>
                <div class="carousel-item contenido-tech-item">
                    <img src="img/img-technologys/icon-git.png" class="d-block w-auto h-75"
                        alt="Icon-Git" /><!-- class img: d-block w-auto h-75-->
                    <div class="carousel-caption description-item-tech d-md-block"><!-- d-none d-md-block-->
                        <h5 class="d-block d-md-none">Git</h5>
                    </div>
                </div>
                <div class="carousel-item contenido-tech-item">
                    <img src="img/img-technologys/icon-vscode.png" class="d-block w-auto h-75" alt="Icon-Visual Studio Code" />
                    <div class="carousel-caption description-item-tech d-md-block">
                        <!-- class div: d-none d-md-block d-block d-sm-none d-md-none d-lg-block-->
                        <h5 class="d-block d-md-none">Visual Studio Code</h5>
                    </div>
                </div>
                <div class="carousel-item contenido-tech-item">
                    <img src="img/img-technologys/icon-html.png" class="d-block w-auto h-75" alt="Icon-HTML5" />
                    <div class="carousel-caption description-item-tech d-md-block">
                        <h5 class="d-block d-md-none">HTML</h5>
                    </div>
                </div>
                <div class="carousel-item contenido-tech-item">
                    <img src="img/img-technologys/icon-js.png" class="d-block w-auto h-75" alt="Icon-JavaScript" />
                    <div class="carousel-caption description-item-tech d-md-block">
                        <h5 class="d-block d-md-none">JavaScript</h5>
                    </div>
                </div>
                <div class="carousel-item contenido-tech-item">
                    <img src="img/img-technologys/icon-figma.png" class="d-block w-auto h-75" alt="Icon-Figma" />
                    <div class="carousel-caption description-item-tech d-md-block">
                        <h5 class="d-block d-md-none">Figma</h5>
                    </div>
                </div>
                <div class="carousel-item contenido-tech-item">
                    <img src="img/img-technologys/icon-css.png" class="d-block w-auto h-75" alt="Icon-CSS3" />
                    <div class="carousel-caption  description-item-tech d-md-block">
                        <h5 class="d-block d-md-none">CSS</h5>
                    </div>
                </div>
                <div class="carousel-item contenido-tech-item">
                    <img src="img/img-technologys/icon-mysql.png" class="d-block w-auto h-75" alt="Icon-MySQL Workbench" />
                    <div class="carousel-caption description-item-tech d-md-block">
                        <h5 class="d-block d-md-none">Mysql Workbench</h5>
                    </div>
                </div>
                <div class="carousel-item contenido-tech-item">
                    <img src="img/img-technologys/icon-bootstrap.png" class=" icon-bootstrap d-block w-auto h-75"
                        alt="Icon-Bootstrap5" />
                    <div class="carousel-caption description-item-tech d-md-block">
                        <h5 class="d-block d-md-none">Bootstrap</h5>
                    </div>
                </div>
                <div class="carousel-item contenido-tech-item">
                    <img src="img/img-technologys/icon-php.png" class="d-block w-auto h-auto mb-0" alt="Icon-PHP" />
                    <div class="carousel- description-item-tech d-md-block">
                        <h5 class="d-block d-md-none">PHP</h5>
                    </div>
                </div>
                <div class="carousel-item contenido-tech-item">
                    <img src="img/img-technologys/icon-sql.png" class="d-block w-auto h-75" alt="Icon-SQL" />
                    <div class="carousel-caption description-item-tech d-md-block">
                        <h5 class="d-block d-md-none">SQL</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>

    <!-- SECCION DE PERFILES DESKTOP-->
    <section class="container-fluid seccion-perfiles-desktop" id="mi-seccion">
        <h2 class="text-center mg-b-40 the-enthusiastic">The Enthusiastic Technologists</h2>
        <div class="row lista-perfiles">
            <div class="col">
                <div class="card card-section-perfil">
                    <div class="portada portada-brian">
                        <img src="img/img-perfiles/perfil-brian/perfil-brian.png" class="card-img-top"
                            alt="Brian Duran" />
                    </div>
                    <div class="card-body mg-top-30 text-white">
                        <div class="card-perfil">
                            <h5 class="card-title text-center">Brian Duran</h5>
                            <h6 class="card-subtitle mb-2 text-rol text-center">
                                Software Developer
                            </h6>
                        </div>
                        <div class="card-text">
                            <p>
                                RPA Developer con experiencia en Blue Prism, especializado en proyectos de banca y
                                finanzas. Mi enfoque en RPA se complementa con mi interés en el desarrollo Full Stack
                                para poder ofrecer soluciones más completas e innovadoras que aborden los desafiós
                                empresariales y las necesidades específicas del cliente. Estoy buscando expandir mis
                                habilidades en el desarrollo front y banck end.
                            </p>
                        </div>
                        <div class="card-btn-verPerfil">
                            <a href="https://www.linkedin.com/in/brian-duran/" target="_blank"
                                class="d-flex justify-content-center align-items-center flex-row w-100 btn btn-primary">Ver
                                Perfil</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card card-section-perfil">
                    <div class="portada portada-franco">
                        <img src="img/img-perfiles/perfil-franco/perfil-franco.png" class="card-img-top"
                            alt="Franco Sancristobal" />
                    </div>
                    <div class="card-body mg-top-30 text-white">
                        <div class="card-perfil">
                            <h5 class="card-title text-reset text-center">
                                Franco Sancristobal
                            </h5>
                            <h6 class="card-subtitle mb-2 text-rol text-center">
                                Software Developer
                            </h6>
                        </div>
                        <div class="card-text">
                            <p>
                                Front end developer apasionado. Destaco en el diseño e implementación de interfaces de
                                usuario atractivas y funcionales.Me he desempeñado en diversos proyectos y actualmente
                                estoy interesado en ampliar mis habilidades como full stack developer, lo que me permite
                                tener una visión más completa del proceso de desarrollo y ofrecer soluciones más
                                completas a los clientes.
                            </p>
                        </div>
                        <div class="card-btn-verPerfil">
                            <a href="https://www.linkedin.com/in/franco-sancristobal-478b7b1ab/" target="_blank" class="btn btn-primary d-flex justify-content-center align-items-center flex-row w-100 btn btn-primary">Ver
                                Perfil</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-section-perfil">
                    <div class="portada portada-bruno">
                        <img src="img/img-perfiles/perfil-bruno/perfil-bruno.png" class="card-img-top"
                            alt="Bruno Caruso" />
                    </div>
                    <div class="card-body mg-top-30 text-white">
                        <div class="card-perfil">
                            <h5 class="card-title text-center">Bruno Caruso</h5>
                            <h6 class="card-subtitle mb-2 text-rol text-center">
                                Software Developer
                            </h6>
                        </div>
                        <div class="card-text">
                            <p>
                                Full Stack Developer apasionado. Cuento con un amplio conocimiento en el desarrollo de
                                aplicaciones web escalables y la implementación de soluciones innovadoras en diferentes
                                entornos tecnológicos. Me enfoco en construir productos centrados en el usuario.En mi
                                carrera, he destacado por mi capacidad para trabajar en equipo y por mi habilidad para
                                resolver problemas de manera efectiva.
                            </p>
                        </div>
                        <div class="card-btn-verPerfil">
                            <a href="https://www.linkedin.com/in/brunocarusok/" target="_blank"
                                class="btn btn-primary d-flex justify-content-center align-items-center flex-row w-100">Ver
                                Perfil</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-section-perfil">
                    <div class="portada portada-gonzalo">
                        <img src="img/img-perfiles/perfil-gonzalo/perfil-gonzalo.png" class="card-img-top"
                            alt="Bruno Caruso" />
                    </div>
                    <div class="card-body mg-top-30 text-white">
                        <div class="card-perfil">
                            <h5 class="card-title text-center">Gonzalo Benavente</h5>
                            <h6 class="card-subtitle mb-2 text-rol text-center">
                                Software Developer
                            </h6>
                        </div>
                        <div class="card-text">
                            <p>
                                Desarrollador de software apasionado y experimentado en varias tecnologías. Comprometido
                                con los objetivos del proyecto para ofrecer soluciones más completas a los clientes.Me
                                encanta colaborar con mi equipo, compartiendo conocimientos y perspectivas para lograr
                                los mejores resultados. Estoy siempre en busca de nuevos desafíos y oportunidades para
                                seguir creciendo como profesional.
                            </p>
                        </div>
                        <div class="card-btn-verPerfil">
                            <a href="https://www.linkedin.com/in/gonzalo-benavente-864832199/" target="_blank"
                                class="btn btn-primary d-flex justify-content-center align-items-center flex-row w-100">Ver
                                Perfil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION DE PERFILES MOBILE -->
    <section class="container carrusel-perfiles">
        <div id="carouselExampleIndicators" class="carousel slide lista-carrusel-perfiles">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner section-absolute">
                <div class="carousel-item active card-perfil-scroll">
                    <div class="card card-section-perfil">
                        <div class="portada portada-brian">
                            <img src="img/img-perfiles/perfil-brian/perfil-brian.png" class="card-img-top"
                                alt="Brian Duran" />
                        </div>
                        <div class="card-body mg-top-30 text-white">
                            <div class="card-perfil">
                                <h5 class="card-title text-center">Brian Duran</h5>
                                <h6 class="card-subtitle mb-2 text-rol text-center">
                                    Software Developer
                                </h6>
                            </div>
                            <div class="card-text mg-b-20">
                                <p>
                                    RPA Developer con experiencia en Blue Prism, especializado en proyectos de banca y
                                    finanzas. Mi enfoque en RPA se complementa con mi interés en el desarrollo Full
                                    Stack para poder ofrecer soluciones más completas e innovadoras que aborden los
                                    desafiós empresariales y las necesidades específicas del cliente. Estoy buscando
                                    expandir mis habilidades en el desarrollo front y banck end.
                                </p>
                            </div>
                            <div class="card-btn-verPerfil">
                                <a href="https://www.linkedin.com/in/brian-duran/" target="_blank"
                                    class=" d-flex justify-content-center align-items-center flex-row w-100 btn btn-primary">Ver
                                    Perfil</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card card-section-perfil">
                        <div class="portada portada-franco">
                            <img src="img/img-perfiles/perfil-franco/perfil-franco.png" class="card-img-top"
                                alt="Franco Sancristobal" />
                        </div>
                        <div class="card-body  mg-top-30 text-white">
                            <div class="card-perfil">
                                <h5 class="card-title text-reset text-center">
                                    Franco Sancristobal
                                </h5>
                                <h6 class="card-subtitle mb-2 text-rol text-center">
                                    Software Developer
                                </h6>
                            </div>
                            <div class="card-text mg-b-20">
                                <p>
                                    Front end developer apasionado. Destaco en el diseño e implementación de interfaces
                                    de usuario atractivas y funcionales.Me he desempeñado en diversos proyectos y
                                    actualmente estoy interesado en ampliar mis habilidades como full stack developer,
                                    lo que me permite tener una visión más completa del proceso de desarrollo y ofrecer
                                    soluciones más completas a los clientes.
                                </p>
                            </div>
                            <div class="card-btn-verPerfil">
                                <a href="https://www.linkedin.com/in/franco-sancristobal-478b7b1ab/" target="_blank"
                                    class="d-flex justify-content-center align-items-center flex-row w-100 btn btn-primary">Ver
                                    Perfil</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card card-section-perfil">
                        <div class="portada portada-bruno">
                            <img src="img/img-perfiles/perfil-bruno/perfil-bruno.png" class="card-img-top"
                                alt="Bruno Caruso" />
                        </div>
                        <div class="card-body  mg-top-30 text-white">
                            <div class="card-perfil">
                                <h5 class="card-title text-center">Bruno Caruso</h5>
                                <h6 class="card-subtitle mb-2 text-rol text-center">
                                    Software Developer
                                </h6>
                            </div>
                            <div class="card-text mg-b-20">
                                <p>
                                    Full Stack Developer apasionado. Cuento con un amplio conocimiento en el desarrollo
                                    de aplicaciones web escalables y la implementación de soluciones innovadoras en
                                    diferentes entornos tecnológicos. Me enfoco en construir productos centrados en el
                                    usuario.En mi carrera, he destacado por mi capacidad para trabajar en equipo y por
                                    mi habilidad para resolver problemas de manera efectiva.
                                </p>
                            </div>
                            <div class="card-btn-verPerfil">
                                <a href="https://www.linkedin.com/in/brunocarusok/" target="_blank"
                                    class="d-flex justify-content-center align-items-center flex-row w-100 btn btn-primary">Ver
                                    Perfil</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card card-section-perfil">
                        <div class="portada portada-gonzalo">
                            <img src="img/img-perfiles/perfil-gonzalo/perfil-gonzalo.png" class="card-img-top"
                                alt="Gonzalo Benavente" />
                        </div>
                        <div class="card-body  mg-top-30 text-white">
                            <div class="card-perfil">
                                <h5 class="card-title text-center">Gonzalo Benavente</h5>
                                <h6 class="card-subtitle mb-2 text-rol text-center">
                                    Software Developer
                                </h6>
                            </div>
                            <div class="card-text mg-b-20">
                                <p>
                                    Desarrollador de software apasionado y experimentado en varias tecnologías.
                                    Comprometido con los objetivos del proyecto para ofrecer soluciones más completas a
                                    los clientes.Me encanta colaborar con mi equipo, compartiendo conocimientos y
                                    perspectivas para lograr los mejores resultados. Estoy siempre en busca de nuevos
                                    desafíos y oportunidades para seguir creciendo como profesional.
                                </p>
                            </div>
                            <div class="card-btn-verPerfil">
                                <a href="https://www.linkedin.com/in/gonzalo-benavente-864832199/" target="_blank"
                                    class="d-flex justify-content-center align-items-center flex-row w-100 btn btn-primary">Ver
                                    Perfil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <footer>
        <br />
        <hr />
        <div class="footer p-3 container-lg" align="center">
            <small class="text-reset">
                <div class="row footer-mobile">
                    <div class="col spo">
                        <img src="img/img-institutos/icon-inet.png" class="by mobi grueso"
                            alt="Instituto Nacional de Educación Tecnologíca">

                    </div>
                    <div class="col mg-b-20">
                        <div class="seccion-escuelas mg-b-20">
                            <img src="img/img-institutos/icon-EEST.png" alt="Escuela Tecnica Almafuerte"
                                class="icono-escuelas">
                            <p class="text-col">EEST N°8 Almafuerte - ET N°1 Otto Krause</p>
                            <img src="img/img-institutos/icon-ottokrause.png" alt="Escuela Técnica Otto Krause"
                                class="icono-escuelas">
                        </div>
                        <br />
                        <p>Bruno Caruso - Franco Sancristobal - Brian Duran - Gonzalo Benavente</p>
                    </div>
                    <div class="col spo">
                        <img src="img/img-institutos/icono-caba.png" class="by insti"
                            alt="Ciudad Autónoma de Buenos Aires">
                        <img src="img/img-institutos/icon-gobAr.png" class="by insti" alt="Gobierno">
                    </div>
                </div>

            </small>
        </div>
    </footer>
    <!-- Importación de archivos JavaScript de Bootstrap -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Importación del archivo funciones-responsibe.js-->
    <script src="./js/funciones-responsibe.js"></script>
    <!-- Importación del archivo JavaScript ver-mas.js -->
    <script src="./js/ver-mas.js"></script>
</body>

</html>