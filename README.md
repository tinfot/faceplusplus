# Face plus plus SDK for Laravel 5


---

[![License](https://poser.pugx.org/maatwebsite/excel/license.png)](https://packagist.org/packages/tinfot/faceplusplus)

# Installation
Require this package in your composer.json and update composer. 

```php
composer require tinfot/faceplusplus
```

# Usage

```php
<?php

// Base64
\Tinfot\Faceplusplus\Facades\Faceplusplus::humanBodyByBase64("data:image/jpeg;base64,......");

// Image url
\Tinfot\Faceplusplus\Facades\Faceplusplus::humanBodyByImageUrl("https://google.com/image.jpg");

```

# Support
Support only through Github. Please don't mail us about issues, make a Github issue instead.