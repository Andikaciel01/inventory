# Inventory API V1

## Base URL

```text
http://localhost:8000/api/v1
```

---

# Authentication

## Register

**Endpoint**

```http
POST /register
```

**Request Body**

```json
{
    "name":"Andika",
    "email":"andika@gmail.com",
    "password":"password",
    "password_confirmation":"password"
}
```

**Response**

```json
{
    "success": true,
    "message": "Register berhasil",
    "data": {
        "token":"..."
    }
}
```

---

## Login

**Endpoint**

```http
POST /login
```

**Request Body**

```json
{
    "email":"andika@gmail.com",
    "password":"password"
}
```

**Response**

```json
{
    "success": true,
    "message": "Login berhasil",
    "data": {
        "token":"..."
    }
}
```

---

# Items

## Get All Items

**Endpoint**

```http
GET /items
```

Description:

Mengambil seluruh data item.

Response:

```json
{
    "success": true,
    "message": "Berhasil menarik semua data Item",
    "data": [
        {
            "id":1,
            "name":"Laptop",
            "category_id":1
        },
        {
            "id":2,
            "name":"Mouse",
            "category_id":2
        }
    ]
}
```

---

## Filter Items By Category

**Endpoint**

```http
GET /items?category_id={id}
```

Description:

Filter item berdasarkan kategori (opsional).

Parameter:

| Parameter   | Type    | Required | Description      |
| ----------- | ------- | -------- | ---------------- |
| category_id | integer | No       | ID kategori item |

Contoh Request:

```http
GET /items?category_id=1
```

Contoh Response:

```json
{
    "success": true,
    "message": "Berhasil menarik semua data Item",
    "data":[
        {
            "id":1,
            "name":"Laptop",
            "category_id":1
        }
    ]
}
```

Jika kategori tidak memiliki item:

```json
{
    "success": true,
    "message": "Berhasil menarik semua data Item",
    "data":[]
}
```

---

## Get Item By ID

**Endpoint**

```http
GET /items/{id}
```

Description:

Mengambil satu item berdasarkan ID.

---

## Create Item

**Endpoint**

```http
POST /items
```

Description:

Menambahkan item baru.

---

## Update Item

**Endpoint**

```http
PUT /items/{id}
```

Description:

Memperbarui data item.

---

## Delete Item

**Endpoint**

```http
DELETE /items/{id}
```

Description:

Menghapus item.

---

# Categories

## Get All Categories

**Endpoint**

```http
GET /categories
```

Description:

Mengambil seluruh kategori.

---

## Get Category By ID

**Endpoint**

```http
GET /categories/{id}
```

Description:

Mengambil satu kategori berdasarkan ID.

---

## Create Category

**Endpoint**

```http
POST /categories
```

Description:

Menambahkan kategori baru.

---

## Update Category

**Endpoint**

```http
PUT /categories/{id}
```

Description:

Memperbarui kategori.

---

## Delete Category

**Endpoint**

```http
DELETE /categories/{id}
```

Description:

Menghapus kategori.
