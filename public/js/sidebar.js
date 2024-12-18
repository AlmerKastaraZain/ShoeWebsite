const sidebarElement = document.getElementById('sidebar');
const sidebarButtonElement = document.getElementById('sidebarBtn');
const exitSidebarButtonElement = document.getElementById('exitSidebarBtn');

window.onload = () => {
    sidebarElement.classList.add('transition-transform');
    sidebarElement.classList.add('duration-500');
}

sidebarButtonElement.addEventListener('click', () => {
    OpenSidebar();
    
    //Reset All of Nav Panel 
    ResetFavoriteList();
    ResetShoppingCartList();
})


exitSidebarButtonElement.addEventListener('click', () => {
    CloseSidebar();
})

function OpenSidebar() {
    sidebarElement.classList.remove('translate-x-[100%]');
    ShowBlackcover();
}

function CloseSidebar() {
    sidebarElement.classList.add('translate-x-[100%]');
    HideBlackcover();
}   