// quando o documento da página carregar
document.addEventListener("DOMContentLoaded", () => {
    /** BOTÃO DE IR PARA O TOPO DA PÁGINA */
    let btnBackToTop = document.getElementById("btn-back-to-top");

        // quando a janela detectar scroll vai cahamar a função de mostrar o botão
    window.onscroll = () => { scrollFunction() }

        // adiciona evento de clique ao botão
    btnBackToTop.addEventListener('click', (e)=> {
        pageTop();
    });

        // mostra o botão para voltar pro topo da página
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            btnBackToTop.style.display = "block";
        } else {
            btnBackToTop.style.display = "none";
        }
    }

        // vai para o topo da página ao clicar no botão
    function pageTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

});


