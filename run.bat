@echo off

docker kill node-corbomite
docker-compose up -d
docker exec -it --user root --workdir /app node-corbomite bash -c "npm run fab"
