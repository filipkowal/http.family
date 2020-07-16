function typeWriter() {
    const text = 'http.family';
    const caret = '<span class="caret"></span>';
    let logoName = document.querySelector('.logo-name');
    let logo = document.querySelector('.logo');
    let i = 0;

    let interval = null;
    function write(afterWrite, time) {
        interval = setInterval(() => {
            logoName.innerHTML = text.substring(0, i) + caret;
            i = i + 1;

            if (i > 12) {
                clearInterval(interval);

                afterWrite ? afterWrite() : null;
            }
        }, time);
    }

    function remove(time) {
        clearInterval(interval);
        let interval1 = setInterval(() => {
            i = i - 1;
            logoName.innerHTML = text.substring(0, i) + caret;

            if (i <= 0) {
                logoName.innerHTML = '';
                clearInterval(interval1);

                setTimeout(show, time);
            }
        }, 30)
    }

    write(() => setTimeout(remove, 150), 60);

    logo.addEventListener('mouseover', () => write(null, 30));
    logo.addEventListener('mouseout', () => remove(0));

}

function show() {
    let hidden = document.querySelectorAll('.hidden');
    hidden.forEach(element => element.classList.remove('hidden'));
    sessionStorage.setItem('coming_from_subpage', false);
}

function typeOrShow() {
    sessionStorage.getItem('coming_from_subpage') === 'true' ? show() : typeWriter();
}

typeOrShow();

