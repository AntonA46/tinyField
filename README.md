Integration TinyPng api for laravel-admin
======

This is a `laravel-admin` extension that integrates `TinyPng` into the `laravel-admin` form.

Compress your images when uploading with api `TinyPng`

## Installation

```bash
composer require anton-a46/tinyfield
```

Then
```bash
php artisan vendor:publish --provider=anton-a46\tinyfield\TinyFieldServiceProvider
```

## Configuration

In the `env` file add TinyPng API KEY
```dotenv
TINY_PNG_KEY=XXXXXXXXXXXXXXXXXXXXX
```

## Usage

Use it in the form:
```php
$form->tinyField('content');
$form->tinyField('tinyMultipleField');
```