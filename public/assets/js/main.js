// HEADER

function toggleNavbarCollapse() {
    const handleCollapse = document.getElementById('handle-collapse');
    const navbar = document.getElementById('navbar');

    handleCollapse.addEventListener('click', function() {
        if (navbar.classList.contains('collapsed')) {
            navbar.classList.remove('collapsed');
        } else {
            navbar.classList.add('collapsed');
        }
    });
}

toggleNavbarCollapse();

function handleMenuClick() {
    const menuLinks = document.querySelectorAll('.menu a');
    const navbar = document.getElementById('navbar');
    
    menuLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            const screenWidth = window.innerWidth;
            
            if (screenWidth <= 768) {
                if(navbar.classList.contains('collapsed')) {
                    navbar.classList.remove('collapsed');
                } else {
                    navbar.classList.add('collapsed');
                }
            }
        });
    });
}

window.addEventListener('resize', handleMenuClick);
handleMenuClick();


function toggleClassByWidth() {
    const element = document.getElementById('navbar');
    const screenWidth = window.innerWidth;

    if (screenWidth >= 768) {
        element.classList.remove('collapsed');
    } else {
        element.classList.add('collapsed');
    }
}

window.addEventListener('resize', toggleClassByWidth);
toggleClassByWidth();


document.addEventListener('DOMContentLoaded', function() {
    var privacyBar = document.getElementById('privacy-bar');
    var acceptButton = document.getElementById('accept-privacy');
    var rejectButton = document.getElementById('reject-privacy');

    // Verifica se a aceitação já foi registrada ou rejeitada
    if (localStorage.getItem('privacyAccepted')) {
        privacyBar.style.display = 'none';
    }

    acceptButton.addEventListener('click', function() {
        localStorage.setItem('privacyAccepted', true);
        privacyBar.style.display = 'none';
    });

    rejectButton.addEventListener('click', function() {
        localStorage.removeItem('privacyAccepted');
        privacyBar.style.display = 'none';
    });
});
