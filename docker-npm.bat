@echo off

docker exec -it --user root --workdir /app node-corbomite bash -c "npm %*"
