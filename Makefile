include docker.mk

composer:
	docker exec -it $(shell docker ps --filter name='^/$(PROJECT_NAME)_php' --format "{{ .ID }}") composer $(filter-out $@,$(MAKECMDGOALS))

lint:
	docker exec -it $(shell docker ps --filter name='^/$(PROJECT_NAME)_php' --format "{{ .ID }}") phpcs

lint-fix:
	docker exec -it $(shell docker ps --filter name='^/$(PROJECT_NAME)_php' --format "{{ .ID }}") phpcbf