// Evento a ser executado quando todo conteúdo da página for carregado.
document.addEventListener('DOMContentLoaded', (e) => {
    
    // Botão de voltar a página
    let btnBack = document.getElementById('controls-back');
 
    // Se o botão for encontrado na página, então evento é adicionado
    if (btnBack) {
        // Evento a ser executado quando o botão for clicado
        btnBack.addEventListener('click', (e) => {
            console.log('clicou');
            window.history.back();
        });
    }

});