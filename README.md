<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/badge/Laravel-9.x-blue" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Тестовое задание

В файле.env нужно заполнить данные на подключение к базе данных PostgreSql.

Скопировать проект в любую папку, перейти в нее и выполнить в терминале
```
composer install
```

```
php artisan migrate --seed
```

```
php artisan serve
```

#### Endpoints:
- Пользователи, заказы, товары http://127.0.0.1:8000/users/
- Удаление пользователей http://127.0.0.1:8000/users/delete-user


- Тайный санта http://127.0.0.1:8000/participants/8 <- в конце 8 - id пользователя от 1 до 10
