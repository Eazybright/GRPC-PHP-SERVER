# GRPC-PHP-SERVER

This project expands my knowledge on how to build GRPC server in PHP.

## App Setup (with Docker)
Make sure you have [docker](https://docs.docker.com/engine/install/) installed on your machine.

### Running the app
* `git clone https://github.com/Eazybright/GRPC-PHP-SERVER`
* `cd GRPC-PHP-SERVER` into the project folder
* Run `docker-compose up --build` to build the docker images and start the containers.

### Testing the app
Set endpoint:
```
curl --request POST \
  --url http://localhost:8080/v1/set \
  --data '{"Key": "hello","Value": "world"}'
```

Get endpoint:
```
curl --request POST \
  --url http://localhost:8080/v1/get \
  --data '{"Key": "hello"}'
```

### Credits

[https://dev.to/khepin/building-a-grpc-server-in-php-3bgc](https://dev.to/khepin/building-a-grpc-server-in-php-3bgc)