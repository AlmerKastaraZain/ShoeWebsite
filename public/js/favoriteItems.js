const favoriteButtonElement = document.getElementById('favoriteBtn');
const favoriteListElement = document.getElementById('favoriteList');

var favoriteListIsActive = false;
favoriteButtonElement.addEventListener('click', function() {
    if (favoriteListIsActive) {
        ResetFavoriteList();
        return;
    }
    ActivateFavoriteList();
});

function ActivateFavoriteList() {
    favoriteListIsActive = true;
    ShowFavoriteList();
    ChangeFavoriteButtonColorToRed();

    ResetShoppingCartList();
}

function ResetFavoriteList() {
    favoriteListIsActive = false;
    HideFavoriteList();
    ChangeFavoriteButtonColorToDefault();
}

function ChangeFavoriteButtonColorToDefault() {
    favoriteButtonElement.classList.remove('fill-red-500')
    favoriteButtonElement.classList.add('fill-none')
}

function ChangeFavoriteButtonColorToRed() {
    favoriteButtonElement.classList.add('fill-red-500')
    favoriteButtonElement.classList.remove('fill-none')
}

function ShowFavoriteList() {
    let favoriteListTl = gsap.timeline({
        repeat: 0,
    })


    favoriteListElement.classList.remove('invisible');
    favoriteListTl.fromTo(
        favoriteListElement,
        {
            opacity: 0,
            y: -20,
            duration: 0.2,
            ease: "ease-in-out",
        },
        {
            opacity: 1,
            y: 40,
            duration: 0.2,
            ease: "ease-in-out"
        }
    )    
}

function HideFavoriteList() {
    let favoriteListTl = gsap.timeline({
        repeat: 0,
    })

    favoriteListTl.fromTo(
        favoriteListElement,
        {
            opacity: 1,
            y: 40,
            duration: 0.2,
        },
        {
            opacity: 0,
            y: -20,
            duration: 0.2,
            ease: "ease-in-out",
            onComplete: function() {
                favoriteListElement.classList.add('invisible');
            }
        }
    )    
}
