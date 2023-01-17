install:
	docker compose run --rm composer composer install \
		&& docker compose run --rm composer php artisan key:generate \
		&& docker compose run --rm node npm install

test:
	docker compose run --rm phormally php artisan test

sniff:
	docker compose run --rm composer vendor/bin/pint --test && vendor/bin/phpstan analyze

bash:
	docker exec -it app bash
