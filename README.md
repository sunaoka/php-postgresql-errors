# PostgreSQL Error Codes for PHP

[![License](https://poser.pugx.org/sunaoka/php-postgresql-errors/license)](https://packagist.org/packages/sunaoka/php-postgresql-errors)
[![PHP](https://img.shields.io/packagist/php-v/sunaoka/php-postgresql-errors)](composer.json)
[![Test](https://github.com/sunaoka/php-postgresql-errors/actions/workflows/test.yml/badge.svg)](https://github.com/sunaoka/php-postgresql-errors/actions/workflows/test.yml)
[![codecov](https://codecov.io/gh/sunaoka/php-postgresql-errors/branch/develop/graph/badge.svg)](https://codecov.io/gh/sunaoka/php-postgresql-errors)

----

## Installation

```bash
composer require sunaoka/php-postgresql-errors
```

## Usage

```php
<?php

use Sunaoka\PostgresError\PostgresError;

echo PostgresError::UNIQUE_VIOLATION;
// => 23505
```
