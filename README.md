# Face plus plus SDK for Laravel 5


---

[![License](https://poser.pugx.org/maatwebsite/excel/license.png)](https://packagist.org/packages/tinfot/FacePlusplus)

# Installation
Require this package in your composer.json and update composer. 

```php
composer require tinfot/FacePlusplus
```

# Usage

```php
<?php

// Base64
\Tinfot\FacePlusplus\Facades\FacePlusplus::humanBodyByBase64("data:image/jpeg;base64,......");

// Image url
\Tinfot\FacePlusplus\Facades\FacePlusplus::humanBodyByImageUrl("https://google.com/image.jpg");

// Human beautify
\Tinfot\FacePlusplus\Facades\FacePlusplus::faceBeautifyByBase64("data:image/jpeg;base64,......");

// Human beautify by image url
\Tinfot\FacePlusplus\Facades\FacePlusplus::faceBeautifyByImageUrl("https://google.com/image.jpg");

```

# Support
Support only through Github. Please don't mail us about issues, make a Github issue instead.