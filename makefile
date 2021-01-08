install:
	docker-compose up -d && \
	docker exec -it php-test-pest composer install

test:
	docker exec -it php-test-pest vendor/bin/pest