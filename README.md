
# 🛒 Laravel Ecommerce Backend (with Cart APIs)

This is a Laravel-based backend for a simple Ecommerce system that includes product management with multiple images, cart functionality, and API-based checkout. The admin panel is built using AdminLTE.

---

## ⚙️ Project Setup

### ✅ Requirements
- PHP 8.1+
- MySQL 8+
- Composer
- Laravel 10+

---

### 🔧 Installation Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/manitcodes247/ecommerce_task.git
   cd ecommerce_task
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Copy `.env` file**
   ```bash
   cp .env.example .env
   ```

4. **Set database credentials**  
   Edit `.env` and update:
   ```
   DB_DATABASE=ecommerce_task
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Generate app key**
   ```bash
   php artisan key:generate
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **(Optional) Import the provided database**
   ```bash
   mysql -u root -p ecommerce_task < database_backup.sql
   ```

8. **Run the application**
   ```bash
   php artisan serve
   ```

---

## 🌐 API Endpoints

All APIs use prefix `/api` and are available at `http://localhost:8000/api`

### 🔹 `GET /products`
Returns all products

---

### 🔹 `POST /cart/add`
Add a product to cart  
**Request body:**
```json
{
  "user_id": 1,
  "product_id": 1,
  "quantity": 2
}
```

---

### 🔹 `GET /cart`
Get cart items for a user

---

### 🔹 `PUT /cart/update/{id}`
Update a cart item's quantity  
**Request body:**
```json
{
  "quantity": 5
}
```

---

### 🔹 `DELETE /cart/delete/{id}`
Delete a cart item by ID

---

### 🔹 `POST /cart/checkout`
Finalize cart and return order summary

---

## 📫 API Testing with Postman

1. Open Postman
2. Go to **Collections → Import**
3. Import the file:  
   `ProductAPI.postman_collection.json`

All API requests will be available there for testing.

---

## 🗃️ Database Import

To import the provided database backup:

1. Open terminal or CMD
2. Run:
   ```bash
   mysql -u root -p ecommerce_task < database_backup.sql
   ```

Make sure the `ecommerce_task` database already exists before importing.

---

## 📂 Project Structure

- `/app` – Laravel core code
- `/routes/web.php` – Web and admin routes
- `/routes/api.php` – API routes
- `/resources/views/admin` – AdminLTE Blade views
- `/public/uploads/` – Product images

---

## 🔒 Admin Panel

- URL: `http://localhost:8000/admin/products`
- Admin dashboard using AdminLTE UI for managing products

---

## 📦 Project Includes

- Laravel 10
- MySQL 8
- AdminLTE for Admin Panel
- RESTful APIs (for cart & product)
- Cart system with checkout
- Postman Collection
- Database backup SQL

---

## 👨‍💻 Author

Developed as part of a backend task.  
Feel free to use or extend this project as needed.
