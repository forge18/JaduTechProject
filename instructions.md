# Jadu Technical Project

## Application

### Prerequisites
- Docker
- Docker-Compose

### How To Run
- Navigate to the root directory
- Open the command line and run `docker-compose -up`
- The code does not currently have a UI. The methods can be run using one of the methods below: 
    1. Create a minimal UI to interface with the methods using HTML and Javascript (AJAX).
    2. Open the docker shell using `docker exec -it php /bin/bash`. Navigate to the /src folder and call the method from the command line.
    3. Create another php script to call the methods directly. 

## Unit Tests

### Prerequisites
- Composer
- PhpUnit v10

### How To Run
- Navigate to the root directory
- Open the command line and run `.\vendor\bin\phpunit --testdox`
