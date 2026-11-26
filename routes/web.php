<?php

use Illuminate\Support\Facades\Route;

// 1. Главная страница (именованный маршрут)
Route::get('/', function () {
    return '<h1>Главная страница</h1>';
})->name('home');

// 2. Статическая страница «О нас»
Route::get('/about', function () {
    return 'Страница о нашем проекте';
});

// 3. Маршрут с обязательным параметром
Route::get('/user/{id}', function (string $id) {
    return 'Страница пользователя №' . $id;
})->whereNumber('id');

// 4. Маршрут с необязательным параметром и именем
Route::get('/hello/{name?}', function (string $name = 'гость') {
    return 'Привет, ' . $name . '!';
})->name('hello');

// 5. Маршрут с двумя параметрами
Route::get('/posts/{post}/comments/{comment}', function (string $post, string $comment) {
    return "Статья №{$post}, комментарий №{$comment}";
});

// 6. Именованный маршрут с параметром
Route::get('/posts/{id}', function (string $id) {
    return 'Просмотр статьи №' . $id;
})->whereNumber('id')->name('posts.show');
