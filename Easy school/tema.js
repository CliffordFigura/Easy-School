const changeThemeBtn = window.document.querySelector('#change-theme');
// Adicionar o modo dark
function togglrDarkMode() {
    window.document.body.classList.toggle('dark');
}
// Carregar o modo dark ou light
carregarTema();
function carregarTema() {
    const darMode = localStorage.getItem('dark');
    if(darMode)
    {
        togglrDarkMode();
    }
}
changeThemeBtn.addEventListener('change', function () {
    togglrDarkMode();
    // Salvar ou remover o modo dark
    localStorage.removeItem('dark');
    if(window.document.body.classList.contains('dark'))
    {
        localStorage.setItem('dark', 1);
    }
});