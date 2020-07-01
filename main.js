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

                setTimeout(remove, 1500);
            }
        }, 100);
    }

    function remove() {
        let interval1 = setInterval(() => {
            i = i - 1;
            logo.innerHTML = text.substring(0, i) + caret;

            if (i <= 0) {
                logo.innerHTML = '';
                clearInterval(interval1);
                let hidden = document.querySelectorAll('.hidden');

                setTimeout(show, 200);
                function show() {
                    hidden.forEach(element => element.classList.remove('hidden'));
                }
            }
        }, 50)
    }
}

typeWriter();