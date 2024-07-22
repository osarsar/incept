.PHONY: all up down build

all: up

up:
	docker-compose -f srcs/docker-compose.yml up -d --build

down:
	docker-compose -f srcs/docker-compose.yml down

build:
	docker-compose -f srcs/docker-compose.yml build