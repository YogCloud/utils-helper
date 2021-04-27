# Install 

```php
composer require cexll/utils-helper
```

# Run

```php
<?php

use Cexll\Utils\Helper;

echo HashHelper::hash('123456');

$2y$10$QTZjGNps6Mp4OdaMoSgYhO2VKZIW9ykrgbFPhhIyKi1ZptYeRQaQ6

echo HashHelper::verify('123456', $2y$10$QTZjGNps6Mp4OdaMoSgYhO2VKZIW9ykrgbFPhhIyKi1ZptYeRQaQ6);

true
```
