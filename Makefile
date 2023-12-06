run:
	docker-compose --env-file src/.env  up -d

stop:
	docker-compose stop