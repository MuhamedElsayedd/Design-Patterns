# Design Patterns in PHP

This repository contains implementations of various **Design Patterns** in PHP, focusing on clean and maintainable object-oriented code. It is intended as a learning resource and reference for understanding the practical usage of design patterns in real-world applications.

## Repository Structure

```
Design-Patterns/
│
├── Creational/
│   └── AbstractFactory/      # Example of Abstract Factory Pattern
├── Tests/                    # PHPUnit tests for implemented patterns
├── composer.json             # Composer dependencies
└── .gitignore
```

### Current Implementations

* **Abstract Factory Pattern**: Example using a factory system to create families of related objects without specifying their concrete classes.

## Requirements

* PHP 8.0 or higher
* Composer
* PHPUnit (for running tests)

## Installation

1. Clone the repository:

```bash
git clone https://github.com/MuhamedElsayedd/Design-Patterns.git
```

2. Navigate to the project folder:

```bash
cd Design-Patterns
```

3. Install dependencies via Composer:

```bash
composer install
```

## Running Tests

The repository uses PHPUnit for testing the implemented patterns. To run all tests:

```bash
vendor/bin/phpunit tests
```

Make sure `vendor/bin` is accessible, or adjust the path according to your environment.

## Usage

* Explore the `Creational/AbstractFactory` folder for the Abstract Factory example.
* You can extend the patterns or create your own tests in the `Tests` folder.

## Contributing

Feel free to fork this repository and submit pull
