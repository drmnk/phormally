install:
	docker compose \
		&& docker compose run --rm composer composer install \
		&& docker compose run --rm node npm install