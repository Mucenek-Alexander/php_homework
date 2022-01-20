"use strict";

document.getAttribute(document.element.id.value).addEventListener('click', function (event) {
    event.preventDefault();
    fetch('goods.php?id=' + this.element.id.value)
        .then(response => response.json())
        .then(data => data);
        let description = this.element.description.value;
        let count = this.element.count.value;
        let div = document.createElement('div');
                     div.innerHTML = `
                    <h2>РАБОТАЙ, ПОЖАЛУЙСТА!!!! </h2>
                         `;
                document.getElementById('goods').append(div);

});

