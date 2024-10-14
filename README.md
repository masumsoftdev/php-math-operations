
# MathOperations PHP Library

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://opensource.org/licenses/MIT)

## Introduction

`MathOperations` is a PHP library that provides a comprehensive set of mathematical operations, from basic arithmetic and trigonometry to logarithmic, permutation/combination, and random number generation. This library is designed for developers who need quick and easy access to a variety of math functions in their PHP projects.

## Features

- Basic arithmetic: addition, subtraction, multiplication, division, modulus, power, square root
- Exponential and logarithmic functions
- Trigonometric functions (radians) and inverse trigonometric functions
- Hyperbolic functions
- Degree and radian conversions
- Rounding and absolute functions
- Min, max, and average calculations
- Factorial, GCD (greatest common divisor), and LCM (least common multiple)
- Permutations and combinations
- Random number generation
- Sum and product of arrays
- Pythagorean theorem calculation

## Requirements

- PHP 7.4 or higher

## Installation

You can install this package via [Composer](https://getcomposer.org/).

1. First, install Composer if you haven't already:

   ```bash
   curl -sS https://getcomposer.org/installer | php
   mv composer.phar /usr/local/bin/composer
   ```

2. Install the `MathOperations` library by running:

   ```bash
   composer require masum-packagist/php-math-operations
   ```

This will install the package and its dependencies into your PHP project.

## Usage

After installing, you can include the library in your project like this:

```php
<?php

require 'vendor/autoload.php';

use MasumPackagist\PhpMathOperations\MathOperations;


$math = new MathOperations();
```

### Basic Arithmetic

```php
echo $math->add(5, 10);      // Output: 15
echo $math->subtract(10, 5); // Output: 5
echo $math->multiply(4, 5);  // Output: 20
echo $math->divide(10, 2);   // Output: 5
```

### Exponential and Logarithmic Functions

```php
echo $math->exp(1);          // Output: 2.718281828459
echo $math->log(10);         // Output: 2.302585092994 (natural log)
echo $math->log10(100);      // Output: 2
```

### Trigonometric Functions (input in radians)

```php
echo $math->sin(pi() / 2);   // Output: 1
echo $math->cos(0);          // Output: 1
echo $math->tan(pi() / 4);   // Output: 1
```

### Degree and Radian Conversions

```php
echo $math->degToRad(180);   // Output: 3.14159265359
echo $math->radToDeg(pi());  // Output: 180
```

### Rounding and Absolute Functions

```php
echo $math->ceil(4.3);       // Output: 5
echo $math->floor(4.7);      // Output: 4
echo $math->round(4.5678, 2);// Output: 4.57
echo $math->abs(-10);        // Output: 10
```

### Factorial, GCD, and LCM

```php
echo $math->factorial(5);    // Output: 120
echo $math->gcd(48, 18);     // Output: 6
echo $math->lcm(12, 15);     // Output: 60
```

### Permutations and Combinations

```php
echo $math->permutation(5, 2); // Output: 20
echo $math->combination(5, 2); // Output: 10
```

### Random Number Generation

```php
echo $math->random(1, 100);   // Output: a random number between 1 and 100
```

### Sum and Product of Arrays

```php
$values = [1, 2, 3, 4];
echo $math->sum($values);     // Output: 10
echo $math->product($values); // Output: 24
```

### Pythagorean Theorem

```php
echo $math->pythagoras(3, 4); // Output: 5
```

## Testing

To run the tests, you can use [PHPUnit](https://phpunit.de/). First, install PHPUnit via Composer:

```bash
composer require --dev phpunit/phpunit
```

Then, you can run the tests using:

```bash
vendor/bin/phpunit
```

Ensure that your tests are located in the `tests/` folder.

## Contributing

If you would like to contribute to this library, feel free to submit a pull request on [GitHub](https://github.com/masumsoftdev/php-math-operations).

Please make sure all contributions adhere to the following guidelines:
- Write clear, concise commit messages.
- Ensure code follows PSR-12 coding standards.
- Include tests for new functionality.
- Document new methods and classes.

## License

This package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



