<?php include __DIR__ . '/layouts/header.php' ?>
<main class="container">
    <?php include __DIR__ . '/utils/controls.php' ?>
    <div class="d-flex flex-column text-white m-3 p-1 rounded-2">
        <article>
            <section>
                <div class="p-3 mb-4 text-center animate__animated animate__fadeInUp">
                    <div class="container-fluid py-4 text-center">
                        <h1 class="display-4 fw-bold text-danger">Um pouco sobre mim</h1>
                        <p class="fs-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat reiciendis odit inventore porro enim quidem numquam repudiandae dolorem quaerat, quisquam tempore dolor iure esse exercitationem! Dicta nemo quo officia necessitatibus.</p>
                        <button class="btn btn-danger btn-lg" type="button"><i data-feather="arrow-up-right"></i>
                            <a href="">Ver Currículo</a>
                        </button>
                    </div>
                </div>
            </section>
            <section>
                <div class="p-3 mb-4 text-center animate__animated animate__fadeInUp">
                    <div class="container-fluid py-4 text-center">
                        <h1 class="display-5 fw-bold text-danger mb-3">Linguagens e tecnologias mais familiarizadas</h1>
                        <div class="d-flex justify-content-center gap-3">
                            <img src="https://skillicons.dev/icons?i=html" />
                            <img src="https://skillicons.dev/icons?i=css" />
                            <img src="https://skillicons.dev/icons?i=js" />
                            <img src="https://skillicons.dev/icons?i=php" />
                            <img src="https://skillicons.dev/icons?i=java" />
                            <img src="https://skillicons.dev/icons?i=bootstrap" />
                        </div>
                    </div>
                </div>
            </section>
        </article>

        <button id="btn-back-to-top" class="position-fixed btn btn-info btn-lg rounded-pill shadow">
            <i data-feather="arrow-up"></i>
        </button>
    </div>
</main>
<?php include __DIR__ . '/layouts/footer.php' ?>
