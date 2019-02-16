Clara Contact
===============

Add contact form to Clara.

## Installation

```php
composer require ceddyg/clara-contact
```

Add to your providers in 'config/app.php'
```php
CeddyG\ClaraContact\ContactServiceProvider::class,
```

Then to publish the files.
```php
php artisan vendor:publish --provider="CeddyG\ClaraContact\ContactServiceProvider"
```
