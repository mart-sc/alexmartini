<?php include __DIR__ . '/layouts/header.php' ?>
<main class="container">
    <?php include __DIR__ . '/utils/controls.php' ?>
    <div class="d-flex flex-column text-white m-3 p-1 rounded-2">
        <article>
            <section>
                <div class="d-flex justify-content-center">
                    <div class="p-3 mb-4 text-center animate__animated animate__fadeInUp">
                        <div class="container-fluid text-center align-items-start">
                            <h1 class="display-4 mt-3 fw-bold text-danger">Contato</h1>
                            <p class="fs-4">
                                Aqui estão algumas informações para contato.
                            </p>
                            <details class="p-3 fs-4">
                                <summary>Telefone</summary>
                                <span class="fw-bold">(49) 9 9154-0897 (somente whats)</span>
                            </details>

                            <details class="p-3 fs-4">
                                <summary>Email</summary>
                                <span class="fw-bold">alexmartini.sc@gmail.com</span>
                            </details>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <button id="btn-back-to-top" class="position-fixed btn btn-danger btn-lg rounded-pill shadow">
                <i data-feather="arrow-up"></i>
        </button>
    </div>
</main>
<?php include __DIR__ . '/layouts/footer.php' ?>