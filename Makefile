include docker.mk

composer:
	docker exec -it $(shell docker ps --filter name='^/$(PROJECT_NAME)_php' --format "{{ .ID }}") composer $(filter-out $@,$(MAKECMDGOALS))

