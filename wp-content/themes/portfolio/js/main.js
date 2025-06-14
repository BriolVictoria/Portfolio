const elements = document.querySelectorAll('.projet, .titre_project, .description_project, .bouton_container_projet');

function checkVisibility() {
    const windowBottom = window.innerHeight;

    elements.forEach(el => {
        const rect = el.getBoundingClientRect();
        if (rect.top < windowBottom - 100) { // 100px avant l'apparition complète
            el.classList.add('visible');
        }
    });
}

window.addEventListener('scroll', checkVisibility);
checkVisibility(); // pour les éléments déjà visibles au chargement
