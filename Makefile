t=

up:
	docker-compose up
down:
	docker-compose down
php:
	docker exec -it mega-app bash
db:
	mysql -u mega -p'mega' mega --port 13306 -h 127.0.0.1
env:
	cp .env.example .env
migrate:
	php artisan migrate
migrate-fresh:
	php artisan migrate:fresh
seed:
	php artisan db:seed
install:
	composer install
update:
	composer update
serve:
	php artisan route:clear && php artisan config:clear && php artisan cache:clear && chmod -R 775 storage bootstrap/cache && php artisan serve
