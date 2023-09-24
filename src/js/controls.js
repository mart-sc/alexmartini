// quando a pagina carregar
document.addEventListener('click', (e) => {
    
 // botão "Voltar"
 let btnBack = document.getElementById('controls-back');
 
 // Evento para voltar para a página anterior
 btnBack.addEventListener('click', (e) => {
     window.history.back(-1);
 });
 
});