## Тестовое задание

Задачи:

1. Разработать бэкенд (личный кабинет модератора)
2. Разработать фронт (форма добавления объекта)
3. Развернуть проект на тестовом сервере
4. Прикрутить домен, опционально https

___

## Установка

___

1. Клонирование:`git clone https://github.com/GormlessGeorge/alania-digital.git digital`
2. `cd digital`
3. Установка Laravel компонентов: `composer install`
4. Создание копии .env файла: `cp .env.example .env`
5. В .env прописать необходимые настройки базы данных:
6. Запуск миграций и seeder-классов: `php artisan migrate:fresh --seed`
7. Генерация ключа: `php artisan key:generate`
8. Установка компонентов Frontend: `npm install`
9. Запуск сборки: `npm run build`
10. Запуск локального сервера: `php artisan serve`

Пользователь moderator:

Логин: `moderator@example.com`

Пароль: `moderator`

Пользователь user:

Логин: `user@example.com`

Пароль: `password`
___

## Задача 1

1. Созданы модели (App\Http\Models) : Post, Region, Town, Street, BuildingType
2. Добавлены необходимые миграции и seeder классы для наполнения БД
2. Реализован CRUD данных моделей на стороне модератора, а также создание объекта Post на стороне обычного пользователя
3. Добавлен функционал карты с помощью 2gis API, при клике на объект сохраняются координаты
4. Добавлен пользователь Moderator, имеющий доступ к модерации при помощи Gate
5. Добавлены отдельные классы FormRequest для валидации форм
6. Добавлены Resource-контроллеры для взаимодействия с моделями
7. Для ресурса Post созданы отдельные классы Service и Resource

___

## Задача 2

1. Создана простенькая frontend страничка (Welcome) с формой добавления объекта Post
2. Все добавленные компоненты, не являющиеся частью Laravel Breeze располагаются в папках: 'Pages/Moderator' и '
   Components/Custom'

___

## Задача 3

На сервер установлены следующие компоненты:

1. Nginx
2. MySQL
3. PHP-FPM
4. Composer
5. Node NPM
6. PHP компоненты:
   php-xml,
   php-curl,
   php-mysql
7. Let's Encrypt CertBot
___

## Задача 4
1. В настройках Nginx прописано доменное имя
2. Обеспечена работа через протокол https при помощи сертификата от Let's Encrypt
