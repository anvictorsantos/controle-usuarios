## Setup
1. composer install
2. cp .env.example .env
3. php artisan key:generate
4. touch database/database.sqlite
5. php artisan migrate:fresh --seed