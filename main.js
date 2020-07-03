function typeWriter() {
    const text = 'http.family';
    const caret = '<span class="caret"></span>';
    let logo = document.querySelector('.logo-name');
    let i = 0;

    writeAndRemove();

    function writeAndRemove() {
        let interval = setInterval(() => {
            logo.innerHTML = text.substring(0, i) + caret;
            i = i + 1;

            if (i > 12) {
                clearInterval(interval);

                setTimeout(remove, 150);
            }
        }, 60);
    }

    function remove() {
        let interval1 = setInterval(() => {
            i = i - 1;
            logo.innerHTML = text.substring(0, i) + caret;

            if (i <= 0) {
                logo.innerHTML = '';
                clearInterval(interval1);

                setTimeout(show, 50);
            }
        }, 30)
    }
}

function show() {
    let hidden = document.querySelectorAll('.hidden');
    hidden.forEach(element => element.classList.remove('hidden'));
    sessionStorage.setItem('coming_from_subpage', false);
}

function typeOrShow() {
    sessionStorage.getItem('coming_from_subpage') === 'true' ? show() : typeWriter();
}

// typeOrShow();
