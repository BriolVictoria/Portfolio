document.addEventListener('DOMContentLoaded', function () {
    const burger = document.querySelector('.nav_bgm');
    const navMenu = document.getElementById('nav_menu');
    const expanded = burger.getAttribute('aria-expanded') === 'true';


    burger.addEventListener('click', function () {
        navMenu.classList.toggle('active');

    });
});

const btnBurger = document.querySelector('.nav_bgm');
const btnCross = document.querySelector('.nav_bgm_hidden');

btnBurger.addEventListener('click', () => {
    btnBurger.style.display = 'none';
    btnCross.style.display = 'inline-block';
});

btnCross.addEventListener('click', () => {
    btnCross.style.display = 'none';
    btnBurger.style.display = 'inline-block';
});