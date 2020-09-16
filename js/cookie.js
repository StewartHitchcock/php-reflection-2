const popUpAccept = document.querySelector('.btn-right');
const popUpSetting = document.querySelector('.btn-left');
const cookieAccept = localStorage.getItem('cookie');
const popUp = document.querySelector('.pop-up');
const popUpBckGrnd = document.querySelector('.popup-bckgrnd');


window.addEventListener('DOMContentLoaded', function(){
    if(cookieAccept === 'true'){
        popUp.style.display = "none";
        popUpBckGrnd.style.display = "none";
        console.log('true')
    } else {
        console.log('false')
    }
});

popUpAccept.addEventListener('click', () => {
    localStorage.setItem('cookie', 'true');
    popUp.style.display = "none";
    popUpBckGrnd.style.display = "none";
});

popUpSetting.addEventListener('click', () => {
    popUp.style.display = "none";
    popUpBckGrnd.style.display = "none";
});