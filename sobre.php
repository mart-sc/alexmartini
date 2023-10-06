<?php include __DIR__ . '/layouts/header.php' ?>
<main class="container">
    <?php include __DIR__ . '/components/controls.php' ?>
    <div class="d-flex flex-column text-white m-3 p-1 rounded-2">
        <article>
            <section>
                <div class="d-flex flex-column p-3 mb-4 animate__animated animate__fadeInUp">
                    <div class="container-fluid py-4 text-start">
                        <h1 class="display-4 mb-4 fw-bold text-danger border-bottom border-danger">
                            Um pouco sobre mim
                        </h1>
                        <p class="fs-4">
                                Atualmente sou um <strong>Estudante de Análise e Desenvolvimento de Sistemas</strong>, tenho 20 anos e vivi a
                            maior parte da minha vida na cidade de Joaçaba. Desde criança tenho muita afinidade e paixão por tecnologia, e 
                            um apego por arte. 
                            Conheci programação na sétima série, quando um amigo apresentou <code>Java</code> a mim.
                        </p>

                        <p class="fs-4">
                                No entanto, só fui me aprofundar nesse mundo quando terminei o ensino médio. 
                            Foi ai que comecei, aos poucos, me ingressar nesse mundo da programação, aprendendo de maneira
                            autônoma, pesquisando em artigos e documentações, assistindo videos e realizando cursos gratuitos na internet.
                        </p>

                        <p class="fs-4">
                                Vale citar um curso de extensão que tive a honra de participar da <a class="text-info fw-bold" href="https://www.unoesc.edu.br/"> 
                            <u>UNOESC</u> </a> com duração de um ano, onde tive a oportunidade de aprender
                            com profissionais muito capacitados, que assumiram um grande impacto no meu desenvolvimento e aprendizado,
                            me introduzindo ao universo da computação, e caminhando junto desde conceitos básicos até a criação de um projeto 
                            <code>Java</code> utilizando <code>Spring Boot</code>, com integração a um banco de dados relacional.  
                        </p>

                    </div>
                    
                    <button class="btn btn-danger btn-lg mt-3 w-25 align-self-center" type="button"><i data-feather="arrow-up-right"></i>
                            <a href="">Ver Currículo Lattes</a>
                    </button>
                </div>
            </section>
            
            <section>
                <div class="p-3 mb-4 animate__animated animate__fadeInUp">
                    <div class="d-flex flex-column container-fluid">
                        <h1 class="display-5 fw-bold text-danger mb-4 border-bottom border-danger">
                            Linguagens e tecnologias mais familiarizadas
                        </h1>

                        <div class="d-flex flex-column gap-4">
                            <div class="d-flex gap-4">
                                <img src="https://skillicons.dev/icons?i=html" title="HTML" />
                                <p class="fs-5 text-start">
                                    <code>HTML</code> é uma linguagem de marcação que funciona como a "estrutura" 
                                    de uma página web.
                                </p>
                            </div>

                            <div class="d-flex gap-4">
                                <img src="https://skillicons.dev/icons?i=css" title="CSS" />
                                <p class="fs-5 text-start">
                                    <code>CSS</code> é uma tecnologia para estilização de uma página web.
                                </p>
                            </div>

                            <div class="d-flex gap-4">
                                <img src="https://skillicons.dev/icons?i=js" title="JavaScript" />
                                <p class="fs-5 text-start">
                                    <code>JavaScript</code> é uma linguagem de programação podendo ser
                                    utilizada tanto para o desenvolvimento front-end, como para back-end, além do mais
                                    é considerada a linguagem mais utilizada no mundo.
                                </p>
                            </div>

                            <div class="d-flex gap-4">
                                <img src="https://skillicons.dev/icons?i=php" title="PHP" />
                                <p class="fs-5 text-start">
                                    <code>PHP</code> é uma linguagem de programação back-end, muito utilizada no
                                    desenvolvimento web.
                                </p>
                            </div>

                            <div class="d-flex gap-4">
                                <img src="https://skillicons.dev/icons?i=java" title="Java" />
                                <p class="fs-5 text-start">
                                    <code>Java</code> é uma linguagem de programação muito versátil, podendo ser utilizada
                                    para desenvolvimento web, aplicações móveis, e sistemas voltados para servidores.
                                </p>
                            </div>

                            <div class="d-flex gap-4">
                                <img src="https://skillicons.dev/icons?i=bootstrap" title="Bootstrap" />
                                <p class="fs-5 text-start">
                                    <code>Bootstrap</code> é um framework front-end simples e rápido, que fornece diversos
                                    recursos de CSS, facilitando o desenvolvimento de um site e auxiliando na responsividade.
                                </p>
                            </div>
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
