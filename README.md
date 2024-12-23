
# Doiscode Test Case




## API Docs

#### Register

```http
  POST /api/register
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name` | `string` | **Required** |
|`email`|`email`| **Required**|
|`password`|`string`| **Required**|

#### Login

```http
  POST /api/login
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
|`email`|`email`| **Required**|
|`password`|`string`| **Required**|

#### Get all employee data

```http
  GET /api/employee
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
|`bearer token`|`string`| **Required**|


## Run Locally

Clone the project

```bash
  git clone https://github.com/thoriqaufar/doiscode-test-case.git my-app
```

Go to the project directory

```bash
  cd my-app
```

Install dependencies

```bash
  composer install
```

Migrate the database and its seeder

```bash
  php artisan migrate --seed
```

Start the server

```bash
  php artisan serve
```

**Note**: You can instantly login with email: user@example.com and password: Password1234

