include .env

$(eval export $(shell sed -ne 's/=.*//' .env))

up-all: up update-hosts

up:
	@docker-compose up -d
	@echo 'IP nginx: ' `docker inspect -f {{.NetworkSettings.Networks.$(COMPOSE_PROJECT_NAME)_default.IPAddress}} $(COMPOSE_PROJECT_NAME)_nginx_1`
	@echo 'IP php: ' `docker inspect -f {{.NetworkSettings.Networks.$(COMPOSE_PROJECT_NAME)_default.IPAddress}} $(COMPOSE_PROJECT_NAME)_php_1`
	@echo 'IP mysql: ' `docker inspect -f {{.NetworkSettings.Networks.$(COMPOSE_PROJECT_NAME)_default.IPAddress}} $(COMPOSE_PROJECT_NAME)_mysql_1`
	@echo 'IP adminer: ' `docker inspect -f {{.NetworkSettings.Networks.$(COMPOSE_PROJECT_NAME)_default.IPAddress}} $(COMPOSE_PROJECT_NAME)_adminer_1`

down:
	@docker-compose down

build:
	@docker-compose build

logs:
	docker-compose logs -f

sh-php:
	docker-compose exec --user www-data php sh

sh-nginx:
	docker-compose exec --user www-data nginx sh

composer-install:
	docker-compose exec --user www-data php composer install

composer-update:
	docker-compose exec --user www-data php composer update

update-hosts:
	@echo "Adding IP to /etc/hosts (required sudo)"
	@echo "Hosts: ryuutama.dev    adminer.ryuutama.dev"
	@sudo sed -i '/ryuutama.dev/d' /etc/hosts
	@sudo /bin/sh -c 'echo `docker inspect -f {{.NetworkSettings.Networks.$(COMPOSE_PROJECT_NAME)_default.IPAddress}} $(COMPOSE_PROJECT_NAME)_nginx_1`	"ryuutama.dev adminer.ssu.dev" >> /etc/hosts'

phpcs:
	bin/php-cs-fixer fix src --config=.php_cs

phpcs-dry:
	bin/php-cs-fixer fix src --dry-run --config=.php_cs

cache-clear:
	docker-compose exec --user www-data php rm -rf app/cache/*

.PHONY: up down logs sh-php sh-nginx composer-install composer-update update-hosts up-all cache-clear
