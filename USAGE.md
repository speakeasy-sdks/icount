<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use iCount\iCount;

$sdk = iCount\ICount::builder()->build();

try {
    $response = $sdk->pets->createPets();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->