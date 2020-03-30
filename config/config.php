;<? exit(); ?>



[database]

;Сервер базы данных
db_server = localhost;

;Пользователь базы данных
db_user = "lrogiixt";

;Пароль к базе
db_password = "9WhcrGT])72Sd9";

;Имя базы
db_name = "lrogiixt_simpla";

;Префикс для таблиц
db_prefix = s_;

;Кодировка базы данных
db_charset = UTF8;

;Режим SQL
db_sql_mode =" ";

;Смещение часового пояса
;db_timezone = +04:00;


[php]
error_reporting = E_ALL;
php_charset = UTF8;
php_locale_collate = ru_RU;
php_locale_ctype = ru_RU;
php_locale_monetary = ru_RU;
php_locale_numeric = ru_RU;
php_locale_time = ru_RU;
;php_timezone = Europe/Moscow;

logfile = admin/log/log.txt;

[smarty]

smarty_compile_check = true;
smarty_caching = false;
smarty_cache_lifetime = 0;
smarty_debugging = true;
smarty_html_minify = false;

[images]
;Использовать imagemagick для обработки изображений (вместо gd)
use_imagick = true;

;Директория оригиналов изображений
original_images_dir = files/uploads/;

;Директория миниатюр
resized_images_dir = files/products/;

blog_images_dir = files/uploads/;

banners_dir = files/uploads/;

;Изображения категорий
categories_images_dir = files/categories/;

;Изображения брендов
brands_images_dir = files/brands/;

;Файл изображения с водяным знаком
watermark_file = simpla/files/watermark/watermark.png;

documents_dir = files/documents/;

[files]

;Директория хранения цифровых товаров
downloads_dir = files/uploads/;

[debug]
debug = false;



