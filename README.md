# PHP User API

A simple and lightweight PHP REST API for retrieving user data in JSON format. Easily deployable using Docker for quick setup and integration.

## Features

- **User Endpoints**: Retrieve a list of users with their details (ID, name, email)
- **JSON Response**: All responses are formatted as JSON with consistent status and data structure
- **CORS Support**: Cross-Origin Resource Sharing enabled for frontend integration
- **Docker Ready**: Pre-configured Docker setup for quick deployment

## Tech Stack

- **PHP 8.2** with Apache
- **Docker** for containerization
- **JSON** for data serialization

## Project Structure

```
php-api/
├── api/
│   └── users.php          # Main users endpoint
├── Dockerfile             # Docker configuration
└── README.md             # This file
```

## API Endpoints

### Get All Users

**Endpoint**: `GET /api/users.php`

**Response** (sample):
```json
{
  "status": true,
  "data": [
    {
      "id": 1,
      "name": "Rohit Kumar",
      "email": "rohit@example.com"
    },
    {
      "id": 2,
      "name": "Jane Smith",
      "email": "jane@example.com"
    },
    {
      "id": 3,
      "name": "Vikram Singh",
      "email": "vikram@example.com"
    },
    {
      "id": 4,
      "name": "Varun Sharma",
      "email": "varun@example.com"
    },
    {
      "id": 5,
      "name": "Amitabh Gupta",
      "email": "amitabh@example.com"
    }
  ]
}
```

## Running the Application

### Prerequisites

- **For Docker Deployment**: Install Docker (version 20.10 or later) on your system.
- **For Local Development**: Install PHP (version 8.2 or later) on your system.

### Using Docker (Recommended)

1. **Clone or download the project**:
   ```bash
   git clone <repository-url>
   cd php-api
   ```

2. **Build the Docker image**:
   ```bash
   docker build -t php-user-api .
   ```

3. **Run the container**:
   ```bash
   docker run -d -p 8080:80 php-user-api
   ```

4. **Verify the container is running**:
   ```bash
   docker ps
   ```

### Using PHP Built-in Server (Local Development)

1. **Navigate to the project directory**:
   ```bash
   cd php-api
   ```

2. **Start the PHP development server**:
   ```bash
   php -S localhost:8000
   ```

3. **Keep the server running** in the terminal.

### Testing the API

- **Using Browser**: Open `http://localhost:8080/api/users.php` (Docker)
   or `http://localhost:8000/api/users.php` (local).

