

# Prerequisite

Have docker.

# Run symfony manually


Pull docker image
` docker pull php:8.3-apache

Run docker image
docker run -it --rm -p 8000:8000 -v $(pwd):/var/www/html -w /var/www/html php:8.3-apache bas

Install symfony
` curl -sS https://get.symfony.com/cli/installer | bash
` mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

Install git
` apt-get update
` apt-get install -y git
` git config --global user.name "mika"
` git config --global user.email "mikael.baron@gmail.com"

run the server

` php -S 0.0.0.0:8000 -t public/





# Use the docker image that we set up

` docker-compose up


# Access our webpages

` http://localhost:8000