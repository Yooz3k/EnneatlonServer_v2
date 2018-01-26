#!/bin/bash
#pobranie z gita strony i bazy
git clone https://github.com/TymekKonkol/Enneatlon_v2.git website
docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)
docker rmi presta
docker rmi mydatabase
docker rmi springboot
docker-compose build
docker-compose up