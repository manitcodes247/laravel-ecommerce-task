# E-Commerce Backend Task

## Technologies
- Laravel 10+
- MySQL 8+
- PHP 8+

## Features
- Product management with image upload
- Cart APIs with quantity & total logic
- Checkout endpoint
- Admin panel (AdminLTE) for:
  - Products
  - Cart
  - Orders

## Setup Instructions

1. Clone the repository:
   ```
   git clone https://github.com/your-username/ecommerce_task.git
   cd ecommerce_task
   ```

2. Install dependencies:
   ```
   composer install
   ```

3. Set up environment:
   ```
   cp .env.example .env
   php artisan key:generate
   ```

4. Create DB and import:
   - Create MySQL DB named `ecommerce_task`
   - Import `ecommerce_task.sql`

5. Run migrations (if needed):
   ```
   php artisan migrate
   ```

6. Run the project:
   ```
   php artisan serve
   ```

## API Testing
Use the provided Postman collection: `ecommerce_task.postman_collection.json`

### Available Endpoints

- `GET /api/products`  
- `GET /api/cart`  
- `POST /api/cart/add`  
- `PUT /api/cart/update/{id}`  
- `DELETE /api/cart/delete/{id}`  
- `POST /api/cart/checkout`  
