# Trek API

## Stack

- [Symfony](https://symfony.com/)
- [Api Platform](https://api-platform.com/)
- [Docker](https://www.docker.com/)
- [PostgreSQL](https://www.postgresql.org/)
- [Postman](https://www.postman.com/)

## Source code

```
git clone https://github.com/geoffreygirou/trek-api.git
```

## API Tests
```
newman run ./postman/postman_collection.json -e ./postman/postman_environment.json
```

## API Usage

Either you can use Postman or the Swagger UI.

### Swagger UI

https://localhost/docs

![swagger](./api/docs/swagger.png)

Interacting with treks needs authentication

![authorize](./api/docs/authorize.png)

provide a valid token obtained from the login endpoint (create user if not already done)

![token](./api/docs/token.png)