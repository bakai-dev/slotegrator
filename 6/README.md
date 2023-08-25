## Docker: Модификация конфигурации сервисов
1. Добавьте новый сервис для приложения PHP в файл docker-compose.yml:
    ```sh
    php:
     image: php:8.1-fpm
     container_name: app-php
     volumes:
    - ./:/var/www
    ```
2. Создайте общую сеть для всех сервисов, добавив раздел networks в каждую службу:
    ```sh
    networks:
    my-network:
    ```
3. Чтобы переопределить сервис базы данных на MySQL 8 без изменения текущего файла docker-compose.yml, 
   можно использовать механизм расширения файла конфигурации Docker Compose. 
   Созданный новый файл [docker-compose.override.yml](compose.override.yml) переопределит сервиса базы данных:
    ```sh
    services:
    db:
    image: mysql:8.0  # Используем MySQL 8.0 вместо 5.6.47
    ```

### Результат обновленный файл
>[docker-compose.yml](docker-compose.yml)
