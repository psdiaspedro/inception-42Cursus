all: up

up:
	sudo chmod a+w /etc/hosts && sudo cat /etc/hosts | grep paugusto.42.fr || \
	sudo echo "127.0.0.1 paugusto.42.fr" >> /etc/hosts

	sudo docker-compose -f srcs/docker-compose.yml up -d

down:
	sudo docker-compose -f srcs/docker-compose.yml down

clean:
	sudo docker-compose -f srcs/docker-compose.yml down -v --rmi all --remove-orphans
	sudo -n sed '/127.0.0.1 paugusto.42.fr/d' /etc/hosts -n

fclean: clean
	sudo docker system prune --volumes --all --force

re: fclean all

.PHONY: all