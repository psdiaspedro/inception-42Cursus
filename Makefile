all: up

# check if paugusto.42.fr is in /etc/hosts, if not add it
# then create all volume folders
# then compose up
up:
	sudo chmod a+w /etc/hosts && sudo cat /etc/hosts | grep paugusto.42.fr || \
	sudo echo "127.0.0.1 paugusto.42.fr" >> /etc/hosts

	sudo mkdir -p /home/paugusto/data/wordpress && sudo chmod 777 /home/paugusto/data/wordpress
	sudo mkdir -p /home/paugusto/data/mariadb && sudo chmod 777 /home/paugusto/data/mariadb

	sudo docker-compose -f srcs/docker-compose.yml up -d

down:
	docker stop $$(docker ps -qa); \
	docker rm $$(docker ps -qa); \
	docker rmi -f $$(docker images -qa); \
	docker volume rm $$(docker volume ls -q); \
	docker network rm $$(docker network ls -q); \
	sudo rm -rf /home/paugusto/data
	sudo sed -i '/127.0.0.1 paugusto.42.fr/d' /etc/hosts

clean:
	sudo docker-compose -f srcs/docker-compose.yml down -v --rmi all --remove-orphans
	sudo -n sed '/127.0.0.1 paugusto.42.fr/d' /etc/hosts -n

fclean: clean
	sudo docker system prune --volumes --all --force

re: fclean all

.PHONY: all