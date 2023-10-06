<?php include __DIR__ . '/layouts/header.php' ?>
<main class="container">
    <div class="d-flex flex-column text-white m-3 p-1 rounded-2">
        <article>
            <section class="d-flex animate__animated animate__fadeInLeft d-flex mt-5 align-items-center">
                <div class="d-flex flex-column">
                    <img class="rounded-pill shadow" src="./src/img/minha-foto.jpg" width="200px" height="200px">
                </div>

                <div class="d-flex flex-column px-5">
                    <h1 class="text-danger border-bottom border-danger">
                        Objetivo
                    </h1>
                   
                    <p class="col-md-12 fs-4 p-3 rounded-2 shadow" style="background-color: rgba(0, 0, 0, .3);">
                        "Olá, me chamo Alex Martini e atualmente estou focado em construir minha
                        carreira na área de desenvolvimento web, meu grande objetivo é trabalhar como Programador Senior
                        Full-Stack em uma grande empresa."
                    </p>
                    
                    <button class="btn btn-outline-danger btn-lg w-50 align-self-end" type="button"><i data-feather="arrow-up-right"></i>
                        <a href="sobre.php">Veja mais sobre mim</a>
                    </button>
                </div>
            </section>

            <section>
                <div class="p-5 mt-5 mb-4 text-center animate__animated animate__fadeInUp">
                    <div class="container-fluid py-5 text-center">
                        <h1 class="display-5 fw-bold text-danger">
                            Confira meus projetos
                        </h1>
                        
                        <p class="fs-4">
                            "No decorrer da minha jornada até aqui, tive a oportunidade de me envolver
                            em uma variedade de projetos, incluindo aqueles que desenvolvi por conta própria e
                            outros que faziam parte de cursos que participei. Durante esses projetos,
                            explorei uma ampla gama de tecnologias, cada uma contribuindo para a expansão
                            do meu repertório de conhecimento. Esse processo contínuo me permitiu aprofundar
                            meu entendimento dessas tecnologias ao longo do tempo, preparando-me para
                            novos desafios e oportunidades no campo do desenvolvimento web."
                        </p>
                        
                        <button class="btn btn-danger btn-lg text-white mt-3" type="button">
                            <i data-feather="arrow-up-right"></i>
                            <a href="https://github.com/mart-sc?tab=repositories">
                                Ver Projetos
                            </a>
                        </button>
                    </div>
                </div>
            </section>
        </article>

        <button id="btn-back-to-top" class="position-fixed btn btn-danger rounded-pill pill shadow">
            <i data-feather="arrow-up"></i>
        </button>
    </div>
</main>
<?php include __DIR__ . '/layouts/footer.php' ?>