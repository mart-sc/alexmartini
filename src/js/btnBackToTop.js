// Evento a ser executado quando todo conteúdo da página for carregado.
document.addEventListener("DOMContentLoaded", () => {
    
    // Botão que é responsável por voltar até o topo da página
    let btnBackToTop = document.getElementById("btn-back-to-top");

    /**
    * Evento a ser executado quando for detectada uma modificação no scroll da página
    * chamando a função scrollFunction() 
    */
    window.onscroll = () => { 
        scrollFunction() 
    }

    // Evento a ser executado quando botão for clicado, chamando a função pageTop()
    btnBackToTop.addEventListener('click', (e)=> {
        pageTop();
    });


    // Essa função é responsável por exibir/esconder o botão de acordo com a posição do scroll 
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            btnBackToTop.style.display = "block";
        } else {
            btnBackToTop.style.display = "none";
        }
    }

    // Essa função é repsonsável por direcionar a posição do scroll ao topo da página
    function pageTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

});


