<?php include __DIR__ . '/default.php' ?>
<header class="container-fluid text-light p-5 bg-danger shadow">
    <div class="container d-flex align-items-center justify-content-around">
        <h1 class="animate__animated animate__fadeInLeft">
            <span>ALEX MARTINI</span>
        </h1>
        
        <nav class="nav navbar-expand-lg">
            <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#iNavbar" aria-controls="iNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <i data-feather="menu"></i>
            </button>
           
            <div class="collapse navbar-collapse" id="iNavbar">
                <ul class="navbar-nav d-flex list-unstyled animate__animated animate__fadeInRight">
                    <li class="nav-item"> 
                        <a class="nav-link text-decoration-none fw-bold text-light fs-5"
                           href="home.php"
                           title="Ir para Início">
                                <i data-feather="home"></i>
                                Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-decoration-none fw-bold text-light fs-5"
                           href="sobre.php"
                           title="Ir para Sobre">
                                <i data-feather="info"></i>
                                Sobre
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-decoration-none fw-bold text-light fs-5"
                           href="contato.php"
                           title="Ir para Contato">
                                <i data-feather="mail"></i>
                                Contato
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="social-links" class="d-flex gap-3 animate__animated animate__fadeInRight">
            <span>
                <a href="https://www.linkedin.com/in/mart-sc/" title="Ir para o meu Linkedin">
                    <i data-feather="linkedin"></i>
                </a>
            </span>
            <span>
                <a href="https://www.github.com/mart-sc/" title="Ir para o meu Github">
                    <i data-feather="github"></i>
                </a>
            </span>
            <span>
                <a href="https://www.instagram.com/ax_martini/" title="Ir para o meu Instagram">
                    <i data-feather="instagram"></i>
                </a>
            </span>
        </div>
    </div>
</header>
