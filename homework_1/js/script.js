"use strict";

fetch('goods_arr.php')
    .then(response => response.json())
    .then( data => {
        let goods = data
        console.log(goods);
        goods.forEach(good => {
            let div = document.createElement('div');
            div.innerHTML = `
                    <h2>${good.title} </h2>
                    <p>Стоимость:  ${good.price}</p>
                    <img src="img/${good.img}" alt="${good.img}" style="max-width: 400px">
                    <p>Цвет: ${good.description.color}</p>
                    <p>Материал: ${good.description.material}</p>
            `;
            document.getElementById('goods').append(div);
        });

    });
