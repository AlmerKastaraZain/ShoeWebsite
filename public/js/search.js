const searchbarElement = document.getElementById('searchbar');
const primarySearchbarElement = document.getElementById('searchbarFull');
const exitBtnSearchbarElement = document.getElementById('exitBtnSearchbar');
const searchbarFrameElement = document.getElementById('searchbarFrame');
const PageContentElement = document.getElementById('blackCoverEffect');



isSearchbarActive = false;
searchbarElement.addEventListener('focus', function() {
    ShowSearchbar();
    PushNavToTop();

    // Add Blackbackground Effect
    ShowBlackcover();

    //Reset All of Nav Panel 
    ResetFavoriteList();
    ResetShoppingCartList();

    primarySearchbarElement.focus();
    isSearchbarActive = true;
});

exitBtnSearchbarElement.addEventListener('click', function() {
    HideSearchbar();
    PushNavToDown();
    HideBlackcover();
    isSearchbarActive = false;
})

function ShowSearchbar() {
    searchbarFrameElement.classList.remove('invisible');
    searchbarFrameElement.classList.remove('-translate-y-[100%]');
}

function HideSearchbar() {
    searchbarFrameElement.classList.add('invisible');
    searchbarFrameElement.classList.add('-translate-y-[100%]');
}


