const navElement = document.getElementById('nav');
var previousScrollPosition = 0;



window.addEventListener('scroll', function() {
    if (this.scrollY > previousScrollPosition && scrollY > (navElement.offsetHeight))
    {
        PushNavToTop();
        if (shoppingCartIsActive) {
            ResetShoppingCartList();
        }
        if (favoriteListIsActive) {
            ResetFavoriteList();
        }
    } 
    else 
    {
        PushNavToDown();
    }

    previousScrollPosition = this.scrollY;
})


function PushNavToTop() {
    navElement.classList.add('-translate-y-full');
}

function PushNavToDown() {
    navElement.classList.remove('-translate-y-full');
}