# UtilsHelper

[![Latest Stable Version](http://poser.pugx.org/cexll/utils-helper/v)](https://packagist.org/packages/cexll/utils-helper) [![Total Downloads](http://poser.pugx.org/cexll/utils-helper/downloads)](https://packagist.org/packages/cexll/utils-helper) [![Latest Unstable Version](http://poser.pugx.org/cexll/utils-helper/v/unstable)](https://packagist.org/packages/cexll/utils-helper) [![License](http://poser.pugx.org/cexll/utils-helper/license)](https://packagist.org/packages/cexll/utils-helper) [![PHP Version Require](http://poser.pugx.org/cexll/utils-helper/require/php)](https://packagist.org/packages/cexll/utils-helper)

# Install
```php
composer require cexll/utils-helper
```

# Utils

- `ArrayHelper`
- `DateHelper`
- `DirectoryHelper`
- `EncryptHelper`
- `FileHelper`
- `HashHelper`
- `JsonHelper`
- `NumberHelper`
- `RegularHelper`
- `StringHelper`
- `ValidateHelper`
- `XmlHelper` 

# Run

```php
<?php

use Cexll\Utils\Helper;

echo HashHelper::hash('123456');

$2y$10$QTZjGNps6Mp4OdaMoSgYhO2VKZIW9ykrgbFPhhIyKi1ZptYeRQaQ6

echo HashHelper::verify('123456', '$2y$10$QTZjGNps6Mp4OdaMoSgYhO2VKZIW9ykrgbFPhhIyKi1ZptYeRQaQ6');

true
```
