"use strict";

document.getElementById('auth').addEventListener('submit', function(event){
    event.preventDefault();
    fetch('handler.php', {
        method: 'post',
        body: new FormData(this),
    })
        .then(response => response.text())
        .then(response => {
            if (response === 'success'){

                /*document.getElementsByClassName('modal')[0].append(div)*/
                document.getElementsByClassName('modal')[0].style.display = 'none';
                let div = document.createElement("div");
                div.innerHTML = `
                <p>Вы успешно авторизованы</p>
                <a href="index.php">Вернуться</a>
                `
                document.body.append(div);
            } else {
                let div = document.createElement('div');
                div.innerHTML = `
                <p>Неправильные логин/пароль, попробуйте ещё раз</p>
                `
                document.getElementsByClassName('modal')[0].append(div)
            }
        });
});
