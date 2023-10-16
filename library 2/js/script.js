/*Sliders*/
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el:".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        520: {
            slidesPerView: 2
        },
        920: {
            slidesPerView: 2
        }
    },
})

//Trolley
const trolley = document.getElementById('trolley');
const items = document.getElementById('list-1');
const items_2 = document.getElementById('list-2');
const items_3 = document.getElementById('list-3');
const list = document.querySelector('#trolley-list tbody');
const emptyTrolleyBtn = document.getElementById('empty-trolley');

addEventListeners();

function addEventListener() {
    items.addEventListener('click', buyItem);
    items_2.addEventListener('click', buyItem);
    items_3.addEventListener('click', buyItem);

    trolley.addEventListener('click', eliminateItem);

    emptyTrolleyBtn.addEventListener('click', emptyTrolley);

    document.addEventListener('DOMContentLoaded', readLocalStorage);
}

function buyItem(e) {
    e.preventDefault();

    if(e.target.classList.contains('add-trolley')) {
        const item = e.target.parentElement.parentElement;
        readItemData(item);
    }
}

function readItemData(item) {
    const infoItem = {
        image: item.querySelector('img').src,
        title: item.querySelector('h3').textContent,
        price: item.querySelector('price').textContent,
        id: item.querySelector('a').getAtribute('data-id')
    }
    insertTrolley(infoItem);
}

function insertTrolley(item) {
    const row = document.createElement('tr');
    row.innerHTML = `
        <td>
            <img scr="${item.image}" width=100>
        </td>
        <td>
            ${item.title}
        </td>
        <td>
            ${item.price}
        </td>
        <td>
            <a herf="#" class="empty" data-id="${item.id}">X</a>
        </td>
    `; //BACKTICKS `` --> AltGr + } + espacio
    list.appendChild(row);
    saveItemLocalStorage(item);
}

function eliminateItem(e) {
    e.preventDefault();

    let item,
        itemId;

    if (e.target.classList.contains('empty')) {

        e.target.parentElement.parentElement.remove();
        item = e.target.parentElement.parentElement;
        itemId = item.querySelector('a').getAttribute('data-id');
    }
    eliminateItemLocalStorage(itemId)
}

function emptyTrolley() {
    while(list.firstChild) {
        list.removeChild(list.firstChild);
    }
    emptyLocalStorage();
    return false;
}

function saveItemLocalStorage(item) {
    let items;
    items = getItemsLocalStorage();
    items.push(item);
    localStorage.setItem('items', JSON.stringify(items));
}

function getItemsLocalStorage() {
    let itemsLS;
    if(localStorage.getItem('items') === null) {
        itemsLS = [];
    } else {
        itemsLS = JSON.parse(localStorage.getItem('items'));
    }
    return itemsLS;
}

function readLocalStorage() {
    let itemsLS;
    itemsLS = getItemsLocalStorage();
    itemsLS.forEach(function(item) {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <img scr="${item.image}" width=100>
            </td>
            <td>
                ${item.title}
            </td>
            <td>
                ${item.price}
            </td>
            <td>
                <a herf="#" class="empty" data-id="${item.id}">X</a>
            </td>
        `;
        list.appendChild(row);
    });
}

function eliminateItemLocalStorage(item) {
    let itemsLS;

    itemsLS = getItemsLocalStorage();
    itemsLS.forEach(function(itemsLS, index) {
        if(itemsLS.id === item) {
            itemsLS.splice(index, 1);
        }
    });
    localStorage.setItem('items', JSON.stringify(itemsLS));
}

function emptyLocalStorage() {
    localStorage.clear();
}
