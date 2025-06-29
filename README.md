# SIMPLO – Laravel REST API

This is a simple REST API built with Laravel. It allows you to manage customers and assign them to predefined groups. 

> **The full task is described here:** [https://github.com/simplo-sro/job-php-programmer](https://github.com/simplo-sro/job-php-programmer)

---

## Entities:

> **Note:** All responses include related entities (e.g. customers include their groups, and groups include their customers).

### 1. Customer

Represents an individual customer.

**Endpoints:**
- `GET /api/customers` – Get all customers
- `GET /api/customers/{id}` – Get one customer
- `POST /api/customers` – Create a new customer
- `PUT/PATCH /api/customers/{id}` – Update an existing customer
- `DELETE /api/customers/{id}` – Delete a customer

### 2. Group

Groups are predefined and seeded into the database (e.g. “Alpha”, “Beta”, “Gamma”).  
Each customer can belong to zero or more groups.

**Endpoints:**
- `GET /api/groups` – Get all groups
- `GET /api/groups/{id}` – Get one group

---

## How to run the project?

> **Note:** Make sure you have a local server running (like **XAMPP**, Docker,..).

### 1. Configure your database

Open the `.env` file and set your own database information:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=restful-api
DB_USERNAME=root
DB_PASSWORD=
```

### 2. Run migrations and seeders

```bash
php artisan migrate:fresh --seed
```

### 3. Start the server

```bash
php artisan serve
```

### 4. Send test requests

Use **Postman** (or any API testing tool) to send requests to:

```
http://localhost:8000/api/customers
http://localhost:8000/api/groups
```

---
