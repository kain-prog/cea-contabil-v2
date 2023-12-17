// COUNTER


function counter() {
    var sectionCounter = document.querySelector('#section-counter');
    var numberElements = sectionCounter.querySelectorAll('.number');
    var commaSeparatorNumberStep = function (num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    };

    function animateValue(element, start, end, duration) {
        var range = end - start;
        var current = start;
        var increment = end > start ? 1 : -1;
        var stepTime = Math.abs(Math.floor(duration / range));
        var timer = setInterval(function () {
            current += increment;
            element.textContent = commaSeparatorNumberStep(current);
            if (current === end) {
                clearInterval(timer);
            }
        }, stepTime);
    }

    function startCounter() {
        var sectionOffset = sectionCounter.offsetTop;
        var windowHeight = window.innerHeight;
        var offset = sectionOffset - (windowHeight * 0.95);
        if (window.pageYOffset > offset && !sectionCounter.classList.contains('ftco-animated')) {
            numberElements.forEach(function (element) {
                var num = parseInt(element.getAttribute('data-number'));
                animateValue(element, 0, num, 7000);
            });
            sectionCounter.classList.add('ftco-animated');
        }
    }

    window.addEventListener('scroll', function () {
        startCounter();
    });
}

function contentWayPoint() {
    var animatedElements = document.querySelectorAll('.ftco-animate.item-animate');
    function startContentAnimation() {
        var windowHeight = window.innerHeight;
        var offset = windowHeight * 0.95;
        animatedElements.forEach(function (element, index) {
            var sectionOffset = element.offsetTop;
            var animateEffect = element.getAttribute('data-animate-effect');
            if (window.pageYOffset > sectionOffset - offset && !element.classList.contains('ftco-animated')) {
                setTimeout(function () {
                    if (animateEffect === 'fadeIn') {
                        element.classList.add('fadeIn', 'ftco-animated');
                    } else if (animateEffect === 'fadeInLeft') {
                        element.classList.add('fadeInLeft', 'ftco-animated');
                    } else if (animateEffect === 'fadeInRight') {
                        element.classList.add('fadeInRight', 'ftco-animated');
                    } else {
                        element.classList.add('fadeInUp', 'ftco-animated');
                    }
                    element.classList.remove('item-animate');
                }, index * 50);
            }
        });
    }

    window.addEventListener('scroll', function () {
        startContentAnimation();
    });
}

counter();
contentWayPoint();