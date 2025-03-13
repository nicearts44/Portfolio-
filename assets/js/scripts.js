
// Filtrage des projets
const filterButtons = document.querySelectorAll('.filter-button');
const projectCards = document.querySelectorAll('.project-card');

filterButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Active le bouton sélectionné
        filterButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        // Filtre les projets
        const filter = button.getAttribute('data-filter');
        projectCards.forEach(card => {
            const category = card.getAttribute('data-category');
            if (filter === 'all' || category === filter) {
                card.classList.remove('hidden'); // Affiche la carte
            } else {
                card.classList.add('hidden'); // Masque la carte
            }
        });
    });
});


// Animation des cartes de projets
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.5
});

projectCards.forEach(card => {
    observer.observe(card);
});


projectCards.forEach(card => {
    const category = card.getAttribute('data-category');
    if (filter === 'all' || category === filter) {
        card.style.display = 'block';
        card.classList.remove('hidden'); // Affiche la carte avec animation
    } else {
        card.classList.add('hidden'); // Masque la carte avec animation
        setTimeout(() => {
            card.style.display = 'none';
        }, 300); // Délai correspondant à la durée de l'animation
    }
});

// Animation de la Timeline
const timelineItems = document.querySelectorAll('.timeline-item');

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target); // Arrête d'observer une fois l'animation déclenchée
        }
    });
}, {
    threshold: 0.5 // Déclenche l'animation lorsque 50% de l'élément est visible
});

timelineItems.forEach(item => {
    observer.observe(item);
});

// Validation du formulaire de contact
const contactForm = document.querySelector('.contact-form form');

contactForm.addEventListener('submit', (e) => {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    if (!name || !email || !message) {
        e.preventDefault(); // Empêche l'envoi du formulaire
        alert('Veuillez remplir tous les champs du formulaire.');
    } else if (!validateEmail(email)) {
        e.preventDefault();
        alert('Veuillez entrer une adresse email valide.');
    }
});

// Fonction pour valider l'email
function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}