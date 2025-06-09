document.addEventListener('DOMContentLoaded', () => {
    const burgerBtn = document.querySelector('.nav_bgm');
    const menu = document.querySelector('.droite'); // L'élément menu avec la classe droite

    burgerBtn.addEventListener('click', () => {
        menu.classList.toggle('active');

        // Mise à jour de aria-expanded pour l'accessibilité
        const expanded = burgerBtn.getAttribute('aria-expanded') === 'true' || false;
        burgerBtn.setAttribute('aria-expanded', !expanded);
    });
});
