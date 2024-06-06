import './bootstrap';

function fixBody(){
    document.querySelector('body').style.overflow='hidden'
}
function removeFixBosy() {
    document.querySelector('body').style.overflow=''
}

document.addEventListener("DOMContentLoaded", () => {
    document.querySelector('.js-header-mobile-button').addEventListener('click', () => {
        document.querySelector('.js-popup').classList.add('visible')
        fixBody()
    })
    document.querySelector('.js-popup-close').addEventListener('click', () => {
        document.querySelector('.js-popup').classList.remove('visible')
        removeFixBosy()
    })
  });