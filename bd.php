<?php
    $link = mysqli_connect("localhost", "root", "", "lab4");

    if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    }
    else {
    print("Соединение установлено успешно ");
    }

    $n = $_POST['name'];
    $r = $_POST['review'];

    $sql = 'INSERT INTO reviews  VALUES ("'.$n.'","'.$r.'")';
    $result = mysqli_query($link, $sql);

    if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
    }
?>

<!-- 
Добавить автоинкремент
добавить больше полей
при помощи select выдавать прошлые ответы пользователя
 -->