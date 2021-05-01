## INSTALL

npm install
composer install

## CARA PAKAI

cp .env.example .env
php artisan key:generate
php artisan storage:link

Edit database difile .env
php artisan migrate --seed

## JALANKAN SERVER

php artisan serve

## DEMO AKUN
email: admin@mail.com
password: admin
email: user@mail.com
password: user
