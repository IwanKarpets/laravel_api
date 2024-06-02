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
Используются параметры: `start_date`, `end_date`, `max_amount`, `min_amount`  
Если вы хотите фильтровать займы по сумме, чтобы получить те, что больше или меньше указанной суммы, вам нужно будет изменить параметры строки запроса. Вот примеры того, как это можно сделать:

Для получения займов на сумму больше указанной:

GET /loans?min_amount=5000
В этом случае параметр min_amount=5000 означает, что вы хотите получить займы на сумму больше 5000.

Для получения займов на сумму меньше указанной:

GET /loans?max_amount=5000
Здесь параметр max_amount=5000 указывает, что вы хотите получить займы на сумму меньше 5000.

При помощи `start_date`, `end_date` задается диапазон дат  
Формат: `Y-M-D`  
Примеры запросов:   
http://slim-rest-api/api/loans?min_amount=10000&min_amount=16000&start_date=2024-05-07&end_date=2024-05-10  
http://slim-rest-api/api/loans?start_date=2024-05-07&end_date=2024-05-10  
http://slim-rest-api/api/loans?max_amount=16000&min_amount=10000&start_date=2024-05-07



