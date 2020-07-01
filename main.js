function typeWriter() {
    const text = 'hello.family';
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

                setTimeout(remove, 2000);
            }
        }, 100);
    }

    function remove() {
        let interval1 = setInterval(() => {
            i = i - 1;
            console.log(i);
            logo.innerHTML = logo.innerHTML.substring(0, i) + caret;

            if (i <= 0) {
                logo.innerHTML = '';
                clearInterval(interval1);
            }
        }, 50)
    }
}

typeWriter();