# Настройка проекта

Для запуска проекта с использованием OpenServer или других аналогов, выполните следующие шаги:

Поместите проект в папку, доступную из веб-сервера.

## База данных

Dump БД(`laravel_api.sql`)  находится в папке dump_database
1. Сервер:127.0.0.1
2. Пользователь: root
3. Пароль: '',
4. БД: rest_api
5. Я добавил именно dump БД, поскольку бесплатных хостингов практически нет. Большинство просят подписаться на тариф или использовать платежную карту.


## Установка зависимостей

Для работы приложения необходимо установить зависимости, используя Composer. Выполните команду:

```bash
composer install
Файл composer.json
Файл composer.json определяет зависимости и параметры автозагрузки для вашего PHP-проекта.
squizlabs/php_codesniffer: Инструмент PHP_CodeSniffer для проверки стиля кодирования PHP.
```
## API методы
Роуты находятся в файле api.php
```bash
Route::get('/stocks', [StockController::class, 'fetchAndStore']);
Route::get('/incomes', [IncomeController::class, 'fetchAndStore']);
Route::get('/sales', [SaleController::class, 'fetchAndStore']);
Route::get('/orders', [OrderController::class, 'fetchAndStore']);

```



### GET api/stocks

### GET api/incomes

### GET api/sales

### GET api/orders

Фильтрация данных  
Используются параметры: `dateFrom`, `dateTo`, `page`, `limit`  
Формат даты: `Y-M-D`  
Примеры запросов:   
http://127.0.0.1:8000/api/incomes?dateFrom=2024-06-01&dateTo=2024-05-31&page=1&key=&limit=100


