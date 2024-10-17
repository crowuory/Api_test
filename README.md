Task Manager API
This is a simple RESTful API built with Lumen for managing tasks. The API supports basic CRUD operations and includes filtering and searching functionality.

Requirements
- PHP 7.3 or higher
- Composer
- PostgreSQL
- Lumen (this test project is built with Lumen)
Installation
1. **Clone the repository**:
   ```bash
   git clone https://github.com/crowuory/Api_test.git
   cd Api_test
   ```
2. **Install dependencies**:
   ```bash
   composer install
   ```
Configuration
1. **Create a `.env` file**:
   Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```
2. **Update the `.env` file**:
   Configure your database connection by editing the `.env` file:
   ```plaintext
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=task_manager
   DB_USERNAME=postgres
   DB_PASSWORD=root
   ```
   Make sure to replace the database name, username, and password with your actual PostgreSQL credentials.
Database Migration
1. **Create the database**:
   Make sure you have created the PostgreSQL database named `task_manager`.
2. **Run the migrations**:
   Execute the following command to create the necessary database tables:
   ```bash
   php artisan migrate
   ```
Running the API
1. **Start the development server**:
   You can start the built-in PHP server with the following command:
   ```bash
   php -S localhost:8000 -t public
   ```
2. **Access the API**:
   Open your browser or API client (like Postman) and navigate to:
   ```
   http://localhost:8000
   ```
API Endpoints
The following endpoints are available for managing tasks:

- **Create a Task**: `POST /tasks`
- **Get All Tasks**: `GET /tasks`
  - Optional query parameters:
    - `status`: Filter by task status (e.g., `pending`, `completed`)
    - `due_date`: Filter by task due date (format: `YYYY-MM-DD`)
    - `title`: Search for tasks by title
- **Get a Specific Task**: `GET /tasks/{id}`
- **Update a Task**: `PUT /tasks/{id}`
- **Delete a Task**: `DELETE /tasks/{id}`

