# Iranian Dev Tools 🇮🇷

A lightweight PHP library providing useful tools for Iranian developers.

The goal of **Iranian Dev Tools** is to collect small, practical utilities that are commonly needed when developing PHP applications for the Iranian market, and make them available as a reusable Composer package.

## Features

### Iranian National ID

Validate and generate Iranian national identification numbers.

* Validate Iranian National IDs
* Generate valid National IDs for development and testing
* No external dependencies for the core functionality

## Installation

Install the package with Composer:

```bash
composer require mahadplus/iranian-dev-tools
```

## Usage

### Validate a National ID

```php
use IranianDevTools\NationalId\Validator;

$validator = new Validator();

if ($validator->isValid($nationalId)) {
    echo 'Valid National ID';
} else {
    echo 'Invalid National ID';
}
```

### Generate a National ID

```php
use IranianDevTools\NationalId\Generator;

$generator = new Generator();

$nationalId = $generator->generate();

echo $nationalId;
```

> Generated National IDs are intended for software development and testing purposes.

## Testing

This project uses [PHPUnit](https://phpunit.de/) for automated tests.

Run the test suite with:

```bash
vendor/bin/phpunit
```

## Project Structure

```text
iranian-dev-tools/
├── src/
│   └── NationalId/
│       ├── Generator.php
│       └── Validator.php
├── tests/
│   └── ValidationTest.php
├── composer.json
├── composer.lock
├── phpunit.xml
└── .gitignore
```

## 🛠 Requirements

* PHP 7.2 or higher
* Composer

## Project Goals

Iranian Dev Tools is intended to grow into a collection of reusable PHP utilities for Iranian developers.

Future tools may cover areas such as:

* Iranian banking utilities
* Payment-related helpers
* Persian date and time utilities
* Iranian phone number utilities
* Other common development tools

## License

This project is open-source software licensed under the [MIT License](https://opensource.org/licenses/MIT).
