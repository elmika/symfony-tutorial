# Start with PHP 8.3 with Apache
FROM php:8.3-apache

# Install necessary packages
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install \
    intl \
    mbstring \
    xml \
    && apt-get clean

# Install Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash && \
    mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Expose port for development server
EXPOSE 8000

COPY start.sh /usr/local/bin/start.sh
ENTRYPOINT ["/bin/bash", "/usr/local/bin/start.sh"]

# Default command
CMD ["apache2-foreground"]
