# Установка
- Переименовать .env.example в .env
- Настроить подключение к базе данных в .env (Параметры с припиской DB_)
- По желанию изменить админ-пароль в .env (Параметр ADMIN_PASSWORD)
- Запустить следующие команды поочередно:
- php artisan key:generate
- php artisan migrate
- Для того, чтобы пользовать имел доступ к админ-панеле в базе данных нужно изменить его поле is_editor на true
- После перейдя по маршруту app_url/dash ввести пароль администратора
- Для запуска приложения используйте php artisan serve в корневой директории проекта
- Чтобы перевести приложение в режим production из debug: В файле .env измените параметр APP_DEBUG на false
- Для изменения заголовка страниц измените параметр APP_NAME в .env
