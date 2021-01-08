install:
	docker-compose up -d && \
	docker exec -it php-pest composer install

test:
	docker exec -it php-pest vendor/bin/pest