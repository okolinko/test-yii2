<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Demo Test Project</h1>
    <br>
</p>



<h2 align="center">Реалізувати дві сторінки:</h3>
1. Сторінка з формою для створення користувача
2. Сторінка з таблицею даних для відображення переліку створених користувачів

<h3 align="center">Загальні умови:</h3>

- використання фреймворку Yii2
- використання docker контейнерів:
issue_web: ВЕБ-сервер
issue_app: додаток
issue_db: база даних
- зберігання створених даних в БД
- відображення даних з БД
- створити всі небхідні компоненти, максимально використовуючи можливості фреймворку
- запуск проекта за допомогою docker compose
- організація, підключення та взаємодія компонентів: максимально використовувати можливості фреймворку
- НЕ використовувати механізми модулів фреймворку
- на кожній сторінці маленьке меню з пунктами (сторінками) форми та таблиці (щоб можна було перемикатись)

<h3 align="center">Умови по сторінках:</h3>
#### 1. Сторінка з формою для створення користувача
- поля для форми (всі текстові):
- email
- phone
- last_name
- first_name
- middle_name
- document

- обовʼязкові поля:
- last_name
- first_name
- document
#### 2. Сторінка з таблицею даних для відображення переліку створених користувачів
- використання компонента GridView
- реалізувати фільтрацію та сортування (функції "з коробки")

<h1 align="center"> Local development - domains </h1>

Add the following domains to the `/etc/hosts` (Linux) or `/private/etc/hosts` (MacOS) file:

```shell
127.0.0.1 yii2-demo.loc mh-prod-yii2-demo.loc pma-prod-yii2-demo.loc
```

Urls list:
- [https://yii2-demo.loc](https://yii2-demo.loc)
- [http://mh-prod-yii2-demo.loc](http://mh-prod-yii2-demo.loc)
- [http://pma-prod-yii2-demo.loc](http://pma-prod-yii2-demo.loc)


## Local development - self-signed certificates ##

Generate self-signed certificates before running this composition in the `$DOCKERIZER_SSL_CERTIFICATES_DIR`:

```shell
mkcert -cert-file=yii2-demo.loc-prod.pem -key-file=yii2-demo.loc-prod-key.pem yii2-demo.loc
```

Add these keys to the Traefik configuration file if needed.


## Local development without Traefik reverse-proxy ##

If you do not have an `$DOCKERIZER_SSL_CERTIFICATES_DIR` environment variable (try `echo $DOCKERIZER_SSL_CERTIFICATES_DIR` in the terminal) then replace `${DOCKERIZER_SSL_CERTIFICATES_DIR}` with the path to the directory containing self-signed SSL certificates.
Generate certificates with the `mkcert` command as described in this Readme.
Here `SSL termination web server` - probably the first Apache or Nginx container in the composition, the one that handles SSL.

### Approach 1: Access container by IP ###

1. Find the SSL termination web server IP address from, for example, `docker container inspect --format '{{json .NetworkSettings.Networks}}' <container_name> | jq`.
2. Add domains and this IP (instead of `127.0.0.1`) to your `/etc/hosts` (Linux) or `/private/etc/hosts` (MacOS) file.

Remember that the IP address may change after the container restart or OS restart.

### Approach 2: Publish ports ###

1. Ensure that ports 80 and 443 are not used by other applications
2. Add ports mapping to the SSL termination web server:
```
ports:
  - "80:80"
  - "443:443"
```
