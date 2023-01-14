install:
	cp .env.example .env \
		&& docker compose build \
		&& docker compose run --rm composer composer install \
		&& docker compose run --rm composer php artisan key:generate \
		&& docker compose run --rm node npm install

test:
	docker compose run --rm phormally php artisan test