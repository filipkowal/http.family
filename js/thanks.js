let smile = document.querySelector('.logo-sign');
smile.innerHTML = '://';
const smiles = [':))', ':)', ';)', ':D', ':*']

setTimeout(startInterval, 1000);

let interval = () => { };
function startInterval() {
    interval = setInterval(changeSmile, 300);
}

let i = 0;
function changeSmile() {
    if (i < smiles.length) {
        smile.innerHTML = smiles[i];
        i++;
    } else clearInterval(interval);
}