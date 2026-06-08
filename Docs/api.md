# Inventory API V1

Base URL

http://localhost:8000/api/v1

---

## Register

POST /register

Body:

{
    "name":"Andika",
    "email":"andika@gmail.com",
    "password":"password",
    "password_confirmation":"password"
}

Response:

{
    "success": true,
    "message": "Register berhasil",
    "data": {
        "token":"..."
    }
}

---

## Login

POST /login

Body:

{
    "email":"andika@gmail.com",
    "password":"password"
}

---

## Items

GET /items

POST /items

GET /items/{id}

PUT /items/{id}

DELETE /items/{id}

---

## Categories

GET /categories

POST /categories

GET /categories/{id}

PUT /categories/{id}

DELETE /categories/{id}