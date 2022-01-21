"use strict";

let links = document.getElementsByTagName('a');
for (let link of links){
    link.addEventListener('click', function (event) {
        event.preventDefault();
        fetch('goods.php?id=' + this.dataset.id)
            .then(response => response.json())
            .then(data => data);
        let div1 = document.createElement('div');
        div1.innerHTML = `
                    <h2>РАБОТАЙ, ПОЖАЛУЙСТА!!!! </h2>
                         `;
        console.log(div1);
        document.getElementById('no_text').append(div1);

    });
}


