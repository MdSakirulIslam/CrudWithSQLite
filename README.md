# To-Do List Application - CRUD Project

    Welcome to my project,This very simple project with laravel. Below are the instructions and guidelines for this task.

## Project Description

This project is a simple to-do list application that allows users to create, read, update, and delete tasks. The application is built using Laravel and uses a SQLite database for simplicity. Here I use MVC() pattern.The Model-View-Controller (MVC) design pattern is a foundational architectural pattern in software development. By separating an application into three interconnected components—Model, View, and Controller—MVC aims to decouple the user interface from the underlying data and logic, enhancing the modularity and maintainability of the codebase.

## Features

- Users can create tasks with "Product Name","Product Code","Product Description","Product Image".
- Users can mark tasks as completed or incomplete.
- Users can edit and delete tasks.
- Tasks are displayed in a list with their titles and statuses.
- Basic styling is applied in this tasks.

## Requirements

- Use Laravel (latest stable version).
- Use a SQLite database.
- Follow Laravel’s best practices and coding standards.
- Include comments in the code where necessary to explain the logic.

## Database Schema

Each task should have the following fields:

- `Title`: string, required
- `Description`: text, optional
- `Status`: boolean, completed (true) or incomplete (false)
- `Timestamps`: created_at and updated_at

## Environment Setup

### Prerequisites

- PHP >= 7.4
- Composer
- SQLite
- Git

### Steps to Set Up the Development Environment

1. **Clone the repository:**

   ```bash
   git clone https://github.com/yourusername/todo-list.git
   cd todo-list
   ```

2. **Install dependencies:**

   ```bash
   composer install
   ```

3. **Create a copy of the `.env` file:**

   ```bash
   cp .env.example .env
   ```

4. **Update the `.env` file with the following database configuration:**

   ```env
   DB_CONNECTION=sqlite
   DB_DATABASE=/path/to/your/database/database.sqlite
   ```

   Ensure the specified path exists and the `database.sqlite` file is created. You can create the file using:

   ```bash
   touch database/database.sqlite
   ```

5. **Generate the application key:**

   ```bash
   php artisan key:generate
   ```

6. **Run the migrations to set up the database schema:**

   ```bash
   php artisan migrate
   ```

### Instructions to Run the Application

1. **Start the development server:**

   ```bash
   php artisan serve
   ```

2. **Open your browser and navigate to:**

   ```
   http://localhost:8000
   ```

   You should see the to-do list application homepage.




