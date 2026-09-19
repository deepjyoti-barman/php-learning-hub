# PHP Learning Hub

A structured, hands-on journey to learning **PHP** from the fundamentals to advanced concepts.

This repository contains tutorials, examples, exercises, best practices, and practical projects designed to build a strong foundation in PHP and gradually progress toward modern PHP development.

The goal is to move from writing simple PHP scripts to understanding object-oriented programming, databases, APIs, security, testing, and other concepts required for building maintainable PHP applications.

---

## 📚 Table of Contents

- [Learning Path](#️-learning-path)
- [Repository Structure](#-repository-structure)
- [Getting Started](#-getting-started)
- [Code Lab](#-code-lab)
- [Projects](#️-projects)
- [Tools & Technologies](#️-tools--technologies)
- [Best Practices](#-best-practices)
- [Resources](#-resources)
- [Contributing](#-contributing)

---

## 🗺️ Learning Path

The learning material is organized in a progressive order:

| #   | Topic              | Description                                                                                  |
| --- | ------------------ | -------------------------------------------------------------------------------------------- |
| 01  | Basics             | Introduction to PHP, syntax, setup, and execution                                            |
| 02  | Variables          | Variables, constants, scope, and variable handling                                           |
| 03  | Data Types         | Strings, integers, floats, booleans, arrays, objects, and more                               |
| 04  | Operators          | Arithmetic, comparison, logical, assignment, and other operators                             |
| 05  | Control Structures | Conditions, loops, and flow control                                                          |
| 06  | Functions          | Defining, calling, parameters, return values, and advanced functions                         |
| 07  | Arrays             | Indexed, associative, multidimensional arrays, and array functions                           |
| 08  | OOP                | Classes, objects, inheritance, interfaces, traits, and encapsulation                         |
| 09  | Exceptions         | Exception handling, custom exceptions, and error management                                  |
| 10  | Files              | File handling, directories, streams, and file operations                                     |
| 11  | Databases          | Database concepts, SQL, PDO, queries, and CRUD operations                                    |
| 12  | Composer           | Dependency management, autoloading, and PHP packages                                         |
| 13  | APIs               | HTTP, REST APIs, JSON, requests, responses, and API integration                              |
| 14  | Security           | Authentication, authorization, input validation, SQL injection, XSS, CSRF, and secure coding |
| 15  | Testing            | Unit testing, PHPUnit, test organization, and testing practices                              |

---

## 📁 Repository Structure

```text
php-learning-hub/
├── code-lab/
│   ├── 01-basics/
│   ├── 02-variables/
│   ├── 03-data-types/
│   ├── 04-operators/
│   ├── 05-control-structures/
│   ├── 06-functions/
│   ├── 07-arrays/
│   ├── 08-oop/
│   ├── 09-exceptions/
│   ├── 10-files/
│   ├── 11-databases/
│   ├── 12-composer/
│   ├── 13-apis/
│   ├── 14-security/
│   └── 15-testing/
│
├── projects/
│   ├── project-1/
│   └── project-2/
│
├── .gitignore
└── README.md
```

### `code-lab/`

Contains all PHP learning material, organized from fundamental concepts to advanced topics.

Each section contains practical code examples and exercises related to the corresponding topic.

### `projects/`

Contains practical projects created while progressing through the learning path.

Projects are intended to reinforce concepts learned throughout the code lab and provide hands-on development experience.

### `.gitignore`

Contains files and directories that should not be committed to version control, including IDE configuration, dependencies, environment files, logs, caches, and operating-system-specific files.

## 🚀 Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/<your-username>/php-learning-hub.git
```

### 2. Navigate to the repository

```bash
cd php-learning-hub
```

### 3. Check your PHP installation

```bash
php --version
```

### 4. Start learning

Begin with:

```text
code-lab/01-basics/
```

Follow the sections in numerical order and practice the examples yourself rather than simply reading the code.

## 🧑‍💻 Code Lab

### 01 — Basics

Learn the fundamentals of PHP and understand how PHP scripts are structured and executed.

**Topics include:**

- Introduction to PHP
- Installing PHP
- PHP CLI
- PHP syntax
- PHP tags
- Comments
- Output
- Basic scripts

### 02 — Variables

Learn how PHP stores and manages data.

**Topics include:**

- Variables
- Constants
- Variable scope
- Global and local variables
- Superglobals

### 03 — Data Types

Understand the different types of values PHP supports.

**Topics include:**

- Strings
- Integers
- Floats
- Booleans
- Arrays
- Objects
- `NULL`
- Type declarations
- Type casting

### 04 — Operators

Learn how to perform calculations, comparisons, assignments, and logical operations.

**Topics include:**

- Arithmetic operators
- Assignment operators
- Comparison operators
- Logical operators
- Increment and decrement
- String operators
- Null coalescing
- Ternary operator

### 05 — Control Structures

Learn how to control the execution flow of your programs.

**Topics include:**

- `if`
- `else`
- `elseif`
- `switch`
- `match`
- `for`
- `while`
- `do...while`
- `foreach`
- `break`
- `continue`

### 06 — Functions

Learn how to create reusable pieces of code.

**Topics include:**

- Function declaration
- Parameters
- Return values
- Default parameters
- Type declarations
- Anonymous functions
- Arrow functions
- Closures
- Variable functions

### 07 — Arrays

Learn how to work with collections of data.

**Topics include:**

- Indexed arrays
- Associative arrays
- Multidimensional arrays
- Array iteration
- Array manipulation
- Common array functions

### 08 — Object-Oriented Programming

Learn how to build applications using object-oriented programming principles.

**Topics include:**

- Classes
- Objects
- Properties
- Methods
- Constructors
- Visibility
- Encapsulation
- Inheritance
- Polymorphism
- Interfaces
- Abstract classes
- Traits
- Static members
- Namespaces
- Dependency injection

### 09 — Exceptions

Learn how to handle exceptional situations gracefully.

**Topics include:**

- Exceptions
- `try`
- `catch`
- `finally`
- Throwing exceptions
- Custom exceptions
- Exception hierarchy
- Error handling

### 10 — Files

Learn how PHP interacts with files and directories.

**Topics include:**

- Reading files
- Writing files
- File permissions
- Directories
- File uploads
- Streams
- JSON files

### 11 — Databases

Learn how PHP applications communicate with databases.

**Topics include:**

- SQL fundamentals
- MySQL
- PDO
- Database connections
- Prepared statements
- CRUD operations
- Transactions
- Database security

### 12 — Composer

Learn how to manage dependencies and structure modern PHP projects.

**Topics include:**

- Installing Composer
- `composer.json`
- Dependencies
- Autoloading
- PSR-4
- Packages
- Version constraints

### 13 — APIs

Learn how to build and consume APIs using PHP.

**Topics include:**

- HTTP fundamentals
- REST APIs
- JSON
- HTTP methods
- Request and response handling
- API authentication
- Consuming external APIs
- Building APIs

### 14 — Security

Learn the fundamentals of writing secure PHP applications.

**Topics include:**

- Input validation
- Input sanitization
- SQL injection
- Cross-Site Scripting (XSS)
- Cross-Site Request Forgery (CSRF)
- Password hashing
- Authentication
- Authorization
- Session security
- Secure file uploads
- Secure coding practices

### 15 — Testing

Learn how to test PHP applications and maintain code quality.

**Topics include:**

- Testing fundamentals
- Unit testing
- PHPUnit
- Test organization
- Assertions
- Test doubles
- Mocking
- Code coverage
- Integration testing

---

## 🏗️ Projects

The `projects/` directory contains practical projects that apply concepts learned throughout the code lab.

Projects will gradually increase in complexity as new concepts are introduced.

### Example Progression

```text
projects/
├── project-1/
├── project-2/
├── project-3/
└── ...
```

Each project may include its own `README.md` explaining:

- Project overview
- Requirements
- Features
- Concepts practiced
- Installation instructions
- Usage
- Future improvements

---

## 🛠️ Tools & Technologies

This repository may use the following tools and technologies throughout the learning journey:

- PHP
- Composer
- MySQL
- Git
- GitHub
- VS Code
- PhpStorm
- PHPUnit
- PHPStan
- Linux
- macOS

Additional tools and libraries may be introduced as the learning path progresses.

---

## ✅ Best Practices

Throughout the repository, the focus will be on developing good PHP development habits.

This includes:

- Writing readable code
- Following consistent naming conventions
- Using meaningful variable and function names
- Avoiding unnecessary duplication
- Separating responsibilities
- Validating user input
- Handling errors appropriately
- Writing secure code
- Using dependency management
- Writing automated tests
- Keeping dependencies up to date
- Using version control effectively

---

## 📚 Resources

Useful resources for learning and referencing PHP:

- [PHP Documentation](https://www.php.net/docs.php)
- [PHP Language Reference](https://www.php.net/manual/en/langref.php)
- [PHP: The Right Way](https://phptherightway.com/)
- [Composer Documentation](https://getcomposer.org/doc/)
- [PHPUnit Documentation](https://docs.phpunit.de/)

---

## 🤝 Contributing

This repository is primarily a personal learning project. However, suggestions, corrections, improvements, and useful learning resources are welcome.

If you notice an issue or have a suggestion:

1. Open an issue.
2. Clearly describe the problem or suggestion.
3. Include relevant examples where possible.
