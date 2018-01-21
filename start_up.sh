#!/bin/bash
#pobranie z gita strony i bazy
git clone https://github.com/TymekKonkol/Enneatlon_v2.git website
docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)
docker rmi beenneatlon_presta
docker rmi beenneatlon_mydatabase
docker-compose build
docker-compose up