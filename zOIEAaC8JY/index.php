<?php session_start(); if ($_SESSION['correct'] == true){
       
    }else {
        header( 'Location: https://oxanazayakina.ru/');
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>

    <div>
        <h1>Админ-панель</h1>
        <h3>Записи</h3>
        <div style="display: flex; width: 100%;
        justify-content: right;">
            <div class="filter">
                <p>Фильтр: <span id="filter">По новизне</span></p>
            </div>
        </div>
        <div class="table" id="table">
            <div class="table__header" id="table__header">
                <div><p>Дата первой сессии</p></div>
                <div><p>Способ связи</p></div>
                <div><p>Количество сессий</p></div>
                <div><p>Статус оплаты</p></div>
            </div>
            <div class="table__item">
<div><p>21.02.2022</p></div>
<div><p>+7922222222 (tg)</p></div>
<div><p>1</p></div>
<div><p>Оплачено</p></div>

            </div>
        </div>

    </div>
    <script>
        var a = ['По новизне', 'По количеству','Только Telegram','Только Whatsapp'];
        document.querySelectorAll(".filter")[0].addEventListener('click', function () {
            console.log('click');
            var curr = document.getElementById("filter").textContent;
            for (var i = 0; i < a.length;i++){
if (a[i] === curr){
    document.getElementById('filter').textContent = a[(i+1)%4];
}
            }
            
        });
    </script>
</body>
</html>