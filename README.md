# PostgreSQL Error Codes for PHP

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
