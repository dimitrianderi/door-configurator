const doors = document.querySelectorAll('.main__doors-item');
const handles = document.querySelectorAll('.main__doors-handle');
const front_handle = document.querySelector('#handle-front');
const back_handle = document.querySelector('#handle-back');
const btn = document.querySelector('#submit');
const price = document.querySelector('#price');
const result = document.querySelector('.result');
const sum_input = document.querySelector('.sum');
const peephole = document.querySelector('#peephole');
const bell = document.querySelector('#bell');
const digits = document.querySelector('#digits');
const message = document.querySelector('.message');

const painting_color = document.querySelector('#painting_color');
const tape_color = document.querySelector('#tape_color');
const handle_color = document.querySelector('#handle_color');
const width_door = document.querySelector('#width');
const height_door = document.querySelector('#height');
const opening = document.querySelector('#opening');

let params = {};
let width_door_min = window.innerWidth <= 500 ? 75 : 150;
let width_door_max = window.innerWidth <= 500 ? 112 : 225;
let height_door_min = window.innerWidth <= 500 ? 135 : 270;
let height_door_max = window.innerWidth <= 500 ? 187 : 375;

async function fetchAndSetEventListeners() {
    try {
        const response = await fetch('./controllers/create_price.php');
        const data = await response.json();

        painting_color.addEventListener('change', (e) =>
            setColor(e.target.value, data, 'painting', 'borderColor', doors));
        tape_color.addEventListener('change', (e) =>
            setColor(e.target.value, data, 'tape', 'background', doors));
        handle_color.addEventListener('change', (e) =>
            setColor(e.target.value, data, 'handle', 'background', handles));
        opening.addEventListener('change', (e) =>
            setOpening(e.target.value, data, 'opening', 'left'));
        peephole.addEventListener('change', (e) =>
            setCost('', data, 'peephole'));
        bell.addEventListener('change', (e) =>
            setCost('', data, 'bell'));
        digits.addEventListener('change', (e) =>
            setCost('', data, 'digits'));
    } catch (error) {
        console.error('Ошибка:', error);
    }
}

fetchAndSetEventListeners();

function setColor (value, data, product, prop, obj) {
    obj.forEach((el) => {
        el.style[prop] = value;
    })
    setCost(value, data, product);
}


width_door.addEventListener('change', (e) => {
    const width = e.target.value;
    doors.forEach((el) => {
        if (width > 150) {
            el.style.width = width_door_max + 'px';
            width_door.value = 150;
            params['width'] = 150;
        } else if (width < 100) {
            el.style.width = width_door_min + 'px';
            width_door.value = 100;
            params['width'] = 100;
        } else {
            el.style.width = width * 1.5 + 'px';
            params['width'] = width;
        }
    });
    checkAllFolders();
});

height_door.addEventListener('change', (e) => {
    const height = e.target.value;
    doors.forEach((el) => {
        if (height > 250) {
            el.style.height = height_door_max + 'px';
            height_door.value = 250;
            params['height'] = 250;
        } else if (height < 180) {
            el.style.height = height_door_min + 'px';
            height_door.value = 180;
            params['height'] = 180;
        } else {
            el.style.height = height * 1.5 + 'px';
            params['height'] = height;
        }
    });
    checkAllFolders();
});

function setOpening (value, data, product, prop) {
    if (value === 'right') {
        front_handle.style[prop] = '80%';
        back_handle.style[prop] = '20%';
    } else if (value === 'left') {
        front_handle.style[prop] = '20%';
        back_handle.style[prop] = '80%';
    }
    setCost(value, data, product);
}

function setCost(value, data, product) {
    let foundCost;
    if (value) {
        foundCost = data.find(item => item.product === product && item.type === value);
    } else {
        foundCost = data.find(item => item.product === product);
    }
    params[product] = foundCost.cost;
    checkAllFolders();
}

function checkAllFolders () {
    if (params['painting'] && params['tape'] && params['handle'] && params['width'] && params['height'] && params['opening']) {
        let perimeter = 2 * (+params['width'] + +params['height']);
        let square = params['width'] * params['height'];
        let peinting = params['painting'] * perimeter;
        let tape = params['tape'] * square;

        let peephole_val= (peephole.checked) ? +(params['peephole']) : 0;
        let bell_val= (bell.checked) ? +(params['bell']) : 0;
        let digits_val= (digits.checked) ? +(params['digits']) : 0;

        let sum =
            peinting + tape + +params['handle'] + +params['opening'] + peephole_val + bell_val + digits_val;

        sum_input.value = sum;
        price.innerHTML = sum;
        btn.removeAttribute('disabled');
        result.classList.remove('disabled');
    }
}

setTimeout(() => {
    message.innerHTML = '';
}, 3000);
