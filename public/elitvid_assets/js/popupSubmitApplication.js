let menuBtn = document.querySelector('.open_popup_application');
let menuBtn1 = document.querySelector('.open_popup_application1');
let popup = document.querySelector('.popup_application');
let crossBtn = document.querySelector('.popup__cross_application');

menuBtn.onclick = function () {
    popup.style.display = 'block';
};

menuBtn1.onclick = function () {
    popup.style.display = 'block';
};

crossBtn.onclick = function () {
    popup.style.display = 'none';
};

window.onclick = function (event) {
    if (event.target === document.querySelector('.popup__body_application')) {
        popup.style.display = 'none';
    }
};