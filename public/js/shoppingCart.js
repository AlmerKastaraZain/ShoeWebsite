const shoppingCartButtonElement = document.getElementById('shoppingCartBtn');
const shoppingCartListElement = document.getElementById('shoppingCartList');

var shoppingCartIsActive = false;
shoppingCartButtonElement.addEventListener('click', function() {
    if (shoppingCartIsActive) {
        ResetShoppingCartList();
        return;
    }

    ActivateShoppingCartList();
});

function ActivateShoppingCartList() {
    shoppingCartIsActive = true;
    ShowShoppingCartList();
    ChangeCartButtonColorToBlue();

    ResetFavoriteList();
}

function ResetShoppingCartList() {
    shoppingCartIsActive = false;
    HideShoppingCartList();
    ChangeCartButtonColorToDefault();
}

function ChangeCartButtonColorToDefault() {
    shoppingCartButtonElement.classList.remove('fill-blue-500')
    shoppingCartButtonElement.classList.add('fill-black')
}

function ChangeCartButtonColorToBlue() {
    shoppingCartButtonElement.classList.add('fill-blue-500')
    shoppingCartButtonElement.classList.remove('fill-black')
}

function ShowShoppingCartList() {
    let shoppingCartTl = gsap.timeline({
        repeat: 0,
    })


    shoppingCartListElement.classList.remove('invisible');
    shoppingCartTl.fromTo(
        shoppingCartListElement,
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

function HideShoppingCartList() {
    let shoppingCartTl = gsap.timeline({
        repeat: 0,
    })

    shoppingCartTl.fromTo(
        shoppingCartListElement,
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
                shoppingCartListElement.classList.add('invisible');
            }
        }
    )    
}

