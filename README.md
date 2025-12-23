# PHP User API

A lightweight PHP REST API that provides user data in JSON format. The application is containerized with Docker for easy deployment.

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

**Response**: 
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
    }
  ]
}
```

## Running the Application

### Using Docker

1. **Build the Docker image**:
   ```bash
   docker build -t php-user-api .
   ```

2. **Run the container**:
   ```bash
   docker run -d -p 8080:80 php-user-api
   ```

3. **Access the API**:
   - Open your browser or use a tool like Postman
   - Navigate to: `http://localhost:8080/api/users.php`

### Using PHP Built-in Server (Local Development)

1. **Start the server**:
   ```bash
   php -S localhost:8000
   ```

2. **Access the API**:
   ```
   http://localhost:8000/api/users.php
   ```

## CORS Configuration

The API has CORS enabled for all origins. You can access it from any frontend application.

## Docker Container Details

- **Base Image**: `php:8.2-apache`
- **Port**: 80 (mapped to 8080 in examples)
- **Working Directory**: `/var/www/html/`

## Requirements

- Docker 20.10+ (for containerized deployment)
- OR PHP 8.2+ (for local development)

## License

This project is provided as-is for educational and development purposes.
