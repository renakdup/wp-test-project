include docker.mk

composer:
	docker exec -it $(shell docker ps --filter name='^/$(PROJECT_NAME)_php' --format "{{ .ID }}") composer $(filter-out $@,$(MAKECMDGOALS))

lint:
	docker exec -it $(shell docker ps --filter name='^/$(PROJECT_NAME)_php' --format "{{ .ID }}") phpcs

lint-fix:
	docker exec -it $(shell docker ps --filter name='^/$(PROJECT_NAME)_php' --format "{{ .ID }}") phpcbf

db-export:
	docker-compose exec mariadb sh -c 'exec mysqldump -uwordpress -p"wordpress" wordpress' > my-db.sql
