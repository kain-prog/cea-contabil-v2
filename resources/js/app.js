import './bootstrap';
import '@fortawesome/fontawesome-free/scss/fontawesome.scss';
import '@fortawesome/fontawesome-free/scss/brands.scss';
import '@fortawesome/fontawesome-free/scss/regular.scss';
import '@fortawesome/fontawesome-free/scss/solid.scss';
import '@fortawesome/fontawesome-free/scss/v4-shims.scss';
import 'flowbite';


document.addEventListener('DOMContentLoaded', function() {
    const handleCollapse = document.getElementById('handle-collapse');
    const navbar = document.getElementById('navbar-default');
    const menuLinks = document.querySelectorAll('.menu a');

    const collapse = new Collapse(
        navbar,
        handleCollapse,
    );

    handleCollapse.addEventListener('click', function() {
        collapse.toggle();
    });

    menuLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            collapse.collapse();
        });
    });
});