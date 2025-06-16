const elements = document.querySelectorAll('.projet, .titre_project, .description_project, .bouton_container_projet');

function checkVisibility() {
    const windowBottom = window.innerHeight;/*Si la fenetre du footer est à tel endroit on ajoute la classe visible*/

    elements.forEach(el => {
        const rect = el.getBoundingClientRect();/* pour donner les bonne données aux éléments*/
        if (rect.top < windowBottom - 100) { // 100px avant l'apparition complète
            el.classList.add('visible');
        }
    });
}

window.addEventListener('scroll', checkVisibility);
checkVisibility(); // pour les éléments déjà visibles au chargement

const burgerBtn = document.querySelector('.nav_bgm');
const menu = document.querySelector('.droite');

burgerBtn.addEventListener('click', () => {
    menu.classList.toggle('active');

    // Gérer l'attribut aria-expanded pour l'accessibilité
    const expanded = burgerBtn.getAttribute('aria-expanded') === 'true' || false;
    burgerBtn.setAttribute('aria-expanded', !expanded);//inverse la valeur de expanded le const
    /*Pour ouvrir le burger menu*/
});

