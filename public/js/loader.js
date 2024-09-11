

const loadingScreenElement = document.getElementById('loadingScreen');
const websiteContentElement = document.getElementById('websiteContent');
const loadingLogoPath = document.querySelectorAll('.loadingLogoPath');

var loadingScreenTimeline = gsap.timeline({
    repeat: 1
});
function loadingScreenEndAnimation() {
    gsap.fromTo(
        loadingScreenElement,
        {
            duration: 1,
            scale: 1,
            opacity: 1,
            ease: "ease-in-out"
        },
        {
            scale: 1.25,
            opacity: 0,
            ease: "ease-in-out",
            onComplete: HideLoading,
        }
    )
}

function HideLoading() {
    loadingScreenElement.remove();
    websiteContentElement.classList.remove('overflow-hidden');
}


function load() {

    window.setTimeout(load => {
        loadingScreenEndAnimation()
        loadingScreenElement.classList.remove('invisible')
    }, 100)
}
load();

let loadingLogo = gsap.timeline({
    yoyo: true,
    repeat: -1,
    ease: "ease-in-out"
})

loadingLogoPath.forEach(element => {
    loadingLogo.fromTo(
        element,
        {
            duration: 0.2,
            delay: 0.2,
            opacity: 0.6
        },
        {
            duration: 0.2,
            delay: 0.2,
            opacity: 1
        }
    )

    loadingLogo.to(
        element,
        {
            duration: 0.2,
            delay: 0.2,
            bottom: 100,
            opacity: 0.6
        }
    )
});      

let textTl = gsap.timeline({
    yoyo: true,
    repeat: -1,
    ease: "none"
});

textTl.fromTo(
    ".loadingText",
    {
        duration: 1,
        text: "Loading."
    },
    {
        duration: 1,
        text: "Loading.."
    }
)

textTl.to(
    ".loadingText",
    {
        duration: 1,
        text: "Loading..."
    }
)